<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
     
      <span class="brand-text font-weight-light">Quản Trị Website</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('public/backend/dist/img/avatar5.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item ml-2   btn-primary active">
            <a href="{{route('admin.show')}}" class="nav-link">
              <i class="fas fa-home"></i>
              <p class="ml-1">
                 Trang chủ Admin
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item ml-2">
            <a href="{{route('admin.listuser')}}" class="nav-link">
              <i class="fas fa-user"></i>
              <p class="ml-2">
                Quản lý người dùng
            
              </p>
            </a>

          </li>
          <li class="nav-item ml-2">
            <a href="{{url('/admin/manage-category')}}" class="nav-link">
              <i class="fas fa-user"></i>
              <p class="ml-2">
                Quản lý categogy
              </p>
            </a>

          </li>
     
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>