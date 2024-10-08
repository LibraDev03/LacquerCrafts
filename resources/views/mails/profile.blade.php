<div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f7f7f7; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <div style="background-color: #333; padding: 20px; border-radius: 10px 10px 0 0; color: white; text-align: center;">
        <h2>Xin chào {{ $profile->name }}</h2>
        <p>Chúc mừng bạn đã thay đổi hồ sơ thành công tại Mỹ Nghệ Việt!</p>
    </div>

    <div style="padding: 20px; background-color: white; border-radius: 0 0 10px 10px;">
        <p style="font-size: 16px; color: #333;">Thông tin hồ sơ của bạn:</p>

        <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
            <tr>
                <td style="padding: 10px; background-color: #f2f2f2; font-weight: bold;">Email:</td>
                <td style="padding: 10px; background-color: #f9f9f9;">{{ $profile->email }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; background-color: #f2f2f2; font-weight: bold;">Họ tên:</td>
                <td style="padding: 10px; background-color: #f9f9f9;">{{ $profile->name }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; background-color: #f2f2f2; font-weight: bold;">Giới tính:</td>
                <td style="padding: 10px; background-color: #f9f9f9;">{{ $profile->gender }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; background-color: #f2f2f2; font-weight: bold;">Ngày sinh:</td>
                <td style="padding: 10px; background-color: #f9f9f9;">{{ $profile->birthday }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; background-color: #f2f2f2; font-weight: bold;">Số điện thoại:</td>
                <td style="padding: 10px; background-color: #f9f9f9;">{{ $profile->phone }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; background-color: #f2f2f2; font-weight: bold;">Địa chỉ:</td>
                <td style="padding: 10px; background-color: #f9f9f9;">{{ $profile->address }}</td>
            </tr>
        </table>

        <p style="font-size: 14px; color: #333;">Mỹ Nghệ Việt luôn đồng hành cùng bạn</p>
    </div>
</div>
