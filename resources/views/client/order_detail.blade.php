@extends('layouts.client.client')
@section('main')
    <div class="page-title-section section" data-bg-image="assets/images/bg/page-title-1.webp">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title">
                        <h1 class="title">Chi tiết đơn hàng</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('client.home')}}">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Chi tiết đơn hàng</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <!-- Khối 1: Danh sách đơn hàng -->
            <div class="col-md-6">
                <div class="section-title2" style="padding-top: 100px">
                    <h2 class="title text-center">Đơn hàng của bạn</h2>
                </div>
                <div>
                    <table class="cart-wishlist-table table text-center">
                        <thead>
                            <tr>
                                <th class="w-15">STT</th>
                                <th class="w-25">Sản phẩm</th>
                                <th class="w-25">Giá sản phẩm</th>
                                <th class="w-35">Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $total = 0; ?>
                            @foreach ($order->orderD as $order)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>
                                    <img src="{{ asset('assets/images/product/' . $order->prodDetail->image) }}" alt="" width="60%">
                                    <strong>x{{ $order->quantity }}</strong>
                                    <p>{{ $order->prodDetail->name }}</p>
                                </td>
                                <td>{{ number_format($order->price) }} VND</td>
                                <td>{{ number_format($order->total) }} VND</td>
                            </tr>
                            <?php $total += $order->total;  ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    
            <!-- Khối 2: Hóa đơn nhận hàng và khối 3 (Thanh toán) -->
            <div class="col-md-6">
                <div class="section-title2" style="padding-top: 100px">
                    <h2 class="title text-center">Hóa đơn nhận hàng</h2>
                </div>
                @foreach ($orders as $orders)
                <div class="row">
                    <div class="col-md-6 col-12 learts-mb-20">
                        <label for="bdFirstName">Tên của bạn (Người nhận)<abbr class="required">*</abbr></label>
                        <input name="name" type="text" id="bdFirstName" value="{{ $orders->name }}">
                    </div>
                    <div class="col-md-6 col-12 learts-mb-20">
                        <label for="bdEmail">Địa chỉ Email<abbr class="required">*</abbr></label>
                        <input name="email" type="email" id="bdEmail" value="{{ $orders->email }}">
                    </div>
                    <div class="col-md-6 col-12 learts-mb-30">
                        <label for="bdPhone">Số điện thoại nhận hàng<abbr class="required">*</abbr></label>
                        <input name="phone" type="text" id="bdPhone" value="{{ $orders->phone }}">
                    </div>
                    <div class="col-md-6 col-12 learts-mb-30">
                        <label for="bdAdress">Địa chỉ nhận hàng<abbr class="required">*</abbr></label>
                        <input name="address" type="text" id="bdAdress" value="{{ $orders->address }}">
                    </div>
                    <div class="col-12 learts-mb-20">
                        <label for="bdOrderNote">Ghi chú cho đơn hàng của bạn</label>
                        <input value="{{ $orders->order_notes }}" name="order_notes" id="bdOrderNote">
                    </div>
                    {{-- <div class="col-12 text-center learts-mb-30">
                        <p class="payment-note">
                            Dữ liệu cá nhân của bạn sẽ được sử dụng để xử lý đơn đặt hàng, hỗ trợ trải nghiệm của bạn 
                            trên trang web này và cho các mục đích khác được mô tả trong chính sách bảo mật của chúng tôi.
                        </p>
                    </div> --}}
                </div>
                @endforeach
                <!-- Khối 3: Thanh toán giỏ hàng (bên dưới khối 2) -->
                    <h2 class="title">Thanh toán Giỏ hàng</h2>
                    <table class="table">
                        <tbody>
                            <tr class="subtotal">
                                <th>Phí giao hàng mặc định:</th>
                                <td><span class="amount">+ 40,000 VND</span></td>
                            </tr>
                            <tr class="subtotal">
                                <th>Tổng giá trị đơn hàng:</th>
                                <td><span class="amount">+ {{ number_format($total)}} VND</span></td>
                            </tr>
                            <tr class="total">
                                <th>Tổng thanh toán:</th>
                                <td><strong><span class="amount">= {{ number_format($total + 40000)}} VND</span></strong></td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('client.checkout') }}" class="btn btn-dark btn-outline-hover-dark">Tiến hành thanh toán</a>
            </div>
        </div>
    </div>
    
@endsection