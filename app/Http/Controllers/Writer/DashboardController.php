<?php

namespace App\Http\Controllers\Writer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\CompleteOrder;

class DashboardController extends Controller
{
    public function dashboardWriter(){
        
        $total_orders = CompleteOrder::where('user_id', auth()->user()->id)->count('id');

        $pending_orders = CompleteOrder::where('user_id', auth()->user()->id)->whereNull('completed')->count('id');

        $completed_orders = CompleteOrder::where('user_id', auth()->user()->id)->where('accepted', 1)->where('completed', 1)->count('id');

        $rejected_orders =CompleteOrder::where('user_id', auth()->user()->id)->where('completed', 0)->count('id');

        return Inertia('Writer/Dashboard', compact(['total_orders', 'pending_orders', 'completed_orders', 'rejected_orders']));
    }
}
