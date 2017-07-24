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
<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">Trainning List</div>
				<div class ="panel-body">
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
							  <td><a href="/training/view/{{$trains->id}}">{{$trains->title}}</a></td>
							  <td>{{$trains['module']->nama}}</td>
							  @if(empty($trains['department']))
							  <td>-</td>
							  @else
							  <td>{{$trains['department']->nama_departmen}}</td>
							  @endif
							  <td>{{ \Carbon\Carbon::parse($trains->created_at)->format('l jS \\of F Y')}}</td>
							  @if($trains->is_publish == 1)
							  <td><div class="text-center"><i class="fa fa-check" aria-hidden="true" style="color:green;"></i></div></td> 
							  <td><a href="/training/deactive/{{$trains->id}}">Deactive</a></td> 
							  @else
							  <td><div class="text-center"><i class="fa fa-times" aria-hidden="true" style="color:red;"></i></div></td> 
							  <td><a href="/training/publish/{{$trains->id}}">Publish Now</a></td> 
							  @endif
							</tr>
							@endforeach
						  </tbody>
					</table>
			</div>
		</div>
	</div>
</div>
		


@endsection
