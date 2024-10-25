@extends('layouts.client.client')
@section('title', 'LacquerCrafts Home')
@section('main')
        <!-- Slider main container Start -->
        <div class="section section-fluid">
            <div class="home8-slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="home8-slide-item swiper-slide" data-swiper-autoplay="5000">
                        <div class="home8-slide-image">
                            <img src="assets/images/slider/home8/slide-1.webp" alt="Slide Image">
                        </div>
                        <div class="home8-slide-content">
                            <span class="sub-title">Dành cho bạn</span>
                            <h2 class="title">Những sản phẩm sơn mài<br>đặc biệt</h2>
                            <div class="link">
                                <a href="{{route('client.shop')}}">Mua ngay !</a>
                            </div>
                        </div>
                        <div class="home8-slide-pages">
                            <span class="current">1</span>
                            <span class="border"></span>
                            <span class="total">3</span>
                        </div>
                    </div>
                    <div class="home8-slide-item swiper-slide" data-swiper-autoplay="5000">
                        <div class="home8-slide-image">
                            <img src="assets/images/slider/home8/slide-2.webp" alt="Slide Image">
                        </div>
                        <div class="home8-slide-content">
                            <span class="sub-title">Chỉ riêng bạn</span>
                            <h2 class="title">Những thiết kế riêng biệt<br>hoàn hảo nhất</h2>
                            <div class="link">
                                <a href="{{route('client.shop')}}">Mua ngay !</a>
                            </div>
                        </div>
                        <div class="home8-slide-pages">
                            <span class="current">2</span>
                            <span class="border"></span>
                            <span class="total">3</span>
                        </div>
                    </div>
                    <div class="home8-slide-item swiper-slide" data-swiper-autoplay="5000">
                        <div class="home8-slide-image">
                            <img src="assets/images/slider/home8/slide-3.webp" alt="Slide Image">
                        </div>
                        <div class="home8-slide-content">
                            <span class="sub-title">Cho mình bạn</span>
                            <h2 class="title">Trải nghiệm mua sắm <br>hoàn toán mới</h2>
                            <div class="link">
                                <a href="{{route('client.shop')}}">Mua ngay !</a>
                            </div>
                        </div>
                        <div class="home8-slide-pages">
                            <span class="current">3</span>
                            <span class="border"></span>
                            <span class="total">3</span>
                        </div>
                    </div>
                </div>
                <div class="home8-slider-pagination swiper-pagination"></div>
            </div>
        </div>
        <!-- Slider main container End -->
    
        <!-- Sản phẩm ưu đãi trong ngày Start -->
        <div class="section section-padding">
            <div class="container">
    
                <div class="row learts-mb-30">
                    <div class="col-md-auto col-12 learts-mb-20">
                        <!-- Section Title Start -->
                        <div class="section-title2 m-0">
                            <h2 class="title title-icon-right">Sản phẩm mới nhất</h2>
                        </div>
                        <!-- Section Title End -->
                    </div>
                    <div class="col-md col-12 learts-mb-20 d-flex justify-content-lg-end">
                        <div class="countdown2" data-countdown="2024/01/01"></div>
                    </div>
                </div>
    
                <!-- Products Start -->
                <div class="product-carousel">
    
                    @foreach ($new_product as $new_product)
                        <div class="col "  >
                            <div class="product">
                                <div class="product-thumb">
                                    <a href="{{route('client.product' , $new_product->id )}}" class="image">
                                        <span class="product-badges">
                                            <span class="onsale">-27%</span>
                                        <span class="hot">hot</span>
                                        </span>
                                        <img src="assets/images/product/{{$new_product->image}}" alt="Product Image">
                                        @foreach($new_product->images as $image)
                                            <img class="image-hover " src="assets/images/product/{{$image->image}}" alt="Product Image">
                                        @endforeach
                                    </a>

                                    @if ($new_product->favorited)
                                        <a href="{{ route('client.favorite', $new_product->id) }}" class="add-to-wishlist hintT-left wishlist-added" data-hint="Remove from wishlist">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                    @else
                                        <a href="{{ route('client.favorite', $new_product->id) }}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist">
                                            <i class="far fa-heart"></i>
                                        </a>
                                    @endif

                                    <div class="product-options">
                                        <ul class="colors">
                                            <li style="background-color: #000000;">color one</li>
                                            <li style="background-color: #c2c2c2;">color two</li>
                                            <li style="background-color: #b2483c;">color three</li>
                                        </ul>
                                        <ul class="sizes">
                                            <li>Large</li>
                                            <li>Medium</li>
                                            <li>Small</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h6 class="title"><a href="product-details.html">{{$new_product->name}}</a></h6>
                                    <span class="price">
                                        <span class="old">{{number_format($new_product->price)}} VND</span>
                                    <span class="new">{{number_format($new_product->discount)}} VND</span>
                                    </span>
                                    <div class="product-buttons">
                                        <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                        <a href="{{route('client.add_cart', $new_product->id)}}" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                        <a href="{{route('client.home')}}" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                    </div>
                                    <div class="product-stock-status">
                                        <div class="bar">
                                            <div class="progress" style="width: 66.6666%;"></div>
                                        </div>
                                        <span class="sold">Sold: <span>5</span></span>
                                        <span class="available">Available: <span>10</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
    
                </div>
                <!-- Products End -->
    
            </div>
        </div>
        <!-- Sản phẩm ưu đãi trong ngày End -->
    
        <!-- banner trang trí ngắt giữa trang Start -->
        <div class="section section-padding pt-0">
            <div class="container">
                <div class="row row-cols-lg-2 row-cols-1 learts-mb-n30">
    
                    <div class="col learts-mb-30">
                        <div class="sale-banner8">
                            <img src="assets/images/banner/sale/sale-banner8-1.webp" alt="Sale Banner Image">
                            <div class="content">
                                <h2 class="title">Thiết kế <br> đơn giản</h2>
                                <a href="{{route('client.category' , ['cat' => 4])}}" class="link">Mua ngay !</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col learts-mb-30">
                        <div class="sale-banner8">
                            <img src="assets/images/banner/sale/sale-banner8-2.webp" alt="Sale Banner Image">
                            <div class="content">
                                <h2 class="title">Quà tặng<br>dịp lễ</h2>
                                <a href="{{route('client.category' , ['cat' => 3])}}" class="link">Mua ngay !</a>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
        <!-- banner trang trí ngắt giữa trang End -->
    
        <!-- sản phẩm chính Start -->
        <div class="section section-fluid section-padding bg-white">
            <div class="container">
    
                <!-- Product Tab Start -->
                <div class="row">
                    <div class="col-12">
                        <ul class="product-tab-list nav">
                            <li><a class="active" data-bs-toggle="tab" href="#tab-new-sale ">Tất cả sản phẩm</a></li>
                            <li><a data-bs-toggle="tab" href="#tab-sale-items">Sản phẩm giảm giá</a></li>
                            {{-- <li><a data-bs-toggle="tab" href="#tab-best-sellers">Sản phẩm bán chạy</a></li> --}}
                        </ul>
                        <div class="prodyct-tab-content1 tab-content">
                            <div class="tab-pane fade show active" id="tab-new-sale">
                                <!-- Products Start -->
                                <div class="products row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">

                                    @foreach ($all_product as $all_product)
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <a href="{{route('client.product' , $all_product->id )}}" class="image">
                                                    <span class="product-badges">
                                                        <span class="hot">hot</span>
                                                    </span>
                                                    <img src="assets/images/product/{{$all_product->image}}" alt="Product Image">
                                                    @foreach($all_product->images as $image)
                                                        <img class="image-hover " src="assets/images/product/{{$image->image}}" alt="Product Image">
                                                    @endforeach
                                                </a>
                                                
                                                @if ($all_product->favorited)
                                                    <a href="{{ route('client.favorite', $all_product->id) }}" class="add-to-wishlist hintT-left wishlist-added" data-hint="Remove from wishlist">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                @else
                                                    <a href="{{ route('client.favorite', $all_product->id) }}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                @endif

                                                <div class="product-options">
                                                    <ul class="colors">
                                                        <li style="background-color: #000000;">color one</li>
                                                        <li style="background-color: #c2c2c2;">color one</li>
                                                        <li style="background-color: #b2483c;">color two</li>
                                                    </ul>
                                                    <ul class="sizes">
                                                        <li>Large</li>
                                                        <li>Medium</li>
                                                        <li>Small</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="title"><a href="product-details.html">{{$all_product->name}}</a></h6>
                                                <span class="price">
                                                    {{number_format($all_product->price)}} VND
                                                </span>
                                                <div class="product-buttons">
                                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                                    <a href="{{route('client.add_cart', $all_product->id)}}" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="{{route('client.home')}}" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
    
                                </div>
                                <!-- Products End -->
                            </div>

                            <div class="tab-pane fade" id="tab-sale-items">
                                <!-- Products Start -->
                                <div class="products row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">
    
                                    @foreach ($sale_product as $sale_product)
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <a href="{{route('client.product' , $sale_product->id )}}" class="image">
                                                    <span class="product-badges">
                                                        <span class="onsale">-27%</span>
                                                    <span class="hot">hot</span>
                                                    </span>
                                                    <img src="assets/images/product/{{$sale_product->image}}" alt="Product Image">
                                                    @foreach($all_product->images as $image)
                                                        <img class="image-hover " src="assets/images/product/{{$image->image}}" alt="Product Image">
                                                    @endforeach
                                                </a>
                                                
                                                @if ($sale_product->favorited)
                                                    <a href="{{ route('client.favorite', $sale_product->id) }}" class="add-to-wishlist hintT-left wishlist-added" data-hint="Remove from wishlist">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                @else
                                                    <a href="{{ route('client.favorite', $sale_product->id) }}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                @endif

                                                <div class="product-options">
                                                    <ul class="colors">
                                                        <li style="background-color: #000000;">color one</li>
                                                        <li style="background-color: #c2c2c2;">color one</li>
                                                        <li style="background-color: #b2483c;">color two</li>
                                                    </ul>
                                                    <ul class="sizes">
                                                        <li>Large</li>
                                                        <li>Medium</li>
                                                        <li>Small</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="title"><a href="product-details.html">{{$sale_product->name}}</a></h6>
                                                <span class="price">
                                                    <span class="old">{{number_format($sale_product->price)}} VND</span>
                                                <span class="new">{{number_format($sale_product->discount)}} VND</span>
                                                </span>
                                                <div class="product-buttons">
                                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                                    <a href="{{route('client.add_cart', $sale_product->id)}}" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="{{route('client.home')}}" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- Products End -->
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Product Tab End -->
    
            </div>
        </div>
        <!-- sản phẩm chính End -->
    
        <!-- Instagram Section Start -->
        <div class="section section-padding border-top">
            <div class="container">
    
                <!-- Section Title Start -->
                <div class="section-title2 text-center">
                    <h3 class="sub-title">Follow us on Instagram</h3>
                    <h2 class="title">@h_son_ng</h2>
                </div>
                <!-- Section Title End -->
    
               <div class="section">
                <div class="container">
                    <div class="row row-cols-lg-4 row-cols-sm-2 row-cols-1 learts-mb-n40">
        
                        <div class="col learts-mb-40">
                            <div class="category-banner4">
                                <a href="{{route('client.category' , ['cat' => 1])}}" class="inner">
                                    <div class="image"><img src="assets/images/banner/category/banner-s4-2.webp" alt=""></div>
                                    <div class="content" data-bg-color="#e8f5f2">
                                        <h3 class="title">Đồ nội thất</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
        
                        <div class="col learts-mb-40">
                            <div class="category-banner4">
                                <a href="{{route('client.category' , ['cat' => 2])}}" class="inner">
                                    <div class="image"><img src="assets/images/banner/category/banner-s4-3.webp" alt=""></div>
                                    <div class="content" data-bg-color="#e3e4f5">
                                        <h3 class="title">Đồ chơi</h3>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col learts-mb-40">
                            <div class="category-banner4">
                                <a href="{{route('client.category' , ['cat' => 3])}}" class="inner">
                                    <div class="image"><img src="assets/images/banner/category/banner-s4-1.webp" alt=""></div>
                                    <div class="content" data-bg-color="#f4ede7">
                                        <h3 class="title">Quà tặng</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
        
        
                        <div class="col learts-mb-40">
                            <div class="category-banner4">
                                <a href="{{route('client.category' , ['cat' => 4])}}" class="inner">
                                    <div class="image"><img src="assets/images/banner/category/banner-s4-4.webp" alt=""></div>
                                    <div class="content" data-bg-color="#faf5e5">
                                        <h3 class="title">Đồ trang trí</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
        
                    </div>
                </div>
    
            </div>
        </div>
        <!-- Instagram Section End -->
        <!-- Modal -->
        <div class="quickViewModal modal fade" id="quickViewModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button class="close" data-bs-dismiss="modal">&times;</button>
                    {{-- @foreach ($collection as $item) --}}
                        <div class="row learts-mb-n30">

                            <!-- Product Images Start -->
                            <div class="col-lg-6 col-12 learts-mb-30">
                                <div class="product-images">
                                    <div class="product-gallery-slider-quickview">
                                        <div class="product-zoom" data-image="{{asset('assets/images/product/single/1/product-zoom-1.webp')}}">
                                            <img src="{{asset('assets/images/product/single/1/product-1.webp')}}" alt="">
                                        </div>
                                        {{-- <div class="product-zoom" data-image="{{asset('assets/images/product/single/1/product-zoom-2.webp')}}">
                                            <img src="{{asset('assets/images/product/single/1/product-2.webp')}}" alt="">
                                        </div>
                                        <div class="product-zoom" data-image="{{asset('assets/images/product/single/1/product-zoom-3.webp')}}">
                                            <img src="{{asset('assets/images/product/single/1/product-3.webp')}}" alt="">
                                        </div>
                                        <div class="product-zoom" data-image="{{asset('assets/images/product/single/1/product-zoom-4.webp')}}">
                                            <img src="{{asset('assets/images/product/single/1/product-4.webp')}}" alt="">
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <!-- Product Images End -->

                            <!-- Product Summery Start -->
                            <div class="col-lg-6 col-12 overflow-hidden position-relative learts-mb-30">
                                <div class="product-summery customScroll">
                                    <div class="product-ratings">
                                        <span class="star-rating">
                                        <span class="rating-active" style="width: 100%;">ratings</span>
                                        </span>
                                        <a href="#reviews" class="review-link">(<span class="count">3</span> customer reviews)</a>
                                    </div>
                                    <h3 class="product-title">Cleaning Dustpan & Brush</h3>
                                    <div class="product-price">£38.00 – £50.00</div>
                                    <div class="product-description">
                                        <p>Easy clip-on handle – Hold the brush and dustpan together for storage; the dustpan edge is serrated to allow easy scraping off the hair without entanglement. High-quality bristles – no burr damage, no scratches, thick and durable, comfortable to remove dust and smaller particles.</p>
                                    </div>
                                    <div class="product-variations">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="label"><span>Size</span></td>
                                                    <td class="value">
                                                        <div class="product-sizes">
                                                            <a href="#">Large</a>
                                                            <a href="#">Medium</a>
                                                            <a href="#">Small</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="label"><span>Color</span></td>
                                                    <td class="value">
                                                        <div class="product-colors">
                                                            <a href="#" data-bg-color="#000000"></a>
                                                            <a href="#" data-bg-color="#ffffff"></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="label"><span>Quantity</span></td>
                                                    <td class="value">
                                                        <div class="product-quantity">
                                                            <span class="qty-btn minus"><i class="ti-minus"></i></span>
                                                            <input type="text" class="input-qty" value="1">
                                                            <span class="qty-btn plus"><i class="ti-plus"></i></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="product-buttons">
                                        <a href="#" class="btn btn-icon btn-outline-body btn-hover-dark"><i class="far fa-heart"></i></a>
                                        <a href="#" class="btn btn-dark btn-outline-hover-dark"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                        <a href="#" class="btn btn-icon btn-outline-body btn-hover-dark"><i class="fas fa-random"></i></a>
                                    </div>
                                    <div class="product-brands">
                                        <span class="title">Brands</span>
                                        <div class="brands">
                                            <a href="#"><img src="assets/images/brands/brand-3.webp" alt=""></a>
                                            <a href="#"><img src="assets/images/brands/brand-8.webp" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="product-meta mb-0">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="label"><span>SKU</span></td>
                                                    <td class="value">0404019</td>
                                                </tr>
                                                <tr>
                                                    <td class="label"><span>Category</span></td>
                                                    <td class="value">
                                                        <ul class="product-category">
                                                            <li><a href="#">Kitchen</a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="label"><span>Tags</span></td>
                                                    <td class="value">
                                                        <ul class="product-tags">
                                                            <li><a href="#">handmade</a></li>
                                                            <li><a href="#">learts</a></li>
                                                            <li><a href="#">mug</a></li>
                                                            <li><a href="#">product</a></li>
                                                            <li><a href="#">learts</a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="label"><span>Share on</span></td>
                                                    <td class="va">
                                                        <div class="product-share">
                                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                                            <a href="#"><i class="far fa-envelope"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Summery End -->

                        </div>
                    {{-- @endforeach --}}
                </div>
            </div>
        </div>
@endsection