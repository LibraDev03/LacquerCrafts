@extends('layouts.admin.index')
@section('main')
<div class="container">
    <br>
    <h1 style="text-align: center">Tạo mới Bài viết</h1>
    <br>
    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" required placeholder="Tên bài viết">
                </div>
            </div>
        
            <div class="col-md-6">
                <div class="form-group">
                    <input type="file" class="form-control" id="image" name="image" required placeholder="Hình ảnh sản phẩm">
                </div>
            </div>
        </div>
        
        
        <div class="form-group">
            <textarea class="form-control" id="description" name="description" rows="4" required placeholder="Mô tả bài viết"></textarea>
        </div>

        <div class="col text-center">
            <button type="submit" class="btn btn-dark">Tạo mới</button>
        </div>

    </form>
</div>
@endsection