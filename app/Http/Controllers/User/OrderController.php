<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function makeOrder()
    {
        return Inertia('User/MakeOrder');
    }

    public function userOrders()
    {
        return Inertia('User/Orders');
    }
}
