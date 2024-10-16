<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Favorite;
use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

class ClientController extends Controller
{
    public function home(){
        $wishlist = Favorite::where('user_id', auth()->id())->limit(3)->get();
        $new_product = Product::orderBy('id', 'DESC')->limit(5)->get();
        $all_product= Product::inRandomOrder()->limit(10)->get();
        $sale_product = Product::whereColumn('discount', '<', 'price')->get();
        return view('client.home', compact('all_product','new_product', 'sale_product','wishlist'));
    }

    public function shop(){
        $all_product= Product::inRandomOrder()->get();
        $new_product = Product::orderBy('id', 'DESC')->limit(3)->get();
        return view('client.shop', compact('all_product', 'new_product'));
    }

    public function content(){
        $blog = Blog::all();
        return view('client.blog', compact('blog'));
    }

    public function about(){
        return view('client.about');
    }

    public function contact(){
        return view('client.contact');
        return view('client.abs');

    }

    public function category(Category $cat) {
        $products = $cat->products()->inRandomOrder()->get();
        $new_product = Product::orderBy('id', 'DESC')->limit(3)->get();
        return view('client.category',compact('cat','products','new_product'));
    }

    public function product(Product $product) {
        $comment = Comment::where('product_id', $product->id)->orderBy('id', 'DESC')->get();
        $products = Product::where('category_id', $product->category_id )->limit(5)->get()->shuffle();
        return view('client.product', compact('product','products','comment'));
    }

    public function favorite(Product $product) {
        $data  = [
            'product_id' => $product->id,
            'user_id' => auth()->user()->id
        ];

        $favorited = Favorite::where(['product_id'=> $product->id , 'user_id'=> auth()->user()->id  ])->first();
        if($favorited){
            $favorited->delete();
            return redirect()->back()->with('suc', 'Đã bỏ phẩm yêu thích');   
        }else{
            Favorite::create($data);
            return redirect()->back()->with('suc', 'Đã thêm sản phẩm yêu thích');   
        }
       
    }

    public function wishlist() {
        return view('client.wishlist');
    }

    public function clear_wishlish(){
        Favorite::where('user_id', auth()->id())->delete();
        return redirect()->route('client.home')->with('suc', 'Xoá danh sách yêu thích thành công');
    }

    public function comment(Product $product) {
        $data = request()->all('comment');
        $data['product_id'] = $product->id;
        $data['user_id'] = auth()->id();

        // dd($data);

        if($com = Comment::create($data)) {
            return redirect()->back()->with('suc', 'Đã thêm đánh giá của bạn với sản phẩm');
        }else{
            return redirect()->back()->with('fail', 'Thêm đánh giá thất bại');
        }
      
    }

    public function delete_comment($id) {
        $comment = Comment::find($id);
        if ($comment) {
            $comment->delete();
            return redirect()->back()->with('suc', 'Bình luận đã được xóa.');
        }
    
        return redirect()->back()->with('fail', 'Bình luận không tìm thấy.');
    }
}
