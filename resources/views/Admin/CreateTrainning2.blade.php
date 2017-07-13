@include('Admin.AdminHead')
@extends('Admin.Template')
@section('section')

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<!--Form to Create New Trainning -->
		Create Trainning
		<br><br>
		<div class="w3-border" style="border-radius:5px">
			<div class="w3-green" style="height:24px;width:25%;text-align:center;border-radius:5px">25%</div>
		</div>
		<BR>
	
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create PreTest</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}


                            
						<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">PreTest Duration</label>

                            <div class="col-md-2">
                                <input id="username"onkeypress='return event.charCode >= 48 && event.charCode <= 57'  placeholder="IN MINUTES" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Number Of Question</label>

                            <div class="col-md-2">
                                <input id="username" placeholder="Trainning Title" onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
							
							 <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" href="CreatePreTest" class="btn btn-primary">
                                    Next Step
                                </button>
                            </div>
                        </div>
  </div>
</div>

@endsection