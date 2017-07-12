@include('Admin.AdminHead')
@extends('Admin.Template')
@section('section')

<!--Edit User Prfoile-->
<link rel="stylesheet" href="{{ URL::asset('css/EditProfile.css')}}" />
<script type="text/javascript" src="js/EditProfile.js"></script>

      <div class="row">
        <div class="panel panel-default">
                <div class="panel-heading">Trainning Info</div>
            
			<div class="panel-body">
              <div class="row">
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>

                        <td>Trainning Name:</td>
                        <td>Procuremenet</td>
                      </tr>
					  <tr>
                        <td>Modul:</td>
                        <td>Functional Module</td>
                      </tr>
					  <tr>
                        <td>Department:</td>
                        <td>Finance</td>

                        <td>Username</td>
                        <td>12315912</td>
                      </tr>
					  <tr>
                        <td>Department</td>
                        <td>Programming</td>

                      </tr>
					  <tr>
                        <td>Positition</td>
                        <td>Staff</td>
                      </tr>
					  <tr>

                        <td>Pre-Test:</td>
                        <td><a href='EditPreTest'>Detail Pre-Test</a></td>
                      </tr>
                      <tr>
						<td>Materi:</td>
                        <td><a href='EditMateri'>Detail Materi</a></td>

                        <td>Office</td>
                        <td>ISTS</td>
                      </tr>
                      <tr>
                        <td>Hire date</td>
                        <td>06/23/2013</td>

                      </tr>
					  <tr>
						<td>Post-Test:</td>
                        <td><a href='EditPostTest'>Detail Post-Test</a></td>
                      </tr>
                         <tr>
                          <td>Description</td>
						  <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
						  </td>                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  <a href="#" class="btn btn-primary">Participant List</a>
                  <a href="#" class="btn btn-primary">User Activity</a>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <span class="pull-right">
                            <a href="EditProfileForm" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
        </div>
      </div>
    </div>
</div>

@endsection