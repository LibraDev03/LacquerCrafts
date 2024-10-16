@extends('layouts.client.client')
@section('main')
        <!-- Page Title/Header Start -->
        <div class="page-title-section section" data-bg-image="assets/images/bg/page-title-1.webp">
            <div class="container">
                <div class="row">
                    <div class="col">
    
                        <div class="page-title">
                            <h1 class="title">Giỏ hàng</h1>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('client.home')}}">Trang chủ</a></li>
                                <li class="breadcrumb-item active">Giỏ hàng</li>
                            </ul>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Title/Header End -->
    
        <!-- Shopping Cart Section Start -->
        <div class="section section-padding">
            <div class="container">
                <table class="cart-wishlist-table table">
                    <thead>
                            <tr>
                                <th class="name" colspan="2">Sản phẩm</th>
                                <th class="price">Giá sản phẩm</th>
                                <th class="quantity" style="padding-left: 55px">Số lượng</th>
                                <th class="subtotal">Tổng giá trị</th>
                                <th class="remove">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $total = 0; ?>
                            @foreach ($cart as $cart)
                            <tr>
                                <td class="thumbnail"><a href="product-details.html"><img src="assets/images/product/{{$cart->prodC->image}}" alt="cart-product-1"></a></td>
                                <td class="name"> <a href="product-details.html">{{$cart->prodC->name}}</a></td>
                                <td class="price"><span>{{number_format( $cart->price)}} VND</span></td>
                                <td class="quantity">
                                    <form class="cart-form" action="{{route('client.update_cart', $cart->product_id )}}" method="GET">
                                        <div class="product-quantity">
                                            <span class="qty-btn minus"><i class="ti-minus"></i></span>
                                            <input type="text" name="quantity" class="input-qty" value="{{$cart->quantity}}">
                                            <span class="qty-btn plus"><i class="ti-plus"></i></span>
                                            <button data-hint="Lưu số lượng sản phẩm " style="margin-left: 30px"><i class="fa fa-save" data-hint="Lưu số lượng sản phẩm "></i></button>
                                        </div>
                                    </form>
                                </td>
                                <td class="subtotal"><span>{{number_format($cart->quantity * $cart->price)}} VND</span></td>
                                <td class="remove"><a href="{{route('client.delete_cart', $cart->id)}}" class="btn">×</a></td>
                            </tr>
                            <?php $total += $cart->quantity * $cart->price; ?>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row justify-content-between mb-n3">
                        <div class="col-auto mb-3">
                            <div class="cart-coupon">
                                <input type="text" placeholder="Nhập mã giảm giá của bạn tại đây">
                                <button class="btn"><i class="fas fa-gift"></i></button>
                            </div>
                        </div>
                        <div class="col-auto d-flex align-items-center">
                            <a class="btn btn-light btn-hover-dark mr-3 mb-0" href="{{ route('client.home') }}" style="margin-right: 10px">Tiếp tục mua sắm</a>
                            <form action="{{ route('client.clear') }}" method="GET">
                                <button type="submit" class="btn btn-dark btn-outline-hover-dark mb-0" onclick="return confirm('Bạn chắc chắn muốn xóa hết giỏ hàng không?')">Xóa hết giỏ hàng</button>
                            </form>
                        </div>
                        
                    </div>
                <div class="cart-totals mt-5" style="width:500px">
                    <h2 class="title">Thanh toán Giỏ hàng</h2>
                    <table>
                        <tbody>
                            <tr class="subtotal">
                                <th>Phí giao hàng mặc định :</th>
                                <td><span class="amount">+ 40,000 VND</span></td>
                            </tr>
                            <tr class="subtotal">
                                <th>Tổng giá trị đơn hàng :</th>
                                <td><span class="amount">+ {{number_format( $total)}} VND</span></td>
                            </tr>
                            <tr class="total">
                                <th>Tổng thanh toán :</th>
                                <td><strong><span class="amount">= {{number_format( $total +40000)}} VND</span></strong></td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="checkout.html" class="btn btn-dark btn-outline-hover-dark">Tiến hành thanh toán</a>
                </div>
            </div>
    
        </div>
        <!-- Shopping Cart Section End -->

        {{-- <style>
            .qty-btn {
                width: 40px; /* Chiều rộng nút */
                height: 40px; /* Chiều cao nút */
                display: flex; 
                justify-content: center; 
                align-items: center; 
                border: 1px solid #ccc; /* Đường viền để nhìn rõ nút hơn */
                background-color: #f8f9fa; /* Màu nền cho nút */
                cursor: pointer;
            }

            .qty-btn:hover {
                background-color: #e2e6ea; /* Hiệu ứng hover */
            }

            .input-qty {
                font-size: 16px; /* Kích thước chữ */
                height: 40px; /* Chiều cao trường nhập */
                width: 60px; /* Chiều rộng trường nhập */
                text-align: center; /* Căn giữa nội dung */
                border: 1px solid #ccc; /* Đường viền để nhìn rõ trường nhập hơn */
                border-radius: 4px; /* Bo góc */
            }


        </style> --}}
@endsection