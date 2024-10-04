
@extends('layouts..client.client')
@section('title', 'LacquerCrafts Register')
@section('main')
        <!-- Page Title/Header Start -->
        <div class="page-title-section section" data-bg-image="assets/images/bg/page-title-1.webp">
            <div class="container">
                <div class="row">
                    <div class="col">
    
                        <div class="page-title">
                            <h1 class="title">Hồ sơ của bạn</h1>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('client.home')}}">Trang chủ</a></li>
                                <li class="breadcrumb-item active">Hồ sơ của bạn</li>
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
                            <h2 class="title">Hồ sơ của bạn</h2>
                            <p class="desc">Sửa đổi hồ sơ của bạn để có những trải nghiệm tốt hơn</p>
                        </div>
                        <div class="login-register-form">
                            <form action="" method="POST">
                                @csrf
                                <div class="row learts-mb-n50">
                                    <div class="col-12 learts-mb-20">
                                        <label for="name">Họ tên đầy đủ của bạn<abbr class="required">*</abbr></label>
                                        <input type="text" id="name" name="name" required placeholder="{{ $authen->name}}">
                                        @error('name')
                                            <small style="color: red;" >{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-12 learts-mb-20">
                                        <label for="name">Địa chỉ của bạn<abbr class="required">*</abbr></label>
                                        <input type="text" id="name" name="address" required placeholder="{{ $authen->address}}">
                                        @error('address')
                                            <small style="color: red;" >{{ $message }}</small>
                                        @enderror
                                    </div>

                                    {{-- <div class="col-12 learts-mb-20">
                                        <label for="registerEmail">Địa chỉ Email của bạn<abbr class="required">*</abbr></label>
                                        <input type="email" id="registerEmail" name="email" required  placeholder="{{ $authen->email}}">
                                        @error('email')
                                            <small style="color: red;" >{{ $message }}</small>
                                        @enderror
                                    </div> --}}
                                    {{-- <div class="col-12 learts-mb-20">
                                        <label for="password">Mật khẩu của bạn<abbr class="required">*</abbr></label>
                                        <input type="password" id="password" name="password" required  placeholder="{{ $authen->password}}">
                                        @error('password')
                                            <small style="color: red;" >{{ $message }}</small>
                                        @enderror
                                    </div> --}}
                                    {{-- <div class="col-12 learts-mb-20">
                                        <label for="confirm_password">Xác nhận lại mật khẩu của bạn<abbr class="required">*</abbr></label>
                                        <input type="password" id="confirm_password" name="confirm_password" required  placeholder="{{ $authen->confirm_password}}">
                                        @error('confirm_password')
                                            <small style="color: red;" >{{ $message }}</small>
                                        @enderror
                                    </div> --}}
                                    <div class="row learts-mb-20">
                                        <!-- Cột Số điện thoại -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="phone">Số điện thoại <abbr class="required">*</abbr></label>
                                                <input type="text" id="phone" class="form-control shadow-none" required name="phone"  placeholder="{{ $authen->phone}}">
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
                                                    <option value="nam" {{ $authen->gender == 'nam' ? 'selected' : '' }}>Nam</option>
                                                    <option value="nu" {{ $authen->gender == 'nu' ? 'selected' : '' }}>Nữ</option>
                                                    <option value="khac" {{ $authen->gender == 'khac' ? 'selected' : '' }}>Khác</option>
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
                                                <input type="date" id="birthday" class="form-control shadow-none" required name="birthday" value="{{ $authen->birthday }}">
                                                @error('birthday')
                                                    <small style="color: red;">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row learts-mb-20">
                                        <div class="col-md-6">
                                            <label for="password">Xác nhận mật khẩu của bạn<abbr class="required">*</abbr></label>
                                            <input type="password" id="password" name="password" class="form-control shadow-none" required>
                                            @error('password')
                                                <small style="color: red;">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="confirm_password">Xác nhận lại mật khẩu của bạn để thay đổi thông tin<abbr class="required">*</abbr></label>
                                            <input type="password" id="confirm_password" name="confirm_password" class="form-control shadow-none" required>
                                            @error('confirm_password')
                                                <small style="color: red;">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="text-decoration-none">Bạn bị mất mật khẩu ?</a>
                                        <a href="{{route('client.home')}}" class="text-decoration-none">Trang chủ</a>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="col-12 text-center learts-mb-50">
                                        <button type="submit" class="btn btn-dark btn-outline-hover-dark">Thay Đổi</button>
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