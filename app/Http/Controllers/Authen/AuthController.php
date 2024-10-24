<?php

namespace App\Http\Controllers\Authen;

use App\Http\Controllers\Controller;
use App\Mail\change_password;
use App\Mail\Profile;
use App\Mail\VerifyAccount;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\Cast\String_;

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
            'address' => 'required',
            'phone' => 'required|max:15',
            'gender' => 'required',
            'birthday' => 'required',
        ]);
        $data = request()->only('name','email','password','phone','gender','birthday','address');
        $data['password'] = bcrypt(request('password')); 

        // dd($data);

        if($acc = User::create($data)){
            Mail::to($acc->email)->send(new VerifyAccount($acc));
            // dd('oke');

            return redirect()->route('authen.login')->with('suc', 'Đăng kí tài khoản thành công');
        }else {

            return redirect()->back()->with('fail', 'Trùng thông tin đăng kí');
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
           return redirect()->route('client.home')->with('suc', 'Đăng nhập thành công');
       }else{
            return redirect()->back()->with('fail', 'Sai Tài khoản hoặc mật khẩu');
       }
       

    }

    public function logout() {
        Auth::logout();
        return redirect()->route('authen.login')->with('suc', 'Đăng xuất thành công');
    }

    public function profile(){
        $authen = auth()->user();
        return view('authen.profile',compact('authen'));
    }

    public function check_profile(){
        $data = request()->validate([
            'name' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'birthday' => 'required',
            'address' => 'required',
            'password' => ['required', function($attr, $value, $fail) {
                if (!Hash::check($value, auth()->user()->password)) {
                    return $fail('Mật khẩu của bạn không đúng để thay đổi hồ sơ');
                }
            }],
            'email' => ['required','email','unique:users,email,' . auth()->user()->id,
                function($attr, $value, $fail) {
                    if ($value !== auth()->user()->email) {
                        return $fail('Email của bạn không đúng để thay đổi hồ sơ');
                    }
                }
            ]
        ]);
    
        $user = User::findOrFail(auth()->user()->id);
        $updated = $user->update([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'gender' => $data['gender'],
            'birthday' => $data['birthday'],
            'address' => $data['address'],
        ]);
    
        // Nếu cập nhật thành công ($updated là true)
        if ($updated) {
            // Gửi email đến người dùng với email từ $user thay vì $updated
            Mail::to($user->email)->send(new Profile($user));
    
            return redirect()->route('authen.profile')->with('suc', 'Sửa thông tin thành công');
        } else {
            // Xử lý khi cập nhật thất bại
            return redirect()->back()->with('error', 'Không thể cập nhật thông tin. Vui lòng thử lại.');
        }
    }
    

    public function change_password(){
        return view('authen.change_password');
    }

    public function check_change_password(){
        $data = request()->validate([
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',
            'old_password' => ['required', function($attr, $value, $fail) {
                if (!Hash::check($value, auth()->user()->password)) {
                    return $fail('Mật khẩu của bạn không đúng để thay đổi hồ sơ');
                }
            }],
            'email' => ['required','email','unique:users,email,' . auth()->user()->id,
                function($attr, $value, $fail) {
                    if ($value !== auth()->user()->email) {
                        return $fail('Email của bạn không đúng để thay đổi mật khẩu');
                    }
                }
            ]
        ]);

        if(Hash::check($data['old_password'], auth()->user()->password)){
            $user = User::findOrFail(auth()->user()->id);
            $user->password = Hash::make($data['new_password']);
            $user->save();

            Mail::to($user->email)->send(new change_password($user));
            return redirect()->route('authen.login')->with('suc', 'Thay đổi mật khẩu thành công');

        }else{
            return redirect()->back()->with('fail','Thay đổi mật khẩu thất bại');
        }

    }

    public function forgot_password(){
        return view('authen.forgot');
    }

    public function check_forgot_password(){
        request()->validate([
            'email' => 'required|email|exists:users',
        ]);

        $user = User::where('email', request()->email)->first();
    
    }

    public function reset_password(){

    }
    
    public function check_reset_password(){

    }

    public function myaccount(){
        $authen = auth()->user();
        $orders = Order::where('user_id', auth()->id())->get();
        return view('authen.myaccount', compact('authen','orders'));
    }

}
