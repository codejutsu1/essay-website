<?php

namespace App\Http\Controllers\Writer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompleteOrder;

class OrderController extends Controller
{
    public function writerOrders(){
        $orders =  CompleteOrder::where('user_id', auth()->user()->id)
                                ->where('completed', 1)
                                ->orWhere('completed', NULL)
                                ->select('id', 'order_id', 'completed', 'newFile')
                                ->with(['order' => function($query){ $query->select('id','orderId', 'topic', 'created_at', 'oldFile'); }])
                                ->orderBy('id', 'desc')
                                ->get();
        return Inertia('Writer/Orders', compact('orders'));
    }

    public function receivedOrders(){

        $orders =  CompleteOrder::where('user_id', auth()->user()->id)
                                ->select('id', 'order_id')
                                ->with(['order' => function($query){ $query->select('id','orderId', 'topic', 'created_at', 'oldFile'); }])
                                ->orderBy('id', 'desc')
                                ->get();                    
        return Inertia('Writer/ReceivedOrders', compact('orders'));
    }
}
