@extends('admin.layout.layout')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">Nhân viên</h2>
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
              <th>IDNV</th>
              <th>Họ tên</th>
              <th>Số điện thoại</th>
              <th>Ngày sinh</th>
              <th>Chức vụ</th>
              <th>Sửa</th>  
              <th>Xóa</th>
            </tr>
          </thead>
          <tbody>
            @foreach($nhanvien as $nv)
            <tr class="odd gradeX">
              <td>{{$nv->IDNV}}</td>
              <td>{{$nv->hoten}}</td>
              <td>{{$nv->tel}}</td>
              <td>{{$nv->ngaysinh}}</td>
              <td>{{$nv->chucvu}}</td>
              <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/nhanvien/sua/{{$nv->IDNV}}">Sửa</a></td>
              <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/nhanvien/xoa/{{$nv->IDNV}}">Xóa</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection