@include('Admin.AdminHead')
@extends('Admin.Template')
@section('section')

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script>
	$(function() {
    $('#Optionals').hide(); 
    $('#MySelect').change(function(){
        if($('#MySelect').val() == '3') {
            $('#Optionals').show(); 
        } else {
            $('#Optionals').hide(); 
        } 
    });
});
</script>


<!--Form to Create New Trainning -->
		Create Trainning
		<br><br>
		<div class="w3-border" style="border-radius:5px">
			<div class="w3-green" style="height:24px;width:25%;text-align:center;border-radius:5px"></div>
		</div>
		<BR>
	
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Trainning Description</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="module" class="col-md-4 control-label">Module</label>                                     
                            <div class="col-md-6">
								<select name="module" id="MySelect" onchange="changeFunc();" class="selectpicker" >
									@foreach($module as $modul)
                                    <option value="{{$modul->id}}">{{$modul->nama}}</option>
                                    @endforeach
								</select><br>
                            </div>

                            </div>
						
						<div class="form-group">
                            <label for="title" class="col-md-4 control-label">Trainning Title</label>

                            <div class="col-md-6">
                                <input id="title" placeholder="Trainning Title" type="text" class="form-control" name="title"  required autofocus>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="description" class="col-md-4 control-label">Trainning Description</label>

                            <div class="col-md-6">
                                <textarea rows="4" col="50" id="description" type="text" class="form-control" name="description" required style="resize: none;">
								</textarea>
                            </div>
                        </div>
						
						
						
                        <div id="Optionals" class="form-group">
                            <label for="department" class="col-md-4 control-label">Select Departement</label>
							<div class="col-md-6">
								<select name="department" class="selectpicker" data-live-search="true">
                                    @foreach($department as $dept)
									<option value="{{$dept->id_department}}">{{$dept->nama_departmen}}</option>
                                    @endforeach
								</select><br>
                            </div>
                        </div>
							
						<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Next Step
                                </button>
                            </div>
                        </div>
                    </form>
  </div>
</div>

@endsection