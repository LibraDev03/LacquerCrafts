@extends('layouts.client.client')
@section('title', 'LacquerCrafts Login')
@section('main')
        <!-- Page Title/Header Start -->
        <div class="page-title-section section" data-bg-image="assets/images/bg/page-title-1.webp">
            <div class="container">
                <div class="row">
                    <div class="col">
    
                        <div class="page-title">
                            <h1 class="title">Đăng nhập</h1>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                                <li class="breadcrumb-item active">Đăng nhập</li>
                            </ul>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Title/Header End -->
    
        <!-- Register Section Start -->
        <div class="section section-padding">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-12">
                        <div class="user-login-register">
                            <div class="login-register-title">
                                <h2 class="title">Đăng nhập</h2>
                                <p class="desc">Thật tuyệt vời khi có bạn ở đây!</p>
                            </div>
                            <div class="login-register-form">
                                <form action="" method="POST">
                                    @csrf
                                    {{-- @if (Session::has('fail'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <p style="text-align: center" >{{ Session::get('fail') }}</p>
                                    </div>
                                    @endif --}}
                                    <div class="row learts-mb-n50">
                                        <div class="col-12 learts-mb-20">
                                            <label for="registerEmail">Địa chỉ Email của bạn<abbr class="required">*</abbr></label>
                                            <input type="email" id="registerEmail" name="email">
                                            @error('email')
                                                <small style="color: red;" >{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-12 learts-mb-20">
                                            <label for="password">Mật khẩu của bạn<abbr class="required">*</abbr></label>
                                            <input type="password" id="password" name="password">
                                            @error('password')
                                                <small style="color: red;" >{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-12 text-center learts-mb-50">
                                            <div class="d-flex justify-content-between">
                                                {{-- <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="rememberMe">
                                                    <label class="form-check-label" for="rememberMe">
                                                        Nhớ thông tin của bạn
                                                    </label>
                                                </div> --}}
                                                <a href="{{route('authen.forgot_password')}}" class="text-decoration-none">Bạn bị quên mật khẩu ?</a>
                                                <a href="{{route('authen.register')}}" class="text-decoration-none">Đăng kí</a>
                                            </div>
                                            <br>
                                            <br>
                                            {{-- <p>Dữ liệu cá nhân của bạn sẽ được sử dụng để hỗ trợ trải nghiệm trên toàn bộ trang web này, và nó được chúng tôi bảo mật một cách kín đáo nhất</p> --}}

                                        </div>
                                        
                                        <div class="col-12 text-center learts-mb-50">
                                            <button class="btn btn-dark btn-outline-hover-dark">Đăng nhập</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
    
        </div>
        <!-- Register Section End -->
@endsection