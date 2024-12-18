<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/learts/learts/index-8.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Sep 2024 08:57:24 GMT -->
<head>
    <base href="/">
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Learts - @yield('title')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.webp')}}">

    <!-- CSS
	============================================ -->

    {{-- thêm font chữ cho tiếng việt --}}
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap')}}" rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/customFonts.css')}}">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/ion.rangeSlider.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/photoswipe.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/photoswipe-default-skin.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/slick.css')}}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/vendor.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/plugins.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}">

    {{-- toast cdn cho he thong --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css" integrity="sha512-wJgJNTBBkLit7ymC6vvzM1EcSWeM9mmOu+1USHaRBbHkm6W9EgM0HY27+UtUaprntaYQJF75rc8gjxllKs5OIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <!-- Topbar Section Start -->
    <div class="topbar-section section border-bottom">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-auto col-12">
                    <p class="text-center text-md-left my-2">Miễn phí giao hàng cho đơn hàng từ 999.999₫</p>
                </div>
                <div class="col-auto d-none d-md-block">
                    <div class="topbar-menu d-flex flex-row-reverse">
                        <ul class="header-lan-curr">
                            <li><a href="{{route('client.home')}}">VIETNAM</a>
                                <ul class="curr-lan-sub-menu">
                                    <li><a href="{{route('client.home')}}">Français</a></li>
                                    <li><a href="{{route('client.home')}}">ENGLISH</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('client.home')}}">VND</a>
                                <ul class="curr-lan-sub-menu">
                                    <li><a href="{{route('client.home')}}">CNY</a></li>
                                    <li><a href="{{route('client.home')}}">USD</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <a href="https://www.google.com/maps/place/th%C3%B4n+B%E1%BB%91i+Kh%C3%AA,+Chuy%C3%AAn+M%E1%BB%B9,+Ph%C3%BA+Xuy%C3%AAn,+H%C3%A0+N%E1%BB%99i/@20.7194993,105.8652193,576m/data=!3m1!1e3!4m6!3m5!1s0x3135ca05a8d1a09f:0x3106ad345ccb120f!8m2!3d20.719873!4d105.8664614!16s%2Fg%2F1hhw9qy9x?hl=vi-VN&entry=ttu&g_ep=EgoyMDI0MDkxOC4xIKXMDSoASAFQAw%3D%3D">
                                    <i class="fa fa-map-marker-alt"></i>vị trí cửa hàng
                                </a>
                            </li>
                            <li><a href="{{route('client.home')}}"><i class="fa fa-truck"></i>Trạng thái đơn hàng</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar Section End -->
    <!-- Header Section Start -->
    <div class="header-section section section-fluid bg-white d-none d-xl-block">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col-auto">
                    <div class="header-logo">
                        <a href="{{route('admin.dashboard')}}"><img src="{{asset('assets/images/logo/logo-2.webp')}}" alt="Learts Logo"></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Search Start -->
                <div class="col-auto me-auto">
                    <nav class="site-main-menu site-main-menu-left menu-height-100 justify-content-center">
                        <ul>
                            <li class=""><a href="{{route('client.home')}}"><span class="menu-text">Trang chủ</span></a></li>
                            <li class="has-children"><a href="{{route('client.shop')}}"><span class="menu-text">Cửa hàng</span></a>
                                <ul class="sub-menu ">
                                    <li>
                                        <h6><b><a href="{{route('client.shop')}}" class="-title"><span class="menu-text">Các danh mục sản phẩm có trong cửa hàng</span></a></b></h6>
                                        <ul style="list-style: none; padding: 0;margin: 0;">
                                            @foreach ($cate as $cate)
                                            <li><a href="{{route('client.category', $cate->id)}}"><span class="menu-text">{{$cate->name}}</span></a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            {{-- project --}}
                            {{-- <li class="has-children"><a href="#"><span class="menu-text">Project</span></a>
                                <ul class="sub-menu">
                                    <li><a href="portfolio-3-columns.html"><span class="menu-text">Portfolio 3 Columns</span></a></li>
                                    <li><a href="portfolio-4-columns.html"><span class="menu-text">Portfolio 4 Columns</span></a></li>
                                    <li><a href="portfolio-5-columns.html"><span class="menu-text">Portfolio 5 Columns</span></a></li>
                                    <li><a href="portfolio-details.html"><span class="menu-text">Portfolio Details</span></a></li>
                                </ul>
                            </li> --}}
                            {{-- element --}}
                            {{-- <li class="has-children"><a href="#"><span class="menu-text">Elements</span></a>
                                <ul class="sub-menu mega-menu">
                                    <li>
                                        <a href="#" class="mega-menu-title"><span class="menu-text">Column One</span></a>
                                        <ul>
                                            <li><a href="elements-products.html"><span class="menu-text">Product Styles</span></a></li>
                                            <li><a href="elements-products-tabs.html"><span class="menu-text">Product Tabs</span></a></li>
                                            <li><a href="elements-product-sale-banner.html"><span class="menu-text">Product & Sale Banner</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="mega-menu-title"><span class="menu-text">Column Two</span></a>
                                        <ul>
                                            <li><a href="elements-category-banner.html"><span class="menu-text">Category Banner</span></a></li>
                                            <li><a href="elements-team.html"><span class="menu-text">Team Member</span></a></li>
                                            <li><a href="elements-testimonials.html"><span class="menu-text">Testimonials</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="mega-menu-title"><span class="menu-text">Column Three</span></a>
                                        <ul>
                                            <li><a href="elements-instagram.html"><span class="menu-text">Instagram</span></a></li>
                                            <li><a href="elements-map.html"><span class="menu-text">Google Map</span></a></li>
                                            <li><a href="elements-icon-box.html"><span class="menu-text">Icon Box</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="mega-menu-title"><span class="menu-text">Column Four</span></a>
                                        <ul>
                                            <li><a href="elements-buttons.html"><span class="menu-text">Buttons</span></a></li>
                                            <li><a href="elements-faq.html"><span class="menu-text">FAQs / Toggles</span></a></li>
                                            <li><a href="elements-brands.html"><span class="menu-text">Brands</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}
                            <li class=""><a href="{{route('client.blog')}}"><span class="menu-text">bài viết</span></a></li>
                            <li class=""><a href="{{route('client.about')}}"><span class="menu-text">Về chúng tôi</span></a></li>
                            <li class="has-children"><a href="{{route('client.contact')}}"><span class="menu-text">Liên lạc</span></a>
                                <ul class="sub-menu">
                                    <li><a href="https://www.facebook.com/profile.php?id=100010376408025"><i style="margin-right: 20px" class="fab fa-facebook-f"></i>  <span class="menu-text">facebook</span></a></li>
                                    <li><a href="https://www.instagram.com/h_son_ng/"><i style="margin-right: 20px" class="fab fa-instagram"></i>  <span class="menu-text">Instagram</span></a></li>
                                    <li><a href="https://www.tiktok.com/@h_son_ng?lang=vi-VN"><i style="margin-right: 20px" class="fab fa-tiktok"></i>  <span class="menu-text">Tiktok</span></a></li>
                                    <li><a href="https://www.youtube.com/@SonNguyen-eu3zd"><i style="margin-right: 20px" class="fab fa-youtube"></i>  <span class="menu-text">youtube</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Search End -->

                <!-- Search Start -->
                <div class="col-auto d-none d-xl-block " style="margin-right: 30px">
                    <div class="widget-search">
                        <form action="{{route('client.search')}}" method="GET">
                            <input name="key" type="text" placeholder="Tìm kiếm sản phẩm.....">
                            <button><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
                {{-- <div class="">
                    <div class="header2-search">
                        <form action="{{route('client.search')}}" method="GET">
                            <input name="key" type="text" placeholder="Tìm kiếm sản">
                            <button class="btn"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div> --}}
                <!-- Search End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        @if (Auth::check())
                        <div class="header-login">
                            <a href="{{route('authen.myaccount')}}"><i class="far fa-user"></i></a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="{{route('authen.profile')}}">Hồ sơ cá nhân</a></li>
                                    <li><a href="{{route('authen.change_password')}}">Đổi mật khẩu</a></li>
                                    {{-- <li><a href="{{route('authen.register')}}">Đăng kí</a></li> --}}
                                    <li><a href="{{route('authen.logout')}}">Đăng xuất </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-wishlist">
                            <a href="#offcanvas-wishlist" class="offcanvas-toggle">
                                <span class="wishlist-count">{{$wishlist->count()}}</span><i class="far fa-heart"></i>
                            </a>
                        </div>
                        <div class="header-cart">
                            <a href="#offcanvas-cart" class="offcanvas-toggle">
                                <span class="cart-count">{{$cart->sum('quantity')}}</span><i class="fas fa-shopping-cart"></i>
                            </a>
                        </div>
                        @else    
                            <div class="header-login me-5">
                                <a href="{{route('authen.login')}}"><i class="far fa-user"></i></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="{{route('authen.register')}}">Đăng kí</a></li>
                                        <li><a href="{{route('authen.login')}}">Đăng nhập </a></li>
                                    </ul>
                                </div>
                            </div>
                            
                        @endif
                    </div>
                </div>
                
                {{-- sửa hover cho user start --}}
                <style>
                    .header-login {
                        position: relative;
                    }

                    .header-login .dropdown-menu {
                        display: none;
                        position: absolute;
                        top: 100%;
                        left: -65px;
                        background-color: #fff;
                        padding: 10px;
                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                        border-radius: 0; /* Đặt border-radius thành 0 để không có bo tròn */
                        z-index: 1000;
                    }

                    .header-login:hover .dropdown-menu {
                        display: block;
                    }

                    .header-login .dropdown-menu ul {
                        list-style: none;
                        margin: 0;
                        padding: 0;
                    }

                    .header-login .dropdown-menu ul li {
                        margin: 5px 0;
                    }

                    .header-login .dropdown-menu ul li a {
                        color: #333;
                        text-decoration: none;
                        padding: 5px 10px;
                        display: block;
                    }

                    .header-login .dropdown-menu ul li a:hover {
                        background-color:beige;
                        color: #fff;
                        border-radius: 0; /* Đặt border-radius thành 0 để không có bo tròn */
                    }

                </style>
                {{-- sửa hover cho icon user end --}}


                <!-- Header Tools End -->

            </div>
        </div>

    </div>
    <!-- Header Section End -->

    <!-- Header Sticky Section Start -->
    <div class="sticky-header section bg-white section-fluid d-none d-xl-block">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col-auto">
                    <div class="header-logo">
                        <a href="{{route('admin.dashboard')}}"><img src="{{asset('assets/images/logo/logo-2.webp')}}" alt="Learts Logo"></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Search Start -->
                <div class="col-auto me-auto">
                    <nav class="site-main-menu site-main-menu-left menu-height-100 justify-content-center">
                        <ul>
                            <li class=""><a href="{{route('client.home')}}"><span class="menu-text">Trang chủ</span></a></li>
                            <li class="has-children"><a href="{{route('client.shop')}}"><span class="menu-text">Cửa hàng</span></a>
                                <ul class="sub-menu ">
                                    <li>
                                        <h6><b><a href="{{route('client.shop')}}" class="-title"><span class="menu-text">Các danh mục sản phẩm có trong cửa hàng</span></a></b></h6>
                                        <ul style="list-style: none; padding: 0;margin: 0;">
                                            @foreach ($cate2 as $cate)
                                            <li><a href="{{route('client.category', $cate->id)}}"><span class="menu-text">{{$cate->name}}</span></a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            {{-- project --}}
                            {{-- <li class="has-children"><a href="#"><span class="menu-text">Project</span></a>
                                <ul class="sub-menu">
                                    <li><a href="portfolio-3-columns.html"><span class="menu-text">Portfolio 3 Columns</span></a></li>
                                    <li><a href="portfolio-4-columns.html"><span class="menu-text">Portfolio 4 Columns</span></a></li>
                                    <li><a href="portfolio-5-columns.html"><span class="menu-text">Portfolio 5 Columns</span></a></li>
                                    <li><a href="portfolio-details.html"><span class="menu-text">Portfolio Details</span></a></li>
                                </ul>
                            </li> --}}
                            {{-- element --}}
                            {{-- <li class="has-children"><a href="#"><span class="menu-text">Elements</span></a>
                                <ul class="sub-menu mega-menu">
                                    <li>
                                        <a href="#" class="mega-menu-title"><span class="menu-text">Column One</span></a>
                                        <ul>
                                            <li><a href="elements-products.html"><span class="menu-text">Product Styles</span></a></li>
                                            <li><a href="elements-products-tabs.html"><span class="menu-text">Product Tabs</span></a></li>
                                            <li><a href="elements-product-sale-banner.html"><span class="menu-text">Product & Sale Banner</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="mega-menu-title"><span class="menu-text">Column Two</span></a>
                                        <ul>
                                            <li><a href="elements-category-banner.html"><span class="menu-text">Category Banner</span></a></li>
                                            <li><a href="elements-team.html"><span class="menu-text">Team Member</span></a></li>
                                            <li><a href="elements-testimonials.html"><span class="menu-text">Testimonials</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="mega-menu-title"><span class="menu-text">Column Three</span></a>
                                        <ul>
                                            <li><a href="elements-instagram.html"><span class="menu-text">Instagram</span></a></li>
                                            <li><a href="elements-map.html"><span class="menu-text">Google Map</span></a></li>
                                            <li><a href="elements-icon-box.html"><span class="menu-text">Icon Box</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="mega-menu-title"><span class="menu-text">Column Four</span></a>
                                        <ul>
                                            <li><a href="elements-buttons.html"><span class="menu-text">Buttons</span></a></li>
                                            <li><a href="elements-faq.html"><span class="menu-text">FAQs / Toggles</span></a></li>
                                            <li><a href="elements-brands.html"><span class="menu-text">Brands</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}
                            <li class=""><a href="{{route('client.blog')}}"><span class="menu-text">bài viết</span></a></li>
                            <li class=""><a href="{{route('client.about')}}"><span class="menu-text">Về chúng tôi</span></a></li>
                            <li class="has-children"><a href="{{route('client.contact')}}"><span class="menu-text">Liên lạc</span></a>
                                <ul class="sub-menu">
                                    <li><a href="https://www.facebook.com/profile.php?id=100010376408025"><i style="margin-right: 20px" class="fab fa-facebook-f"></i>  <span class="menu-text">facebook</span></a></li>
                                    <li><a href="https://www.instagram.com/h_son_ng/"><i style="margin-right: 20px" class="fab fa-instagram"></i>  <span class="menu-text">Instagram</span></a></li>
                                    <li><a href="https://www.tiktok.com/@h_son_ng?lang=vi-VN"><i style="margin-right: 20px" class="fab fa-tiktok"></i>  <span class="menu-text">Tiktok</span></a></li>
                                    <li><a href="https://www.youtube.com/@SonNguyen-eu3zd"><i style="margin-right: 20px" class="fab fa-youtube"></i>  <span class="menu-text">youtube</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Search End -->

                <!-- Search Start -->
                <div class="col-auto d-none d-xl-block " style="margin-right: 30px">
                    <div class="widget-search">
                        <form action="{{route('client.search')}}" method="GET">
                            <input name="key" type="text" placeholder="Tìm kiếm sản phẩm.....">
                            <button><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <!-- Search End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        @if (Auth::check())
                        <div class="header-login">
                            <a href="{{route('authen.myaccount')}}"><i class="far fa-user"></i></a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="{{route('authen.profile')}}">Hồ sơ cá nhân</a></li>
                                    <li><a href="{{route('authen.change_password')}}">Đổi mật khẩu</a></li>
                                    {{-- <li><a href="{{route('authen.register')}}">Đăng kí</a></li> --}}
                                    <li><a href="{{route('authen.logout')}}">Đăng xuất </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-wishlist">
                            <a href="#offcanvas-wishlist" class="offcanvas-toggle">
                                <span class="wishlist-count">{{$wishlist->count()}}</span><i class="far fa-heart"></i>
                            </a>
                        </div>
                        <div class="header-cart">
                            <a href="#offcanvas-cart" class="offcanvas-toggle">
                                <span class="cart-count">{{$cart->sum('quantity')}}</span><i class="fas fa-shopping-cart"></i>
                            </a>
                        </div>
                        @else    
                            <div class="header-login me-5">
                                <a href="{{route('authen.login')}}"><i class="far fa-user"></i></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="{{route('authen.register')}}">Đăng kí</a></li>
                                        <li><a href="{{route('authen.login')}}">Đăng nhập </a></li>
                                    </ul>
                                </div>
                            </div>
                            
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Header Sticky Section End -->

    <!-- OffCanvas Search Start -->
    <div id="overlay-menu" class="offcanvas offcanvas-overlay-menu">
        <div class="inner">
            <button class="offcanvas-close">×</button>
            <div class="overlay-menu">
                <ul>
                    <li><a href="#"><span class="menu-text">Home</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Home Group</span></a>
                                <ul class="sub-menu">
                                    <li><a href="index.html"><span class="menu-text">Arts Propelled</span></a></li>
                                    <li><a href="index-2.html"><span class="menu-text">Decor Thriving</span></a></li>
                                    <li><a href="index-3.html"><span class="menu-text">Savvy Delight</span></a></li>
                                    <li><a href="index-4.html"><span class="menu-text">Perfect Escapes</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Home Group</span></a>
                                <ul class="sub-menu">
                                    <li><a href="index-5.html"><span class="menu-text">Kitchen Cozy</span></a></li>
                                    <li><a href="index-6.html"><span class="menu-text">Dreamy Designs</span></a></li>
                                    <li><a href="index-7.html"><span class="menu-text">Crispy Recipes</span></a></li>
                                    <li><a href="index-8.html"><span class="menu-text">Decoholic Chic</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Home Group</span></a>
                                <ul class="sub-menu">
                                    <li><a href="index-9.html"><span class="menu-text">Reblended Dish</span></a></li>
                                    <li><a href="index-10.html"><span class="menu-text">Craftin House</span></a></li>
                                    <li><a href="index-11.html"><span class="menu-text">Craftswork Biz</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Shop</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Shop Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="shop.html"><span class="menu-text">Shop No Sidebar</span></a></li>
                                    <li><a href="shop-left-sidebar.html"><span class="menu-text">Shop Left Sidebar</span></a></li>
                                    <li><a href="shop-right-sidebar.html"><span class="menu-text">Shop Right Sidebar</span></a></li>
                                    <li><a href="shop-fullwidth-no-gutters.html"><span class="menu-text">Shop Fullwidth No Space</span></a></li>
                                    <li><a href="shop-fullwidth.html"><span class="menu-text">Shop Fullwidth No Sidebar</span></a></li>
                                    <li><a href="shop-fullwidth-left-sidebar.html"><span class="menu-text">Shop Fullwidth Left Sidebar</span></a></li>
                                    <li><a href="shop-fullwidth-right-sidebar.html"><span class="menu-text">Shop Fullwidth Right Sidebar</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Product Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="product-details.html"><span class="menu-text">Basic</span></a></li>
                                    <li><a href="product-details-fullwidth.html"><span class="menu-text">Fullwidth</span></a></li>
                                    <li><a href="product-details-sticky.html"><span class="menu-text">Sticky Details</span></a></li>
                                    <li><a href="product-details-sidebar.html"><span class="menu-text">Width Sidebar</span></a></li>
                                    <li><a href="product-details-extra-content.html"><span class="menu-text">Extra Content</span></a></li>
                                    <li><a href="product-details-image-variation.html"><span class="menu-text">Variations Images</span></a></li>
                                    <li><a href="product-details-group.html"><span class="menu-text">Bought Together</span></a></li>
                                    <li><a href="product-details-360.html"><span class="menu-text">Product 360</span></a></li>
                                    <li><a href="product-details-background.html"><span class="menu-text">Product with Background</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="mega-menu-title"><span class="menu-text">PRODUCT & Other PAGES</span></a>
                                <ul class="sub-menu">
                                    <li><a href="shopping-cart.html"><span class="menu-text">Shopping Cart</span></a></li>
                                    <li><a href="checkout.html"><span class="menu-text">Checkout</span></a></li>
                                    <li><a href="order-tracking.html"><span class="menu-text">Order Tracking</span></a></li>
                                    <li><a href="wishlist.html"><span class="menu-text">Wishlist</span></a></li>
                                    <li><a href="login-register.html"><span class="menu-text">Customer Login</span></a></li>
                                    <li><a href="my-account.html"><span class="menu-text">My Account</span></a></li>
                                    <li><a href="lost-password.html"><span class="menu-text">Lost Password</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Project</span></a>
                        <ul class="sub-menu">
                            <li><a href="portfolio-3-columns.html"><span class="menu-text">Portfolio 3 Columns</span></a></li>
                            <li><a href="portfolio-4-columns.html"><span class="menu-text">Portfolio 4 Columns</span></a></li>
                            <li><a href="portfolio-5-columns.html"><span class="menu-text">Portfolio 5 Columns</span></a></li>
                            <li><a href="portfolio-details.html"><span class="menu-text">Portfolio Details</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Elements</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#" class="mega-menu-title"><span class="menu-text">Column One</span></a>
                                <ul class="sub-menu">
                                    <li><a href="elements-products.html"><span class="menu-text">Product Styles</span></a></li>
                                    <li><a href="elements-products-tabs.html"><span class="menu-text">Product Tabs</span></a></li>
                                    <li><a href="elements-product-sale-banner.html"><span class="menu-text">Product & Sale Banner</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="mega-menu-title"><span class="menu-text">Column Two</span></a>
                                <ul class="sub-menu">
                                    <li><a href="elements-category-banner.html"><span class="menu-text">Category Banner</span></a></li>
                                    <li><a href="elements-team.html"><span class="menu-text">Team Member</span></a></li>
                                    <li><a href="elements-testimonials.html"><span class="menu-text">Testimonials</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="mega-menu-title"><span class="menu-text">Column Three</span></a>
                                <ul class="sub-menu">
                                    <li><a href="elements-instagram.html"><span class="menu-text">Instagram</span></a></li>
                                    <li><a href="elements-map.html"><span class="menu-text">Google Map</span></a></li>
                                    <li><a href="elements-icon-box.html"><span class="menu-text">Icon Box</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="mega-menu-title"><span class="menu-text">Column Four</span></a>
                                <ul class="sub-menu">
                                    <li><a href="elements-buttons.html"><span class="menu-text">Buttons</span></a></li>
                                    <li><a href="elements-faq.html"><span class="menu-text">FAQs / Toggles</span></a></li>
                                    <li><a href="elements-brands.html"><span class="menu-text">Brands</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Blog</span></a>
                        <ul class="sub-menu">
                            <li><a href="#"><span class="menu-text">Standard Layout</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
                                    <li><a href="blog-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
                                    <li><a href="blog-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span class="menu-text">Grid Layout</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-grid-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
                                    <li><a href="blog-grid-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
                                    <li><a href="blog-grid-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span class="menu-text">List Layout</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-list-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
                                    <li><a href="blog-list-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
                                    <li><a href="blog-list-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span class="menu-text">Masonry Layout</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-masonry-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
                                    <li><a href="blog-masonry-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
                                    <li><a href="blog-masonry-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span class="menu-text">Single Post Layout</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-details-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
                                    <li><a href="blog-details-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
                                    <li><a href="blog-details-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Pages</span></a>
                        <ul class="sub-menu">
                            <li><a href="about-us.html"><span class="menu-text">About us</span></a></li>
                            <li><a href="about-us-2.html"><span class="menu-text">About us 02</span></a></li>
                            <li><a href="contact-us.html"><span class="menu-text">Contact us</span></a></li>
                            <li><a href="coming-soon.html"><span class="menu-text">Coming Soon</span></a></li>
                            <li><a href="404.html"><span class="menu-text">Page 404</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <!-- OffCanvas Search End -->

    <!-- Mobile Header Section Start -->
    <div class="mobile-header bg-white section d-xl-none">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="index.html"><img src="assets/images/logo/logo-2.webp" alt="Learts Logo"></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Tools Start -->
                @if (Auth::check())
                    <div class="col-auto">
                        <div class="header-tools justify-content-end">
                            <div class="header-login d-none d-sm-block">
                                <a href="my-account.html"><i class="far fa-user"></i></a>
                            </div>
                            <div class="header-search d-none d-sm-block">
                                <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fas fa-search"></i></a>
                            </div>
                            <div class="header-wishlist d-none d-sm-block">
                                <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="far fa-heart"></i></a>
                            </div>
                            <div class="header-cart">
                                <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i class="fas fa-shopping-cart"></i></a>
                            </div>
                            <div class="mobile-menu-toggle">
                                <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                    <svg viewBox="0 0 800 600">
                                        <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" class="top"></path>
                                        <path d="M300,320 L540,320" class="middle"></path>
                                        <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" class="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-auto">
                        <div class="header-tools justify-content-end">
                            <div class="header-login d-none d-sm-block">
                                <a href="my-account.html"><i class="far fa-user"></i></a>
                            </div>
                            <div class="header-search d-none d-sm-block">
                                <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fas fa-search"></i></a>
                            </div>
                            <div class="header-wishlist d-none d-sm-block">
                                <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="far fa-heart"></i></a>
                            </div>
                            {{-- <div class="header-cart">
                                <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i class="fas fa-shopping-cart"></i></a>
                            </div> --}}
                            <div class="mobile-menu-toggle">
                                <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                    <svg viewBox="0 0 800 600">
                                        <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" class="top"></path>
                                        <path d="M300,320 L540,320" class="middle"></path>
                                        <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" class="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
                <!-- Header Tools End -->

            </div>
        </div>
    </div>
    <!-- Mobile Header Section End -->

    <!-- Mobile Header Section Start -->
    @if (Auth::check())
        <div class="mobile-header sticky-header bg-white section d-xl-none">
            <div class="container">
                <div class="row align-items-center">

                    <!-- Header Logo Start -->
                    <div class="col">
                        <div class="header-logo">
                            <a href="index.html"><img src="assets/images/logo/logo-2.webp" alt="Learts Logo"></a>
                        </div>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Tools Start -->
                    <div class="col-auto">
                        <div class="header-tools justify-content-end">
                            <div class="header-login d-none d-sm-block">
                                <a href="my-account.html"><i class="far fa-user"></i></a>
                            </div>
                            <div class="header-search d-none d-sm-block">
                                <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fas fa-search"></i></a>
                            </div>
                            <div class="header-wishlist d-none d-sm-block">
                                <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="far fa-heart"></i></a>
                            </div>
                            <div class="header-cart">
                                <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i class="fas fa-shopping-cart"></i></a>
                            </div>
                            <div class="mobile-menu-toggle">
                                <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                    <svg viewBox="0 0 800 600">
                                        <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" class="top"></path>
                                        <path d="M300,320 L540,320" class="middle"></path>
                                        <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" class="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Header Tools End -->

                </div>
            </div>
        </div>
    @else
        <div class="mobile-header sticky-header bg-white section d-xl-none">
            <div class="container">
                <div class="row align-items-center">

                    <!-- Header Logo Start -->
                    <div class="col">
                        <div class="header-logo">
                            <a href="index.html"><img src="assets/images/logo/logo-2.webp" alt="Learts Logo"></a>
                        </div>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Tools Start -->
                    <div class="col-auto">
                        <div class="header-tools justify-content-end">
                            <div class="header-login d-none d-sm-block">
                                <a href="my-account.html"><i class="far fa-user"></i></a>
                            </div>
                            <div class="header-search d-none d-sm-block">
                                <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fas fa-search"></i></a>
                            </div>
                            <div class="header-wishlist d-none d-sm-block">
                                <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="far fa-heart"></i></a>
                            </div>
                            {{-- <div class="header-cart">
                                <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i class="fas fa-shopping-cart"></i></a>
                            </div> --}}
                            <div class="mobile-menu-toggle">
                                <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                    <svg viewBox="0 0 800 600">
                                        <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" class="top"></path>
                                        <path d="M300,320 L540,320" class="middle"></path>
                                        <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" class="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Header Tools End -->

                </div>
            </div>
        </div>
    @endif
    <!-- Mobile Header Section End -->
    <!-- OffCanvas Search Start -->
    <div id="offcanvas-search" class="offcanvas offcanvas-search">
        <div class="inner">
            <div class="offcanvas-search-form">
                <button class="offcanvas-close">×</button>
                <form action="#">
                    <div class="row mb-n3">
                        <div class="col-lg-8 col-12 mb-3"><input type="text" placeholder="Search Products..."></div>
                        <div class="col-lg-4 col-12 mb-3">
                            <select class="search-select select2-basic">
                                <option value="0">All Categories</option>
                                <option value="kids-babies">Kids &amp; Babies</option>
                                <option value="home-decor">Home Decor</option>
                                <option value="gift-ideas">Gift ideas</option>
                                <option value="kitchen">Kitchen</option>
                                <option value="toys">Toys</option>
                                <option value="kniting-sewing">Kniting &amp; Sewing</option>
                                <option value="pots">Pots</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <p class="search-description text-body-light mt-2"> <span># Type at least 1 character to search</span> <span># Hit enter to search or ESC to close</span></p>

        </div>
    </div>
    <!-- OffCanvas Search End -->

    <!-- OffCanvas Wishlist Start -->
    <div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
        <div class="inner">
            <div class="head">
                <span class="title">Các sản phẩm yêu thích của bạn</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    @foreach ($wishlist as $wishlist)
                        <li>
                            <a href="{{route('client.product',  $wishlist->prodF->id)}}" class="image"><img src="assets/images/product/{{$wishlist->prodF->image}}" alt="Cart product Image"></a>
                            <div class="content">
                                <span class="quantity-price" style="padding-left: 35px"><b>1</b> x 
                                    <span class="amount">{{ number_format($wishlist->prodF->price) }} VND</span>
                                </span>
                                <div>
                                    <strong>Sản phẩm:</strong> 
                                    <a href="product-details.html" class="title">{{ $wishlist->prodF->name }}</a>
                                </div>
                                <div>
                                    <strong>Danh mục:</strong> 
                                    <a href="product-details.html" class="title">{{ $wishlist->prodF->cat->name }}</a>
                                </div>
                                <a href="{{ route('client.favorite', $wishlist->product_id) }}" class="remove">×</a>
                            </div>
                            
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="foot">
                <div class="buttons">
                    <a href="{{route('client.wishlist')}}" class="btn btn-dark btn-hover-primary">Danh sách sản phẩm yêu thích</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Wishlist End -->

    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Giỏ hàng của bạn </span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <?php $total = 0; ?>
                    @foreach ($cart as $cart)
                        <li>
                            <a href="{{route('client.product', $cart->prodC->id)}}" class="image"><img src="assets/images/product/{{$cart->prodC->image}}" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="product-details.html" class="title">{{$cart->prodC->name}}</a>
                                <span class="quantity-price"><b>{{$cart->quantity}}</b> x <span class="amount">{{number_format($cart->quantity * $cart->price)}} VND</span></span>
                                <a href="{{route('client.delete_cart', $cart->id)}}" class="remove">×</a>
                            </div>
                        </li>
                        <?php $total += $cart->quantity * $cart->price; ?>
                    @endforeach
                </ul>
            </div>
            <div class="foot">
                <div class="sub-total">
                    <p>Phí giao hàng mặc định</p>
                    <span class="amount">+ 40,000 VND</span>
                    <strong>Tổng đơn hàng hiện tại:</strong>
                    <span class="amount">= {{number_format($total+40000)}} VND</span>
                </div>
                <div class="buttons">
                    <a href="{{route('client.cart')}}" class="btn btn-dark btn-hover-primary">Danh sách giỏ hàng</a>
                    <a href="{{route('client.checkout')}}" class="btn btn-outline-dark">Thanh Toán</a>
                    <a href="{{route('client.history')}}" class="btn btn-outline-dark">Lịch sử đơn hàng</a>
                </div>
                <p class="minicart-message" style="text-align: center">Miễn phí giao hàng cho các đơn hàng từ 999.999vnđ hoặc các đơn hàng xung quanh huyện phú xuyên</p>
            </div>
        </div>
    </div>
    <!-- OffCanvas Cart End -->

    <!-- OffCanvas Search Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <div class="inner customScroll">
            <div class="offcanvas-menu-search-form">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="offcanvas-menu">
                <ul>
                    <li class=""><a href="{{route('client.home')}}"><span class="menu-text">Trang chủ</span></a></li>
                            <li class="has-children"><a href="{{route('client.shop')}}"><span class="menu-text">Cửa hàng</span></a>
                                <ul class="sub-menu ">
                                    <li>
                                        <ul style="list-style: none; padding: 0;margin: 0;">
                                            @foreach ($cate as $cate)
                                            <li><a href=""><span class="menu-text"></span></a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            {{-- project --}}
                            {{-- <li class="has-children"><a href="#"><span class="menu-text">Project</span></a>
                                <ul class="sub-menu">
                                    <li><a href="portfolio-3-columns.html"><span class="menu-text">Portfolio 3 Columns</span></a></li>
                                    <li><a href="portfolio-4-columns.html"><span class="menu-text">Portfolio 4 Columns</span></a></li>
                                    <li><a href="portfolio-5-columns.html"><span class="menu-text">Portfolio 5 Columns</span></a></li>
                                    <li><a href="portfolio-details.html"><span class="menu-text">Portfolio Details</span></a></li>
                                </ul>
                            </li> --}}
                            {{-- element --}}
                            {{-- <li class="has-children"><a href="#"><span class="menu-text">Elements</span></a>
                                <ul class="sub-menu mega-menu">
                                    <li>
                                        <a href="#" class="mega-menu-title"><span class="menu-text">Column One</span></a>
                                        <ul>
                                            <li><a href="elements-products.html"><span class="menu-text">Product Styles</span></a></li>
                                            <li><a href="elements-products-tabs.html"><span class="menu-text">Product Tabs</span></a></li>
                                            <li><a href="elements-product-sale-banner.html"><span class="menu-text">Product & Sale Banner</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="mega-menu-title"><span class="menu-text">Column Two</span></a>
                                        <ul>
                                            <li><a href="elements-category-banner.html"><span class="menu-text">Category Banner</span></a></li>
                                            <li><a href="elements-team.html"><span class="menu-text">Team Member</span></a></li>
                                            <li><a href="elements-testimonials.html"><span class="menu-text">Testimonials</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="mega-menu-title"><span class="menu-text">Column Three</span></a>
                                        <ul>
                                            <li><a href="elements-instagram.html"><span class="menu-text">Instagram</span></a></li>
                                            <li><a href="elements-map.html"><span class="menu-text">Google Map</span></a></li>
                                            <li><a href="elements-icon-box.html"><span class="menu-text">Icon Box</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="mega-menu-title"><span class="menu-text">Column Four</span></a>
                                        <ul>
                                            <li><a href="elements-buttons.html"><span class="menu-text">Buttons</span></a></li>
                                            <li><a href="elements-faq.html"><span class="menu-text">FAQs / Toggles</span></a></li>
                                            <li><a href="elements-brands.html"><span class="menu-text">Brands</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}
                            <li class=""><a href="{{route('client.blog')}}"><span class="menu-text">bài viết</span></a></li>
                            <li class=""><a href="{{route('client.about')}}"><span class="menu-text">Về chúng tôi</span></a></li>
                            <li class="has-children"><a href="{{route('client.contact')}}"><span class="menu-text">Liên lạc</span></a>
                                <ul class="sub-menu">
                                    <li><a href="https://www.facebook.com/profile.php?id=100010376408025"><i style="margin-right: 20px" class="fab fa-facebook-f"></i>  <span class="menu-text">facebook</span></a></li>
                                    <li><a href="https://www.instagram.com/h_son_ng/"><i style="margin-right: 20px" class="fab fa-instagram"></i>  <span class="menu-text">Instagram</span></a></li>
                                    <li><a href="https://www.tiktok.com/@h_son_ng?lang=vi-VN"><i style="margin-right: 20px" class="fab fa-tiktok"></i>  <span class="menu-text">Tiktok</span></a></li>
                                    <li><a href="https://www.youtube.com/@SonNguyen-eu3zd"><i style="margin-right: 20px" class="fab fa-youtube"></i>  <span class="menu-text">youtube</span></a></li>
                                </ul>
                            </li>
                </ul>
            </div>
            <div class="offcanvas-buttons">
                <div class="header-tools">
                    <div class="header-login">
                        <a href="{{route('authen.myaccount')}}"><i class="far fa-user"></i></a>
                    </div>
                    <div class="header-wishlist">
                        <a href={{route('client.wishlist')}}><span>{{$wishlist->count()}}</span><i class="far fa-heart"></i></a>
                    </div>
                    <div class="header-cart">
                        <a href="{{route('client.cart')}}"><span class="cart-count">{{$cart->sum('quantity')}}</span><i class="fas fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
            <div class="offcanvas-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
    <!-- OffCanvas Search End -->

    <div class="offcanvas-overlay"></div>

    {{-- main -----------------------------------------------------------------------------------------------------------------------------------}}
    @yield('main')    
    {{-- end main------------------------------------------------------------------------------------------------------------------------------}}


    <!-- footer -->
    <div class="footer2-section section section-padding">
        <div class="container">
            <div class="container">
                <div class="row text-center row-cols-1">
    
                    <div class="footer1-logo col text-center">
                        <img src="{{asset('assets/images/logo/logo.webp')}}" alt="">
                    </div>
    
                    <div class="footer1-menu col">
                        <ul class="widget-menu justify-content-center">
                            <li><a href="{{route('client.about')}}">Về chúng tôi</a></li>
                            <li><a href="{{route('client.contact')}}">Vị trí cửa hàng</a></li>
                            <li><a href="{{route('client.contact')}}">Liên lạc</a></li>
                            <li><a href="{{route('client.contact')}}">Hỗ trợ</a></li>
                            <li><a href="{{route('client.contact')}}">Chính sách</a></li>
                            <li><a href="{{route('client.contact')}}">Câu hỏi thường gặp</a></li>
                        </ul>
                    </div>
                    <div class="footer1-social col">
                        <ul class="widget-social justify-content-center">
                            <li class="hintT-top" data-hint="Tiktok"> <a href="https://www.tiktok.com/@h_son_ng?lang=vi-VN"><i class="fab fa-tiktok"></i></a></li>
                            <li class="hintT-top" data-hint="Facebook"> <a href="https://www.facebook.com/profile.php?id=100010376408025"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="hintT-top" data-hint="Instagram"> <a href="https://www.instagram.com/h_son_ng/"><i class="fab fa-instagram"></i></a></li>
                            <li class="hintT-top" data-hint="Youtube"> <a href="https://www.youtube.com/@SonNguyen-eu3zd"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer2-copyright section">
        <div class="container">
            <p class="copyright text-center">&copy; 2024 learts. Đã đăng kí bản quyền | <strong>(+84) 912313402</strong> | <a href="mailto:contact@learts.com">sonn20102003@gmail.com</a></p>
        </div>
    </div>
    <!-- end footer -->

    <!-- JS
============================================ -->

    <!-- Vendors JS -->
    <script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-migrate-3.1.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugins JS -->
    <script src="{{asset('assets/js/plugins/select2.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/swiper.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/slick.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/mo.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.matchHeight-min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/ion.rangeSlider.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/photoswipe.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/photoswipe-ui-default.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/ResizeSensor.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.sticky-sidebar.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/product360.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/scrollax.min.js')}}"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
   <script src="{{asset('assets/js/vendor/vendor.min.js')}}"></script>
   <script src="{{asset('assets/js/plugins/plugins.min.js')}}"></script>  

    <!-- Main Activation JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>

    {{-- toast cho he thong --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>

    @if (Session::has('suc'))
       <script>
            $.toast({
                heading: 'Thông báo tới bạn !!!',
                text : '{{session::get('suc')}}',
                showHideTransition: 'slide',
                position: 'top-right',
                hideAfter: 3000,
                icon: 'success'
            })
        </script>
    @endif
    
    @if (Session::has('fail'))
        <script>
            $.toast({
                heading: 'Thông báo tới bạn !!!',  
                text : '{{session::get('fail')}}',
                showHideTransition: 'slide',
                position: 'top-right',
                hideAfter: 3000,
                icon: 'error'
            })
        </script>
    @endif

</body>


<!-- Mirrored from htmldemo.net/learts/learts/index-8.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Sep 2024 08:57:26 GMT -->
</html>