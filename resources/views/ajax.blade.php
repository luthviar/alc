<!DOCTYPE html>
<!--[if lte IE 8]> <html class="oldie" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="format-detection" content="telephone=no">
	<title>Admin Page</title>
	<link rel="icon" href="{{URL::asset('Elegantic/images/ALS.jpg')}}" type="image/jpg" sizes="16x16">
	<link rel="stylesheet" href="{{ URL::asset('css/Adminall.css')}}" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.js"></script>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" /> 
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
	<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

<style type="text/css">
/**
 * Override feedback icon position
 * See http://formvalidation.io/examples/adjusting-feedback-icon-position/
 */
#eventForm .form-control-feedback {
    top: 0;
    right: -15px;
}
</style>

  
</head>
<body>
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
					ALC-Admin Page
				</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">			
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown ">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						{{Auth::user()->username}}
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li>
                        		<a href="{{ route('logout') }}"
                            		onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            		Logout
                        		</a>
                        		@if(Auth::user()->is_admin == 1)
                        		<a href="/">
                            		Acting As User
                        		</a>
                        		@endif
		                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		                            {{ csrf_field() }}
		                        </form>
                    		</li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class="container-fluid main-container">
		<div class="col-md-2 sidebar">
			<ul class="nav nav-pills nav-stacked">
				<li><a href="/personnel">User</a></li>
				<li><a href="/training">Training</a></li>
				<li><a href="/access">Request Access</a></li>
				<li><a href="/struktur">Organizational Structure</a></li>
				<li><a href="/raport">Raport</a></li>
				<li><a href="/slider">Slider</a></li>
				<li><a href="/berita">News</a></li>
			</ul>
		</div>
		<div class="col-md-10 content">
			<div class="row">
		    	<div class="col-md-12 ">
		        	<div class="panel panel-default">
		            	<div class="panel-heading">Add New Organizational Structure</div>
		                	<div class="panel-body">
		                    	<form id="myform" class="form-horizontal" role="form" method="POST" action="{{ URL::action('PersonnelController@store') }}" novalidate>
                        			
                        			{{ csrf_field() }}

		                    		<div class="form-group">
			                        	<label for="username" class="col-md-4 control-label">Username</label>

			                        	<div class="col-md-6">
			                            	<input id="username" type="text" class="form-control" name="username" required autofocus>
			                        	</div>
			                    	</div>

				                    <div class="form-group">
				                        <label for="password" class="col-md-4 control-label">Password</label>

				                        <div class="col-md-6">
				                            <input id="password" type="password" class="form-control" name="password" required>
				                        </div>
				                    </div>
								
				                    <div class="form-group">
				                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

				                        <div class="col-md-6">
				                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
				                        </div>
				                    </div>
									
									<div class="form-group">
				                        <label for="fname" class="col-md-4 control-label">First Name</label>

				                        <div class="col-md-6">
				                            <input id="fname" type="text" class="form-control" name="fname"  required autofocus>
				                        </div>
				                    </div>
									
									<div class="form-group">
				                        <label for="lname" class="col-md-4 control-label">Last Name</label>

				                        <div class="col-md-6">
				                            <input id="lname" type="text" class="form-control" name="lname"  required autofocus>
				                        </div>
				                    </div>

									<div class="form-group">
				                        <label for="jenis_kelamin" class="col-md-4 control-label">Gender</label>                                     
				                        <div class="col-md-6">
				                            <select name="jenis_kelamin" class="selectpicker">
				                                <option value="1">Laki - Laki</option>
				                                <option value="0">Perempuan</option>
				                            </select><br>
				                        </div>
			                    	</div>
									
									<div class="form-group">
				                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

				                        <div class="col-md-6">
				                            <input id="email" type="email" class="form-control" name="email" required>
				                        </div>
				                    </div>
												
									
									<div class="form-group">
				                        <label for="phone_number" class="col-md-4 control-label">Phone Number</label>

				                        <div class="col-md-6">
				                            <input id="phone_number" type="text" class="form-control" name="no_hp" required>
				                        </div>
				                    </div>
									
									<div class="form-group">
				                        <label for="datePicker" class="col-md-4 control-label">Birth Date</label>
				                        <div class="col-md-6 date">
				                            <div class="input-group input-append date" id="datePicker">
				                                <input type="text" class="form-control" name="tanggal_lahir" />
				                                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
				                            </div>
				                        </div>
				                    </div>

									
									<div class="form-group">
				                        <label for="alamat" class="col-md-4 control-label">Adrress</label>

				                        <div class="col-md-6">
				                            <textarea rows="4" col="50" id="alamat" type="text"  name="alamat" required style="resize: none;"></textarea>
				                        </div>
				                    </div>

				                    <div class="form-group">
				                        <label for="is_admin" class="col-md-4 control-label">User Category</label>                                     
				                        <div class="col-md-6">
				                            <select name="is_admin" class="selectpicker">
				                                <option value="1">Admin</option>
				                                <option value="0">User</option>
				                            </select><br>
				                        </div>
			                    	</div>

				                    <!-- Data Karyawan-->
				                    <div class="container">
				                        <div class="row">
				                            <h3>Data Karyawan</h3>
				                        </div>
				                    </div>
				                    <div>
					                    <div class="form-group">
					                        <label for="nik" class="col-md-4 control-label">Employee Number</label>

					                        <div class="col-md-6">
					                            <input id="nik" type="text" class="form-control" name="nik">
					                        </div>
					                    </div>

					                    <div class="form-group">
					                        <label for="level_position" class="col-md-4 control-label">Level Position</label>                                     
					                        <div class="col-md-6">
					                            <select name="level_position" class="selectpicker">
					                                @foreach($level as $pos)
					                                <option value="{{$pos->id}}">{{$pos->nama_level}}</option>
					                                @endforeach
					                            </select><br>
					                        </div>
					                    </div>
				                
				                        <div class="form-group">
				                            <label for="divisi" class="col-md-4 control-label">Divition</label>                                     
				                            <div class="col-md-6">
				                                <select name="id_divisi" class="form-control" id="MyDivisi">
				                                    <option value="">..</option>
					                                @foreach($divisi as $div)
					                                <option value="{{$div->id_divisi}}">{{$div->nama_divisi}}</option>
					                                @endforeach
				                                    
				                                </select><br>
				                            </div>
				                        </div>
				                        <div class="form-group" id="Unit">
				                            <label for="divisi" class="col-md-4 control-label">Unit</label>                                     
				                            <div class="col-md-6">
				                                <select name="id_unit" class="form-control" id="MyUnit">
				                                    
				                                </select><br>
				                            </div>
				                        </div>
				                        <div class="form-group" id="Department">
				                        	<label for="divisi" class="col-md-4 control-label">Department</label>
				                            <div class="col-md-6">
				                                <select name="id_department" class="form-control" id="MyDepartment">
				                                    
				                                </select><br>
				                            </div>
				                             
				                        </div>
				                        <div class="form-group">
				                            <label for="section" class="col-md-4 control-label">Section</label>                                     
				                            <div class="col-md-6">
				                                <select name="id_section" class="form-control" id="MySection">
				                                    			                                
				                               	</select><br>
				                            </div>
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
			</div>	    	
		</div>
		<footer class="pull-left footer">
			<p class="col-md-12">
				<hr class="divider">
				Copyright &COPY; 2015 <a href="http://www.pingpong-labs.com">Gravitano</a>
			</p>
		</footer>
	</div>
