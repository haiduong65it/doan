@extends('admin.layout.layout')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">Sản Phẩm</h2>
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
              <th>Mã sản phẩm</th>
              <th>Tên sản phẩm</th>
              <th>Mã thương hiệu</th>
              <th>Mã bảo hành</th>
              <th>Số lượng</th>
              <th>Đơn giá</th>
              <th>Chi tiết</th>
              <th>Sửa</th>  
              <th>Xóa</th>
            </tr>
          </thead>
          <tbody>
            @foreach($sanpham as $sp)
            <tr class="odd gradeX">
              <td>{{$sp->MaSP}}</td>
              <td>{{$sp->tensp}}</td>
              <td>{{$sp->MaTH}}</td>
              <td>{{$sp->MaBH}}</td>
              <td>{{$sp->soluong}}</td>
              <td>{{$sp->dongia}}VNĐ</td>
              <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/sanpham/xemct/{{$sp->MaCT}}">Xem chi tiết</a></td>
              <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/sanpham/sua/{{$sp->MaSP}}">Sửa</a></td>
              <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/sanpham/xoa/{{$sp->MaSP}}">Xóa</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection