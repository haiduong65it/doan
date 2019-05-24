 <nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        @if(Auth::check())
        <div class="user-wrapper">
          <div class="profile-image">
            <img src="Admin_Asset/images/faces/face1.jpg" alt="profile image">
          </div>
          <div class="text-wrapper">
            <p class="profile-name">{{Auth::user()->name}}</p>
            <div>
              <small class="designation text-muted">Manager</small>
              <span class="status-indicator online"></span>
            </div>
          </div>
        </div>
        @endif
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#menu1" aria-expanded="false" aria-controls="menu1">
        <i class="menu-icon fa fa-address-card"></i>
        <span class="menu-title">Nhân viên</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="menu1">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="admin/nhanvien/danhsach">Danh sách nhân viên</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin/nhanvien/them">Thêm mới nhân viên</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#menu2" aria-expanded="false" aria-controls="menu2">
        <i class="menu-icon fa fa-address-card"></i>
        <span class="menu-title">Thành viên</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="menu2">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="admin/thanhvien/danhsach">Danh sách thành viên</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#menu3" aria-expanded="false" aria-controls="menu3">
        <i class="menu-icon fa fa-bookmark-o"></i>
        <span class="menu-title">Thương hiệu</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="menu3">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="admin/thuonghieu/danhsach">Danh sách thương hiệu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin/thuonghieu/them">Thêm mới thương hiệu</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#menu4" aria-expanded="false" aria-controls="menu4">
        <i class="menu-icon fa fa-mobile"></i>
        <span class="menu-title">Sản Phẩm</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="menu4">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="admin/sanpham/danhsach">Danh sách sản phẩm</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin/sanpham/them">Thêm mới sản phẩm</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#menu5" aria-expanded="false" aria-controls="menu5">
        <i class="menu-icon fa fa-navicon"></i>
        <span class="menu-title">Đơn hàng</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="menu5">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="admin/donhang/danhsach">Danh sách đơn hàng</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <i class="menu-icon mdi mdi-restart"></i>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="Admin_Asset/pages/samples/blank-page.html"> Blank Page </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Admin_Asset/pages/samples/login.html"> Login </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Admin_Asset/pages/samples/register.html"> Register </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Admin_Asset/pages/samples/error-404.html"> 404 </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Admin_Asset/pages/samples/error-500.html"> 500 </a>
          </li>
        </ul>
      </div>
    </li>
  </ul>
</nav>