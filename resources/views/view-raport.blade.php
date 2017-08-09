@include('layouts.head')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.detailTable').DataTable();
    });
</script>

<body>

    <!-- Header -->
    <div id="wrapper">
        <div class="wrapper-holder">
            @include('layouts.header')
        
            <br>
            
            <section id="main">
					<div id="exTab1">
                        <ul  class="nav nav-tabs nav-justified">
                            <li class="active">
                                <a  href="#myprofile" data-toggle="tab">My Profile</a>
                            </li>
                            <li>
                                <a href="#mytraining" data-toggle="tab">My Training</a>
                            </li>
                            <li>
                                <a href="#myraport" data-toggle="tab">My Raport</a>
                            </li>
                        </ul>
						<br><br>
						
						<div class="tab-content">
							<div class="tab-pane active" id="myprofile">
								<div class="panel panel-success">
									<div class="panel-heading">
										<h4>My Profile</h4>
									</div>
								  <div class="panel-body">
									<h3 class="panel-title"><strong>{{$personnel->fname}} {{$personnel->lname}}</strong></h3>
								  </div>
								<div class="panel-body">
								<div class="row">
									  <table class="table table-user-information">
										<tbody>
										  <tr>
											<td width="50%">Username</td>
											<td width="50%">{{$personnel['user']->username}}</td>
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
											<td>{{strip_tags($personnel->alamat)}}</td>
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
								  </div>  
							   </div>
							</div>
							
							
					  </div>
						
						<div class ="tab-pane"  id="mytraining">
							<div class="panel panel-success">
							  <div class="panel-heading">List Training  </div>
							  <div class ="panel-body">
								 <div class = "main-table">
								<table class="table table-striped detailTable">
								  <thead>
									<tr>
									  <th>Training</th>
									  <th>Pre Test Score</th>
									  <th>Post Test Score</th>
									  <th>Test Date</th>
									</tr>
								  </thead>
								  <tbody>
									@foreach($personnel['training'] as $training)
									<tr>
									  <td><a href="/training/{{$training->id}}">{{$training['info']->title}}</a></td>
									  <td>{{$training->pre_test_score}}</td>
									  <td>{{$training->post_test_score}}</td>
									  <td>{{ \Carbon\Carbon::parse($training->created_at)->format('l jS \\of F Y')}}</td>
									</tr>
									@endforeach
								  </tbody>
								</table>
								</div>
							  </div>
							</div>
						  </div>
						  
						  
						<div class ="tab-pane" id="myraport"> 
								<div class="panel panel-success">
								  <div class="panel-heading">User Raport</div>
									<div class ="panel-body">
									  <div class = "main-table">
										<table class="table table-striped detailTable">
										  <thead>
											<tr>
											  <th>Raport</th>
											  <th>Created at</th>
											</tr>
										  </thead>
										  <tbody>
											@foreach($personnel['score'] as $score)
											<tr>
											  <td><a href="{{URL::asset($score->url_file_pdf)}}">{{$score->file_name}}</a></td>
											  <td>{{ \Carbon\Carbon::parse($score->created_at)->format('l jS \\of F Y')}}</td>
											</tr>
											@endforeach
										  </tbody>
										</table>
									  </div>
									</div>
								  </div>
								</div>
						</div>
					  
					</div>

                
            </section>
            
            
            
            
            
            
            
        </div>
        
        <!-- Footer -->
        @include('layouts.footer')
    </div>
	<script type="text/javascript" src="{{URL::asset('Elegantic/js/jquery.bxslider.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('Elegantic/js/jquery.placeholder.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('Elegantic/js/jquery.uniform.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('Elegantic/js/fancySelect.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('Elegantic/js/main.js')}}"></script>
</body>
</html>

