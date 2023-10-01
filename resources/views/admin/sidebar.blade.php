<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ url("/") }}" class="brand-link">
    <span class="brand-text font-weight-light" style="margin-left: 0.8rem">Bloomify</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset("/admin/dist/img/user.jpg") }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        @if(Auth::check())
        <span class="hidden-xs">{{ Auth::user()->name}}</span>
        @endif
      </div>
    </div>

      <!-- SidebarSearch Form -->
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <!-- Users -->
          <li class="nav-item">
            <a href="{{ route("user.index") }}" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>Users</p>
            </a>
          </li>
          <!-- Pembeli -->
          <li class="nav-item">
            <a href="{{ route("pembeli.index") }}" class="nav-link active">
              <i class="fas fa-users nav-icon"></i>
              <p>Pembeli</p>
            </a>
          </li>
          <!-- Produk -->
          <li class="nav-item">
            <a href="{{ route("produk.index") }}" class="nav-link active">
              <i class="nav-icon fas fa-tree"></i>
              <p>Produk</p>
            </a>
          </li>
          <!-- Pesanan -->
          <li class="nav-item">
            <a href="{{ route("pesanan.index") }}" class="nav-link active">
              <i class="fas fa-file-alt nav-icon"></i>
              <p>Pesanan</p>
            </a>
          </li>
          <!-- Laporan -->
          <li class="nav-item">
            <a href="{{ url("#") }}" class="nav-link active">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>Laporan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route("laser.index") }}" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>Laporan User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route("lali.index") }}" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>Laporan Pembeli</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route("laprok.index") }}" class="nav-link">
                  <i class="nav-icon fas fa-tree"></i>
                  <p>Laporan Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route("lanan.index") }}" class="nav-link">
                  <i class="nav-icon fas fa-file-alt"></i>
                  <p>Laporan Pesanan</p>
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