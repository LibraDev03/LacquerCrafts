<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home(){
        $new_product = Product::orderBy('id', 'DESC')->limit(5)->get();
        $all_product= Product::inRandomOrder()->limit(10)->get();
        $sale_product = Product::whereColumn('discount', '<', 'price')->get();
        return view('client.home', compact('all_product','new_product', 'sale_product'));
    }

    public function shop(){
        $all_product= Product::inRandomOrder()->get();
        $new_product = Product::orderBy('id', 'DESC')->limit(3)->get();
        return view('client.shop', compact('all_product', 'new_product'));
    }

    public function blog(){
        return view('client.blog');
    }

    public function about(){
        return view('client.about');
    }

    public function contact(){
        return view('client.contact');
    }

    public function category(Category $cat) {
        $products = $cat->products()->inRandomOrder()->get();
        $new_product = Product::orderBy('id', 'DESC')->limit(3)->get();
        return view('client.category',compact('cat','products','new_product'));
    }
}
