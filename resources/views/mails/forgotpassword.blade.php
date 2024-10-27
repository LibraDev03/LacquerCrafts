<div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f7f7f7; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <div style="background-color: #333; padding: 20px; border-radius: 10px 10px 0 0; color: white; text-align: center;">
        <h2>Xin chào {{$user->name}}</h2>
        <p>Bạn quên mật khẩu tại Mỹ Nghệ Việt ???</p>
    </div>

    <div style="padding: 20px; background-color: white; border-radius: 0 0 10px 10px;">
        <p style="text-align: center; font-size: 16px; color: #333;"><b><a href="{{route('authen.reset_password', $token)}}">Nhần vào đây để lấy lại mật khẩu mới </a></b></p>

        {{-- <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
            <tr>
                <td style="padding: 10px; background-color: #f2f2f2; font-weight: bold;">Email:</td>
                <td style="padding: 10px; background-color: #f9f9f9;">{{ $change_password->email }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; background-color: #f2f2f2; font-weight: bold;">Họ tên:</td>
                <td style="padding: 10px; background-color: #f9f9f9;">{{ $change_password->name }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; background-color: #f2f2f2; font-weight: bold;">Giới tính:</td>
                <td style="padding: 10px; background-color: #f9f9f9;">{{ $change_password->gender }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; background-color: #f2f2f2; font-weight: bold;">Ngày sinh:</td>
                <td style="padding: 10px; background-color: #f9f9f9;">{{ $change_password->birthday }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; background-color: #f2f2f2; font-weight: bold;">Số điện thoại:</td>
                <td style="padding: 10px; background-color: #f9f9f9;">{{ $change_password->phone }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; background-color: #f2f2f2; font-weight: bold;">Địa chỉ:</td>
                <td style="padding: 10px; background-color: #f9f9f9;">{{ $change_password->address }}</td>
            </tr>
        </table> --}}

        <p style="text-align: center; font-size: 14px; color: #333;">Mỹ Nghệ Việt luôn đồng hành cùng bạn</p>
    </div>
</div>
