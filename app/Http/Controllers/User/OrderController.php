<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;

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

    public function storeOrder(Request $request)
    {
        $request->validate([
            'mode' => 'required|string|max:255',
            'topic' => 'required|string|max:255',
            'essay_number' => 'required|numeric|max:255',
            'instructions' => 'required|string|max:255',
            'document' => 'mimes:doc,pdf,docx,zip|file|max:2048'
        ]);

        // File Upload
        if($request->hasFile('document'))
        {
            $destination_path = 'public/document/received';
            $file = $request->file('document');
            $file_name = $file->getClientOriginalName();
            $path = $file->storeAs($destination_path, $file_name);
        }

        dd($destination_path . $file . $file_name . $path);

        $order = Order::create([
            'user_id' => auth()->user()->id,
            'topic' => $request->topic,
            'mode' => $request->mode,
            'essay_number' => $request->essay_number,
            'instructions' => $request->instructions,
            'oldFile' => $file_name
        ]);

        $order->orderId = '001' . auth()->user()->id . $order->id;
        $order->save();

        return redirect()->back();

    }
}
