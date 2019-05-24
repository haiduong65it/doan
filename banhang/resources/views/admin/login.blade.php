<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <base href="{{asset('')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Đăng nhập</title>
  <link rel="stylesheet" href="Admin_Asset/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="Admin_Asset/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="Admin_Asset/vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="Admin_Asset/css/style.css">
  <link rel="shortcut icon" href="Admin_Asset/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
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
              <form action="admin/dangnhap" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <legend>Sign in</legend>
                <div class="form-group">
                  <label class="label">Email</label>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Email" name="Email"" autofocus="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" placeholder="*********" id="password" name="password" value="">
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block" type="submit">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="Admin_Asset/vendors/js/vendor.bundle.base.js"></script>
  <script src="Admin_Asset/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="Admin_Asset/js/off-canvas.js"></script>
  <script src="Admin_Asset/js/misc.js"></script>
  <!-- endinject -->
</body>

</html>