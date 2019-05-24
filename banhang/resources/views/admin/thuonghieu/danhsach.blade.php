@extends('admin.layout.layout')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">Thương hiệu</h2>
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
              <th>MaTH</th>
              <th>Tên Thương Hiệu</th>
              <th>Sửa</th>  
              <th>Xóa</th>
            </tr>
          </thead>
          <tbody>
            @foreach($thuonghieu as $th)
            <tr class="odd gradeX">
              <td>{{$th->MaTH}}</td>
              <td>{{$th->TenTH}}</td>
              <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/nhanvien/sua/{{$th->MaTH}}">Sửa</a></td>
              <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/nhanvien/xoa/{{$th->MaTH}}">Xóa</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection