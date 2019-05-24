@extends('admin.layout.layout')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">Đơn hàng</h2>
      <p class="card-description">
        <code>.Danh sách</code>
      </p>
      @if (session('thongbao'))
        <div class="alert alert-success">
          {{session('thongbao')}}
        </div>
      @endif
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Mã đơn hàng</th>
              <th>Phương thức thanh toán</th>
              <th>Ngày đặt</th>
              <th>Id thành viên</th>
              <th>Id nhân viên</th>
              <th>Địa chỉ khác</th>
              <th>Chi tiết</th>
              <th>Sửa</th>  
              <th>Xóa</th>
            </tr>
          </thead>
          <tbody>
            @foreach($donhang as $dh)
            <tr class="odd gradeX">
              <td>{{$dh->MaDH}}</td>
              <td>{{$dh->pttt}}</td>
              <td>{{$dh->ngaydat}}</td>
              <td>{{$dh->idtv}}</td>
              <td>{{$dh->IDNV}}</td>
              <td>{{$dh->dckhac}}</td>
              <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/donhang/chitiet/{{$dh->MaDH}}">Xem chi tiết</a></td>
              <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/donhang/sua/{{$dh->MaDH}}">Sửa</a></td>
              <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/donhang/xoa/{{$dh->MaDH}}">Xóa</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection