@extends('admin.layout.layout')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">User</h2>
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
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Level</th>
              <th>Sửa</th>  
              <th>Xóa</th>
            </tr>
          </thead>
          <tbody>
            @foreach($user as $u)
            <tr class="table-info">
              <td>{{$u->id}}</td>
              <td>{{$u->name}}</td>
              <td>{{$u->email}}</td>
              <td>
                @if ($u->quyen == 1)
                  {{"Admin"}}
                @else
                  {{"Thường"}}
                @endif
              </td>
              <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/user/sua/{{$u->id}}">Sửa</a></td>
              <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/user/xoa/{{$u->id}}">Xóa</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection