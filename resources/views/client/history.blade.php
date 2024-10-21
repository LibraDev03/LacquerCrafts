@extends('layouts.client.client')
@section('main')
<div class="page-title-section section" data-bg-image="assets/images/bg/page-title-1.webp">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page-title">
                    <h1 class="title">Lịch sử đơn hàng</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('client.home')}}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Lịch sử đơn hàng</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="section section-padding">
    <div class="container">
        <table class="cart-wishlist-table table text-center">
            <thead>
                <tr>
                    <th class="w-25">STT</th>
                    <th class="w-25">Ngày đặt hàng</th>
                    <th class="w-25">Tổng đơn hàng</th>
                    <th class="w-25">Chi tiết đơn hàng</th>
                </tr>
            </thead>
            <tbody>
                <?php $total = 0; ?>
                @foreach ($orders as $order)
                <tr>
                    <td class="w-25">{{$loop->index+1}}</td>
                    <td class="w-25">{{$order->created_at->format('d/m/Y')}}</td>
                    <td class="w-25">{{number_format( $order->totalPrice + 40000) }}  VND</td>
                    <td class="w-25"><a href="{{route('client.detail', $order->id)}}">Xem chi tiết tại đây</a></td>
                </tr>

                <?php?>
                @endforeach
            </tbody>
        </table>
        
        
    </div>
</div>
@endsection