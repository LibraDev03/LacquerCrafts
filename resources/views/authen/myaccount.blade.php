@extends('layouts.client.client')
@section('main')
    <!-- Page Title/Header Start -->
    <div class="page-title-section section" data-bg-image="assets/images/bg/page-title-1.webp">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title">
                        <h1 class="title">Tài khoản của tôi</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('client.home')}}">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Tài khoản của tôi</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->

    <!-- My Account Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row learts-mb-n30">

                <!-- My Account Tab List Start -->
                <div class="col-lg-4 col-12 learts-mb-30">
                    <div class="myaccount-tab-list nav">
                        <a href="#account-info" data-bs-toggle="tab">Hồ sơ cá nhân<i class="far fa-user"></i></a>
                        <a href="#address" data-bs-toggle="tab">Đổi mật khẩu <i class="far fa-file-alt"></i></a>
                        <a href="#orders" data-bs-toggle="tab">Orders <i class="far fa-file-alt"></i></a>
                        <a href="{{route('authen.logout')}}">Đăng xuất<i class="far fa-sign-out-alt"></i></a>
                    </div>
                </div>
                <!-- My Account Tab List End -->

                <!-- My Account Tab Content Start -->
                <div class="col-lg-8 col-12 learts-mb-30">
                    <h1 style="text-align: center">Tài khoản cá nhân của bạn luôn được Mỹ Nghệ Việt bảo mật tuyệt đối !!!</h1>
                    <div class="tab-content">
                        <!-- Single Tab Content Start -->
                        <div class="tab-pane fade" id="orders">
                            <div class="myaccount-content order">
                                <div class="table-responsive">
                                    <div class="" style="border: 1px solid; border-color: black; padding:50px">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Order</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Aug 22, 2018</td>
                                                    <td>Pending</td>
                                                    <td>$3000</td>
                                                    <td><a href="shopping-cart.html">View</a></td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Tab Content End -->

                        <!-- Single Tab Content Start -->
                        <div class="tab-pane fade" id="download">
                            <div class="myaccount-content download">
                                <div class="" style="border: 1px solid; border-color: black; padding:50px">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Date</th>
                                                    <th>Expire</th>
                                                    <th>Download</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Haven - Free Real Estate PSD Template</td>
                                                    <td>Aug 22, 2018</td>
                                                    <td>Yes</td>
                                                    <td><a href="#"><i class="far fa-arrow-to-bottom mr-1"></i> Download File</a></td>
                                                </tr>
                                                <tr>
                                                    <td>HasTech - Profolio Business Template</td>
                                                    <td>Sep 12, 2018</td>
                                                    <td>Never</td>
                                                    <td><a href="#"><i class="far fa-arrow-to-bottom mr-1"></i> Download File</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Tab Content End -->

                        <!-- Single Tab Content Start -->
                        <div class="tab-pane fade" id="address">
                            <div class="myaccount-content address">
                                <div class="" style="border: 1px solid; border-color: black; padding:50px">
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
                                                    <label for="email">Xác nhận email của bạn<abbr class="required">*</abbr></label>
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
                        <!-- Single Tab Content End -->

                        <!-- Hô so ca nhan-->
                        <div class="tab-pane fade" id="account-info">
                            <div class="myaccount-content account-details">
                                <div class="" style="border: 1px solid; border-color: black; padding:50px">

                                    <div class="">
                                        <div class="login-register-title">
                                            <h2 class="title">Hồ sơ của bạn</h2>
                                            <p class="desc">Sửa đổi hồ sơ của bạn để có những trải nghiệm tốt hơn</p>
                                        </div>
                                        <div class="login-register-form">
                                            <form action="{{route('authen.profile')}}" method="POST">
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
                                                            <label for="confirm_password" style="text-align: center">Xác nhận email của bạn để thay đổi thông tin<abbr class="required">*</abbr></label>
                                                            <input type="email" id="email" name="email" class="form-control shadow-none" required>
                                                            @error('email')
                                                                <small style="color: red;">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="confirm_password" style="text-align: center">Xác nhận mật khẩu của bạn để thay đổi thông tin<abbr class="required">*</abbr></label>
                                                            <input type="password" id="password" name="password" class="form-control shadow-none" required>
                                                            @error('password')
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
                        </div> <!-- Single Tab Content End -->

                    </div>
                </div> <!-- My Account Tab Content End -->
            </div>
        </div>
    </div>
    <!-- My Account Section End -->
@endsection