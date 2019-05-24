<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <base href="{{asset('')}}">
  <title>Trang chủ</title>
  <link rel="stylesheet" href="Admin_Asset/vendors/iconfonts/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="Admin_Asset/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="Admin_Asset/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="Admin_Asset/vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="Admin_Asset/css/style.css">
  <link rel="shortcut icon" href="Admin_Asset/images/favicon.png" />
  {{-- <link rel="stylesheet" href="Admin_Asset/css/css/bootstrap.min.css"> --}}
</head>
<body>
	<div class="container-scroller">
		@include('admin.layout.navbar.navbar')

		<div class="container-fluid page-body-wrapper">
			@include('admin.layout.sidebar.sidebar')
			<div class="main-panel">
        		<div class="content-wrapper">
					@yield('content')
				</div>
			</div>
		</div>
		@include('admin.layout.footer.footer')
	</div>

	<script src="Admin_Asset/vendors/js/vendor.bundle.base.js"></script>
	<script src="Admin_Asset/vendors/js/vendor.bundle.addons.js"></script>
	<script src="Admin_Asset/js/off-canvas.js"></script>
	<script src="Admin_Asset/js/misc.js"></script>
	<script src="Admin_Asset/js/dashboard.js"></script>
	@yield('script');
</body>
</html>