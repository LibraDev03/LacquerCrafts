<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cart() {
        $cart = Cart::all();
        return view('client.cart', compact('cart'));
    }

    public function add_cart(Request $request, Product $product) {

        if(Auth::check()) {
            
            $quantity = $request->quantity ? floor($request->quantity) : 1;
    
            $cart_exists = Cart::where(['user_id' => auth()->id(), 'product_id' => $product->id])->first();
    
            // dd($cart_exists);
            if($cart_exists) {
                // cách 1 cập nhật số lượng theo số lượng đnag có trong giỏ
                $cart_exists->update(['quantity'=> $cart_exists->quantity +$quantity]) ;
    
                //cách2 :sử dụng hàm dựng sẵn increment để tự động tăng số lượng lên 1
                // $cart_exists->increment('quantity', $quantity);
    
                return  redirect()->back()->with('suc', 'Đã thêm sản phẩm vào giỏ hàng');
    
            }else{
    
                $data = [
                    'user_id' => auth()->id(),
                    'product_id' => $product->id,
                    'price' => $product->discount ? $product->discount :$product->price,
                    'quantity' => $quantity
                ];
                if(Cart::create($data)){
                    return  redirect()->back()->with('suc', 'Đã thêm sản phẩm vào giỏ hàng');
                }
                return redirect()->back()->with('fail', 'Không thêm được sản phẩm vào giỏ hàng');
    
            }
            
    
            // dd($data);
        }else{
            return redirect()->back()->with('fail', 'Bạn phải đăng nhập để thêm sản phẩm vào giỏ hàng');
        }
    }

    public function update_cart(Request $request, Product $product){
        $quantity = $request->input('quantity') ? floor($request->input('quantity')) : 1;

        $cart_exists = Cart::where(['user_id' => auth()->id(), 'product_id' => $product->id])->first();

        if ($cart_exists) {
            $cart_exists->update(['quantity' => $quantity]);

            return redirect()->back()->with('suc', 'Cập nhật giỏ hàng thành công');
        } else {
            return redirect()->back()->with('fail', 'Cập nhật giỏ hàng không thành công');
        }
    }


    public function delete_cart(String $id){
        $cart = Cart::find($id);
        $cart->delete();
        return  redirect()->back()->with('suc', 'Đã xoá sản phẩm khỏi giỏ hàng');
    }

    public function clear() {
        Cart::where(['user_id'=> auth()->id()])->delete();
        return  redirect()->route('client.home')->with('suc', 'Đã xoá toàn bộ giỏ hàng');
    }
}
