@extends('admin.layout.layout')

@section('content')
<div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Thành viên</h4>
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
      <form class="forms-sample" action="admin/thanhvien/them" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
          <label for="InputID">ID Thành Viên</label>
          <input type="text" class="form-control" name="InputID" placeholder="Nhập ID thành viên">
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
          <label for="InputSex">Giới tính</label><br>
          <select name="InputSex">
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option>
            <option value="Khác">Khác</option>
          </select>
        </div>
        <div class="form-group">
          <label for="InputTel">Số điện thoại</label>
          <input type="text" class="form-control" name="InputTel" placeholder="Nhập số điện thoại">
        </div>
        <div class="form-group">
          <label for="InputMail">Email</label>
          <input type="email" class="form-control" name="InputMail" placeholder="Nhập Email">
        </div>
        <div class="form-group">
          <label for="InputAdd">Địa chỉ</label>
          <input type="text" class="form-control" name="InputAdd" placeholder="Nhập Thôn/Xóm/Ấp/Tổ dân phố">
        </div>
        <div class="form-group">
          <label for="tinhtp">Tỉnh/TP:</label>
          <select  class="form-control"  name="tinhtp" id="tinhtp">
            <option value="">--Tỉnh/Thành phố--</option>
            @foreach($tinh as $t)
            <option value="{{$t->id_tinh}}">{{$t->kieu." ".$t->ten}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="quanhuyen">Quận/Huyện:</label><br>
          <select  class="form-control"  name="quanhuyen" id="quanhuyen"  >
            <option value="">--Quận/Huyện--</option>
            @foreach($huyen as $h)
            <option value="{{$h->id_huyen}}">{{$h->kieu." ".$h->ten}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="xaphuong">Xã/phường: </label><br>
          <select class="form-control"  name="xaphuong" id="xaphuong"  >
            <option value="">--Xã/Phường--</option>
            @foreach($xa as $x)
            <option value="{{$x->id_xa}}">{{$x->kieu." ".$x->ten}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="InputBirth">Ngày sinh</label>
          <input type="date" class="form-control" name="InputBirth" placeholder="Chọn ngày sinh">
        </div>
        <button type="submit" class="btn btn-success mr-2">Thêm</button>
        <button type="reset" class="btn btn-light">Làm mới</button>
      </form>
    </div>
  </div>
</div>
@endsection

@section('script')
  <script type="text/javascript">
      $(document).ready(function(){
        $('#tinhtp').change(function(){
          var id_tinh = $(this).val();
          $.get("admin/ajax/quanhuyen/"+id_tinh,function(data){
            $('#quanhuyen').html(data);
          });
        });
        $('#quanhuyen').change(function(){
          var id_huyen = $(this).val();
          $.get("admin/ajax/xaphuong/"+id_huyen,function(data){
            $('#xaphuong').html(data);
          });
        });
      });
  </script>
@endsection