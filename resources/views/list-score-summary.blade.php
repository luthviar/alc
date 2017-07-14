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

<link rel="stylesheet" href="{{ URL::asset('css/Upload.css')}}" />
<script type="text/javascript" src="{{ URL::asset('js/UpoladImg.js')}}"></script>


<script>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
</script>
<div class = "PageContainer">
    <div class="quick-press">
		<h3>Employee Raport</h3>
		<div class = "main-table">
			<table id= "detailTable" class="table table-striped">
			  <thead>
				<tr>
				  <th>Name</th>
				  <th>Raport</th>
				  <th></th>
				</tr>
			  </thead>
			  <tbody>
			  	@foreach($employee as $personnel)
				<tr>
				  <td>{{$personnel['personnel']->fname}} {{$personnel['personnel']->lname}}</td>
				  @if(empty($personnel['score']))
				  <td>-</td>
				  @else
				  <td><a href="{{URL::asset($personnel['score']->url_file_pdf)}}">{{$personnel['score']->file_name}}</a></td>
				  @endif
				  <td>
				  <!-- Large modal -->
						<a type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg{{$personnel['personnel']->id}}">Add New Raport</a>

						<div class="modal fade bs-example-modal-lg{{$personnel['personnel']->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
						  <div class="modal-dialog modal-lg" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
			                      <h4 class="modal-title" id="myModalLabel">{{$personnel['personnel']->fname}} {{$personnel['personnel']->lname}}</h4>
			                      <h5>Add New Raport </h5>
			                    <div class="modal-body">

					                 <form id="myform" class="form-horizontal" role="form" method="POST" action="/raport/submit/{{$personnel['personnel']->id_user}}" enctype="multipart/form-data">
		                        		{{ csrf_field() }}
			                    		

			                    		<div class="form-group">
				                        <label for="score" class="col-md-4 control-label">Upload PDF File</label>

				                        <div class="col-md-6">
				                             <div class="input-group">
				                                <input type="file" name="score">
				                            </div></br>
				                        </div>
				                    </div>


										
									
				                    <div class="form-group">
				                        <div class="col-md-6 col-md-offset-4">
				                            <button type="submit" class="btn btn-primary">
				                                Submit
				                            </button>
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
			  </tbody>
			</table>
		</div>
	</div>
</div>
		


@endsection
