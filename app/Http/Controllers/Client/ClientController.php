<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home(){
        return view('client.home');
    }

    public function shop(){
        return view('client.shop');
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
}
