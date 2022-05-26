<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class OrderController extends Controller
{
    public function ordersAdmin()
    {
        return Inertia('Admin/Orders');
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
