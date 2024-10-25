@extends('layouts.client.client')
@section('title', 'LacquerCrafts About')

@section('main')
        <!-- Page Title/Header Start -->
        <div class="page-title-section section" data-bg-image="assets/images/bg/page-title-1.webp">
            <div class="container">
                <div class="row">
                    <div class="col">
    
                        <div class="page-title">
                            <h1 class="title">Về chúng tôi</h1>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('client.home')}}">trang chủ</a></li>
                                <li class="breadcrumb-item active">Về chúng tôi</li>
                            </ul>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Title/Header End -->
    
        <!-- About Section Start -->
        <div class="section section-padding">
            <div class="container">
                <div class="row learts-mb-n30">
                    <div class="col-lg-4 col-12 align-self-center learts-mb-30">
                        <div class="about-us4">
                            <span class="sub-title">LEARTS STORE</span>
                            <h2 class="title">Khát vọng truyền cảm hứng nghệ thuật</h2>
                        </div>
                    </div>
                    <div class="col-lg-8 col-12 learts-mb-30">
                        <img src="{{asset('assets/images/about/about-6.webp')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->
    
        <!-- About Section Start -->
        <div class="section section-fluid section-padding pt-0">
            <div class="container">
                <div class="row learts-mb-n30">
    
                    <div class="col-lg-6 col-12 text-center learts-mb-30">
                        <img src="{{asset('assets/images/about/about-7.webp')}}" alt="">
                    </div>
    
                    <div class="col-lg-6 col-12 align-self-center learts-mb-30">
                        <div class="about-us4">
                            <div class="row learts-mb-n30">
                                <div class="col-xl-8 col-12 learts-mb-30">
                                    <div class="desc mb-0">
                                        <p>Tự tay mình tạo ra những món đồ sơn mài đẹp đẽ từ chính đôi tay của bạn và sự trợ giúp từ những nghệ nhân lành nghề là một quá trình tuyệt vời, nơi bạn có thể tận hưởng niềm vui và hoàn thiện tác phẩm nghệ thuật của mình. Hãy liên hệ với chứng tôi !!!!!!!!!!</p>
                                    </div>
                                </div>
                                <div class="col-12 learts-mb-30">
                                    <div class="icon-box4 text-left justify-content-start text-start">
                                        <div class="inner">
                                            <div class="content">
                                                <h4 class="">Miễn phí vận chuyển</h4>
                                                <p>Cho đơn hàng từ 999.999₫ trở lên và xung quanh huyện Phú Xuyên</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 learts-mb-30">
                                    <div class="icon-box4 text-left justify-content-start text-start">
                                        <div class="inner">
                                            <div class="content">
                                                <h4 class="">PHONE</h4>
                                                <p>Mobile (Hoàng Sơn): <strong>(+84) 912313402</strong> <br> Mobile (Nguyễn Đức Duy) :  <strong>(+84) 913013</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 learts-mb-30">
                                    <div class="icon-box4 text-left justify-content-start text-start">
                                        <div class="inner">
                                            <div class="content">
                                                <h4 class="">EMAIL liên lạc</h4>
                                                <p>sonn20102003@gmail.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
    
        </div>
        <!-- About Section End -->
    
        <!-- Video Banner Section Start -->
        <div class="section">
            <div class="video-banner" data-bg-image="assets/images/banner/video/video-banner-1.webp">
                <div class="content">
                    <h1 class="">Quy trình sản xuất sơn mài thủ công</h1>
                    <a href="https://www.youtube.com/watch?v=1jSsy7DtYgc" class="video-popup">
                        <img src="{{asset('assets/images/icons/button-play.webp')}}" alt="">
                    </a>
                </div>
            </div>
        </div>
        <!-- Video Banner Section End -->
    
        <!-- Testimonial Section Start -->
        <div class="team_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <article class="team_member">
                            <figure>
                                <div class="team_thumb">
                                    <img src="{{asset('assets/images/testimonial/1.jpg')}}" alt="">
                                </div>
                                <figcaption class="team_content">
                                    <h3>h_son_ng</h3>
                                    <h5>Director</h5>
                                    <p>Phone: 0912313402 <br> Email: sonn20102003@gmail.com</p>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <article class="team_member">
                            <figure>
                                <div class="team_thumb">
                                    <img src="{{asset('assets/images/testimonial/2.jpg')}}" alt="">
                                </div>
                                <figcaption class="team_content">
                                    <h3>h_son_ng</h3>
                                    <h5>Designer</h5>
                                    <p>Fb : Hoang Son <br> Instagram : h_son_ng</p>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <article class="team_member">
                            <figure>
                                <div class="team_thumb">
                                    <img src="{{asset('assets/images/testimonial/3.jpg')}}" alt="">
                                </div>
                                <figcaption class="team_content">
                                    <h3>h_son_ng</h3>
                                    <h5>Developer</h5>
                                    <p> Github : LibraDev03  <br> Github : Cury1Dev </p>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <article class="team_member">
                            <figure>
                                <div class="team_thumb">
                                    <img src="{{asset('assets/images/testimonial/4.jpg')}}" alt="">
                                </div>
                                <figcaption class="team_content">
                                    <h3>h_son_ng</h3>
                                    <h5>Coder</h5>
                                    <p> MB : 5200120102003 <br> Viettinbank : 106877450268</p>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Section End -->
        <br>
        <br>
    
        <!-- Instagram Section Start -->
        <div class="section section-padding pt-0">
            <div class="container">
                <div class="row row-cols-lg-2 row-cols-1 learts-mb-n50">
    
                    <div class="col align-self-center learts-mb-50 order-lg-2">
                        <div class="section-title3 text-center m-0" data-bg-image="assets/images/title/title-3.webp">
                            <h2 class="title">Instagram của chúng tôi</h2>
                            <p class="desc">@h_son_ng</p>
                        </div>
                    </div>
    
                    <div class="col learts-mb-50">
    
                        <div class="instafeed instafeed-carousel instafeed-carousel2">
                            <a class="instafeed-item" href="https://www.instagram.com/h_son_ng/">
                                <img src="{{asset('assets/images/instagram/instagram-1.webp')}}" alt="instagram image" />
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="instafeed-item" href="https://www.instagram.com/h_son_ng/">
                                <img src="{{asset('assets/images/instagram/instagram-2.webp')}}" alt="instagram image" />
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="instafeed-item" href="https://www.instagram.com/h_son_ng/">
                                <img src="{{asset('assets/images/instagram/instagram-3.webp')}}" alt="instagram image" />
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="instafeed-item" href="https://www.instagram.com/h_son_ng/">
                                <img src="{{asset('assets/images/instagram/instagram-4.webp')}}" alt="instagram image" />
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="instafeed-item" href="https://www.instagram.com/h_son_ng/">
                                <img src="{{asset('assets/images/instagram/instagram-4.webp')}}" alt="instagram image" />
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
    
                    </div>
    
                </div>
    
            </div>
        </div>
        <!-- Instagram Section End -->
@endsection