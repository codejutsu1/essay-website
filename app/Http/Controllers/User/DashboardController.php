<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\CompleteOrder;

class DashboardController extends Controller
{
    public function dashboardUser()
    {
        $completed_order = CompleteOrder::where('user_id', auth()->user()->id)->where('completed', 1)->count('id');
        
        $order_id = Order::where('user_id', auth()->user()->id)->pluck('id');

        $pending_order = CompleteOrder::whereIn('order_id', $order_id)->whereNull('completed')->count('id');

        $total_order = CompleteOrder::where('user_id', auth()->user()->id)->count('id');

        return Inertia('User/Dashboard', compact('completed_order', 'pending_order', 'total_order'));
    }
}
