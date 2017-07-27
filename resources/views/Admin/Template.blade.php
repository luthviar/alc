  @include('Admin.Adminhead')

 <body class= "hold-transition skin-green sidebar-mini">
  <div class="wrapper">

  @include('Admin.header')
  <!-- Left side column. contains the logo and sidebar -->
  @include('Admin.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content" style="font-weight:normal">
	<div class = "row">
		@yield('section')
	</div>
  <!-- /.content-wrapper -->

  @include('Admin.Footer')
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->

</body>
</html>