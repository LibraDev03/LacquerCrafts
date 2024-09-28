@extends('layouts.admin.index')
@section('main')

<div class="container">
    <br>
    <h1 style="text-align: center">Tạo người dùng mới</h1>
    <br>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
    
        <!-- Họ và tên, Email trên cùng 1 dòng -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="name" name="name" required placeholder="Họ và tên">
            </div>
            <div class="form-group col-md-6">
                <input type="email" class="form-control" id="email" name="email" required placeholder="Email của bạn">
                @error('email')
                    <small style="color: red;" >{{ $message }}</small>
                @enderror
            </div>
        </div>
    
        <!-- Mật khẩu và Xác nhận mật khẩu trên cùng 1 dòng -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="password" class="form-control" id="password" name="password" required placeholder="Mật khẩu">
            </div>
            <div class="form-group col-md-6">
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" required placeholder="Xác nhận mật khẩu">
                @error('confirm_password')
                    <small style="color: red;" >{{ $message }}</small>
                @enderror
            </div>
        </div>
    
        <!-- Thêm trường số điện thoại, giới tính và ngày sinh như yêu cầu trước đó -->
        <div class="form-row">
            <div class="form-group col-md-4">
                <input type="text" class="form-control" id="phone" name="phone" required placeholder="Số điện thoại">
                @error('phone')
                    <small style="color: red;" >{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <select class="form-control" id="gender" name="gender" required>
                    <option value=""> Chọn giới tính</option>
                    <option value="nam">Nam</option>
                    <option value="nu">Nữ</option>
                    <option value="khac">Khác</option>
                </select>
                @error('gender')
                    <small style="color: red;" >{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <input type="date" class="form-control" id="birthday" name="birthday" required>
                @error('birthday')
                    <small style="color: red;" >{{ $message }}</small>
                @enderror
            </div>
        </div>
    
        <div class="col text-center">
            <button type="submit" class="btn btn-dark">Tạo mới người dùng</button>
        </div>
    </form>
</div>

 

@endsection