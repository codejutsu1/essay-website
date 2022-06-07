<?php

namespace App\Http\Controllers\Writer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompleteOrder;
use App\Models\Order;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\CompletedOrder;
use App\Mail\AdminCompletedOrder;

class OrderController extends Controller
{
    public function writerOrders(){

        $orders =  CompleteOrder::where('user_id', auth()->user()->id)
                                ->where('accepted', 1)
                                ->select('id', 'order_id', 'date_submitted', 'completed', 'newFile')
                                ->with(['order' => function($query){ $query->select('id','orderId', 'topic', 'created_at', 'oldFile'); }])
                                ->orderBy('id', 'desc')
                                ->get();

        return Inertia('Writer/Orders', compact('orders'));
    }

    public function receivedOrders(){

        $orders =  CompleteOrder::where('user_id', auth()->user()->id)
                                ->where('accepted', 0)
                                ->whereNull('completed')
                                ->select('id', 'order_id')
                                ->with(['order' => function($query){ $query->select('id','orderId', 'topic', 'created_at', 'oldFile'); }])
                                ->orderBy('id', 'desc')
                                ->get();     
        // dd($orders);
        return Inertia('Writer/ReceivedOrders', compact('orders'));
    }

    public function acceptOrder(Order $order)
    {
        CompleteOrder::where('id', $order->id)->update([
            'accepted' => 1
        ]);

        return redirect()->back()->with('message', 'You have successfully accepted this order.');
    }

    public function rejectOrder(Order $order)
    {
        $order = CompleteOrder::where('id', $order->id)->update([
            'completed' => 0
        ]);

        return redirect()->back()->with('message', 'You have successfully rejected this order.');
    }

    public function viewFile(CompleteOrder $order)
    {      
        $fileDetails = CompleteOrder::where('user_id', auth()->user()->id)
                            ->where('id', $order->id)
                            ->select(['order_id'])
                            ->with(['order' => function($query){ $query->select('id','orderId','oldFile'); }])
                            ->firstOrFail();

        return Inertia('Writer/View', compact('fileDetails'));
    }

    public function uploadOrder(CompleteOrder $order)
    {   
        $uploadFile = CompleteOrder::where('user_id', auth()->user()->id)
                            ->where('id', $order->id)
                            ->select(['id','order_id', 'user_id'])
                            ->with(['order' => function($query){ $query->select('id','orderId'); }])
                            ->firstOrFail();
        
        return Inertia('Writer/UploadWriter', compact('uploadFile'));
    }

    public function uploadFile(Request $request, CompleteOrder $order)
    {
         //Validate Request
         $request->validate([
            'document' => 'required|mimes:doc,pdf,docx,zip|file|max:2048'
        ]);

        // File Upload
        if($request->hasFile('document'))
        {
            $destination_path = 'public/document/received';
            $file = $request->file('document');
            $file_name = $file->getClientOriginalName();
            $path = $file->storeAs($destination_path, $file_name);
        }

        CompleteOrder::where('id', $order->id)->update([
            'newFile' => $file_name,
            'date_submitted' => Carbon::now(),
            'completed' => 1
        ]);

        Order::where('id', $order->order_id)->update([
            'completed' => 1
        ]);

        $user = User::where('id', auth()->user()->id)->first();
        $newOrder = Order::where('id', $order->order_id)->first();

        Mail::to($user->email)->send(new CompletedOrder($user, $newOrder));
        Mail::to('admin@admin.com')->send(new AdminCompletedOrder($user, $newOrder));

        return redirect()->route('writer.orders')->with('message', 'You have successfully uploaded the new file.');
    } 

    public function orderDetails(CompleteOrder $order)  
    {
        $order = CompleteOrder::where('id', $order->id)
                                ->select(['id', 'order_id', 'completed', 'date_submitted'])
                                ->with(['order' => function($query){ $query->select('id','orderId', 'topic', 'mode', 'essay_number', 'instructions', 'created_at'); }])
                                ->first();

                                // dd($order);
        return Inertia('Writer/OrderDetails', compact('order'));
    }
}
