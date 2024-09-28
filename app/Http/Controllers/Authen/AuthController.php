<?php

namespace App\Http\Controllers\Authen;

use App\Http\Controllers\Controller;
use App\Mail\VerifyAccount;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

        if($acc = User::create($data)){
            Mail::to($acc->email)->send(new VerifyAccount($acc));
            // dd('oke');

            return redirect()->route('authen.login');
        }else {

            return redirect()->back()->with('fail', 'Email của bạn đã bị trùng');
        }
        
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
       if(auth()->attempt($data)){
           return redirect()->route('client.home');
       }else{
            return redirect()->back()->with('fail', 'Sai Tài khoản hoặc mật khẩu');
       }
       

    }

    public function logout() {
        Auth::logout();
        return redirect()->route('authen.login');
    }

    public function profile(){

    }

    public function check_profile(){

    }

    public function change_password(){

    }

    public function check_change_password(){

    }

    public function forgot_password(){

    }

    public function check_forgot_password(){

    }

    public function reset_password(){

    }
    
    public function check_reset_password(){

    }

}
