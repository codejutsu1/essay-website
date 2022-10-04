<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use App\Models\Order;
use App\Models\CompleteOrder;

class DashboardController extends Controller
{
    public function dashboardAdmin()
    {
        $total_users = User::where('role_id', 2)->count('id');

        $new_orders = Order::where('assigned', 0)->count('id');

        $pending_orders = CompleteOrder::whereNull('completed')->count('id');

        return Inertia('Admin/Dashboard', compact('total_users', 'new_orders', 'pending_orders'));
    }
}
