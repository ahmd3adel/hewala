@include('admin.parts.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Navbar -->
@include('admin.parts.main-header')


    @include('admin.parts.side_bar')


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('admin.parts.content_header')
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        @yield('content')
        <!-- /.row -->
        <!-- Main row -->
@yield('accounts_state')
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@include('admin.parts.footer')


  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('admin.parts.scripts')

</body>
</html>
