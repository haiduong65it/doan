@extends('admin.layout.layout')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">Thành viên</h2>
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
              <th>Giới tính</th>
              <th>Số điện thoại</th>
              <th>Email</th>
              <th>Địa chỉ</th>
              <th>Ngày sinh</th>
              <th>Xóa</th>
            </tr>
          </thead>
          <tbody>
            @foreach($thanhvien as $tv)
            <tr class="odd gradeX">
              <td>{{$tv->idtv}}</td>
              <td>{{$tv->hoten}}</td>
              <td>{{$tv->gioitinh}}</td>
              <td>{{$tv->tel}}</td>
              <td>{{$tv->email}}</td>
              <td>{{$tv->diachi}}</td>
              <td>{{$tv->ngaysinh}}</td>
              <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/nhanvien/xoa/{{$tv->idtv}}">Xóa</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection