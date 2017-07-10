@include('Admin.AdminHead')
@extends('Admin.Template')
@section('section')

<!--Form to Create New Trainning -->
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Trainning</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Module</label>                                     
                            <div class="col-md-6">
								<select name="job_family" class="selectpicker" data-live-search="true">
									<option value="">Modul A</option>
									<option value="">Modul B</option>
									<option value="">Modul C</option>
									<option value="">Modul D</option>
								</select><br>
                            </div>

                            </div>
						
						<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Trainning Title</label>

                            <div class="col-md-6">
                                <input id="username" placeholder="Trainning Title" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Trainning Description</label>

                            <div class="col-md-6">
                                <textarea rows="4" col="50" id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
								</textarea>
                            </div>
                        </div>
						
						<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Enroll Key</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" placeholder="Trainning Title" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						
                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Select Departement</label>
							<div class="col-md-6">
								<select name="job_family" class="selectpicker" data-live-search="true">
									<option value="">Departement A</option>
									<option value="">Departement B</option>
									<option value="">Departement C</option>
									<option value="">Departement D</option>
								</select><br>
                            </div>

                            </div>
							
							 <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create Trainning
                                </button>
                            </div>
                        </div>
  </div>
</div>

@endsection