@include('layouts.head')
<script type="text/javascript" src="{{URL::asset('js/textarea.js')}}"></script>
<style>
p.big {
    line-height: 300%;
	font-size : 15px;
}
</style>
<body>
    <!-- Header -->
    <div id="wrapper">
        <div class="wrapper-holder">
                 
            @include('layouts.header')
            <section id="main">
            <br>
						<div class="col-md-12">
							<div class="panel panel-success">
								<div class="panel-heading">Reset Password</div>
								<div class="panel-body">
							  <form id="myform" class="form-horizontal" action="/reset-password" role="form" method="POST">
							  
							  {{ csrf_field() }}

							  <input type="hidden" name="id_user" value="{{Auth::user()->id}}">

							  
								<div class="form-group">
									<label for="password" class="col-md-4 control-label">New Password</label>

									<div class="col-md-4">
										<input  type="password" id="new_pass" class="form-control" name="newpassword" required>
									</div>
								</div>
								
								<div class="form-group">
									<label for="password-confirm" class="col-md-4 control-label">Confirm New Password</label>

									<div class="col-md-4" id="div_confirm">
										<input  id="confirm_pass"  type="password" class="form-control"  required>
										
									</div>
									<div id="message"></div>
								</div>
								
								<br><br>
								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<button type="submit" id="btn-sub" class="btn btn-primary" disabled="true">
											Reset Password
										</button>
									</div>
								</div>								
							  </form>
							</div>
							</div>
						</div>
            </section>
        </div>
        <!-- Footer -->
        @include('layouts.footer')
    </div>

    @include('layouts.script')
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		
	

		$('#confirm_pass').on('input',function(e){
			var new_pass = $('#new_pass').val();
			var confirm_pass = $('#confirm_pass').val();
		 	
		 	if (new_pass === confirm_pass) {
				$('#message').html('*correct');
				$(':input[type="submit"]').prop('disabled', false);

			}else{
				$('#message').html('*your password is false');
				$(':input[type="submit"]').prop('disabled', true);
			}
		});

		$('#new_pass').on('input',function(e){
			var new_pass = $('#new_pass').val();
			var confirm_pass = $('#confirm_pass').val();
		 	
		 	if (confirm_pass !== "") {
			 	if (new_pass === confirm_pass) {
					$('#message').html('*correct');
					$(':input[type="submit"]').prop('disabled', false);

				}else{
					$('#message').html('*your password is false');
					$(':input[type="submit"]').prop('disabled', true);
				}
			}
		});
		
		

		
		
	});
</script>