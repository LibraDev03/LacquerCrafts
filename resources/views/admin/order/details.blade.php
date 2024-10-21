@extends('layouts.admin.index')
@section('main')
<div class="container">
    <div class="row">
        <!-- Bảng 2 -->
        <div class="col-md-6">
            <h2>đơn hàng</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Giá</th>
                            <th>Tổng</th>
                        </tr>
                    </tr>
                </thead>
                <tbody>
                    <?php $total=0; ?>
                    @foreach ($order->orderD as $item)
                        <tr>
                            <td>
                                <img src="{{ asset('assets/images/product/' . $item->prodDetail->image) }}" alt="" width="20%">
                                <strong>x{{$item->quantity}}</strong>
                                <br>
                                <p>{{$item->prodDetail->name}}</p>
                            </td>
                            <td>${{ number_format($item->price)}}</td>
                            <td>${{ number_format($item->price * $item->quantity)}}
                        </tr>
                        <?php $total += $item->price * $item->quantity ?>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Bảng 1 -->
        <div class="col-md-6">
            <h2>chi tiết đơn hàng</h2>
            <form action="{{ route('admin.detail', $order->id) }}" method="POST">
                @csrf
                <div class="row">
                    <div class="row border">
                        <div class="col-lg-6 mb-20 border-bottom p-3">
                            <label>Name of orderer <span>*</span></label>
                            <p>{{$order->name}}</p>
                        </div>
                        <div class="col-lg-6 mb-20 border-bottom p-3">
                            <label> Email Address <span>*</span></label>
                            <p>{{$order->email}}</p>
                        </div>
                        {{-- <div class="col-lg-6 mb-20 border-bottom p-3">
                            <label>Name of consignee<span>*</span></label>
                            <p>{{$order->name_consignee}}</p>
                        </div> --}}
                        <div class="col-lg-6 mb-20 border-bottom p-3">
                            <label>Phone of consignee<span>*</span></label>
                            <p>{{$order->phone}}</p>
                        </div>
                        <div class="col-lg-6 mb-20 border-bottom p-3">
                            <label>Delivery address<span>*</span></label>
                            <p>{{$order->address}}</p>
                        </div>
                        <div class="col-lg-6 mb-20 border-bottom p-3">
                            <div class="order-notes">
                                <label for="order_note">Order Notes<span>*</span></label>
                                <p>{{$order->order_notes}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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
        </div>
    </div>
</div>

@endsection