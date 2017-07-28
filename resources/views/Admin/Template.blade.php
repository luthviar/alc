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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="AdminLTE/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="AdminLTE/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="AdminLTE/dist/js/app.min.js"></script>


</body>
</html>