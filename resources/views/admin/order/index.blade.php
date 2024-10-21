@extends('layouts.admin.index')
@section('main')

<div class="text-center" ><h1>Danh sách đơn hàng</h1></a></div>
<div class="container">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Stt</th>
        <th scope="col">ngày đặt hàng</th>
        <th scope="col">Tổng đơn hàng</th>
        <th scope="col">Chi tiết đơn hàng</th>
        <th scope="col">Hành động</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($orders as $items)
          <tr>
              <th scope="row">{{ $loop->index+1 }}</th>
              <td>{{ $items->created_at->format('d-m-y') }}</td>
              <td>{{ number_format($items->totalPrice + 40000) }} VND</td>
              <td><a href="{{route('admin.detail', $items->id)}}">Chi tiết</a></td>
              <td>
                  <form action="" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure?')">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-dark">Xóa đơn hàng</button>
                  </form>
              </td>
          </tr>
        @endforeach
    </tbody>
  </table>
</div>
<!-- Hiển thị phân trang -->
<div class="d-flex justify-content-center mt-3">
    {{ $orders->links('pagination::bootstrap-5') }}
</div>

@endsection
