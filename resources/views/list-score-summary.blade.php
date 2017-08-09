@include('Admin.AdminHead')
@extends('Admin.Template')

@section('section')

<link rel="stylesheet" href="{{ URL::asset('css/Upload2.css')}}" />
<script type="text/javascript" src="{{ URL::asset('js/UpoladImg2.js')}}"></script>

<div class="col-md-12 ">
	<div class="panel panel-success">
	    <div class="panel-heading">
	    	<h4>Employee Raport</h4>
	    </div>
	    <div class="panel-body">
			<div class = "main-table">
				<table id= "detailTable" class="table table-striped">
				  <thead>
					<tr>
					  <th>Name</th>
					  <th>Raport</th>
					  <th>Created_At</th>
					  <th>Update Raport</th>
					</tr>
				  </thead>
				  <tbody>
					@foreach($employee as $personnel)
					<tr>
					  <td><strong><a href="/personnel/{{$personnel->id_personnel}}">{{$personnel['personnel']->fname}} {{$personnel['personnel']->lname}}</a></strong></td>
					  @if(empty($personnel['score']))
					  <td>-</td>
					  @else
					  <td><a href="{{URL::asset($personnel['score']->url_file_pdf)}}">{{$personnel['score']->file_name}}</a></td>
					  @endif
					  <td>{{ \Carbon\Carbon::parse($personnel['score']['created_at'])->format('l jS \\of F Y')}}</td>
					  <td><input type="button" class="btn btn-default btn-flat" value="Edit" onclick="msg({{$personnel['personnel']->id}})">
					  </td>
					</tr>
					@endforeach
					
				  </tbody>
				</table>
			</div>
		</div>
	</div>
</div>



<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<script type="text/javascript">
    $(document).ready(function() {
        var companyTable = $('#detailTable').DataTable();

    });
    
</script>
<script type="text/javascript">
	function msg($id) {
	    $("#id_user").val($id);
	    $('#modal').modal("show");
	}
</script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script><link rel="stylesheet" href="{{ URL::asset('css/Upload.css')}}" />
<script type="text/javascript" src="{{ URL::asset('js/UpoladImg.js')}}"></script>


<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
	  		<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Add New Raport</h4>
		  	</div>
			<div class="modal-body">
				<form id="myform" class="form-horizontal" role="form" method="POST" action="/raport/submit/{{$personnel['personnel']->id_user}}" enctype="multipart/form-data">
					{{ csrf_field() }}

				<input type="hidden" class="form-control" id="id_user" name="id_user">
				
				<div class="form-group">				
					<label for="question" class="col-md-4 control-label">Upload File</label>
					<div class="col-md-6">
						<div class="input-group">
							<span class="input-group-btn">
								<span class="btn btn-default btn-file">
									Browse… <input type="file" name="score" id="imgInp" name="image" accept="Application/pdf">
								</span>
							</span>
							<input type="text" class="form-control" readonly>
						</div></br>
					</div>
				</div>
				<div class="modal-footer">
					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" class="btn btn-primary">
								Update
							</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</div>

@endsection
