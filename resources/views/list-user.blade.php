@include('Admin.AdminHead')
@extends('Admin.Template')
@section('section')
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<script type="text/javascript">
    $(document).ready(function() {
        $('#detailTable').DataTable({
        	"processing": true,
            "serverSide": true,
            "ajax":{
                url :"ajax_datatables/list_personnels.php", // json datasource
                type: "post",  // method  , by default get
                dataType: "json",
                error: function(){  // error handling
                    $("#detailTable").html("");
                    
                }
            }
        });
    });
</script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<div class="col-md-12">
   <div class ="portlet box">
	<div class="portlet-title">
       <div class="caption">
			<i class="fa fa-globe"></i>User List </div>
            <div class="tools"> </div>
       </div>
		<div class ="portlet-body">
			<span class="pull-right" style="color: green;">
				<a href="/personnel/create"><i class="glyphicon glyphicon-plus">New_User</i>
				 </a>
			</span><br><br>
		   <div class = "main-table">
			<table id= "detailTable" class="table table-striped">
			  <thead>
				<tr>
				  <th>Name</th>
				  <th>Position</th>
				  <th>Divisi</th>
				  <th>Department</th>
				  <th>Created_at</th>
				  <th>Authority</th>
				  <th>Status</th>
				  <th>Edit</th>
				</tr>
			  </thead>
			  <tbody>
			  	@foreach($personnels as $personnel)
				<tr>
				  <td><a  href="/personnel/{{$personnel->id}}">{{$personnel->fname}} {{$personnel->lname}}</a></td>
				  <td>{{$personnel->position}}</td>
				  <td>{{$personnel->divisi}}</td>
				  <td>{{$personnel->department->nama_departmen or "-"}}</td>
				  <td>{{ \Carbon\Carbon::parse($personnel->created_at)->format('l jS \\of F Y')}}</td>
				  @if($personnel['user']->is_admin == 1)
				  <td>Admin</td>
				  @else
				  <td>User</td>
				  @endif
				  @if($personnel['user']->is_aktif == 1)
				  <td>Aktif</td>
				  @else
				  	<td>Tidak Aktif</td>
				  @endif
				  
				  <td>
				  <span><a class="btn btn-default" href="/personnel/{{$personnel->id}}/edit">edit</a></span></td>
				</tr>
				@endforeach
				
			  </tbody>
			</table>
		  </div>
		</div>
	</div>
</div>

@endsection
