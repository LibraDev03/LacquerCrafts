@extends('layouts.admin.index')
@section('main')

    <div class="container">
        <h1 style="text-align:center">Tạo mới sản phẩm </h1>
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <!-- Dòng thứ hai: Tên sản phẩm, Danh mục và Hình ảnh -->
                <div class="form-group col-sm">
                    <input type="text" class="form-control" id="name" name="name" required placeholder="Tên sản phẩm">
                </div>
                <div class="form-group col-sm">
                    <select name="category_id" class="form-control">
                        @foreach ($cates as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-sm">
                    <input type="file" class="form-control" id="image" name="image" required placeholder="Hình ảnh sản phẩm">
                </div>
            </div>
            <div class="row">
                <!-- Dòng đầu tiên: Giá, Khối lượng, Kích thước -->
                <div class="form-group col-sm">
                    <input type="text" class="form-control" id="price" name="price" required placeholder="Giá sản phẩm (vnđ)">
                </div>
                <div class="form-group col-sm">
                    <input type="text" class="form-control" id="discount" name="discount" required placeholder="Giá sản phẩm đã giảm (vnđ)">
                </div>
                <div class="form-group col-sm">
                    <input type="text" class="form-control" id="weight" name="weight" required placeholder="Khối lượng sản phẩm (kg)">
                </div>
                <div class="form-group col-sm">
                    <input type="text" class="form-control" id="dimensions" name="dimensions" required placeholder="Kích thước sản phẩm (cm)">
                </div>
            </div>
            <div class="form-group">
                <textarea class="form-control" id="description" name="description" rows="4" required placeholder="Mô tả sản phẩm"></textarea>
            </div>
               
            <div class="col text-center">
                <button type="submit" class="btn btn-dark">Tạo mới sản phẩm </button>  
            </div>
        </form>
    </div>
 

@endsection