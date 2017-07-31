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
					  <td><strong><a href="/personnel/{{$personnel->id}}">{{$personnel['personnel']->fname}} {{$personnel['personnel']->lname}}</a></strong></td>
					  @if(empty($personnel['score']))
					  <td>-</td>
					  @else
					  <td><a href="{{URL::asset($personnel['score']->url_file_pdf)}}">{{$personnel['score']->file_name}}</a></td>
					  @endif
					  <td>{{ \Carbon\Carbon::parse($personnel['score']['created_at'])->format('l jS \\of F Y')}}</td>
					  <td>
					  <!-- Large modal -->
							<a type="button" class="btn btn-success btn-flat" data-toggle="modal" data-target=".bs-example-modal-lg{{$personnel['personnel']->id}}">Update Raport</a>

							<div class="modal fade bs-example-modal-lg{{$personnel['personnel']->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
							  <div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
                					<h4 class="modal-title"><strong>{{$personnel['personnel']->fname}} {{$personnel['personnel']->lname}}</strong> | Add New Raport</h4>
									  
								  </div>
									<div class="modal-body">
										 <form id="myform" class="form-horizontal" role="form" method="POST" action="/raport/submit/{{$personnel['personnel']->id_user}}" enctype="multipart/form-data">
											{{ csrf_field() }}
											

											<div class="form-group">				
												<label for="question" class="col-md-4 control-label">Upload File</label>
												<div class="col-md-6">
													<div class="input-group image-preview">
														<input type="text" class="form-control image-preview-filename" disabled="disabled"> 
														<!-- don't give a name === doesn't send on POST/GET -->
														<span class="input-group-btn">
															<!-- image-preview-clear button -->
															<button type="button" class="btn btn-default image-preview-clear" style="display:none;">
															<span class="glyphicon glyphicon-remove"></span> Clear
															</button>
															<!-- image-preview-input -->
															<div class="btn btn-default image-preview-input">
																<span class="glyphicon glyphicon-folder-open"></span>
																<span class="image-preview-input-title">Browse</span>
																<input type="file" accept="Application/pdf" name="score" required="true" /> <!-- rename it -->
															</div>
														</span>
													</div><!-- /input-group image-preview [TO HERE]--> 
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
        $('#detailTable').DataTable();
    });
</script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>






@endsection
