@extends('layouts.admin.index')
@section('main')
<div class="container">
    <h1>Tạo mới danh mục sản phẩm</h1>
    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" required placeholder="Tên danh mục">
        </div>
        
        <div class="form-group">
            <textarea class="form-control" id="description" name="description" rows="4" required placeholder="Mô tả danh mục"></textarea>
        </div>

        <div class="col text-center">
            <button type="submit" class="btn btn-dark">Tạo mới</button>
        </div>

    </form>
</div>
@endsection