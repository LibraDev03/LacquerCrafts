@extends('layouts.admin.index')

@section('main')
    <div class="d-flex"><a href="{{ route('product.create') }}" class="btn btn-dark mx-auto m-3 ">Tạo mới sản phẩm</a></div>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Tên danh mục</th>
                <th scope="col">Khối lượng</th>
                <th scope="col">Kích thước</th>
                <th scope="col">Giá</th>
                <th scope="col">Giảm giá</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col" class="description-column">Mô tả</th>
                <th scope="col">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->cat->name }}</td>
                    <td>{{ $product->weight }}</td>
                    <td>{{ $product->dimensions }}</td>
                    <td>${{number_format( $product->price) }}</td>
                    <td>${{number_format( $product->discount) }}</td>
                    <td><img src="{{ asset('assets/images/product/' . $product->image) }}" alt="" width="50px"></td>
                    <td class="description-column">{{ $product->description }}</td>
                    <td>
                    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-dark">Edit</a>
                    <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display:inline;" onsubmit=" return confirm('Are you sure')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-dark">Delete</button>
                    </form>
                    </td>
                </tr>   
                @endforeach
            </tbody>
        </table>
    </div>
    <style>
        .description-column {
            width: 100px;
            height: auto;
            overflow: hidden; /* Ẩn phần nội dung tràn */
            text-overflow: ellipsis; /* Hiển thị dấu ba chấm nếu nội dung quá dài */
        }
    </style>
@endsection