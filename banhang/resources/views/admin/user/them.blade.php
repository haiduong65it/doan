@extends('admin.layout.layout')

@section('content')
<div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">Users</h2>
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
      <form class="forms-sample" action="admin/user/them" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
          <label for="InputName">Họ Tên</label>
          <input type="text" class="form-control" name="InputName" placeholder="Nhập Họ và Tên">
        </div>
        <div class="form-group">
          <label for="InputMail">Email</label>
          <input type="email" class="form-control" name="InputMail" placeholder="Nhập Email">
        </div>
        <div class="form-group">
          <label>Quyền</label>
          <label class="" ="radio-inline">
            <input type="radio" class="form-control" name="quyen" value="0" checked="">Thường
          </label>
          <label class="radio-inline">
            <input type="radio" class="form-control" name="quyen" value="1">Admin
          </label>
        </div>
        <div class="form-group">
          <label for="InputPassword">Mật Khẩu</label>
          <input type="password" class="form-control" name="InputPassword" placeholder="Nhập mật khẩu">
        </div>
        <div class="form-group">
          <label for="PasswordAgain">Nhập lại mật Khẩu</label>
          <input type="password" class="form-control" name="PasswordAgain" placeholder="Nhập lại mật khẩu">
        </div>
        <button type="submit" class="btn btn-success mr-2">Thêm</button>
        <button type="reset" class="btn btn-light">Làm mới</button>
      </form>
    </div>
  </div>
</div>
@endsection