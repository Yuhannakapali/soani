<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Dashboard | SoAniTech </title>
    @include('admin.layout.newdashboard.css')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  @include('admin.layout.newdashboard.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin.layout.newdashboard.mainsidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    @yield('content') 
  </div>  
  <!-- /.content-wrapper -->
  @include('admin.layout.newdashboard.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('admin.layout.newdashboard.js')
@yield('javascript')
</body>
</html>
