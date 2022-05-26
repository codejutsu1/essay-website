<?php

namespace App\Http\Controllers\Writer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function writerOrders(){
        return Inertia('Writer/Orders');
    }

    public function receivedOrders(){
        return Inertia('Writer/ReceivedOrders');
    }
}
