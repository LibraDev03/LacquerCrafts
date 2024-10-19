<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Order_detail;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout() {
        $user = auth()->user();
        return view('client.checkout', compact('user'));
    }

    public function post_checkout(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'order_notes' => 'nullable',
            'payment_method' => 'nullable'
        ]);

        $data = $request->only('name','email','phone','address','order_notes','payment_method');
        $data['user_id'] = auth()->id();

        // dd($data);

        if($order = Order::create($data)) {
            foreach(auth()->user()->carts as $cart){
                $data1 = [
                    'order_id' => $order->id,
                    'product_id' => $cart->product_id,
                    'price' => $cart->price,
                    'quantity' => $cart->quantity,
                    'total' => $cart->price * $cart->quantity
                ];

                Order_detail::create($data1);

            }

            foreach(auth()->user()->carts as $cart) {
                $cart->delete();
            }
        }
        return redirect()->route('client.home')->with('suc', 'Đặt hàng thành công');
    }

    public function history() {
        $authen = auth()->user();
        $orders = Order::where('user_id', auth()->id())->get();
        return view('client.history', compact('authen','orders'));
    }

    public function order_detail(Order $order) {
        $orders = Order::where('id', $order->id)->get();
        return view('client.order_detail',compact('order','orders'));
    }
}
