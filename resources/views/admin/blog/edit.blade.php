@extends('layouts.admin.index')
@section('main')
<div class="container">
    <br>
    <h1 style="text-align: center">Sửa bài viết</h1>
    <br>
    <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="name">Tên bài viết</label>
                <input type="text" class="form-control" id="name" name="name" required placeholder="{{ $blog->name }}">
                @error('name')
                    <small>{{ $message }}</small>
                @enderror
            </div>
        
            <div class="col-md-6 form-group">
                <label for="image">Hình ảnh bài viết</label>
                <input type="file" class="form-control" id="image" name="image" required>
                @error('image')
                    <small>{{ $message }}</small>
                @enderror
            </div>
        </div>
        
        <div class="form-group">
            <label for="name">description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required>{{ $blog->description }}</textarea>
            @error('name')
                    <small>{{ $message }}</small>
            @enderror
        </div>

        <div class="col text-center">
            <button type="submit" class="btn btn-dark">Sửa danh mục</button>
        </div>
    </form>
</div>
@endsection