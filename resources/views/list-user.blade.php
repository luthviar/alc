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
		<h3>User List</h3>
		<div class = "main-table">
			<table id= "detailTable" class="table table-striped">
			  <thead>
				<tr>
				  <th>Name</th>
				  <th>Position</th>
				  <th>Divisi</th>
				  <th></th>
				</tr>
			  </thead>
			  <tbody>
			  	@foreach($personnels as $personnel)
				<tr>
				  <td>{{$personnel->fname}} {{$personnel->lname}}</td>
				  <td>{{$personnel->position}}</td>
				  <td>{{$personnel->divisi}}</td>
				  <td><span><a class="btn btn-info" href="/personnel/{{$personnel->id}}">view</a></span>
				  <span><a class="btn btn-default" href="/personnel/{{$personnel->id}}/edit">edit</a></span></td>
				</tr>
				@endforeach
				
			  </tbody>
			  </tbody>
			</table>
		</div>
	</div>
</div>
		


@endsection
