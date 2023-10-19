<!DOCTYPE html>
<html lang="en">
@include('admin/common/head')

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    @include('admin/common/navbar')
    <!-- /.navbar -->

    <!-- Sidebar Container -->
    @include('admin/common/sidebar')

    <!-- Main content -->
    <div class="content-wrapper">
      @yield('content')
    </div>

    <!-- Footer -->
    @include('admin/common/footer')
  </div>
  <!-- ./wrapper -->


  @include('admin/common/script')
</body>

</html>