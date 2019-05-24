@extends('admin.layout.layout')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">Chi tiết sản phẩm</h2>
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
              <th>Mã chi tiết</th>
              <th>Hệ điều hành</th>
              <th>Màn hình</th>
              <th>Ram</th>
              <th>Pin</th>
              <th>Bộ nhớ</th>
              <th>Thẻ sim</th>
              <th>Camera</th>
              <th>Sửa</th>  
              <th>Xóa</th>
            </tr>
          </thead>
          <tbody>
            @foreach($ctsanpham as $ct)
            <tr class="odd gradeX" align="center">
              <td>{{$ct->MaCT}}</td>
              <td>{{$ct->HDH}}</td>
              <td>{{$ct->manhinh}}</td>
              <td>{{$ct->ram}}</td>
              <td>{{$ct->pin}}</td>
              <td>{{$ct->bonho}}</td>
              <td>{{$ct->thesim}}</td>
              <td>{{$ct->camera}}</td>
              <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/nhanvien/sua/{{$ct->MaCT}}">Sửa</a></td>
              <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/nhanvien/xoa/{{$ct->MaCT}}">Xóa</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection