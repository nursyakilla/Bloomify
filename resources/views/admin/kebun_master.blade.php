<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Selamat Datang di Dashboard Bloomify</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset("/admin/plugins/fontawesome-free/css/all.min.css") }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset("/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css") }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset("/admin/dist/css/adminlte.min.css") }}">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    @include('sweetalert::alert')

      <!-- Navbar -->
      @include('admin.navbar')
      <!-- /.navbar -->
  
      <!-- Main Sidebar Container -->
      @include('admin.sidebar')
  
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page Header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">@yield('title')</h1>
              </div><!-- col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                  <li class="breadcrumb-item active">@yield('title')</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
  
          <!-- Main Content -->
          @yield('admin.index')
          <!-- Content Wrapper -->
  
          <!-- Control Sidebar -->
          <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
          </aside>
          <!-- /.control-sidebar -->
  
          <!-- Main Footer -->
          @include('admin.footer')
      </div>
    </div>
  <!-- ./wrapper -->
  
  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="{{ asset("/admin/plugins/jquery/jquery.min.js") }}"></script>
  <!-- Bootstrap -->
  <script src="{{ asset("/admin/plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
  <!-- overlayScrollbars -->
  <script src="{{ asset("/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js") }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset("/admin/dist/js/adminlte.js") }}"></script>
  
  <!-- PAGE PLUGINS -->
  <!-- Package Alert -->
  <script src=”https://unpkg.com/sweetalert/dist/sweetalert.min.js”></script>
  <!-- jQuery Mapael -->
  <script src="{{ asset("/admin/plugins/jquery-mousewheel/jquery.mousewheel.js") }}"></script>
  <script src="{{ asset("/admin/plugins/raphael/raphael.min.js") }}"></script>
  <script src="{{ asset("/admin/plugins/jquery-mapael/jquery.mapael.min.js") }}"></script>
  <script src="{{ asset("/admin/plugins/jquery-mapael/maps/usa_states.min.js") }}"></script>
  <!-- ChartJS -->
  <script src="{{ asset("/admin/plugins/chart.js/Chart.min.js") }}"></script>
  
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset("/admin/dist/js/demo.js") }}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{ asset("/admin/dist/js/pages/dashboard2.js") }}"></script>
  </body>
  </html>