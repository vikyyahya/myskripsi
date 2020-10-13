<aside class="main-sidebar sidebar-light-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="{{asset ('lte3/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-2" style="opacity: .3">
    <span class="brand-text font-weight-light">Kreasi Artha Makmur</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel d-flex">
      <!-- <div class="image"> -->
      <!-- <img src="{{asset ('lte3/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image"> -->
      <!-- </div> -->
      <div class="info">
        <a href="#" class="d-block"> {{ Auth::user()->name }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="/dashboard" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/users" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              User
              <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/produk" class="nav-link">
            <i class="nav-icon fas fa-archive"></i>
            <p>
              Produk
              <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/order" class="nav-link">
            <i class="nav-icon fas fa-clipboard-list"></i>
            <p>
              Order
              <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li>

        <!-- <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-info-circle"></i>
            <p>
              Report
              <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li> -->

        <!-- <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cog"></i>
            <p>
              Setting
              <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li> -->


      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>