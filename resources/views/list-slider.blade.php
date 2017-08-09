@include('Admin.AdminHead')
@extends('Admin.Template')
@section('section')
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<script type="text/javascript">
    $(document).ready(function() {
        $('#detailTable').DataTable({
        });
    });
</script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<div class="col-md-12 ">
	<div class="panel panel-success">
	    <div class="panel-heading">
	    	<h4>Slider List</h4>
	    </div>
	    <div class="panel-body">
	    		<span class="pull-right" style="color: green;">
					<a href="/slider/create"><i class="glyphicon glyphicon-plus">New_Slider</i>
					 </a>
				</span><br><br>
				<div>
					<h4 style="color: red;">*Maximum slider active is 5</h4><br>
				</div>
		  
			<div class = "main-table">
			<table id= "detailTable" class="table table-striped">
			  <thead>
				<tr>
				  <th>Slider</th>
				  <th>Status</th>
				  <th>Created_at</th>
				</tr>
			  </thead>
			  <tbody>
			  	@foreach($sliders as $slider)
				<tr>
				  <td>{{$slider->title}}</td>
				  @if($slider->is_activ == 1)
				  	
					  <td> active 
					  <span><a class="btn btn-danger" href="/slider/{{$slider->id}}/nonactive">Deactive</a></span>
					  </td>
				  @else
				  <td >
					  @if($can_activ == true)
					  <span style="opacity: 0.5;">not active </span>
					  <span><a class="btn btn-warning" href="/slider/{{$slider->id}}/active">Activicate</a></span>
					  @else
					  <span style="opacity: 0.5;">not active </span>
					  <span><a class="btn btn-warning" disabled="true" >Activicate</a></span>
					  @endif
				  </td>
				  @endif
				  <td>{{ \Carbon\Carbon::parse($slider->created_at)->format('l jS \\of F Y')}}</td>
				  <td>
				  <span><a class="btn btn-default" href="/slider/{{$slider->id}}/edit">edit</a></span></td>
				</tr>
				@endforeach
				
			  </tbody>
			</table>
		</div>
		</div>
	</div>
</div>
		


@endsection
