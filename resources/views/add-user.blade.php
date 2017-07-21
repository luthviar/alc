@include('Admin.AdminHead')
@extends('Admin.Template')
@section('section')
<script>
    $(function() {
    $('#unit').hide(); 
    $('#department').hide();
    $('#section').hide();
    $('#divisi').change(function(){
        $('#unit').show();
    });
    $('#unit').change(function(){
        $('#department').show();
    });
    $('#department').change(function(){
        $('#section').show();
    });
});
</script>

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Add New User</div>
                <div class="panel-body">
                <div class="container">
                    <div class="row">
                        <h3>User Profile</h3>
                    </div>
                </div>
                    <form id="myform" class="form-horizontal" role="form" method="POST" action="{{ URL::action('PersonnelController@store') }}">
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
                            <textarea rows="4" col="50" id="alamat" type="text" class="form-control" name="alamat" required style="resize: none;"></textarea>
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
                    <div class="form-group" id="divisi">
                        <label for="divisi" class="col-md-4 control-label">Divition</label>                                     
                        <div class="col-md-6">
                            <select name="divisi" class="selectpicker">
                                <option value="">..</option>
                                @foreach($divisi as $div)
                                <option value="{{$div->id_divisi}}">{{$div->nama_divisi}}</option>
                                @endforeach
                            </select><br>
                        </div>
                    </div>
                    <div class="form-group" id="unit">
                        <label for="unit" class="col-md-4 control-label">Unit</label>                                     
                        <div class="col-md-6">
                            <select name="unit" class="selectpicker">
                                <option value="">..</option>
                                @foreach($unit as $unt)
                                <option value="{{$unt->id_unit}}">{{$unt->nama_unit}}</option>
                                @endforeach
                            </select><br>
                        </div>
                    </div>
                    <div class="form-group" id="department">
                        <label for="department" class="col-md-4 control-label">Department</label>                                     
                        <div class="col-md-6">
                            <select name="department" class="selectpicker">
                                <option value="">..</option>
                                @foreach($department as $deps)
                                <option value="{{$deps->id_department}}">{{$deps->nama_departmen}}</option>
                                @endforeach
                            </select><br>
                        </div>
                    </div>
                    <div class="form-group" id="section">
                        <label for="section" class="col-md-4 control-label">Section</label>                                     
                        <div class="col-md-6">
                            <select name="section" class="selectpicker">
                                <option value="">..</option>
                                @foreach($section as $sect)
                                <option value="{{$sect->id_section}}">{{$sect->nama_section}}</option>
                                @endforeach
                            </select><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Add User
                            </button>
                        </div>
                    </div>
                    </form>


                    
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
$(document).ready(function() {
    $('#datePicker')
        .datepicker({
            format: 'yyyy-mm-dd'
        })
        .on('changeDate', function(e) {
            // Revalidate the date field
            $('#eventForm').formValidation('revalidateField', 'date');
        });

    $('#eventForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'The name is required'
                    }
                }
            },
            date: {
                validators: {
                    notEmpty: {
                        message: 'The date is required'
                    },
                    date: {
                        format: 'YYYY-MM-DD',
                        message: 'The date is not a valid'
                    }
                }
            }
        }
    });


    
});
</script>
