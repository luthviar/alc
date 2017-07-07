@include('Admin.AdminHead')
@extends('Admin.Template')
@section('section')
<div class = "PageContainer">
    <div class="quick-press">
		<h3>Personnel List</h3>
		<div class = "main-table">
			<table class="table table-striped">
			  <thead>
				<tr>
				  <th>Username</th>
				  <th>Name/Job</th>
				  <th>Status</th>
				  <th>Edit Status</th>
				  <th>Join Date<th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <td>12141241</td>
				  <td>Mark,IT Dept</td>
				  <td>Employee</td>
				  <td><a href="#">Edit</td>
				  <td>10 Agustus 2017</td>
				</tr>
				<tr>
				  <td>12141241</td>
				  <td>Mark,IT Dept</td>
				  <td>New Recruit</td>
				  <td><a href="#">Edit</td>
				  <td>10 Agustus 2017</td>
				</tr>
				<tr>
				  <td>12141241</td>
				  <td>Mark,IT Dept</td>
				  <td>New Recruit</td>
				  <td><a href="#">Edit</td>
				  <td>10 Agustus 2017</td>
				</tr>
			  </tbody>
			</table>
		</div>
	</div>
</div>
		


@endsection
