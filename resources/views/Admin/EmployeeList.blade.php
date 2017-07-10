@include('Admin.AdminHead')
@extends('Admin.Template')
@section('section')
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<script type="text/javascript">
    $(document).ready(function() {
        $('#detailTable').DataTable();
    });
</script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<div class = "PageContainer">
    <div class="quick-press">
		<h3>Employee List</h3>
		<div class = "main-table">
			<table id= "detailTable" class="table table-striped">
			  <thead>
				<tr>
				  <th>Username</th>
				  <th>Name/Job</th>
				  <th>Positition</th>
				  <th>Edit Status</th>
				  <th>Join Date<th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <td>12141241</td>
				  <td>Mark,IT Dept</td>
				  <td>Staff</td>
				  <td><a href="#">Edit</td>
				  <td>2017/10/12</td>
				</tr>
				<tr>
				  <td>12141241</td>
				  <td>Mark,IT Dept</td>
				  <td>General Manager</td>
				  <td><a href="#">Edit</td>
				  <td>2017/10/12</td>
				</tr>
				<tr>
				  <td>12141241</td>
				  <td>Mark,IT Dept</td>
				  <td>Executive Manager</td>
				  <td><a href="#">Edit</td>
				  <td>2017/10/12</td>
				</tr>
				<tr>
				  <td>12141241</td>
				  <td>Mark,IT Dept</td>
				  <td>Staff</td>
				  <td><a href="#">Edit</td>
				  <td>2017/10/12</td>
				</tr>
				<tr>
				  <td>12141241</td>
				  <td>Mark,IT Dept</td>
				  <td>Staff</td>
				  <td><a href="#">Edit</td>
				  <td>2017/10/12</td>
				</tr>
				<tr>
				  <td>12141241</td>
				  <td>Mark,IT Dept</td>
				  <td>Executive Manager</td>
				  <td><a href="#">Edit</td>
				  <td>2017/10/12</td>
				</tr>
				<tr>
				  <td>12141241</td>
				  <td>Mark,IT Dept</td>
				  <td>Executive Manager</td>
				  <td><a href="#">Edit</td>
				  <td>2017/10/16</td>
				</tr>
				<tr>
				  <td>12141241</td>
				  <td>Mark,IT Dept</td>
				  <td>Executive Manager</td>
				  <td><a href="#">Edit</td>
				  <td>2017/10/12</td>
				</tr>
				<tr>
				  <td>12141241</td>
				  <td>Mark,IT Dept</td>
				  <td>New Recruit</td>
				  <td><a href="#">Edit</td>
				  <td>2017/10/12</td>
				</tr>
				<tr>
				  <td>12141241</td>
				  <td>Mark,IT Dept</td>
				  <td>Employee</td>
				  <td><a href="#">Edit</td>
				  <td>2017/10/12</td>
				</tr>
				<tr>
				  <td>12141241</td>
				  <td>Mark,IT Dept</td>
				  <td>New Recruit</td>
				  <td><a href="#">Edit</td>
				  <td>2017/10/12</td>
				</tr>
				<tr>
				  <td>12141241</td>
				  <td>Mark,IT Dept</td>
				  <td>New Recruit</td>
				  <td><a href="#">Edit</td>
				  <td>2017/10/12</td>
				</tr>
				<tr>
				  <td>12141241</td>
				  <td>Mark,IT Dept</td>
				  <td>Employee</td>
				  <td><a href="#">Edit</td>
				  <td>2017/10/12</td>
				</tr>
				<tr>
				  <td>12141241</td>
				  <td>Mark,IT Dept</td>
				  <td>New Recruit</td>
				  <td><a href="#">Edit</td>
				  <td>2017/10/12</td>
				</tr>
				<tr>
				  <td>12141241</td>
				  <td>Mark,IT Dept</td>
				  <td>New Recruit</td>
				  <td><a href="#">Edit</td>
				  <td>2017/10/12</td>
				</tr>
				<tr>
				  <td>12141241</td>
				  <td>Mark,IT Dept</td>
				  <td>Employee</td>
				  <td><a href="#">Edit</td>
				  <td>2017/10/12</td>
				</tr>
				<tr>
				  <td>12141241</td>
				  <td>Mark,IT Dept</td>
				  <td>New Recruit</td>
				  <td><a href="#">Edit</td>
				  <td>2017/10/12</td>
				</tr>
				<tr>
				  <td>12141241</td>
				  <td>Mark,IT Dept</td>
				  <td>New Recruit</td>
				  <td><a href="#">Edit</td>
				  <td>2017/10/12</td>
				</tr>
			  </tbody>
			</table>
		</div>
	</div>
</div>
		


@endsection
