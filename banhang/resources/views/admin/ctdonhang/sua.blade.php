@extends('admin.layout.layout')

@section('content')
<div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Nhân viên</h4>
      <p class="card-description">
          <code>{{$nhanvien->IDNV}}</code>  
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
      <form class="forms-sample" action="admin/nhanvien/sua/{{$nhanvien->IDNV}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
          <label for="InputPassword">Mật Khẩu</label>
          <input type="password" class="form-control" name="InputPassword" placeholder="Nhập Mật khẩu" value="{{$nhanvien->Matkhau}}">
        </div>
        <div class="form-group">
          <label for="InputName">Họ Tên</label>
          <input type="text" class="form-control" name="InputName" placeholder="Nhập Họ và Tên" value="{{$nhanvien->hoten}}">
        </div>
        <div class="form-group">
          <label for="InputTel">Số điện thoại</label>
          <input type="text" class="form-control" name="InputTel" placeholder="Nhập số điện thoại" value="{{$nhanvien->tel}}" >
        </div>
        <div class="form-group">
          <label for="InputBirth">Ngày sinh</label>
          <input type="date" class="form-control" name="InputBirth" placeholder="Chọn ngày sinh" value="{{$nhanvien->ngaysinh}}">
        </div>
        <div class="form-group">
          <label for="InputCV">Chức vụ</label><br>  
          <input type="text" class="form-control" name="Inputchucvu" placeholder="Nhập chức vụ" value="{{$nhanvien->chucvu}}"> 
        </div>
        </div>
        <button type="submit" class="btn btn-success mr-2">Sửa</button>
        <button type="reset" class="btn btn-light">Làm mới</button>
      </form>
      
    </div>
  </div>
</div>
@endsection