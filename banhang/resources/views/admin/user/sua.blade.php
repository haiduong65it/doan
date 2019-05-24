@extends('admin.layout.layout')

@section('content')
<div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h2>Nhân viên</h2>
      <p class="card-description">
          <code>{{$user->name}}</code>  
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
      <form class="forms-sample" action="admin/user/sua/{{$user->id}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
          <label for="InputName">Họ Tên</label>
          <input type="text" class="form-control" name="InputName" placeholder="Nhập Họ và Tên" value="{{$user->name}}">
        </div>
        <div class="form-group">
          <label for="InputMail">Email</label>
          <input type="email" class="form-control" name="InputMail" placeholder="Nhập Email" value="{{$user->email}}" readonly="">
        </div>
        <div class="form-group">
          <label>Quyền</label>
          <label class="" ="radio-inline">
            <input type="radio" class="form-control" 
              @if ($user->quyen == 0) 
                {{"checked"}}
              @endif
            name="quyen" value="0">Thường
          </label>
          <label class="radio-inline">
            <input type="radio" class="form-control" 
              @if ($user->quyen == 1) 
                {{"checked"}}
              @endif
            name="quyen" value="1">Admin
          </label>
        </div>
        <div class="form-group">
          <input type="checkbox" name="changePass" id="changePass">
          <label for="InputPassword">Đổi mật Khẩu</label>
          <input type="password" class="form-control password" name="InputPassword" placeholder="Nhập mật khẩu" disabled="">
        </div>
        <div class="form-group">
          <label for="PasswordAgain">Nhập lại mật Khẩu</label>
          <input type="password" class="form-control password" name="PasswordAgain" placeholder="Nhập lại mật khẩu" disabled="">
        </div>
        <button type="submit" class="btn btn-success mr-2">Sửa</button>
        <button type="reset" class="btn btn-light">Làm mới</button>
      </form>
      
    </div>
  </div>
</div>
@endsection

@section('script')
  <script type="text/javascript">
    $(document).ready(function(){
      $("#changePass").change(function(){
        if ($(this).is(":checked")){
          $(".password").removeAttr('disabled');
        }
        else {
          $(".password").attr('disabled','')
        }
      });
    });
  </script>
@endsection