</body>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script type="text/javascript">

	$('#MyDivisi').click(function() {
	  var id_divisi = $('#MyDivisi').val();
	  $.ajax({
	    type:"POST",
	    url:"/get-unit",
	    dataType: 'json',
	    data:{id_divisi:id_divisi,_token: '{{csrf_token()}}'},
	    beforeSend: function (xhr) {
            var token = $('meta[name="csrf_token"]').attr('content');

            if (token) {
                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
            }
        },
	    success: function(units) {
	    	var html = '';
	    	$.each(units.units, function(key, value){
	    		html += '<option value="'+value.id_unit+'">'+value.nama_unit+'</option>';	    		
	    		
	    	});
	    	$('#MyUnit').html(html);		
	    	
	    	
	    },
	    error: function(data){
	    	console.log(data);
        },
	  });
	  
	});

</script>

<script type="text/javascript">


	$('#MyUnit').click(function() {
	  var id_divisi = $('#MyDivisi').val();
	  var id_unit = $('#MyUnit').val();
	  $.ajax({
	    type:"POST",
	    url:"/get-department",
	    dataType: 'json',
	    data:{id_unit:id_unit,id_divisi:id_divisi,_token: '{{csrf_token()}}'},
	    beforeSend: function (xhr) {
            var token = $('meta[name="csrf_token"]').attr('content');

            if (token) {
                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
            }
        },
	    success: function(departments) {
	    	var html = '';
	    	$.each(departments.departments, function(key, value){	    		
	    		html += '<option value="'+value.id_department+'">'+value.nama_departmen+'</option>';
	    		
	    	});
	    	$('#MyDepartment').html(html);	
	    		
	    	
	    	
	    },
	    error: function(data){
	    	console.log(data);
        },
	  });
	  
	});


	
	

</script>

<script type="text/javascript">


	$('#MyDepartment').click(function() {
	  var id_divisi = $('#MyDivisi').val();
	  var id_unit = $('#MyUnit').val();
	  var id_department = $('#MyDepartment').val();
	  $.ajax({
	    type:"POST",
	    url:"/get-section",
	    dataType: 'json',
	    data:{id_department:id_department,id_unit:id_unit,id_divisi:id_divisi,_token: '{{csrf_token()}}'},
	    beforeSend: function (xhr) {
            var token = $('meta[name="csrf_token"]').attr('content');

            if (token) {
                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
            }
        },
	    success: function(sections) {
	    	var html = '';
	    	$.each(sections.sections, function(key, value){	    		
	    		html += '<option value="'+value.id_section+'">'+value.nama_section+'</option>';
	    		
	    	});
	    	$('#MySection').html(html);	
	    		
	    	
	    	
	    },
	    error: function(data){
	    	console.log(data);
        },
	  });
	  
	});


	
	

</script>

