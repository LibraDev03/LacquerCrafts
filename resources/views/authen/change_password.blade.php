@extends('layouts.client.client')
@section('main')
     <!-- Page Title/Header Start -->
     <div class="page-title-section section" data-bg-image="assets/images/bg/page-title-1.webp">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title">
                        <h1 class="title">Đổi mật khẩu</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Đổi mật khẩu</li>
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
                            <h2 class="title">Đổi mật khẩu</h2>
                            <p class="desc">Thay đổi mật khẩu của bạn ở đây!</p>
                        </div>
                        <div class="login-register-form">
                            <form action="{{route('authen.change_password')}}" method="POST">
                                @csrf
                                {{-- @if (Session::has('nooooooooo'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <p style="text-align: center" >{{ Session::get('fail') }}</p>
                                </div>
                                @endif --}}
                                <div class="row learts-mb-n50">
                                    <!-- Mật khẩu cũ và Email trên cùng một hàng -->
                                    <div class="col-md-6 learts-mb-20">
                                        <label for="email">Xác nhận email của bạn để thay đổi thông tin<abbr class="required">*</abbr></label>
                                        <input type="email" id="email" name="email" class="form-control shadow-none" required>
                                        @error('email')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 learts-mb-20">
                                        <label for="old_password">Mật khẩu cũ của bạn<abbr class="required">*</abbr></label>
                                        <input type="password" id="old_password" name="old_password" class="form-control shadow-none">
                                        @error('old_password')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <!-- Mật khẩu mới và Xác nhận mật khẩu mới trên cùng một hàng -->
                                    <div class="col-md-6 learts-mb-20">
                                        <label for="new_password">Mật khẩu mới của bạn<abbr class="required">*</abbr></label>
                                        <input type="password" id="new_password" name="new_password" class="form-control shadow-none">
                                        @error('new_password')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 learts-mb-20">
                                        <label for="confirm_password">Xác nhận mật khẩu mới của bạn<abbr class="required">*</abbr></label>
                                        <input type="password" id="confirm_password" name="confirm_password" class="form-control shadow-none">
                                        @error('confirm_password')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                
                                    <!-- Các phần còn lại -->
                                    <div class="col-12 text-center learts-mb-50">
                                        <div class="d-flex justify-content-between">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">Nhớ thông tin của bạn</label>
                                            </div>
                                            <a href="#" class="text-decoration-none">Bạn bị mất mật khẩu?</a>
                                            <a href="{{route('authen.register')}}" class="text-decoration-none">Trang đăng kí</a>
                                        </div>
                                        <br><br>
                                    </div>
                                
                                    <div class="col-12 text-center learts-mb-50">
                                        <button class="btn btn-dark btn-outline-hover-dark">Đổi mật khẩu</button>
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