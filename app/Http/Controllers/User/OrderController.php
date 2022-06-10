<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\CompleteOrder;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserOrder;
use App\Mail\AdminUserOrder;


class OrderController extends Controller
{
    public function makeOrder()
    {
        return Inertia('User/MakeOrder');
    }

    public function userOrders()
    {
        $keys = Order::where('user_id', auth()->user()->id)->pluck('id');

        $orders = CompleteOrder::whereIn('order_id', $keys)
                                ->select(['id', 'order_id', 'user_id', 'newFile', 'date_submitted', 'completed'])
                                ->with(['order' => function($query){ $query->select(['id','orderId', 'topic', 'oldFile', 'mode', 'essay_number', 'instructions', 'created_at']); }])
                                ->orderBy('id', 'desc')
                                ->get();
        
        return Inertia('User/Orders', compact('orders'));
    }

    public function storeOrder(Request $request)
    {
        //Validate Request
        $request->validate([
            'mode' => 'required|string|max:255',
            'topic' => 'required|string|max:255',
            'essay_number' => 'required|numeric|max:255',
            'instructions' => 'required|string|max:255',
            'document' => 'nullable|mimes:doc,pdf,docx,zip|file|max:2048'
        ]);

        // File Upload
        if($request->hasFile('document'))
        {
            $destination_path = 'public/document/received';
            $file = $request->file('document');
            $file_name = $file->getClientOriginalName();
            $path = $file->storeAs($destination_path, $file_name);
        }

        //Store Orders
        $order = Order::create([
            'user_id' => auth()->user()->id,
            'topic' => $request->topic,
            'mode' => $request->mode,
            'essay_number' => $request->essay_number,
            'instructions' => $request->instructions,
            'oldFile' => $file_name ?? NULL
        ]);

        //Storing the orders using the current Id
        $order->orderId = 'OR-001' . auth()->user()->id . $order->id;
        $order->save();

        $user = User::where('id', auth()->user()->id)->first();

        Mail::to($user->email)->send(new UserOrder($user, $order));
        Mail::to('admin@admin.com')->send(new AdminUserOrder($order, $user));
        return redirect()->route('dashboard.user')->with('message', 'Your order has delivered  successfully');

    }

    public function viewFileUser(Order $order)
    {
        $fileDetails = Order::where('user_id', auth()->user()->id)
                            ->where('id', $order->id)
                            ->select(['id','orderId','oldFile'])
                            ->firstOrFail();

        return Inertia('User/View', compact('fileDetails'));
    }

    public function viewNewFileUser(CompleteOrder $order){

        $fileDetails = CompleteOrder::where('id', $order->id)
                                    ->select(['order_id', 'newFile'])   
                                    ->with(['order' => function($query){ $query->where('user_id', auth()->user()->id)->select('id', 'orderId'); }])
                                    ->firstOrFail();

        if(!$fileDetails->order){
            abort(404);
        }                           

        return Inertia('User/ViewNew', compact('fileDetails'));
    }
}
