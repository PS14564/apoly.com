<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class VnPayController extends Controller
{
    public function payment(Request $request)
    {
        $order_id = $request->session()->get('id');
        if (!empty($order_id)) {
            $order = Order::find($order_id);
            return view('frontend.pages.vnp_payment', compact('order'));
        }
        $order = Order::find(10);
        return view('frontend.pages.vnp_payment', compact('order'));

        return redirect()->route('home');
    }

    public function createPayment(Request $request)
    {
        dd($request->all());
    }
}
