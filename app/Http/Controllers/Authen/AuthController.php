<?php

namespace App\Http\Controllers\Authen;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register() {
        return view('authen.register');
    }

    public function check_register() {
        request()->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|unique:users',
            'password' => 'required|max:100',
            'confirm_password' => 'required|same:password',
            'phone' => 'required|max:15',
            'gender' => 'required',
            'birthday' => 'required',
        ]);
        $data = request()->only('name','email','password','phone','gender','birthday');
        $data['password'] = bcrypt(request('password')); 

        // dd($data);

        User::create($data);
        return redirect()->route('authen.login');
    }

    public function login() {
        return view('authen.login');
    }

    public function check_login() {
       request()->validate([
        'email' => 'required|email|exists:users',
        'password' => 'required',
       ]);

       $data = request()->only('email', 'password');

    //    dd($data);
       auth()->attempt($data);
       return redirect()->route('client.home');

    }

    public function logout() {
        Auth::logout();
        return redirect()->route('authen.login');
    }
}
