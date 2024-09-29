@extends('layouts.admin.index')

@section('main')
    <div class="d-flex"><a href="{{ route('category.create') }}" class="btn btn-dark mx-auto m-3 ">Tạo mới một danh mục</a></div>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên danh mục</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td class="description-column">{{ $category->description }}</td>
                    <td>
                    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-dark">Sửa</a>
                    <form action="{{ route('category.destroy', $category->id) }}" method="POST" style="display:inline;" onsubmit=" return confirm('Are you sure')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-dark">Xóa</button>
                    </form>
                    </td>
                </tr>   
                @endforeach
            </tbody>
        </table>
    </div>
    <style>
        .description-column {
            width: 650px;
            height: 100px;
            overflow: hidden; /* Ẩn phần nội dung tràn */
            text-overflow: ellipsis; /* Hiển thị dấu ba chấm nếu nội dung quá dài */
        }
    </style>
@endsection