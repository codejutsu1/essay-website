<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use App\Models\Order;
use App\Models\CompleteOrder;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
    public function ordersAdmin()
    {
        $newOrders = Order::where('assigned', 0)
                            ->select(['id','orderId', 'topic', 'oldFile', 'created_at', 'user_id'])
                            ->with(['user' => function($query){ $query->select('id','name'); }])
                            ->orderBy('id', 'desc')
                            ->get();
                                
        $pendingOrders = CompleteOrder::where('completed', NULL)
                                        ->select(['id', 'user_id', 'order_id'])
                                        ->with([
                                            'user'=> function($query){
                                                $query->select('id', 'name');
                                            },
                                            'order' => function($query){
                                                $query->select(['id', 'orderId', 'oldFile', 'topic', 'created_at']);
                                            }
                                        ])
                                        ->orderBy('id', 'desc')
                                        ->get();

        return Inertia('Admin/Orders', compact('newOrders', 'pendingOrders'));
    }

    public function completeOrders()
    {
        $completedOrders = CompleteOrder::where('completed', 1)
                                        ->select(['id', 'user_id', 'order_id'])
                                        ->with([
                                            'user'=> function($query){
                                                $query->select('id', 'name');
                                            },
                                            'order' => function($query){
                                                $query->select(['id', 'user_id', 'orderId', 'oldFile', 'topic', 'created_at'])
                                                        ->with(['user' => function($query){ $query->select('id','name'); }]);
                                            }
                                        ])
                                        ->orderBy('id', 'desc')
                                        ->get();

        $rejectedOrders = CompleteOrder::where('completed', 0)
                                        ->select(['id', 'user_id', 'order_id'])
                                        ->with([
                                            'user'=> function($query){
                                                $query->select('id', 'name');
                                            },
                                            'order' => function($query){
                                                $query->select(['id', 'user_id', 'orderId', 'oldFile', 'topic', 'created_at'])
                                                        ->with(['user' => function($query){ $query->select('id','name'); }]);
                                            }
                                        ])
                                        ->orderBy('id', 'desc')
                                        ->get();               

        return Inertia('Admin/CompletedOrders', compact('completedOrders', 'rejectedOrders'));
    }

    public function allOrders()
    {
        $allOrders = CompleteOrder::select(['id', 'user_id', 'order_id', 'completed'])
                                        ->with([
                                            'user'=> function($query){
                                                $query->select('id', 'name');
                                            },
                                            'order' => function($query){
                                                $query->select(['id', 'user_id', 'orderId', 'referenceId', 'amount', 'created_at']);
                                            }
                                        ])
                                        ->orderBy('id', 'desc')
                                        ->get();      
                                        
        return Inertia('Admin/AllOrders', compact('allOrders'));
    }

    public function assignOrders($id)
    {
        $writers = User::where('role_id', 3)->select(['id', 'name'])->get();
        return Inertia('Admin/AssignWriter', compact('writers', 'id'));
    }

    public function assignWriters($writerId, $id){
        $order = Order::findOrFail($id);

        CompleteOrder::updateOrCreate(
            ['order_id' => $order->id],
            ['user_id' => $writerId]
        );

        if(!$order->assigned){
            $order->assigned = 1;
            $order->save();    
        }
    
        return redirect()->route('orders.admin')->with('success', 'You did it');
    }

    public function orderDetails(Order $order)
    {
        $orderDetails = Order::where('id', $order->id)
                        ->select([
                            'orderId',
                            'topic',
                            'mode',
                            'user_id',
                            'essay_number',
                            'instructions',
                            'assigned',
                            'created_at'
                        ])
                        ->with(['user' => function($query){ $query->select('id','name'); }])
                        ->first();
    
        $completeOrder = CompleteOrder::where('id', $order->id)
                                        ->select(['user_id', 'completed', 'date_submitted'])
                                        ->with(['user' => function($query){ $query->select('id','name'); }])
                                        ->first();

        return Inertia('Admin/OrderDetails', compact('orderDetails', 'completeOrder'));
    }

    public function userDetails(User $user)
    {
        $user = User::where('id', $user->id)
                    ->select(['name', 'email', 'role_id', 'suspend', 'created_at'])
                    ->first();  

        return Inertia('Admin/UserDetails', compact('user'));
    }
}
