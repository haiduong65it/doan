@extends('admin.layout.layout')

@section('content')
<div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Nhân viên</h4>
      <p class="card-description">
        <code>.Thêm</code>
      </p>
      @if ($errors->any())
        <div class="alert alert-danger">
          @foreach($errors->all() as $err)
            {{$err}}<br>
          @endforeach
        </div>
      @endif

      @if (session('thongbao'))
        <div class="alert alert-success">
          {{session('thongbao')}}
        </div>
      @endif
      <form class="forms-sample" action="admin/nhanvien/them" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
          <label for="InputID">ID Nhân Viên</label>
          <input type="text" class="form-control" name="InputID" placeholder="Nhập ID nhân viên">
        </div>
        <div class="form-group">
          <label for="InputPassword">Mật Khẩu</label>
          <input type="password" class="form-control" name="InputPassword" placeholder="Nhập Mật khẩu">
        </div>
        <div class="form-group">
          <label for="InputName">Họ Tên</label>
          <input type="text" class="form-control" name="InputName" placeholder="Nhập Họ và Tên">
        </div>
        <div class="form-group">
          <label for="InputTel">Số điện thoại</label>
          <input type="text" class="form-control" name="InputTel" placeholder="Nhập số điện thoại">
        </div>
        <div class="form-group">
          <label for="InputBirth">Ngày sinh</label>
          <input type="date" class="form-control" name="InputBirth" placeholder="Chọn ngày sinh">
        </div>
        <div class="form-group">
          <label for="InputCV">Chức vụ</label>
          <input type="text" class="form-control" name="Inputchucvu" placeholder="Nhập chức vụ"> 
        </div>
        </div>
        <button type="submit" class="btn btn-success mr-2">Thêm</button>
        <button type="reset" class="btn btn-light">Làm mới</button>
      </form>
    </div>
  </div>
</div>
@endsection