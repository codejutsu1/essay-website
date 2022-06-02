<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
    public function makeOrder()
    {
        return Inertia('User/MakeOrder');
    }

    public function userOrders()
    {
        $orders = Order::where('user_id', auth()->user()->id)
                        ->select(['orderId', 'topic', 'oldFile', 'mode', 'essay_number', 'instructions', 'created_at'])
                        ->orderBy('id', 'desc')
                        ->get();

        return Inertia('User/Orders', compact('orders'));
    }

    public function storeOrder(Request $request)
    {
        //Validate Request
        $request->validate([
            'mode' => 'required|string|max:255',
            'topic' => 'required|string|max:255',
            'essay_number' => 'required|numeric|max:255',
            'instructions' => 'required|string|max:255',
            'document' => 'nullable|mimes:doc,pdf,docx,zip|file|max:2048'
        ]);

        // File Upload
        if($request->hasFile('document'))
        {
            $destination_path = 'public/document/received';
            $file = $request->file('document');
            $file_name = $file->getClientOriginalName();
            $path = $file->storeAs($destination_path, $file_name);
        }

        //Store Orders
        $order = Order::create([
            'user_id' => auth()->user()->id,
            'topic' => $request->topic,
            'mode' => $request->mode,
            'essay_number' => $request->essay_number,
            'instructions' => $request->instructions,
            'oldFile' => $file_name ?? NULL
        ]);

        //Storing the orders using the current Id
        $order->orderId = 'OR-001' . auth()->user()->id . $order->id;
        $order->save();

        return redirect()->route('make.order')->with('success', 'Your order has been successfully delivered');

    }
}
