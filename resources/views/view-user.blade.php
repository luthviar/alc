@include('Admin.AdminHead')
@extends('Admin.Template')
@section('section')
<!--User Prfoile-->
<link rel="stylesheet" href="{{ URL::asset('css/EditProfile.css')}}" />
<script type="text/javascript" src="js/EditProfile.js"></script>

      <div class="row">
        <div class="panel panel-default">
                <div class="panel-heading">User Profile</div>
                <div class="panel-body">
   
              <h3 class="panel-title">{{$personnel->fname}} {{$personnel->lname}}</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Username</td>
                        <td>{{$personnel['user']->username}}</td>
                      </tr>
                      <tr>
                        <td>Positition</td>
                        @if(empty($personnel->struktur))
                        <td>-</td>
                        @else
                        <td>{{$personnel['level']->nama_level}}</td>
                        @endif
                      </tr>
                      <tr>
                        <td>Section</td>
                        @if(empty($personnel->struktur) or empty($personnel['section']))
                        <td>-</td>
                        @else
                        <td>{{$personnel['section']->nama_section}}</td>
                        @endif
                      </tr>
                      <tr>
                        <td>Department</td>
                        @if(empty($personnel->struktur) or empty($personnel['department']))
                        <td>-</td>
                        @else
                        <td>{{$personnel['department']->nama_departmen}}</td>
                        @endif
                      </tr>
                      <tr>
                        <td>Unit</td>
                        @if(empty($personnel->struktur) or empty($personnel['unit']))
                        <td>-</td>
                        @else
                        <td>{{$personnel['unit']->nama_unit}}</td>
                        @endif
                      </tr>
                      <tr>
                        <td>Divisi</td>
                        @if(empty($personnel->struktur) or empty($personnel['divisi']))
                        <td>-</td>
                        @else
                        <td>{{$personnel['divisi']->nama_divisi}}</td>
                        @endif
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td>{{$personnel->tanggal_lahir}}</td>
                      </tr>
                      <tr>
                        <td>Gender</td>
                        @if($personnel->jenis_kelamin == 1)
                        <td>Male</td>
                        @else
                        <td>Female</td>
                        @endif
                      </tr>
                        <tr>
                        <td>Home Address</td>
                        <td>{{$personnel->alamat}}</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td>{{$personnel->email}}</td>
                      </tr>
                        <td>Phone Number</td>
                        <td>{{$personnel->no_hp}}</td>
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  <a href="#" class="btn btn-primary">Grade History</a>
                  <a href="#" class="btn btn-primary">User Activity</a>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="/personnel/{{$personnel->id}}/edit" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
        </div>
      </div>
    </div>
</div>

@endsection