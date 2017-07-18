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
		<h3>Slider</h3>
		<div class = "main-table">
			<div class="row">
				<div class="container">
					<a   class="btn btn-info" href="/slider/create">Create New Slider</a>
				</div>
			</div>
			<br>
			<table id= "detailTable" class="table table-striped">
			  <thead>
				<tr>
				  <th>Slider</th>
				  <th>Activ</th>
				  <th></th>
				</tr>
			  </thead>
			  <tbody>
			  	@foreach($sliders as $slider)
				<tr>
				  <td>{{$slider->title}}</td>
				  @if($slider->is_activ == 1)
				  <td> active 
				  <span><a class="btn btn-danger" href="/slider/{{$slider->id}}/nonactive">nonaktifkan</a></span>
				  </td>

				  @else
				  <td >
				  <span style="opacity: 0.5;">not active </span>
				  <span><a class="btn btn-warning" href="/slider/{{$slider->id}}/active">aktifkan</a></span></td>
				  @endif
				  <td>
				  <span><a class="btn btn-default" href="/slider/{{$slider->id}}/edit">edit</a></span></td>
				</tr>
				@endforeach
				
			  </tbody>
			  </tbody>
			</table>
		</div>
	</div>
</div>
		


@endsection