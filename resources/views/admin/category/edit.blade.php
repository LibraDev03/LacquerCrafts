@extends('layouts.admin.index')
@section('main')
<div class="container">
    <h1>Sửa danh mục sản phẩm</h1>
    <form action="{{ route('category.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Tên danh mục</label>
            <input type="text" class="form-control" id="name" name="name" value="" required placeholder="{{ $category->name }}">
            @error('name')
                    <small>{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="name">description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required>{{ $category->description }}</textarea>
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