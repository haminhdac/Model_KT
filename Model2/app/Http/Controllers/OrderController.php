<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use App\Models\Order;
use App\Models\User;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * CRUD User controller
 */
class OrderController extends Controller
{
    public function order(Request $request) {
        $order_id = $request->get('id');
        $order = Order::findOrFail($order_id); 

        $data = [
            'order' => $order,
            'user' => $order->user 
        ];
    
        return view('order.view', $data);
    }

    public function show($id)
{
    $order = Order::with(['orderDetails.product'])->findOrFail($id);

    return view('order.view', compact('order'));
}

}