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
	    <div class="panel-heading">
	    	Organizational Structure List
	    </div>
	    <div class="panel-body">
					<a class="btn btn-info" href="/slider/create">Create New Org. Structure</a><br><br>
			<div class = "main-table">
				<table id= "detailTable" class="table table-striped">
		  			<thead>
						<tr>
			  				<th>Divisi</th>
			  				<th>Unit</th>
							<th>Department</th>
			  				<th>Section</th>
						</tr>
		  			</thead>
		  			<tbody>
		  				@foreach($struktur as $org_struk)
						<tr>
						  <td>{{$org_struk['divisi']['nama_divisi']}}</td>
						  <td>{{$org_struk['unit']['nama_unit']}}</td>
						  <td>{{$org_struk['department']['nama_departmen']}}</td>
						  <td>{{$org_struk['section']['nama_section']}}</td>
						</tr>
						@endforeach
		  			</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


@endsection
