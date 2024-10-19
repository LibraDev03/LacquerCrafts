@extends('layouts.client.client')
@section('main')
    
    <!-- Page Title/Header Start -->
    <div class="page-title-section section" data-bg-image="assets/images/bg/page-title-1.webp">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title">
                        <h1 class="title">Thanh toán</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('client.home')}}">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Thanh toán đơn hàng</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->

    <!-- Checkout Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="section-title2 text-center">
                <h2 class="title">Đơn hàng của bạn</h2>
            </div>
            <div class="row learts-mb-n30">
                <div class="col-lg-12 order-lg-2 learts-mb-30">
                    <div class="order-review">
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
                                    <td class="thumbnail">
                                        <a href="product-details.html"><img src="assets/images/product/{{$cart->prodC->image}}" alt="cart-product-1"></a>
                                    </td>
                                    <td class="name">
                                        <a href="product-details.html">{{$cart->prodC->name}}</a>
                                    </td>
                                    <td class="price"><span>{{number_format($cart->price)}} VND</span></td>
                                    <td class="quantity">
                                            <div class="product-quantity">
                                                <input style="margin-left: 25px" type="text" name="quantity" class="input-qty" value="{{$cart->quantity}}">
                                            </div>
                                    </td>
                                    <td class="subtotal"><span>{{number_format($cart->quantity * $cart->price)}} VND</span></td>
                                    <td class="remove"><a href="{{route('client.delete_cart', $cart->id)}}" class="btn">×</a></td>
                                </tr>
                                <?php $total += $cart->quantity * $cart->price; ?>
                                @endforeach
                            </tbody>
                    
                            <!-- Tfoot chứa hai khối -->
                            <tfoot>
                                <tr>
                                    <td colspan="3">
                                        <table class="table table-bordered align-middle">
                                            <tbody>
                                                <tr class="subtotal">
                                                    <th scope="row">Phí Ship mặc định</th>
                                                    <td>+ 40,000 VND</td>
                                                </tr>
                                                <tr class="subtotal">
                                                    <th scope="row">Giá trị đơn hàng</th>
                                                    <td>{{ number_format($total) }} VND</td>
                                                </tr>
                                                <tr class="total ">
                                                    <th scope="row">Tổng hóa đơn thanh toán</th>
                                                    <td><strong>{{ number_format($total + 40000) }} VND</strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                    </td>
                                    <td colspan="3">
                                        <div class="checkout-coupon">
                                            <p class="coupon-toggle">Bạn có mã giảm giá không?
                                                <a href="#checkout-coupon-form" data-bs-toggle="collapse">Ấn vào đây để nhập mã giảm giá của bạn</a>
                                            </p>
                                            <div id="checkout-coupon-form" class="collapse">
                                                <div class="coupon-form">
                                                    <p>Nếu bạn có mã giảm giá, vui lòng áp dụng nó bên dưới.</p>
                                                    <form action="#" class="learts-mb-n10">
                                                        <input class="learts-mb-10" type="text" value="Mã giảm giá">
                                                        <button class="btn btn-dark btn-outline-hover-dark learts-mb-10">Áp dụng mã giảm giá</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                            <style>
                                .order-review {
                                    width: 100%;
                                    margin-top: 20px;
                                }
                        
                                .tfoot-and-coupon {
                                    display: flex;
                                    justify-content: space-evenly;
                                    align-items: flex-start;
                                    margin-top: 20px;
                                }
                        
                               
                            </style>
                        
                        </table>
                    </div>
                    
                    
                </div>
            </div>

            <div class="section-title2" style="padding-top: 100px">
                <h2 class="title" style="text-align: center">Chi tiết đơn thanh toán đơn hàng</h2>
            </div>
            <form action="{{ route('client.checkout') }}" class="checkout-form learts-mb-50" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-12 learts-mb-20">
                        <label for="bdFirstName">Tên của bạn (Người nhhận)<abbr class="required">*</abbr></label>
                        <input name="name" type="text" id="bdFirstName" value="{{$user->name}}">
                    </div>
                    <div class="col-md-6 col-12 learts-mb-20">
                        <label for="bdEmail">Địa chỉ Email<abbr class="required">*</abbr></label>
                        <input name="email" type="email" id="bdEmail" value="{{$user->email}}">
                    </div>
                    <div class="col-md-6 col-12 learts-mb-30">
                        <label for="bdPhone">Số điện thoại nhận hàng <abbr class="required">*</abbr></label>
                        <input name="phone" type="text" id="bdPhone" >
                    </div>
                
                    <div class="col-md-6 col-12 learts-mb-30">
                        <label for="bdAdress">Địa chỉ nhận hàng <abbr class="required">*</abbr></label>
                        <input name="address" type="text" id="bdAdress" >
                    </div>
                        {{-- <div class="col-md-4 col-12 learts-mb-20">
                            <label for="bdCountry">Địa chỉ nhận hàng <abbr class="required">*</abbr></label>
                            <select id="bdCountry" class="form-control select2-basic">
                                <option value="">Chọn tỉnh/thành phố…</option>
                                <option value="HNI">Hà Nội</option>
                                <option value="HCM">TP. Hồ Chí Minh</option>
                                <option value="DNA">Đà Nẵng</option>
                                <option value="HUE">Thừa Thiên Huế</option>
                                <option value="HPG">Hải Phòng</option>
                                <option value="BDG">Bình Dương</option>
                                <option value="DNA">Đồng Nai</option>
                                <option value="QNI">Quảng Ninh</option>
                                <option value="CTO">Cần Thơ</option>
                                <option value="LCA">Lào Cai</option>
                                <option value="LCU">Lai Châu</option>
                                <option value="KGG">Kiên Giang</option>
                                <option value="GLI">Gia Lai</option>
                                <option value="NTN">Ninh Thuận</option>
                                <option value="BTH">Bình Thuận</option>
                                <option value="QNM">Quảng Nam</option>
                                <option value="KHO">Khánh Hòa</option>
                            </select>
                        </div> --}}
                        
                    
                    <div class="col-12 learts-mb-20">
                        <label for="bdOrderNote">Ghi chú cho đơn hàng của bạn </label>
                        <textarea name="order_notes" id="bdOrderNote" placeholder="Ghi chú của bạn về đơn hàng , người bán và người giao hàng có thể xem"></textarea>
                    </div>

                    <div class="row">
                        <!-- Phần Payment Method -->
                        <div class="col-lg-12 learts-mb-30">
                            <div class="order-payment">
                                <div class="payment-method">
                                    <div class="accordion" id="paymentMethod">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header d-flex align-items-center">
                                                        <input type="radio" name="payment_method" id="cashkPaymentsRadio" class="me-2" 
                                                               data-bs-toggle="collapse" data-bs-target="#cashkPayments" />
                                                        <label for="cashkPaymentsRadio" class="mb-0">
                                                            Cash on delivery (COD)
                                                        </label>
                                                    </div>
                                                    <div id="cashkPayments" class="collapse" data-bs-parent="#paymentMethod">
                                                        <div class="card-body">
                                                            <p>Thanh toán tiền mặt khi nhận hàng (Chuẩn bị trước số tiền thanh toán)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                    
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header d-flex align-items-center">
                                                        <input type="radio" name="payment_method" id="payPalPaymentsRadio" class="me-2" 
                                                               data-bs-toggle="collapse" data-bs-target="#payPalPayments" />
                                                        <label for="payPalPaymentsRadio" class="mb-0">
                                                            PayPal 
                                                            <img src="assets/images/others/pay-2.webp" alt="" 
                                                                 style="max-height: 20px; margin-left: 5px;">
                                                        </label>
                                                    </div>
                                                    <div id="payPalPayments" class="collapse" data-bs-parent="#paymentMethod">
                                                        <div class="card-body">
                                                            <p>Thanh toán bằng các cổng thanh toán online hoặc ví điện tử</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Phần Payment Note và Nút Đặt Hàng -->
                        <div class="col-12 text-center learts-mb-30">
                            <p class="payment-note">
                                Dữ liệu cá nhân của bạn sẽ được sử dụng để xử lý đơn đặt hàng, hỗ trợ trải nghiệm của bạn trên 
                                trang web này và cho các mục đích khác được mô tả trong chính sách bảo mật của chúng tôi.
                            </p>
                            <button type="submit" class="btn btn-dark btn-outline-hover-dark">Đặt hàng</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Checkout Section End -->

@endsection