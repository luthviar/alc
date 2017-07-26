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
<div class="col-md-12 ">
	<div class="panel panel-default">
	    <div class="panel-heading">List News</div>
	    <div class="panel-body">
			<a  class="btn btn-info" href="/berita/create">Create New News</a><br><br>
			 <div class = "main-table">
			  <table id= "detailTable" class="table table-striped">
			  <thead>
				<tr>
				  <th>News Title</th>
				  <th>Can Reply</th>
				  <th>Replies Count</th>
				  <th>Created At</th>
				  <th>Edit</th>
				</tr>
			  </thead>
			  <tbody>
			  	@foreach($news as $value)
				<tr>
				  <td><a href="/berita/{{$value->id}}">{{$value->title}}</a></td>
				  @if($value->can_reply == 1)
				  <td> Yes 
				  <span><a class="btn btn-danger" href="/berita/{{$value->id}}/nonactive">Deactive</a></span>
				  </td>
				  <td>{{$value['replies']->count()}}</td>
				  @else
				  <td >
				  <span style="opacity: 0.5;">No </span>
				  <span><a class="btn btn-warning" href="/berita/{{$value->id}}/active">Activicate</a></span></td>
				  <td>-</td>
				  @endif
				  <td>{{ \Carbon\Carbon::parse($value->created_at)->format('l jS \\of F Y')}}</td>
				  <td>
				  <span><a class="btn btn-default" href="/berita/{{$value->id}}/edit">edit</a></span></td>
				</tr>
				@endforeach
				
			  </tbody>
			</table>
			</div>
		</div>
	</div>
</div>
		


@endsection
