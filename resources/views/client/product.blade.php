@extends('layouts.client.client')
@section('main')
        <!-- Page Title/Header Start -->
        <div class="page-title-section section" data-bg-image="assets/images/bg/page-title-1.webp">
            <div class="container">
                <div class="row">
                    <div class="col">
    
                        <div class="page-title">
                            <h1 class="title">Cửa hàng</h1>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('client.home')}}">Trang chủ</a></li>
                                <li class="breadcrumb-item"><a href="{{route('client.shop')}}">Cửa hàng</a></li>
                                <li class="breadcrumb-item"><a href="{{route('client.category', $product->cat->id)}}">{{$product->cat->name}}</a></li>
                                <li class="breadcrumb-item active">{{ $product->name }}</li>
                            </ul>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Title/Header End -->
    
        <!-- Single Products Section Start -->
        <div class="section section-padding border-bottom">
            <div class="container">
                <div class="row learts-mb-n40">
    
                    <!-- Product Images Start -->
                    <div class="col-lg-6 col-12 learts-mb-40">
                        <div class="product-images">
                            <button class="product-gallery-popup hintT-left" 
                                data-hint="Click to enlarge" 
                                data-images='[{"src": "assets/images/product/{{$product->image}}", "w": 700, "h": 1100}]'>
                                <i class="fas fa-expand"></i>
                            </button>
                            <a href="https://www.youtube.com/watch?v=1jSsy7DtYgc" class="product-video-popup video-popup hintT-left" data-hint="Click to see video"><i class="fas fa-play"></i></a>
                            <div class="product-zoom">
                                <img src="assets/images/product/{{$product->image}}" alt="Product Image">
                                @foreach($product->images as $image)
                                    <img class="image-hover " src="assets/images/product/{{$image->image}}" alt="Product Image">
                                @endforeach
                            </div>

                            {{-- css hover cho san pham product --}}
                            <style>
                                .product-zoom {
                                    position: relative; /* Đặt vị trí tương đối để có thể căn chỉnh các phần tử con */
                                }

                                .product-zoom img {
                                    display: block; /* Đảm bảo ảnh được hiển thị như một khối */
                                    width: 100%;   /* Đảm bảo ảnh chính chiếm toàn bộ chiều rộng */
                                }

                                .image-hover {
                                    position: absolute; /* Đặt vị trí tuyệt đối để ảnh hover nằm chồng lên ảnh chính */
                                    top: 0;
                                    left: 0;
                                    width: 100%;      /* Chiếm toàn bộ chiều rộng của phần tử cha */
                                    height: 100%;     /* Chiếm toàn bộ chiều cao của phần tử cha */
                                    opacity: 0;       /* Ẩn ảnh hover ban đầu */
                                    transition: opacity 0.3s; /* Hiệu ứng chuyển đổi khi hover */
                                }

                                .product-zoom:hover .image-hover {
                                    opacity: 1;       /* Hiện ảnh hover khi hover */
                                }

                                .product-zoom:hover img:not(.image-hover) {
                                    opacity: 0;       /* Ẩn ảnh chính khi hover */
                                }

                            </style>
                        </div>
                    </div>
                    <!-- Product Images End -->
    
                    <!-- Product Summery Start -->
                    <div class="col-lg-6 col-12 learts-mb-40">
                        <div class="product-summery">
                            {{-- <div class="product-nav">
                                <a href="#"><i class="fas fa-long-arrow-alt-left"></i></a>
                                <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div> --}}
                            <div class="product-ratings">
                                <span class="star-rating">
                                    <span class="rating-active" style="width: 100%;">ratings</span>
                                </span>
                                <a href="#reviews" class="review-link">(<span class="count">3</span> customer reviews)</a>
                            </div>
                            <div class="product-header">
                                <h3 class="product-title" style="text-align: center">{{ $product->name }}</h3>
                                <div class="product-price" style="text-align: center">
                                    <span class="old-price">{{number_format( $product->price) }}VND</span>
                                    <span class="discounted-price">{{number_format( $product->discount)}} VND</span>
                                </div>
                            </div>
                            
                            {{-- style laại phần tên và giá sản pahamr  --}}
                            <style>
                                .product-price {
                                    font-size: 28px;
                                }

                                .product-price .old-price {
                                    text-decoration: line-through;
                                    color: #888;
                                    margin-right: 10px;
                                }

                                .product-price .discounted-price {
                                    color: #e74c3c;
                                    font-weight: bold;
                                }

                            </style>

                            <div class="product-description" style="text-align: center">
                                <p>{{$product->description}}</p>
                                <p>
                                    Sản phẩm có kích thước <strong>{{ $product->dimensions }} cm</strong> và khối lượng là <strong>{{ $product->weight }} kg</strong>, dễ dàng sử dụng và làm dụng cụ trang trí trong ngôi nhà của bạn.
                                </p>
                                
                            </div>
                            <div class="product-variations">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="label"><span>Màu sắc</span></td>
                                            <td class="value">
                                                <div class="product-colors">
                                                    <a href="#" data-bg-color="#374140"></a>
                                                    <a href="#" data-bg-color="#c2c2c2"></a>
                                                    <a href="#" data-bg-color="#8ea1b2"></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label"><span>Kích thước</span></td>
                                            <td class="value">
                                                <div class="product-sizes">
                                                    <a href="#">Lớn</a>
                                                    <a href="#">Vừa</a>
                                                    <a href="#">Nhỏ</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label"><span>Số lượng</span></td>
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
                                @if ($product->favorited)
                                    <a href="{{ route('client.favorite', $product->id) }}" 
                                    class="add-to-wishlist btn btn-icon btn-outline-body btn-hover-dark hintT-top wishlist-added text-danger" 
                                    data-hint="Remove from wishlist">
                                        <i class="fas fa-heart"></i> <!-- Trái tim đầy -->
                                    </a>
                                @else
                                    <a href="{{ route('client.favorite', $product->id) }}" 
                                    class="add-to-wishlist btn btn-icon btn-outline-body btn-hover-dark hintT-top" 
                                    data-hint="Add to wishlist">
                                        <i class="far fa-heart"></i> <!-- Trái tim rỗng -->
                                    </a>
                                @endif
                                <a href="{{route('client.add_cart', $product->id)}}" class="btn btn-dark btn-outline-hover-dark"><i class="fas fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                <a href="#" class="btn btn-icon btn-outline-body btn-hover-dark hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                            </div>
                            <div class="product-meta">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="label"><span>Chia sẻ </span></td>
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
            </div>
    
        </div>
        <!-- Single Products Section End -->
    
        <!-- Single Products Infomation Section Start -->
        <div class="section section-padding border-bottom">
            <div class="container">
    
                <ul class="nav product-info-tab-list">
                    <li><a class="active" data-bs-toggle="tab" href="#tab-description">Mô tả danh mục </a></li>
                    <li><a data-bs-toggle="tab" href="#tab-pwb_tab">Nhãn hàng </a></li>
                    <li><a data-bs-toggle="tab" href="#tab-additional_information">Chi tiêt </a></li>
                    <li><a data-bs-toggle="tab" href="#tab-reviews">Đánh giá ({{$comment->count()}})</a></li>
                </ul>

                {{-- style cho khoảng cách các li bên trên --}}
                <style>
                    .nav.product-info-tab-list li {
                        display: inline-block;
                        position: relative;
                        padding-right: 20px;
                    }

                    .nav.product-info-tab-list li:not(:last-child)::after {
                        content: '|';
                        position: absolute;
                        right: 0;
                        top: 0;
                        color: #000; /* Đổi màu theo ý bạn */
                        transform: scaleY(4); /* Kéo dài dấu | */
                        transform-origin: center; /* Đặt điểm gốc để kéo dài từ giữa */
                    }
                </style>

                <div class="tab-content product-infor-tab-content">
                    <div class="tab-pane fade show active" id="tab-description">
                        <div class="row">
                            <div class="col-lg-10 col-12 mx-auto">
                                <p>{{$product->cat->description}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pwb_tab">
                        <div class="row learts-mb-n30">
                            <div class="col-12 learts-mb-30">
                                <div class="row learts-mb-n10">
                                    <div class="col-lg-2 col-md-3 col-12 learts-mb-10"><img src="assets/images/brands/brand-5.webp" alt=""></div>
                                    <div class="col learts-mb-10">
                                        <p>Nhà cung cấp nguyên liệu gỗ cho thủ công sơn mài chuyên cung cấp các loại gỗ tự nhiên như gỗ xoan, gỗ bạch đàn, gỗ thông và gỗ sồi, đảm bảo chất lượng cao và độ bền tốt. Họ cam kết khai thác từ nguồn gỗ bền vững và bảo vệ môi trường. Ngoài việc cung cấp gỗ, nhà cung cấp còn hỗ trợ chế biến như cắt và phun sơn, giúp nghệ nhân tiết kiệm thời gian và tạo ra những sản phẩm thủ công tinh xảo.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 learts-mb-30">
                                <div class="row learts-mb-n10">
                                    <div class="col-lg-2 col-md-3 col-12 learts-mb-10"><img src="assets/images/brands/brand-7.webp" alt=""></div>
                                    <div class="col learts-mb-10">
                                        <p>Nhà cung cấp trứng, trai, và bóng kính chuyên cung cấp các nguyên liệu quý giá để làm sơn mài.Các nguyên liệu này được thu mua từ những nguồn uy tín, đảm bảo chất lượng và an toàn cho người sử dụng. Nhà cung cấp cam kết cung cấp nguyên liệu sạch, thân thiện với môi trường, giúp nghệ nhân sơn mài dễ dàng chế tác các sản phẩm tinh xảo, mang đậm giá trị nghệ thuật và văn hóa truyền thống.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 learts-mb-30">
                                <div class="row learts-mb-n10">
                                    <div class="col-lg-2 col-md-3 col-12 learts-mb-10"><img src="assets/images/brands/brand-8.webp" alt=""></div>
                                    <div class="col learts-mb-10">
                                        <p>Nghệ nhân làm sơn mài là những thợ thủ công tài ba, giữ gìn và phát triển nghệ thuật truyền thống. Họ có nhiều năm kinh nghiệm trong quy trình sản xuất, từ chuẩn bị nguyên liệu đến hoàn thiện sản phẩm. Với niềm đam mê và sáng tạo, nghệ nhân sử dụng các nguyên liệu tự nhiên để tạo ra những tác phẩm độc đáo, mang đậm giá trị văn hóa. Họ cũng truyền dạy kỹ năng cho thế hệ trẻ, góp phần bảo tồn nghệ thuật sơn mài.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-additional_information">
                        <div class="row">
                            <div class="col-lg-8 col-md-10 col-12 mx-auto">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                            <th scope="col">Tên sản phẩm</th>
                                            <th scope="col">Tên danh mục</th>
                                            <th scope="col">Khối lượng</th>
                                            <th scope="col">Kích thước</th>
                                            <th scope="col">Giá</th>
                                            <th scope="col">Giảm giá</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->cat->name }}</td>
                                                <td>{{ $product->weight }} kg</td>
                                                <td>{{ $product->dimensions }} cm</td>
                                                <td>{{ number_format($product->price) }} VND</td>
                                                <td>{{ number_format($product->discount)}} VND</td>
                                            </tr>   
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-reviews">
                        <div class="product-review-wrapper">
                            <span class="title">Đánh giá của khách hàng để lại</span>
                            <ul class="product-review-list">
                                @foreach ($comment as $comment)
                                <li class="position-relative">
                                    <div class="product-review">
                                        <div class="thumb">
                                            <img src="assets/images/review/review-2.webp" alt="Reviewer Image">
                                        </div>
                                        <div class="content">

                                            @can('myComment', $comment)
                                                {{-- Nút Xóa ở góc trên bên phải --}}
                                                <form action="{{route('client.comment_delete', $comment->id)}}" method="POST" 
                                                    onsubmit="return confirm('Bạn có chắc chắn muốn xóa bình luận này?');"
                                                    class="position-absolute top-0 end-0 me-2 mt-2">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-dark btn-outline-hover-dark btn-sm">X</button>
                                                </form>
                                            @endcan
                                            
                            
                                            <div class="ratings">
                                                <span class="star-rating">
                                                    <span class="rating-active" style="width: 100%;">ratings</span>
                                                </span>
                                            </div>
                                            <div class="meta">
                                                <h5 class="title">{{ $comment->commentU->name }}</h5>
                                                <span class="date">{{ $comment->created_at->format('d-m-Y') }}</span>
                                            </div>
                                            <p>{{ $comment->comment }}</p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                            
                                
                            </ul>
                            <span class="title">Thêm đánh của bạn về ản phẩm của chúng tôi</span>
                            <div class="review-form">
                                <p class="note" style="text-align: center">Email của bạn sẽ được giữ kín trong các đánh giá *</p>
                                <form action="{{route('client.comment', $product->id)}}" method="POST">
                                    @csrf
                                    <div class="row learts-mb-n30">
                                        <div class="col-md-6 col-12 learts-mb-30"><input type="text" name="name" placeholder="Họ và tên của bạn *"></div>
                                        <div class="col-md-6 col-12 learts-mb-30"><input type="email" name="email" placeholder="Email của bạn (ghi đúng địa chỉ email) *"></div>
                                        <div class="col-12 learts-mb-30"><textarea name="comment" placeholder="Đánh giá của bạn về sản phẩm của chúng tôi ở đây *"></textarea></div>
                                        <div class="col-12 text-center learts-mb-30"><button class="btn btn-dark btn-outline-hover-dark">Submit</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
        <!-- Single Products Infomation Section End -->
    
        <!-- Recommended Products Section Start -->
        <div class="section section-padding">
            <div class="container">
    
                <!-- Section Title Start -->
                <div class="section-title2 text-center">
                    <h2 class="title">Các sản phẩm liên quan có thể bạn sẽ thích</h2>
                </div>
                <!-- Section Title End -->
    
                <!-- Products Start -->
                <div class="product-carousel">
    
                    @foreach ($products as $products)
                    <div class="col">
                        <div class="product">
                            <div class="product-thumb">
                                <a href="{{route('client.product' , $products->id) }}" class="image">
                                    <span class="product-badges">
                                        <span class="onsale">-13%</span>
                                        <span class="hot">hot</span>
                                    </span>
                                    <img src="assets/images/product/{{$products->image}}" alt="Product Image">
                                    @foreach($products->images as $image)
                                        <img class="image-hover " src="assets/images/product/{{$image->image}}" alt="Product Image">
                                    @endforeach
                                </a>
                                
                                @if ($products->favorited)
                                    <a href="{{ route('client.favorite', $products->id) }}" class="add-to-wishlist hintT-left wishlist-added" data-hint="Remove from wishlist">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                @else
                                    <a href="{{ route('client.favorite', $products->id) }}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist">
                                        <i class="far fa-heart"></i>
                                    </a>
                                @endif

                                <div class="product-options">
                                    <ul class="colors">
                                        <li style="background-color: #c2c2c2;">color one</li>
                                        <li style="background-color: #374140;">color two</li>
                                        <li style="background-color: #dc1414;">color three</li>
                                    </ul>
                                    <ul class="sizes">
                                        <li>Large</li>
                                        <li>Medium</li>
                                        <li>Small</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <h6 class="title"><a href="product-details.html">{{$products->name}}</a></h6>
                                <span class="price">
                                    <span class="old">{{$products->price}} VND</span>
                                <span class="new">{{$products->discount}} VND</span>
                                </span>
                                <div class="product-buttons">
                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                    <a href="{{route('client.add_cart', $products->id)}}" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                    <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
                <!-- Products End -->
    
            </div>
        </div>
        <!-- Recommended Products Section End -->
@endsection