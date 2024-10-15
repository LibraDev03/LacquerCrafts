@extends('layouts.admin.index')
@section('main')
    <div class="d-flex"><a href="{{ route('blog.create') }}" class="btn btn-dark mx-auto m-3 ">Tạo mới một bài viết</a></div>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên Bài viết</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blog as $blog)
                <tr>
                    <th scope="row">{{ $blog->id }}</th>
                    <td class="name-column">{{ $blog->name }}</td>
                    <td><img src="{{ asset('assets/images/blog/s345/' . $blog->image) }}" alt=""></td>
                    <td class="description-column">{{ $blog->description }}</td>
                    <td>
                    <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-dark">Sửa</a>
                    <form action="{{ route('blog.destroy', $blog->id) }}" method="POST" style="display:inline;" onsubmit=" return confirm('Are you sure')">
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
            width: 300px;
            height: 100px;
            overflow: hidden; /* Ẩn phần nội dung tràn */
            text-overflow: ellipsis; /* Hiển thị dấu ba chấm nếu nội dung quá dài */
        }
        .name-column {
            width: 279px;
            height: 100px;
            overflow: hidden; /* Ẩn phần nội dung tràn */
            text-overflow: ellipsis; /* Hiển thị dấu ba chấm nếu nội dung quá dài */
        }
    </style>
@endsection