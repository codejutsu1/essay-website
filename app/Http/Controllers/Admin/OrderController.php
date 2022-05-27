<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use App\Models\Order;

class OrderController extends Controller
{
    public function ordersAdmin()
    {
        $newOrders = Order::where('assigned', 0)
                            ->select(['orderId', 'topic', 'oldFile', 'created_at', 'user_id'])
                            ->with(['user' => function($query){ $query->select('id','name'); }])
                            ->orderBy('id', 'desc')
                            ->get();     
        return Inertia('Admin/Orders', compact('newOrders'));
    }

    public function completeOrders()
    {
        return Inertia('Admin/CompletedOrders');
    }

    public function allOrders()
    {
        return Inertia('Admin/AllOrders');
    }
}
