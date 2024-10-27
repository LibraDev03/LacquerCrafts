@extends('layouts.client.client')
@section('main')
    <!-- Page Title/Header Start -->
    <div class="page-title-section section" data-bg-image="assets/images/bg/page-title-1.webp">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title">
                        <h1 class="title">Quên mật khẩu</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Quên mật khẩu</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->

    <!-- Lost Password Section Start -->
    <div class="section section-padding">
        <div class="container">

            <div class="lost-password">
                <p style="text-align: center">Bạn bị mất mật khẩu? Vui lòng nhập tên người dùng hoặc địa chỉ email của bạn. Bạn sẽ nhận được liên kết để tạo mật khẩu mới qua email.</p>
                <form action="" method="POST">
                    @csrf
                    <div class="row learts-mb-n30">
                        <div class="col-12 learts-mb-30">
                            <label for="userName">Email của bạn</label>
                            <input id="userName" type="text" name="email">
                        </div>
                        <div class="col-12 text-center learts-mb-30">
                            <button class="btn btn-dark btn-outline-hover-dark">Đặt lại mật khẩu</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
    <!-- Lost Password Section End -->

@endsection
