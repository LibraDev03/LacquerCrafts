@extends('layouts.admin.index')
@section('main')

<div class="d-flex"><a href="{{ route('user.create') }}" class="btn btn-dark mx-auto m-3 ">Thêm mới người dùng</a></div>
<div class="container">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Họ và tên</th>
        <th scope="col">Email</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">Giới tính</th>
        <th scope="col">Ngày sinh</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">Hành động</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
        <tr>
          <th scope="row">{{ $user->id }}</th>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->phone }}</td>
          <td>{{ $user->gender }}</td>
          <td>{{ $user->birthday }}</td>
          <td class="description-column">{{ $user->address }}</td>
          <td>
            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-dark">Sửa </a>
            <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;" onsubmit=" return confirm('Are you sure')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-dark">Xóa</button>
            </form>
          </td>
        </tr>   
      @endforeach
      
    </tbody>
  </table>
  <style>
    .description-column {
        width: 100px;
        height: auto;
        overflow: hidden; /* Ẩn phần nội dung tràn */
        text-overflow: ellipsis; /* Hiển thị dấu ba chấm nếu nội dung quá dài */
    }
</style>
</div>
@endsection