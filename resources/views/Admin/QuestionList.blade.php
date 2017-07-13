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

<!-- Question List -->
<div class = "PageContainer">
    <div class="quick-press">
		<h3>Question List</h3>
		<div class = "main-table">
			<table id= "detailTable" class="table table-striped">
			  <thead>
				<tr>
				  <th>Question</th>
				  <th>Detail</th>
				  <th>Delete</th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <td>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</td>
				  <td><a href='QuestionDetail'>Detail</a></td>
				  <td><a href="#" class="btn btn-info btn-lg">
				  <span class="glyphicon glyphicon-trash"></span>Delete </a></td>
				</tr>
				<tr>
				  <td>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</td>
				  <td><a href='QuestionDetail'>Detail</a></td>
				  <td><a href="#" class="btn btn-info btn-lg">
				  <span class="glyphicon glyphicon-trash"></span>Delete </a></td>
				</tr><tr>
				  <td>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</td>
				  <td><a href='QuestionDetail'>Detail</a></td>
				  <td><a href="#" class="btn btn-info btn-lg">
				  <span class="glyphicon glyphicon-trash"></span>Delete </a></td>
				</tr><tr>
				  <td>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</td>
				  <td><a href='QuestionDetail'>Detail</a></td>
				  <td><a href="#" class="btn btn-info btn-lg">
				  <span class="glyphicon glyphicon-trash"></span>Delete </a></td>
				</tr><tr>
				  <td>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</td>
				  <td><a href='QuestionDetail'>Detail</a></td>
				  <td><a href="#" class="btn btn-info btn-lg">
				  <span class="glyphicon glyphicon-trash"></span>Delete </a></td>
				</tr>
			  </tbody>
			</table>
		</div>
	</div>
</div>
		


@endsection
