@extends('layouts.client')
@section('title', 'LacquerCrafts Contact')
@section('main')
        <!-- Page Title/Header Start -->
        <div class="page-title-section section" data-bg-image="assets/images/bg/page-title-1.webp">
            <div class="container">
                <div class="row">
                    <div class="col">
    
                        <div class="page-title">
                            <h1 class="title">Liên lạc</h1>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('client.home')}}">Trang chủ</a></li>
                                <li class="breadcrumb-item active">Liên lạc</li>
                            </ul>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Title/Header End -->
    
        <!-- Contact Information & Map Section Start -->
        <div class="section section-padding">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section-title2 text-center">
                    <h2 class="title">Giữ liên lạc với chúng tôi</h2>
                    <p>Bạn đang tìm kiếm món quà hoàn hảo cho những người thân yêu của mình? Hãy thử ghé thăm các cửa của chúng tôi. Bạn cũng có thể liên hệ với chúng tôi để trở thành đối tác hoặc nhà phân phối. Hãy gọi cho chúng tôi, gửi email hoặc đặt lịch hẹn ngay bây giờ.</p>
                </div>
                <!-- Section Title End -->
    
                <!-- Contact Information Start -->
                <div class="row learts-mb-n30">
                    <div class="col-lg-4 col-md-6 col-12 learts-mb-30">
                        <div class="contact-info">
                            <h4 class="" style="text-align: center">Địa chỉ Cửa hàng</h4>
                            <span class="info"><i class="icon fas fa-map-marker-alt"></i> Số 7 Xóm vườn trên Bối Khê Chuyên Mỹ Phú Xuyên Hà Nội</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 learts-mb-30">
                        <div class="contact-info">
                            <h4 class="" style="text-align: center">Phương thức liên lạc </h4>
                            <span class="info"><i class="icon fas fa-phone-alt"></i> Mobile (Hoàng Sơn): <strong>(+84) 912313402</strong> <br> Mobile (Nguyễn Đức Duy) :  <strong>(+84) 913013</strong></span>
                            <span class="info"><i class="icon far fa-envelope"></i> Mail: <a href="#">sonn20102003@gmail.com</a></span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 learts-mb-30">
                        <div class="contact-info">
                            <h4 class="" style="text-align: center">Giờ hoạt đông</h4>
                            <span class="info"><i class="icon far fa-clock"></i> Monday – Friday : 09:00 – 20:00 <br> Sunday & Saturday: 10:30 – 22:00</span>
                        </div>
                    </div>
                </div>
                <!-- Contact Information End -->
    
                <!-- Contact Map Start -->
                <div class="row learts-mt-60">
                    <div class="col">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.071457031309!2d105.83916001533293!3d20.93482348605421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31345093a0e94027%3A0x50337c4720656ff3!2zVGjhu6sgQuG7mWkgS2jDqSwgQ2jGsMahbiBN4buFLCBQaMO6IFh1ecOqbiwgSMOgIE7DtGkgMDAwMDAsIFZpZXRuYW0!5e0!3m2!1svi!2s!4v1695638755615!5m2!1svi!2s" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                </div>
                <!-- Contact Map End -->
    
            </div>
        </div>
        <!-- Contact Information & Map Section End -->
    
        <!-- Contact Form Section Start -->
        <div class="section section-padding pt-0">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section-title2 text-center">
                    <h2 class="title">Gửi tin nhắn của bạn đến chúng tôi</h2>
                </div>
                <!-- Section Title End -->
    
                <div class="row">
                    <div class="col-lg-8 col-12 mx-auto">
                        <div class="contact-form">
                            <form action="https://htmldemo.net/learts/learts/assets/php/contact-mail.php" id="contact-form" method="post">
                                <div class="row learts-mb-n30">
                                    <div class="col-md-6 col-12 learts-mb-30"><input type="text" placeholder="Họ và tên của bạn*" name="name"></div>
                                    <div class="col-md-6 col-12 learts-mb-30"><input type="email" placeholder="Email của bạn *" name="email"></div>
                                    <div class="col-12 learts-mb-30"><textarea name="message" placeholder="Tin nhắn gửi đến chúng tôi"></textarea></div>
                                    <div class="col-12 text-center learts-mb-30"><button class="btn btn-dark btn-outline-hover-dark">Gửi</button></div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
        <!-- Contact Form Section End -->
@endsection