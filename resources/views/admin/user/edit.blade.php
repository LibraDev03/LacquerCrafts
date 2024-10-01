@extends('layouts.admin.index')
@section('main')
<div class="container">
    <br>
    <h1 style="text-align: center">Chỉnh sửa người dùng</h1>
    <br>
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
    
        <!-- Họ và tên, Email trên cùng 1 dòng -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Họ và tên</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required placeholder="Họ và tên">
                @error('name')
                    <small style="color: red;">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required placeholder="Email">
                @error('email')
                    <small style="color: red;">{{ $message }}</small>
                @enderror
            </div>
        </div>
    
        <!-- Mật khẩu và Xác nhận mật khẩu trên cùng 1 dòng -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="password">Mật khẩu mới</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu mới">
            </div>
            <div class="form-group col-md-6">
                <label for="password_confirmation">Xác nhận mật khẩu</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Xác nhận mật khẩu mới">
            </div>
        </div>
    
        <!-- Thêm số điện thoại, giới tính và ngày sinh trong cùng một dòng -->
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="phone">Số điện thoại</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{($user->phone) }}" required>
                @error('phone')
                    <small style="color: red;">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="gender">Giới tính</label>
                <select id="gender" class="form-control shadow-none" style="border-radius: 0;" required name="gender">
                    <option value="">Chọn giới tính</option>
                    <option value="nam" {{ $user->gender == 'nam' ? 'selected' : '' }}>Nam</option>
                    <option value="nu" {{ $user->gender == 'nu' ? 'selected' : '' }}>Nữ</option>
                    <option value="khac" {{ $user->gender == 'khac' ? 'selected' : '' }}>Khác</option>
                </select>
                @error('gender')
                    <small style="color: red;">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="birthday">Ngày sinh <abbr class="required">*</abbr></label>
                    <input type="date" id="birthday" class="form-control shadow-none" required name="birthday" value="{{ $user->birthday }}">
                    @error('birthday')
                        <small style="color: red;">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
    
        <div class="col text-center">
        <button type="submit" class="btn btn-dark">Chỉnh sửa</button>
        </div>
    </form>
    
</div>
@endsection