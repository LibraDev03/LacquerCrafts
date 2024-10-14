@extends('layouts.client.client')
@section('main')
        <!-- Page Title/Header Start -->
        <div class="page-title-section section" data-bg-image="assets/images/bg/page-title-1.webp">
            <div class="container">
                <div class="row">
                    <div class="col">
    
                        <div class="page-title">
                            <h1 class="title">Danh sách yêu thíc</h1>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                                <li class="breadcrumb-item active">danh sách yêu thích</li>
                            </ul>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Title/Header End -->
    
        <!-- Wishlist Section Start -->
        <div class="section section-padding">
            <div class="container">
                <form class="cart-form" action="#">
                    <table class="cart-wishlist-table table">
                        <thead>
                            <tr>
                                <th class="name" colspan="2">Sản phẩm</th>
                                <th class="price">Giá sản phẩm</th>
                                <th class="add-to-cart">&nbsp;</th>
                                <th class="remove">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($wishlist as $wishlistItem)
                                <tr>
                                    <td class="thumbnail">
                                        <a href="{{ route('client.product', $wishlistItem->prodF->id) }}">
                                            <img src="assets/images/product/{{ $wishlistItem->prodF->image }}" alt="wishlist-product-1">
                                        </a>
                                    </td>
                                    <td class="name">
                                        <a href="{{ route('client.product', $wishlistItem->prodF->id) }}">
                                            {{ $wishlistItem->prodF->name }}
                                        </a>
                                    </td>
                                    <td class="price">
                                        @if ($wishlistItem->prodF->discount)
                                        <div class="original-price text-muted" style="text-decoration: line-through;">
                                            Giá gốc: {{ number_format($wishlistItem->prodF->price) }} VND
                                        </div>
                                        <div class="discount-price text-danger mt-1">
                                            Giá giảm: {{ number_format($wishlistItem->prodF->discount) }} VND
                                        </div>
                                        @else
                                            <span>{{ number_format($wishlistItem->prodF->price) }} VND</span>
                                        @endif
                                    </td>
                                    <td class="add-to-cart">
                                        <a href="#" class="btn btn-light btn-hover-dark">
                                            <i class="fas fa-shopping-cart mr-2"></i>Thêm vào giỏ
                                        </a>
                                    </td>
                                    <td class="remove">
                                        <a href="#" class="btn">×</a>
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col text-center mb-n3">
                            <a class="btn btn-light btn-hover-dark mr-3 mb-3" href="shop.html">Continue Shopping</a>
                            <a class="btn btn-light btn-hover-dark mr-3 mb-3" href="shopping-cart.html">View Cart</a>
                        </div>
                    </div>
                </form>
            </div>
    
        </div>
        <!-- Wishlist Section End -->
@endsection