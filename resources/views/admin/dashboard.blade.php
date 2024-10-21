@extends('layouts.admin.index')
@section('main')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Bảng điều khiển</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Bảng điều khiển</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <section class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                  <p style="text-align: center">Đơn hàng mới</p>
                  <h3 style="text-align: center">{{ $order->count()}}</h3>
                </div>
                <div class="icon">
                <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">Nhiều thông tin hơn<i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                <p style="text-align: center">Số lượng người dùng</p>
                <h3 style="text-align: center">{{ $user->count()}}<sup style="font-size: 20px"></sup></h3>
                </div>
                <div class="icon">
                <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{route('user.index')}}" class="small-box-footer">Nhiều thông tin hơn<i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                <p style="text-align: center">Số lượng danh mục sản phẩm</p>
                <h3 style="text-align: center">{{ $category->count()}}</h3>
                </div>
                <div class="icon">
                <i class="ion ion-person-add"></i>
                </div>
                <a href="{{route('category.index')}}" class="small-box-footer">Nhiều thông tin hơn<i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                <p style="text-align: center">Tổng số sản phẩm</p>
                <h3 style="text-align: center">{{ $product->count()}}</h3>
                </div>
                <div class="icon">
                <i class="ion ion-pie-graph"></i>
                </div>
                <a href="{{route('product.index')}}" class="small-box-footer">Nhiều thông tin hơn<i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>
            <!-- ./col -->
        </div>
    </section>

@endsection