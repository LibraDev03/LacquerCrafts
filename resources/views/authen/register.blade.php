@extends('layouts..client.client')
@section('title', 'LacquerCrafts Register')
@section('main')
        <!-- Page Title/Header Start -->
        <div class="page-title-section section" data-bg-image="assets/images/bg/page-title-1.webp">
            <div class="container">
                <div class="row">
                    <div class="col">
    
                        <div class="page-title">
                            <h1 class="title">Đăng kí</h1>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                                <li class="breadcrumb-item active">Đăng kí</li>
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
                            <h2 class="title">Đăng kí</h2>
                            <p class="desc">Đăng kí ngay! nếu bạn chưa có tài khoản</p>
                        </div>
                        <div class="login-register-form">
                            <form action="" method="POST">
                                @csrf
                                @if (Session::has('fail'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <p style="text-align: center" >{{ Session::get('fail') }}</p>
                                    </div>
                                @endif
                                <div class="row learts-mb-n50">
                                    <div class="col-12 learts-mb-20">
                                        <label for="name">Họ tên đầy đủ của bạn<abbr class="required">*</abbr></label>
                                        <input type="text" id="name" name="name" required>
                                        @error('name')
                                            <small style="color: red;" >{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-12 learts-mb-20">
                                        <label for="registerEmail">Địa chỉ Email của bạn<abbr class="required">*</abbr></label>
                                        <input type="email" id="registerEmail" name="email" required>
                                        @error('email')
                                            <small style="color: red;" >{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-12 learts-mb-20">
                                        <label for="password">Mật khẩu của bạn<abbr class="required">*</abbr></label>
                                        <input type="password" id="password" name="password" required>
                                        @error('password')
                                            <small style="color: red;" >{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-12 learts-mb-20">
                                        <label for="confirm_password">Xác nhận lại mật khẩu của bạn<abbr class="required">*</abbr></label>
                                        <input type="password" id="confirm_password" name="confirm_password" required>
                                        @error('confirm_password')
                                            <small style="color: red;" >{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="row learts-mb-20">
                                        <!-- Cột Số điện thoại -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="phone">Số điện thoại <abbr class="required">*</abbr></label>
                                                <input type="text" id="phone" class="form-control shadow-none" placeholder="Nhập số điện thoại" required name="phone">
                                                @error('phone')
                                                    <small style="color: red;" >{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    
                                        <!-- Cột Giới tính -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="gender">Giới tính <abbr class="required">*</abbr></label>
                                                <select id="gender" class="form-control shadow-none" style="border-radius: 0;" required name="gender">
                                                    <option value="">Chọn giới tính</option>
                                                    <option value="nam">Nam</option>
                                                    <option value="nu">Nữ</option>
                                                    <option value="khac">Khác</option>
                                                </select>
                                                @error('gender')
                                                    <small style="color: red;" >{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    
                                        <!-- Cột Ngày sinh -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="birthday">Ngày sinh <abbr class="required">*</abbr></label>
                                                <input type="date" id="birthday" class="form-control shadow-none" required name="birthday">
                                                @error('birthday')
                                                    <small style="color: red;" >{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="text-decoration-none">Bạn bị mất mật khẩu ?</a>
                                        <a href="{{route('authen.login')}}" class="text-decoration-none">Trang đăng nhập</a>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="col-12 text-center learts-mb-50">
                                        <button type="submit" class="btn btn-dark btn-outline-hover-dark">Đăng kí</button>
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