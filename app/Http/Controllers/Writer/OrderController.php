<?php

namespace App\Http\Controllers\Writer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompleteOrder;
use App\Models\Order;

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

        return redirect()->back();
    }

    public function rejectOrder(Order $order)
    {
        $order = CompleteOrder::where('id', $order->id)->update([
            'completed' => 0
        ]);

        return redirect()->back();
    }

    public function downloadEssay($id)
    {
        $user = User::where('id', $id)->first();
        $image = VerifiedUser::where('user_id', $id)->first();
        $destination_path = 'public/images/verified/';
        if($image){
            $path = $destination_path . $image->frontPage;
            $name = $user->firstName . $user->lastName . 'FrontDocument';
            if($path)
            {
                return Storage::download($path, $name);
            }else
            {
                return abort(404);
            }
        }else{
            return abort(404); 
        }
    }
}
