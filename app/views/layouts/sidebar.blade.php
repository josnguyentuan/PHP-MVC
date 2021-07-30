<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      @if (isset($_SESSION['AUTH']))
        <div class="image">
          {{-- {{BASE_URL . '/public/adminlte/'}}dist/img/user2-160x160.jpg --}}
          <img src="{{$_SESSION['AUTH']['avatar']}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info d-flex">
          <div class="col-sm-6">
            <a href="#" class="d-block">{{$_SESSION['AUTH']['name']}}</a>
          </div>
          <div class="col-sm-6">
            <a href="{{BASE_URL}}logout" class="d-block">Đăng xuất</a>
          </div>
        </div>
      @else
        <div class="info d-flex">
          <div class="col-sm-6">
            <a href="{{BASE_URL}}login" class="d-block">Đăng nhập</a>
          </div>
          <div class="col-sm-6">
            <a href="{{BASE_URL}}register" class="d-block">Tạo tài khoản</a>
          </div>
        </div>
      @endif
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="{{BASE_URL}}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Danh mục
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{BASE_URL . 'category'}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{BASE_URL . 'category/add'}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tạo mới</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fab fa-product-hunt"></i>
            <p>
              Sản phẩm
              <i class="fas fa-angle-left right"></i>
            </p>  
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{BASE_URL . 'product'}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{BASE_URL . 'product/add'}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tạo mới</p>
              </a>
            </li>

          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fab fa-product-hunt"></i>
            <p>
              Sản phẩm
              <i class="fas fa-angle-left right"></i>
            </p>  
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{BASE_URL . 'train'}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{BASE_URL . 'train/add'}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tạo mới</p>
              </a>
            </li>

          </ul>
        </li>
        <li class="nav-item">
          <a href="{{BASE_URL . 'logout'}}" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>

           Logout
          </a>

        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>