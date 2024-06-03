  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark elevation-4" style="background-color: gray;">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="{{ asset('assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
            <a href="#" class="d-block" style="color: white;">Yossy Indra Kusuma</a>

            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline" style="color: white; background-color: white;">
  <div class="input-group" data-widget="sidebar-search"  style="color: black;">
  <input class="form-control form-control-sidebar" style="color: white; background-color: transparent;" type="search" placeholder="Search" aria-label="Search">

  <div class="input-group-append" style="color: #FFFAE6;">
  <button class="btn btn-sidebar" style="color: #FFFAE6;">
      <i class="fas fa-search fa-fw" style="color: white;"></i>
  </button>
</div>

  </div>
</div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt" style="color: white;"></i>
                        <p style="color: white;">
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link">
                                <i class="far fa-circle nav-icon" style="color: white;"></i>
                                <p style="color: white;">Dashboard v1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon" style="color: white;"></i>
                                <p style="color: white;">Dashboard v2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index3.html" class="nav-link">
                                <i class="far fa-circle nav-icon" style="color: white;"></i>
                                <p style="color: white;">Dashboard v3</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>