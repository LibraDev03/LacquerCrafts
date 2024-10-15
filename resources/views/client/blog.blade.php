@extends('layouts.client.client')
@section('title', 'LacquerCrafts Blog')
@section('main')
     <!-- Page Title/Header Start -->
     <div class="page-title-section section" data-bg-image="assets/images/bg/page-title-1.webp">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title">
                        <h1 class="title">Bài viết</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('client.home')}}">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Bài viết</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->

    <!-- Blog Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row g-0 learts-mb-n40">

                @foreach ($blog as $blog)
                <div class="col-12 border-bottom learts-pb-40 learts-mb-40">
                    <div class="blog">
                        <div class="row learts-mb-n30">
                            <div class="col-xl-4 col-md-5 col-12 learts-mb-30">
                                <div class="image mb-0">
                                    <a href="blog-details-right-sidebar.html"><img src="{{asset('assets/images/blog/s345/' . $blog->image)}}" alt="Blog Image"></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-md-7 col-12 align-self-center learts-mb-30">
                                <div class="content">
                                    <ul class="meta">
                                        <li><i class="far fa-calendar"></i><a href="#">{{$blog->created_at}}</a></li>
                                        <li><i class="far fa-eye"></i> 201 views</li>
                                    </ul>
                                    <h5 class="title"><a href="blog-details-right-sidebar.html">{{$blog->name}}</a></h5>
                                    <div class="desc">
                                        <p>{{$blog->description}}</p>
                                    </div>
                                    <a href="blog-details-right-sidebar.html" class="link">Chi tiết bài viết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            <div class="row learts-mt-50">
                <div class="col text-center">
                    <a href="#" class="btn btn-dark btn-outline-hover-dark">Xem nhiều hơn</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section End -->
@endsection