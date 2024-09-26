@extends('layouts.client')
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
                                <a href="shop.html">Mua ngay !</a>
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
                                <a href="shop.html">Mua ngay !</a>
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
                                <a href="shop.html">Mua ngay !</a>
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
                            <h2 class="title title-icon-right">Sản phẩm ưu đãi trong ngày</h2>
                        </div>
                        <!-- Section Title End -->
                    </div>
                    <div class="col-md col-12 learts-mb-20 d-flex justify-content-lg-end">
                        <div class="countdown2" data-countdown="2024/01/01"></div>
                    </div>
                </div>
    
                <!-- Products Start -->
                <div class="product-carousel">
    
                    <div class="col">
                        <div class="product">
                            <div class="product-thumb">
                                <a href="product-details.html" class="image">
                                    <span class="product-badges">
                                        <span class="onsale">-13%</span>
                                    </span>
                                    <img src="assets/images/product/s270/product-19.webp" alt="Product Image">
                                </a>
                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="product-info">
                                <h6 class="title"><a href="product-details.html">Country Feast Set</a></h6>
                                <span class="price">
                                    <span class="old">$45.00</span>
                                <span class="new">$39.00</span>
                                </span>
                                <div class="product-buttons">
                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                </div>
                                <div class="product-rating">
                                    <span class="rating">
                                        <span class="rating-active" style="width: 100%;">ratings</span>
                                    </span>
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
    
                    <div class="col">
                        <div class="product">
                            <div class="product-thumb">
                                <a href="product-details.html" class="image">
                                    <span class="product-badges">
                                        <span class="onsale">-13%</span>
                                    </span>
                                    <img src="assets/images/product/s270/product-20.webp" alt="Product Image">
                                </a>
                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="product-info">
                                <h6 class="title"><a href="product-details.html">Wooden Condiment Cups</a></h6>
                                <span class="price">
                                    <span class="old">$45.00</span>
                                <span class="new">$39.00</span>
                                </span>
                                <div class="product-buttons">
                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                </div>
                                <div class="product-rating">
                                    <span class="rating">
                                        <span class="rating-active" style="width: 100%;">ratings</span>
                                    </span>
                                </div>
                                <div class="product-stock-status">
                                    <div class="bar">
                                        <div class="progress" style="width: 86.2068%;"></div>
                                    </div>
                                    <span class="sold">Sold: <span>8</span></span>
                                    <span class="available">Available: <span>50</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col">
                        <div class="product">
                            <div class="product-thumb">
                                <a href="product-details.html" class="image">
                                    <span class="product-badges">
                                        <span class="onsale">-13%</span>
                                    </span>
                                    <img src="assets/images/product/s270/product-21.webp" alt="Product Image">
                                </a>
                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="product-info">
                                <h6 class="title"><a href="product-details.html">Pottery Bowl Set</a></h6>
                                <span class="price">
                                    <span class="old">$45.00</span>
                                <span class="new">$39.00</span>
                                </span>
                                <div class="product-buttons">
                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                </div>
                                <div class="product-rating">
                                    <span class="rating">
                                        <span class="rating-active" style="width: 100%;">ratings</span>
                                    </span>
                                </div>
                                <div class="product-stock-status">
                                    <div class="bar">
                                        <div class="progress" style="width: 66.6666%;"></div>
                                    </div>
                                    <span class="sold">Sold: <span>10</span></span>
                                    <span class="available">Available: <span>20</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col">
                        <div class="product">
                            <div class="product-thumb">
                                <a href="product-details.html" class="image">
                                    <span class="product-badges">
                                        <span class="onsale">-13%</span>
                                    </span>
                                    <img src="assets/images/product/s270/product-22.webp" alt="Product Image">
                                    <img class="image-hover " src="assets/images/product/s270/product-1-hover.webp" alt="Product Image">
                                </a>
                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="product-info">
                                <h6 class="title"><a href="product-details.html">Pottery Bowl Set</a></h6>
                                <span class="price">
                                    <span class="old">$45.00</span>
                                <span class="new">$39.00</span>
                                </span>
                                <div class="product-buttons">
                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                </div>
                                <div class="product-rating">
                                    <span class="rating">
                                        <span class="rating-active" style="width: 100%;">ratings</span>
                                    </span>
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
    
                    <div class="col">
                        <div class="product">
                            <div class="product-thumb">
                                <a href="product-details.html" class="image">
                                    <span class="product-badges">
                                        <span class="onsale">-13%</span>
                                    </span>
                                    <img src="assets/images/product/s270/product-1.webp" alt="Product Image">
                                    <img class="image-hover " src="assets/images/product/s270/product-1-hover.webp" alt="Product Image">
                                </a>
                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="product-info">
                                <h6 class="title"><a href="product-details.html">Boho Beard Mug</a></h6>
                                <span class="price">
                                    <span class="old">$45.00</span>
                                <span class="new">$39.00</span>
                                </span>
                                <div class="product-buttons">
                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                </div>
                                <div class="product-rating">
                                    <span class="rating">
                                        <span class="rating-active" style="width: 100%;">ratings</span>
                                    </span>
                                </div>
                                <div class="product-stock-status">
                                    <div class="bar">
                                        <div class="progress" style="width: 40%;"></div>
                                    </div>
                                    <span class="sold">Sold: <span>3</span></span>
                                    <span class="available">Available: <span>2</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col">
                        <div class="product">
                            <div class="product-thumb">
                                <a href="product-details.html" class="image">
                                    <span class="product-badges">
                                        <span class="onsale">-10%</span>
                                    </span>
                                    <img src="assets/images/product/s270/product-24.webp" alt="Product Image">
                                    <img class="image-hover " src="assets/images/product/s270/product-24-hover.webp" alt="Product Image">
                                </a>
                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="product-info">
                                <h6 class="title"><a href="product-details.html">Steel Watering Can</a></h6>
                                <span class="price">
                                    <span class="old">$20.00</span>
                                <span class="new">$18.00</span>
                                </span>
                                <div class="product-buttons">
                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                </div>
                                <div class="product-rating">
                                    <span class="rating">
                                        <span class="rating-active" style="width: 100%;">ratings</span>
                                    </span>
                                </div>
                                <div class="product-stock-status">
                                    <div class="bar">
                                        <div class="progress" style="width: 80%;"></div>
                                    </div>
                                    <span class="sold">Sold: <span>1</span></span>
                                    <span class="available">Available: <span>4</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col">
                        <div class="product">
                            <div class="product-thumb">
                                <a href="product-details.html" class="image">
                                    <span class="product-badges">
                                        <span class="onsale">-20%</span>
                                    </span>
                                    <img src="assets/images/product/s270/product-25.webp" alt="Product Image">
                                    <img class="image-hover " src="assets/images/product/s270/product-25-hover.webp" alt="Product Image">
                                </a>
                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="product-info">
                                <h6 class="title"><a href="product-details.html">Antique Sewing Scissors</a></h6>
                                <span class="price">
                                    <span class="old">$15.00</span>
                                <span class="new">$12.00</span>
                                </span>
                                <div class="product-buttons">
                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                </div>
                                <div class="product-rating">
                                    <span class="rating">
                                        <span class="rating-active" style="width: 80%;">ratings</span>
                                    </span>
                                </div>
                                <div class="product-stock-status">
                                    <div class="bar">
                                        <div class="progress" style="width: 92.68%;"></div>
                                    </div>
                                    <span class="sold">Sold: <span>3</span></span>
                                    <span class="available">Available: <span>38</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col">
                        <div class="product">
                            <div class="product-thumb">
                                <a href="product-details.html" class="image">
                                    <span class="product-badges">
                                        <span class="onsale">-27%</span>
                                    </span>
                                    <img src="assets/images/product/s270/product-4.webp" alt="Product Image">
                                    <img class="image-hover " src="assets/images/product/s270/product-4-hover.webp" alt="Product Image">
                                </a>
                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="product-info">
                                <h6 class="title"><a href="product-details.html">Pizza Plate Tray</a></h6>
                                <span class="price">
                                    <span class="old">$30.00</span>
                                <span class="new">$22.00</span>
                                </span>
                                <div class="product-buttons">
                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                </div>
                                <div class="product-rating">
                                    <span class="rating">
                                        <span class="rating-active" style="width: 80%;">ratings</span>
                                    </span>
                                </div>
                                <div class="product-stock-status">
                                    <div class="bar">
                                        <div class="progress" style="width: 70%;"></div>
                                    </div>
                                    <span class="sold">Sold: <span>6</span></span>
                                    <span class="available">Available: <span>14</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
    
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
                                <a href="#" class="link">Mua ngay !</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col learts-mb-30">
                        <div class="sale-banner8">
                            <img src="assets/images/banner/sale/sale-banner8-2.webp" alt="Sale Banner Image">
                            <div class="content">
                                <h2 class="title">Quà tặng<br>dịp lễ</h2>
                                <a href="#" class="link">Mua ngay !</a>
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
                            <li><a class="active" data-bs-toggle="tab" href="#tab-new-sale">Sản phẩm mới</a></li>
                            <li><a data-bs-toggle="tab" href="#tab-sale-items">Sản phẩm giảm giá</a></li>
                            <li><a data-bs-toggle="tab" href="#tab-best-sellers">Sản phẩm bán chạy</a></li>
                        </ul>
                        <div class="prodyct-tab-content1 tab-content">
                            <div class="tab-pane fade show active" id="tab-new-sale">
                                <!-- Products Start -->
                                <div class="products row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">
    
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <a href="product-details.html" class="image">
                                                    <span class="product-badges">
                                                        <span class="onsale">-13%</span>
                                                    </span>
                                                    <img src="assets/images/product/s328/product-1.webp" alt="Product Image">
                                                    <img class="image-hover " src="assets/images/product/s328/product-1-hover.webp" alt="Product Image">
                                                </a>
                                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="title"><a href="product-details.html">Boho Beard Mug</a></h6>
                                                <span class="price">
                                                    <span class="old">$45.00</span>
                                                <span class="new">$39.00</span>
                                                </span>
                                                <div class="product-buttons">
                                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <a href="product-details.html" class="image">
                                                    <img src="assets/images/product/s328/product-2.webp" alt="Product Image">
                                                    <img class="image-hover " src="assets/images/product/s328/product-2-hover.webp" alt="Product Image">
                                                </a>
                                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="title"><a href="product-details.html">Motorized Tricycle</a></h6>
                                                <span class="price">
                                                    $35.00
                                                </span>
                                                <div class="product-buttons">
                                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <span class="product-badges">
                                                    <span class="hot">hot</span>
                                                </span>
                                                <a href="product-details.html" class="image">
                                                    <img src="assets/images/product/s328/product-3.webp" alt="Product Image">
                                                    <img class="image-hover " src="assets/images/product/s328/product-3-hover.webp" alt="Product Image">
                                                </a>
                                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="title"><a href="product-details.html">Walnut Cutting Board</a></h6>
                                                <span class="price">
                                                    $100.00
                                                </span>
                                                <div class="product-buttons">
                                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <a href="product-details.html" class="image">
                                                    <span class="product-badges">
                                                        <span class="onsale">-27%</span>
                                                    </span>
                                                    <img src="assets/images/product/s328/product-4.webp" alt="Product Image">
                                                    <img class="image-hover " src="assets/images/product/s328/product-4-hover.webp" alt="Product Image">
                                                </a>
                                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="title"><a href="product-details.html">Pizza Plate Tray</a></h6>
                                                <span class="price">
                                                    <span class="old">$30.00</span>
                                                <span class="new">$22.00</span>
                                                </span>
                                                <div class="product-buttons">
                                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <a href="product-details.html" class="image">
                                                    <img src="assets/images/product/s328/product-5.webp" alt="Product Image">
                                                    <img class="image-hover " src="assets/images/product/s328/product-5-hover.webp" alt="Product Image">
                                                </a>
                                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                                <div class="product-options">
                                                    <ul class="colors">
    
                                                        <li style="background-color: #c2c2c2;">color one</li>
                                                        <li style="background-color: #374140;">color two</li>
                                                        <li style="background-color: #8ea1b2;">color three</li>
                                                    </ul>
                                                    <ul class="sizes">
                                                        <li>Large</li>
                                                        <li>Medium</li>
                                                        <li>Small</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="title"><a href="product-details.html">Minimalist Ceramic Pot</a></h6>
                                                <span class="price">
                                                    $120.00
                                                </span>
                                                <div class="product-buttons">
                                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <a href="product-details.html" class="image">
                                                    <img src="assets/images/product/s328/product-6.webp" alt="Product Image">
                                                    <img class="image-hover " src="assets/images/product/s328/product-6-hover.webp" alt="Product Image">
                                                </a>
                                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="title"><a href="product-details.html">Clear Silicate Teapot</a></h6>
                                                <span class="price">
                                                    $140.00
                                                </span>
                                                <div class="product-buttons">
                                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <a href="product-details.html" class="image">
                                                    <span class="product-badges">
                                                        <span class="hot">hot</span>
                                                    </span>
                                                    <img src="assets/images/product/s328/product-7.webp" alt="Product Image">
                                                    <img class="image-hover " src="assets/images/product/s328/product-7-hover.webp" alt="Product Image">
                                                </a>
                                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="title"><a href="product-details.html">Lucky Wooden Elephant</a></h6>
                                                <span class="price">
                                                    $35.00
                                                </span>
                                                <div class="product-buttons">
                                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <a href="product-details.html" class="image">
                                                    <span class="product-badges">
                                                        <span class="outofstock"><i class="far fa-frown"></i></span>
                                                    <span class="hot">hot</span>
                                                    </span>
                                                    <img src="assets/images/product/s328/product-8.webp" alt="Product Image">
                                                    <img class="image-hover " src="assets/images/product/s328/product-8-hover.webp" alt="Product Image">
                                                </a>
                                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                                <div class="product-options">
                                                    <ul class="colors">
                                                        <li style="background-color: #000000;">color one</li>
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
                                                <h6 class="title"><a href="product-details.html">Decorative Christmas Fox</a></h6>
                                                <span class="price">
                                                    $50.00
                                                </span>
                                                <div class="product-buttons">
                                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <a href="product-details.html" class="image">
                                                    <img src="assets/images/product/s328/product-9.webp" alt="Product Image">
                                                    <img class="image-hover " src="assets/images/product/s328/product-9-hover.webp" alt="Product Image">
                                                </a>
                                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="title"><a href="product-details.html">Aluminum Equestrian</a></h6>
                                                <span class="price">
                                                    $100.00
                                                </span>
                                                <div class="product-buttons">
                                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <a href="product-details.html" class="image">
                                                    <img src="assets/images/product/s328/product-10.webp" alt="Product Image">
                                                    <img class="image-hover " src="assets/images/product/s328/product-10-hover.webp" alt="Product Image">
                                                </a>
                                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="title"><a href="product-details.html">Fish Cut Out Set</a></h6>
                                                <span class="price">
                                                    $9.00
                                                </span>
                                                <div class="product-buttons">
                                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
                                <!-- Products End -->
                            </div>
                            <div class="tab-pane fade" id="tab-sale-items">
                                <!-- Products Start -->
                                <div class="products row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">
    
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <a href="product-details.html" class="image">
                                                    <span class="product-badges">
                                                        <span class="onsale">-27%</span>
                                                    </span>
                                                    <img src="assets/images/product/s328/product-4.webp" alt="Product Image">
                                                    <img class="image-hover " src="assets/images/product/s328/product-4-hover.webp" alt="Product Image">
                                                </a>
                                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="title"><a href="product-details.html">Pizza Plate Tray</a></h6>
                                                <span class="price">
                                                    <span class="old">$30.00</span>
                                                <span class="new">$22.00</span>
                                                </span>
                                                <div class="product-buttons">
                                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <a href="product-details.html" class="image">
                                                    <img src="assets/images/product/s328/product-5.webp" alt="Product Image">
                                                    <img class="image-hover " src="assets/images/product/s328/product-5-hover.webp" alt="Product Image">
                                                </a>
                                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                                <div class="product-options">
                                                    <ul class="colors">
                                                        <li style="background-color: #c2c2c2;">color one</li>
                                                        <li style="background-color: #374140;">color two</li>
                                                        <li style="background-color: #8ea1b2;">color three</li>
                                                    </ul>
                                                    <ul class="sizes">
                                                        <li>Large</li>
                                                        <li>Medium</li>
                                                        <li>Small</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="title"><a href="product-details.html">Minimalist Ceramic Pot</a></h6>
                                                <span class="price">
                                                    $120.00
                                                </span>
                                                <div class="product-buttons">
                                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <a href="product-details.html" class="image">
                                                    <img src="assets/images/product/s328/product-6.webp" alt="Product Image">
                                                    <img class="image-hover " src="assets/images/product/s328/product-6-hover.webp" alt="Product Image">
                                                </a>
                                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="title"><a href="product-details.html">Clear Silicate Teapot</a></h6>
                                                <span class="price">
                                                    $140.00
                                                </span>
                                                <div class="product-buttons">
                                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <a href="product-details.html" class="image">
                                                    <span class="product-badges">
                                                        <span class="hot">hot</span>
                                                    </span>
                                                    <img src="assets/images/product/s328/product-7.webp" alt="Product Image">
                                                    <img class="image-hover " src="assets/images/product/s328/product-7-hover.webp" alt="Product Image">
                                                </a>
                                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="title"><a href="product-details.html">Lucky Wooden Elephant</a></h6>
                                                <span class="price">
                                                    $35.00
                                                </span>
                                                <div class="product-buttons">
                                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <a href="product-details.html" class="image">
                                                    <span class="product-badges">
                                                        <span class="outofstock"><i class="far fa-frown"></i></span>
                                                    <span class="hot">hot</span>
                                                    </span>
                                                    <img src="assets/images/product/s328/product-8.webp" alt="Product Image">
                                                    <img class="image-hover " src="assets/images/product/s328/product-8-hover.webp" alt="Product Image">
                                                </a>
                                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                                <div class="product-options">
                                                    <ul class="colors">
                                                        <li style="background-color: #000000;">color one</li>
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
                                                <h6 class="title"><a href="product-details.html">Decorative Christmas Fox</a></h6>
                                                <span class="price">
                                                    $50.00
                                                </span>
                                                <div class="product-buttons">
                                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <a href="product-details.html" class="image">
                                                    <img src="assets/images/product/s328/product-9.webp" alt="Product Image">
                                                    <img class="image-hover " src="assets/images/product/s328/product-9-hover.webp" alt="Product Image">
                                                </a>
                                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="title"><a href="product-details.html">Aluminum Equestrian</a></h6>
                                                <span class="price">
                                                    $100.00
                                                </span>
                                                <div class="product-buttons">
                                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <a href="product-details.html" class="image">
                                                    <img src="assets/images/product/s328/product-10.webp" alt="Product Image">
                                                    <img class="image-hover " src="assets/images/product/s328/product-10-hover.webp" alt="Product Image">
                                                </a>
                                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="title"><a href="product-details.html">Fish Cut Out Set</a></h6>
                                                <span class="price">
                                                    $9.00
                                                </span>
                                                <div class="product-buttons">
                                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <a href="product-details.html" class="image">
                                                    <span class="product-badges">
                                                        <span class="onsale">-13%</span>
                                                    </span>
                                                    <img src="assets/images/product/s328/product-1.webp" alt="Product Image">
                                                    <img class="image-hover " src="assets/images/product/s328/product-1-hover.webp" alt="Product Image">
                                                </a>
                                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="title"><a href="product-details.html">Boho Beard Mug</a></h6>
                                                <span class="price">
                                                    <span class="old">$45.00</span>
                                                <span class="new">$39.00</span>
                                                </span>
                                                <div class="product-buttons">
                                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <a href="product-details.html" class="image">
                                                    <img src="assets/images/product/s328/product-2.webp" alt="Product Image">
                                                    <img class="image-hover " src="assets/images/product/s328/product-2-hover.webp" alt="Product Image">
                                                </a>
                                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="title"><a href="product-details.html">Motorized Tricycle</a></h6>
                                                <span class="price">
                                                    $35.00
                                                </span>
                                                <div class="product-buttons">
                                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <span class="product-badges">
                                                    <span class="hot">hot</span>
                                                </span>
                                                <a href="product-details.html" class="image">
                                                    <img src="assets/images/product/s328/product-3.webp" alt="Product Image">
                                                    <img class="image-hover " src="assets/images/product/s328/product-3-hover.webp" alt="Product Image">
                                                </a>
                                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="title"><a href="product-details.html">Walnut Cutting Board</a></h6>
                                                <span class="price">
                                                    $100.00
                                                </span>
                                                <div class="product-buttons">
                                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
                                <!-- Products End -->
                            </div>
                            <div class="tab-pane fade" id="tab-best-sellers">
                                <!-- Products Start -->
                                <div class="products row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">
    
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <a href="product-details.html" class="image">
                                                    <img src="assets/images/product/s328/product-6.webp" alt="Product Image">
                                                    <img class="image-hover " src="assets/images/product/s328/product-6-hover.webp" alt="Product Image">
                                                </a>
                                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="title"><a href="product-details.html">Clear Silicate Teapot</a></h6>
                                                <span class="price">
                                                    $140.00
                                                </span>
                                                <div class="product-buttons">
                                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <a href="product-details.html" class="image">
                                                    <span class="product-badges">
                                                        <span class="hot">hot</span>
                                                    </span>
                                                    <img src="assets/images/product/s328/product-7.webp" alt="Product Image">
                                                    <img class="image-hover " src="assets/images/product/s328/product-7-hover.webp" alt="Product Image">
                                                </a>
                                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="title"><a href="product-details.html">Lucky Wooden Elephant</a></h6>
                                                <span class="price">
                                                    $35.00
                                                </span>
                                                <div class="product-buttons">
                                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <a href="product-details.html" class="image">
                                                    <span class="product-badges">
                                                        <span class="outofstock"><i class="far fa-frown"></i></span>
                                                    <span class="hot">hot</span>
                                                    </span>
                                                    <img src="assets/images/product/s328/product-8.webp" alt="Product Image">
                                                    <img class="image-hover " src="assets/images/product/s328/product-8-hover.webp" alt="Product Image">
                                                </a>
                                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                                <div class="product-options">
                                                    <ul class="colors">
                                                        <li style="background-color: #000000;">color one</li>
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
                                                <h6 class="title"><a href="product-details.html">Decorative Christmas Fox</a></h6>
                                                <span class="price">
                                                    $50.00
                                                </span>
                                                <div class="product-buttons">
                                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <a href="product-details.html" class="image">
                                                    <img src="assets/images/product/s328/product-9.webp" alt="Product Image">
                                                    <img class="image-hover " src="assets/images/product/s328/product-9-hover.webp" alt="Product Image">
                                                </a>
                                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="title"><a href="product-details.html">Aluminum Equestrian</a></h6>
                                                <span class="price">
                                                    $100.00
                                                </span>
                                                <div class="product-buttons">
                                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <a href="product-details.html" class="image">
                                                    <img src="assets/images/product/s328/product-10.webp" alt="Product Image">
                                                    <img class="image-hover " src="assets/images/product/s328/product-10-hover.webp" alt="Product Image">
                                                </a>
                                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="title"><a href="product-details.html">Fish Cut Out Set</a></h6>
                                                <span class="price">
                                                    $9.00
                                                </span>
                                                <div class="product-buttons">
                                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <a href="product-details.html" class="image">
                                                    <span class="product-badges">
                                                        <span class="onsale">-13%</span>
                                                    </span>
                                                    <img src="assets/images/product/s328/product-1.webp" alt="Product Image">
                                                    <img class="image-hover " src="assets/images/product/s328/product-1-hover.webp" alt="Product Image">
                                                </a>
                                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="title"><a href="product-details.html">Boho Beard Mug</a></h6>
                                                <span class="price">
                                                    <span class="old">$45.00</span>
                                                <span class="new">$39.00</span>
                                                </span>
                                                <div class="product-buttons">
                                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <a href="product-details.html" class="image">
                                                    <img src="assets/images/product/s328/product-2.webp" alt="Product Image">
                                                    <img class="image-hover " src="assets/images/product/s328/product-2-hover.webp" alt="Product Image">
                                                </a>
                                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="title"><a href="product-details.html">Motorized Tricycle</a></h6>
                                                <span class="price">
                                                    $35.00
                                                </span>
                                                <div class="product-buttons">
                                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <span class="product-badges">
                                                    <span class="hot">hot</span>
                                                </span>
                                                <a href="product-details.html" class="image">
                                                    <img src="assets/images/product/s328/product-3.webp" alt="Product Image">
                                                    <img class="image-hover " src="assets/images/product/s328/product-3-hover.webp" alt="Product Image">
                                                </a>
                                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="title"><a href="product-details.html">Walnut Cutting Board</a></h6>
                                                <span class="price">
                                                    $100.00
                                                </span>
                                                <div class="product-buttons">
                                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <a href="product-details.html" class="image">
                                                    <span class="product-badges">
                                                        <span class="onsale">-27%</span>
                                                    </span>
                                                    <img src="assets/images/product/s328/product-4.webp" alt="Product Image">
                                                    <img class="image-hover " src="assets/images/product/s328/product-4-hover.webp" alt="Product Image">
                                                </a>
                                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="title"><a href="product-details.html">Pizza Plate Tray</a></h6>
                                                <span class="price">
                                                    <span class="old">$30.00</span>
                                                <span class="new">$22.00</span>
                                                </span>
                                                <div class="product-buttons">
                                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <a href="product-details.html" class="image">
                                                    <img src="assets/images/product/s328/product-5.webp" alt="Product Image">
                                                    <img class="image-hover " src="assets/images/product/s328/product-5-hover.webp" alt="Product Image">
                                                </a>
                                                <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                                <div class="product-options">
                                                    <ul class="colors">
    
                                                        <li style="background-color: #c2c2c2;">color one</li>
                                                        <li style="background-color: #374140;">color two</li>
                                                        <li style="background-color: #8ea1b2;">color three</li>
                                                    </ul>
                                                    <ul class="sizes">
                                                        <li>Large</li>
                                                        <li>Medium</li>
                                                        <li>Small</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="title"><a href="product-details.html">Minimalist Ceramic Pot</a></h6>
                                                <span class="price">
                                                    $120.00
                                                </span>
                                                <div class="product-buttons">
                                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
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
                            <a href="shop.html" class="inner">
                                <div class="image"><img src="assets/images/banner/category/banner-s4-1.webp" alt=""></div>
                                <div class="content" data-bg-color="#f4ede7">
                                    <h3 class="title">Quà tặng</h3>
                                </div>
                            </a>
                        </div>
                    </div>
    
                    <div class="col learts-mb-40">
                        <div class="category-banner4">
                            <a href="shop.html" class="inner">
                                <div class="image"><img src="assets/images/banner/category/banner-s4-2.webp" alt=""></div>
                                <div class="content" data-bg-color="#e8f5f2">
                                    <h3 class="title">Trang trí nhà</h3>
                                </div>
                            </a>
                        </div>
                    </div>
    
                    <div class="col learts-mb-40">
                        <div class="category-banner4">
                            <a href="shop.html" class="inner">
                                <div class="image"><img src="assets/images/banner/category/banner-s4-3.webp" alt=""></div>
                                <div class="content" data-bg-color="#e3e4f5">
                                    <h3 class="title">Đồ chơi</h3>
                                </div>
                            </a>
                        </div>
                    </div>
    
                    <div class="col learts-mb-40">
                        <div class="category-banner4">
                            <a href="shop.html" class="inner">
                                <div class="image"><img src="assets/images/banner/category/banner-s4-4.webp" alt=""></div>
                                <div class="content" data-bg-color="#faf5e5">
                                    <h3 class="title">Nội thất</h3>
                                </div>
                            </a>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    
            </div>
        </div>
        <!-- Instagram Section End -->
@endsection