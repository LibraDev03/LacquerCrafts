@extends('layouts.admin.index') 
@section('main')
    <div class="container">
        <br>
        <h1 style="text-align:center">Chỉnh sửa sản phẩm</h1>
        <br>
        <form action="{{ route('product.update', $products->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="row">
                <!-- Dòng thứ nhất: Tên sản phẩm, Danh mục và Hình ảnh -->
                <div class="form-group col-sm">
                    <input type="text" class="form-control" id="name" name="name" value="" required placeholder="{{ $products->name}}">
                </div>
                <div class="form-group col-sm">
                    <select name="category_id" class="form-control">
                        @foreach ($cates as $cat)
                            <option value="{{ $cat->id }}" {{ $cat->id == $products->category_id ? 'selected' : '' }}>{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-sm">
                    <input type="file" class="form-control" id="image" name="image" placeholder="Hình ảnh sản phẩm">
                </div>
                <div class="form-group col-sm">
                    <input type="file" class="form-control" id="image" name="other_image[]" required placeholder="Hình ảnh liên quan sản phẩm" multiple>
                </div>
            </div>

            <div class="row">
                <!-- Dòng thứ hai: Giá, Khối lượng, Kích thước -->
                <div class="form-group col-sm">
                    <input type="text" class="form-control" id="price" name="price" value="" required placeholder="{{$products->price}}">
                </div>
                <div class="form-group col-sm">
                    <input type="text" class="form-control" id="discount" name="discount" value="" required placeholder="{{$products->discount}}">
                </div>
                <div class="form-group col-sm">
                    <input type="text" class="form-control" id="weight" name="weight" value="" required placeholder="{{$products->weight}}">
                </div>
                <div class="form-group col-sm">
                    <input type="text" class="form-control" id="dimensions" name="dimensions" value="" required placeholder="{{$products->dimensions}}">
                </div>
            </div>

            <div class="form-group">
                <textarea class="form-control" id="description" name="description" rows="4" required placeholder="Mô tả sản phẩm">{{ old('description', $products->description) }}</textarea>
            </div>

            <div class="col text-center">
                <button type="submit" class="btn btn-dark">Chỉnh sửa sản phẩm</button>  
            </div>
        </form>
    </div>
@endsection
