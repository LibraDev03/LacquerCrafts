@extends('layouts.client.client')
@section('title' ,'LacquerCraft Home')
@section('main')
     <!-- Page Title/Header Start -->
     <div class="page-title-section section" data-bg-image="{{asset('assets/images/bg/page-title-1.webp')}}">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title">
                        <h1 class="title">Cửa hàng</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('client.home')}}">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Tất cả sản phẩm</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->

    <!-- Shop Products Section Start -->
    <div class="section section-padding pt-0">

        <!-- Shop Toolbar Start -->
        <div class="shop-toolbar section-fluid border-bottom">
            <div class="container">
                <div class="row learts-mb-n20">

                    <!-- Isotop Filter Start -->
                    {{-- <div class="col-md col-12 align-self-center learts-mb-20">
                        <div class="isotope-filter shop-product-filter" data-target="#shop-products">
                            <button class="active" data-filter="*">Tất cả</button>
                            <button data-filter=".featured">Sản phẩm Hot</button>
                            <button data-filter=".new">Sản phẩm mới</button>
                            <button data-filter=".sales">Sản phẩm giảm giá</button>
                        </div>
                    </div> --}}
                    <!-- Isotop Filter End -->

                    <div class="col-md-auto col-12 learts-mb-20" style="text-align: center">
                        <ul class="shop-toolbar-controls" style="text-align: center">

                            <li>
                                <div class="product-sorting">
                                    <select class="nice-select">
                                        <option value="menu_order" selected="selected">Sắp xếp mặc định</option>
                                        <option value="popularity">Sắp xếp theo độ phổ biến</option>
                                        <option value="rating">Sắp xếp mới nhất</option>
                                        <option value="date">Sort by latest</option>
                                        <option value="price">Sắp xếp theo giá : thấp đến cao</option>
                                        <option value="price-desc">Sắp xếp theo giá : cao đến thấp</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="product-column-toggle d-none d-xl-flex">
                                    <button class="toggle hintT-top" data-hint="5 Column" data-column="5"><i class="ti-layout-grid4-alt"></i></button>
                                    <button class="toggle active hintT-top" data-hint="4 Column" data-column="4"><i class="ti-layout-grid3-alt"></i></button>
                                    <button class="toggle hintT-top" data-hint="3 Column" data-column="3"><i class="ti-layout-grid2-alt"></i></button>
                                </div>
                            </li>
                            <li>
                                <a class="product-filter-toggle" href="#product-filter">BỘ lọc</a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <!-- Shop Toolbar End -->

        <!-- Product Filter Start -->
        <div id="product-filter" class="product-filter section-fluid bg-light">
            <div class="container-fluid">
                <div class="row row-cols-lg-5 row-cols-md-3 row-cols-sm-2 row-cols-1 learts-mb-n30">

                    <!-- Sort by Start -->
                    <div class="col learts-mb-30">
                        <h3 class="widget-title product-filter-widget-title">Sắp xếp theo</h3>
                        <ul class="widget-list product-filter-widget customScroll">
                            <li><a href="#">Độ nổi tiếng</a></li>
                            <li><a href="#">Theo đánh giá</a></li>
                            <li><a href="#">Mới nhất</a></li>
                            <li><a href="#">Giá : thấp đến cao</a></li>
                            <li><a href="#">Giá : cao đến thấp</a></li>
                        </ul>
                    </div>
                    <!-- Sort by End -->

                    <!-- Price filter Start -->
                    <div class="col learts-mb-30">
                        <h3 class="widget-title product-filter-widget-title">Lọc theo giá</h3>
                        <ul class="widget-list product-filter-widget customScroll">
                            <li> <a href="#">Tất cả</a></li>
                            <li> <a href="#"><span class="amount"><span class="cur-symbol">£</span>0.00</span> - <span class="amount"><span class="cur-symbol">£</span>80.00</span></a></li>
                            <li> <a href="#"><span class="amount"><span class="cur-symbol">£</span>80.00</span> - <span class="amount"><span class="cur-symbol">£</span>160.00</span></a></li>
                            <li> <a href="#"><span class="amount"><span class="cur-symbol">£</span>160.00</span> - <span class="amount"><span class="cur-symbol">£</span>240.00</span></a></li>
                            <li> <a href="#"><span class="amount"><span class="cur-symbol">£</span>240.00</span> - <span class="amount"><span class="cur-symbol">£</span>320.00</span></a></li>
                            <li> <a href="#"><span class="amount"><span class="cur-symbol">£</span>320.00</span> +</a></li>
                        </ul>
                    </div>
                    <!-- Price filter End -->

                    <!-- Categories Start -->
                    <div class="col learts-mb-30">
                        <h3 class="widget-title product-filter-widget-title">Categories</h3>
                        <ul class="widget-list product-filter-widget customScroll">
                            <li><a href="#">Gift ideas</a> <span class="count">16</span></li>
                            <li><a href="#">Home Decor</a> <span class="count">16</span></li>
                            <li><a href="#">Kids &amp; Babies</a> <span class="count">6</span></li>
                            <li><a href="#">Kitchen</a> <span class="count">15</span></li>
                            <li><a href="#">Kniting &amp; Sewing</a> <span class="count">4</span></li>
                            <li><a href="#">Pots</a> <span class="count">4</span></li>
                            <li><a href="#">Toys</a> <span class="count">6</span></li>
                        </ul>
                    </div>
                    <!-- Categories End -->

                    <!-- Filters by colors Start -->
                    <div class="col learts-mb-30">
                        <h3 class="widget-title product-filter-widget-title">Filters by colors</h3>
                        <ul class="widget-colors product-filter-widget customScroll">
                            <li><a href="#" class="hintT-top" data-hint="Black"><span data-bg-color="#000000">Black</span></a></li>
                            <li><a href="#" class="hintT-top" data-hint="White"><span data-bg-color="#FFFFFF">White</span></a></li>
                            <li><a href="#" class="hintT-top" data-hint="Dark Red"><span data-bg-color="#b2483c">Dark Red</span></a></li>
                            <li><a href="#" class="hintT-top" data-hint="Flaxen"><span data-bg-color="#d5b85a">Flaxen</span></a></li>
                            <li><a href="#" class="hintT-top" data-hint="Pine"><span data-bg-color="#01796f">Pine</span></a></li>
                            <li><a href="#" class="hintT-top" data-hint="Tortilla"><span data-bg-color="#997950">Tortilla</span></a></li>
                        </ul>
                    </div>
                    <!-- Filters by colors End -->

                    <!-- Brands Start -->
                    <div class="col learts-mb-30">
                        <h3 class="widget-title product-filter-widget-title">Brands</h3>
                        <ul class="widget-list product-filter-widget customScroll">
                            <li><a href="#">Alexander</a> <span class="count">(2)</span></li>
                            <li><a href="#">Carmella</a> <span class="count">(4)</span></li>
                            <li><a href="#">Danielle</a> <span class="count">(7)</span></li>
                            <li><a href="#">Diana Day</a> <span class="count">(13)</span></li>
                            <li><a href="#">Emilia</a> <span class="count">(2)</span></li>
                            <li><a href="#">Gasmine</a> <span class="count">(15)</span></li>
                            <li><a href="#">Jack &amp; Ella</a> <span class="count">(7)</span></li>
                            <li><a href="#">Juliette</a> <span class="count">(11)</span></li>
                        </ul>
                    </div>
                    <!-- Brands End -->

                </div>
            </div>
        </div>
        <!-- Product Filter End -->

        <div class="section section-fluid learts-mt-70">
            <div class="container">
                <div class="row learts-mb-n50">

                    <div class="col-lg-9 col-12 learts-mb-50">
                        
                        <!-- Products Start -->
                        
                        {{-- @if($data->isEmpty())
                            <p>Không tìm thấy sản phẩm nào!</p>
                        @else
                            <div class="product-list">
                                @foreach($data as $data)
                                    <div class="product-item">
                                        <h5>{{ $data->name }}</h5>
                                    </div>
                                @endforeach
                            </div>
                        @endif --}}
                        
                        <div id="shop-products" class="products isotope-grid row row-cols-xl-4 row-cols-md-3 row-cols-sm-2 row-cols-1">

                            <div class="grid-sizer col-1"></div>

                            @foreach ($all_product as $all_product)
                            <div class="grid-item col featured">
                                <div class="product">
                                    <div class="product-thumb">
                                        <a href="{{route('client.product', $all_product->id)}}" class="image">
                                            <span class="product-badges">
                                                <span class="onsale">-27%</span>
                                            <span class="hot">hot</span>
                                            </span>
                                            <img src="{{asset('assets/images/product/' . $all_product->image)}}" alt="Product Image">
                                            {{-- <img class="image-hover " src="{{asset('assets/images/product/s328/product-8-hover.webp')}}" alt="Product Image"> --}}
                                        </a>
                                        <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
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
                                        <h6 class="title"><a href="product-details.html">{{$all_product->name}}</a></h6>
                                        <span class="price">
                                            <span class="old">{{number_format($all_product->price)}} VND</span>
                                        <span class="new">{{number_format($all_product->discount)}} VND</span>
                                        </span>
                                        <div class="product-buttons">
                                            <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                            <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                            <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <!-- Products End -->

                        <div class="text-center learts-mt-70">
                            <a href="#" class="btn btn-dark btn-outline-hover-dark"><i class="ti-plus"></i>Nhiều hơn</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-12 learts-mb-10">

                        <!-- Search Start -->
                        <div class="single-widget learts-mb-40">
                            <div class="widget-search">
                                <form action="#">
                                    <input type="text" placeholder="Tìm kiếm sản phẩm.......">
                                    <button><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- Search End -->

                        <!-- Categories Start -->
                        <div class="single-widget learts-mb-40">
                            <h3 class="widget-title product-filter-widget-title">Danh mục các sản phẩm</h3>
                            <ul class="widget-list">
                                @foreach ($cate as $cate)
                                <li><a href="{{route('client.category', $cate->id)}}">{{$cate->name}}</a> <span class="count">{{$cate->products->count()}}</span></li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Categories End -->

                        <!-- Price Range Start -->
                        <div class="single-widget learts-mb-40">
                            <h3 class="widget-title product-filter-widget-title">Lọc theo giá cả</h3>
                            <div class="widget-price-range">
                                <input class="range-slider" type="text" data-min="0" data-max="350" data-from="0" data-to="350" />
                            </div>
                        </div>
                        <!-- Price Range End -->

                        <!-- List Product Widget Start -->
                        <div class="single-widget learts-mb-40">
                            <h3 class="widget-title product-filter-widget-title">Các sản phẩm mới nhất</h3>
                            <ul class="widget-products">
                                @foreach ($new_product as $new_product)
                                <li class="product">
                                    <div class="thumbnail">
                                        <a href="product-details.html"><img src="{{ asset('assets/images/product/' . $new_product->image) }}" alt="List product"></a>
                                    </div>
                                    <div class="content">
                                        <h6 class="title"><a href="product-details.html">{{$new_product->name}}</a></h6>
                                        <span class="price">
                                            {{number_format($new_product->price)}} VND
                                        </span>
                                        <div class="ratting">
                                            <span class="rate" style="width: 80%;"></span>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- List Product Widget End -->

                        <!-- Tags Start -->
                        <div class="single-widget learts-mb-40">
                            <h3 class="widget-title product-filter-widget-title">Mỹ nghệ Việt! Cho người Việt! </h3>
                        </div>
                        <!-- Tags End -->

                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- Shop Products Section End -->
@endsection