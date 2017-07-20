@include('Admin.AdminHead')
@extends('Admin.Template')
@section('section')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<script src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#detailTable').DataTable();
    });
</script>
<script src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">Request Board</div>
				<div class ="panel-body">
                    <div id="exTab1">
                        <ul  class="nav nav-tabs nav-justified">
                            <li class="active">
                                <a  href="#passwordrequest" data-toggle="tab">Password Request</a>
                            </li>
                            <li>
                                <a href="#trainningrequest" data-toggle="tab">Trainning Request</a>
                            </li>
                        </ul>
				

                        <div class="tab-content">
                            <div class="tab-pane active" id="passwordrequest">

                                <h1>Password Request</h1>
								<table id="detailTable" class="table table-striped">
								<thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Name</th>
									<th>Email</th>
									<th>Phone</th>
                                    <th>Reset Password</th>
                                </tr>
                                </thead>
                                    <tbody>
                                        <tr>
                                            <td>130291831412</td>
                                            <td>Rohmat Taufik</td>
                                            <td>Rohmat.taufik@bla.com</td>
                                            <td>08726182718</td>
                                            <td><span><a class="btn btn-info">Reset</a></span></td>
                                        </tr>                                   
                                     </tbody>
								</table>


                            </div>
						</div>
		</div>
	</div>



@endsection