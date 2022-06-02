<?php

namespace App\Http\Controllers\Writer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompleteOrder;
use App\Models\Order;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    public function writerOrders(){

        $orders =  CompleteOrder::where('user_id', auth()->user()->id)
                                ->where('accepted', 1)
                                ->select('id', 'order_id', 'completed', 'newFile')
                                ->with(['order' => function($query){ $query->select('id','orderId', 'topic', 'created_at', 'oldFile'); }])
                                ->orderBy('id', 'desc')
                                ->get();

        return Inertia('Writer/Orders', compact('orders'));
    }

    public function receivedOrders(){

        $orders =  CompleteOrder::where('user_id', auth()->user()->id)
                                ->where('accepted', 0)
                                ->select('id', 'order_id')
                                ->with(['order' => function($query){ $query->select('id','orderId', 'topic', 'created_at', 'oldFile'); }])
                                ->orderBy('id', 'desc')
                                ->get();     

        return Inertia('Writer/ReceivedOrders', compact('orders'));
    }

    public function acceptOrder(Order $order)
    {
        CompleteOrder::where('id', $order->id)->update([
            'accepted' => 1
        ]);

        Alert::success('Success', 'You have successfully accepted this order');
        return redirect()->back();
    }

    public function rejectOrder(Order $order)
    {
        $order = CompleteOrder::where('id', $order->id)->update([
            'completed' => 0
        ]);

        Alert::success('Success', 'You have successfully rejected this order');
        return redirect()->back();
    }

    public function downloadEssay(Order $order)
    {
        // dd($order);
        $destination_path = 'public/document/received/';
        $path = $destination_path . $order->oldFile;
        $name = 'GlobalExpert' . $order->oldFile;
        if(!$path)
        {
            return abort(404);   
        }

        return Storage::download($path, $name);

        return redirect()->back();
    }
}
