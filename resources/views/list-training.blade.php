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

<!-- Trainning List -->
<div class = "PageContainer">
    <div class="quick-press">
		<h3>Training List</h3>
		<a href="/training/create" class="btn btn-info">Create New Training</a><br><br>
		<div class = "main-table">
			<table id= "detailTable" class="table table-striped">
			  <thead>
				<tr>
				  <th>Nama Trainning</th>
				  <th>Modul</th>
				  <th>Department</th>
				  <th>Create Date</th>
				  <th>Publish</th>
				  <th></th>
				</tr>
			  </thead>
			  <tbody>
			  	@foreach($training as $trains)
				<tr>
				  <td>{{$trains->title}}</td>
				  <td>{{$trains['module']->nama}}</td>
				  @if(empty($trains['department']))
				  <td>-</td>
				  @else
				  <td>{{$trains['department']->nama_departmen}}</td>
				  @endif
				  <td>{{$trains->created_at}}</td>
				  @if($trains->is_publish == 1)
				  <td>publish</td> 
				  <td><a href="">hapus</a></td> 
				  @else
				  <td>blom dipublish</td> 
				  <td><a href="">publish sekarang</a></td> 
				  @endif
				</tr>
				@endforeach
			  </tbody>
			</table>
		</div>
	</div>
</div>
		


@endsection
