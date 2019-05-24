@extends('admin.layout.layout')

@section('content')
<div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Thương hiệu</h4>
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
      <form class="forms-sample" action="admin/thuonghieu/them" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
          <label for="InputID">Mã thương hiệu</label>
          <input type="text" class="form-control" name="InputID" placeholder="Nhập mã thương hiệu">
        </div>
        <div class="form-group">
          <label for="InputName">Tên thương hiệu</label>
          <input type="text" class="form-control" name="InputName" placeholder="Nhập Tên thương hiệu">
        </div>
        <button type="submit" class="btn btn-success mr-2">Thêm</button>
        <button type="reset" class="btn btn-light">Làm mới</button>
      </form>
    </div>
  </div>
</div>
@endsection