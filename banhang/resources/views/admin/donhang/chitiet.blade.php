@extends('admin.layout.layout')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">Chi tiết đơn hàng</h2>
      <p class="card-description">
        <code>.{{dh->MaDH}}</code>
      </p>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Sản phẩm</th>
              <th>Số lượng</th>
            </tr>
          </thead>
          <tbody>
            @foreach($ctdonhang as $ct)
            <tr class="odd gradeX" align="center">
              <td>{{$ct->MaSP}}</td>
              <td>{{$ct->soluong}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <i class="fa fa-trash-o fa-fw"></i><a href="admin/donhang/danhsach">Quay lại danh sách</a>
    </div>
  </div>
</div>
@endsection