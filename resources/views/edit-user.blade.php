@include('Admin.AdminHead')
@extends('Admin.Template')
@section('section')
<?php require_once "cuteeditor_files/include_CuteEditor.php" ?>

    
        <div class="col-md-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h4>Edit User Profile</h4>
                </div>
                <div class="panel-body">
                <div class="container">
                    <div class="row">
                        <h3>Data Diri</h3>
                    </div>
                </div>
                    <form id="myform" class="form-horizontal" role="form" method="POST" action="/personnel/submit">
                        {{ csrf_field() }}
                    
                    <input type="hidden" class="form-control" name="id_personnel" value="{{$personnel->id}}" required autofocus>

                    <div class="form-group">
                        <label for="username" class="col-md-4 control-label">Username</label>

                        <div class="col-md-6">
                            <input id="username" type="text" class="form-control" name="username" required autofocus value="{{$personnel['user']->username}}">
                        </div>
                    </div>
						
					<div class="form-group">
                        <label for="fname" class="col-md-4 control-label">First Name</label>

                        <div class="col-md-6">
                            <input id="fname" type="text" class="form-control" name="fname"  required autofocus value="{{$personnel->fname}}">
                        </div>
                    </div>
						
					<div class="form-group">
                        <label for="lname" class="col-md-4 control-label">Last Name</label>

                        <div class="col-md-6">
                            <input id="lname" type="text" class="form-control" name="lname"  required autofocus value="{{$personnel->lname}}">
                        </div>
                    </div>

					<div class="form-group">
                        <label for="jenis_kelamin" class="col-md-4 control-label">Gender</label>                                     
                        <div class="col-md-6">
                            <select name="jenis_kelamin" class="selectpicker">
                                @if($personnel->jenis_kelamin ==1)
                                <option value="1" selected>Laki - Laki</option>
                                <option value="0">Perempuan</option>
                                @else
                                <option value="1">Laki - Laki</option>
                                <option value="0" selected>Perempuan</option>
                                @endif
                            </select><br>
                        </div>
                    </div>
						
					<div class="form-group">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" required value="{{$personnel->email}}">
                        </div>
                    </div>
									
						
					<div class="form-group">
                        <label for="phone_number" class="col-md-4 control-label">Phone Number</label>

                        <div class="col-md-6">
                            <input id="phone_number" type="text" class="form-control" name="no_hp" required value="{{$personnel->no_hp}}">
                        </div>
                    </div>
						
					<div class="form-group">
                        <label for="datePicker" class="col-md-4 control-label">Birth Date</label>
                        <div class="col-md-6 date">
                            <div class="input-group input-append date" id="datePicker">
                                <input type="text" class="form-control" name="tanggal_lahir" value="{{$personnel->tanggal_lahir}}"/>
                                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                            </div>
                        </div>
                    </div>

						
					<div class="form-group">
                        <label for="alamat" class="col-md-4 control-label">Adrress</label>

                        <div class="col-md-6">
                            <?php   
							                //Step 2: Create Editor object. 
							               	$id  =Auth::user()->id;
							                $editor=new CuteEditor();     
							                //Step 3: Set a unique ID to Editor
							                $editor->ID="content";
											$editor->Width="auto";
							                $editor->AutoConfigure="Simple";
							                $editor->ImageGalleryPath= sprintf("/Uploads/%s",$id);
							                $editor->MediaGalleryPath= sprintf("/Uploads/%s",$id);
							                $editor->FlashGalleryPath= sprintf("/Uploads/%s",$id);
							                $editor->FilesGalleryPath= sprintf("/Uploads/%s",$id);
							                $editor->TemplateGalleryPath= sprintf("/Uploads/%s",$id);
							                //Step 4: Render Editor   
							                $editor->Draw();   
							            ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="is_admin" class="col-md-4 control-label">User Category</label>                                     
                        <div class="col-md-6">
                            <select name="is_admin" class="selectpicker">
                                @if($personnel['user']->is_admin == 1)
                                <option value="1" selected>Admin</option>
                                <option value="0">User</option>
                                @else
                                <option value="1">Admin</option>
                                <option value="0" selected>User</option>
                                @endif
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
                            @if(empty($personnel['employee']) or empty($personnel['employee']->nip))
                            <input id="nik" type="text" class="form-control" name="nik" >
                            @else
                            <input id="nik" type="text" class="form-control" name="nik" value="{{$personnel['employee']->nip}}">
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="level_position" class="col-md-4 control-label">Level Position</label>                                     
                        <div class="col-md-6">
                            <select name="level_position" class="selectpicker">
                            @if(empty($personnel['employee']))
                                @foreach($level as $pos)
                                    <option value="{{$pos->id}}">{{$pos->nama_level}}</option>
                                @endforeach
                            @else
                                @foreach($level as $pos)
                                    @if($pos->id == $personnel['level']->id)
                                        <option value="{{$pos->id}}" selected>{{$pos->nama_level}}</option>
                                    @else
                                        <option value="{{$pos->id}}">{{$pos->nama_level}}</option>
                                    @endif
                                @endforeach
                            @endif
                                
                            </select><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="department" class="col-md-4 control-label">Department</label>                                     
                        <div class="col-md-6">
                            <select name="department" class="selectpicker">
                            @if(empty($personnel['struktur']) or empty($personnel['department']))
                                <option value="">..</option>
                                @foreach($department as $deps)
                                <option value="{{$deps->id_department}}">{{$deps->nama_departmen}}</option>
                                @endforeach
                            @else
                                <option value="">..</option>
                                @foreach($department as $deps)
                                    @if($deps->id == $personnel['department']->id)
                                        <option value="{{$deps->id_department}}" selected>{{$deps->nama_departmen}}</option>
                                    @else
                                        <option value="{{$deps->id_department}}">{{$deps->nama_departmen}}</option>
                                    @endif
                                @endforeach
                            @endif
                                
                            </select><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="unit" class="col-md-4 control-label">Unit</label>                                     
                        <div class="col-md-6">
                            <select name="unit" class="selectpicker">
                                @if(empty($personnel['struktur']) or empty($personnel['unit']))
                                    <option value="">..</option>
                                    @foreach($unit as $unt)
                                    <option value="{{$unt->id_unit}}">{{$unt->nama_unit}}</option>
                                    @endforeach
                                @else
                                    <option value="">..</option>
                                    @foreach($unit as $unt)
                                        @if($deps->id == $personnel['department']->id)
                                            <option value="{{$unt->id_unit}}" selected>{{$unt->nama_unit}}</option>
                                        @else
                                            <option value="{{$unt->id_unit}}">{{$unt->nama_unit}}</option>
                                        @endif
                                    @endforeach
                                @endif
                            </select><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="section" class="col-md-4 control-label">Section</label>                                     
                        <div class="col-md-6">
                            <select name="section" class="selectpicker">
                                @if(empty($personnel['struktur']) or empty($personnel['section']))
                                    <option value="">..</option>
                                    @foreach($section as $sect)
                                    <option value="{{$sect->id_section}}">{{$sect->nama_section}}</option>
                                    @endforeach
                                @else
                                    <option value="">..</option>
                                    @foreach($section as $sect)
                                        @if($deps->id == $personnel['department']->id)
                                            <option value="{{$sect->id_section}}" selected>{{$sect->nama_section}}</option>
                                        @else
                                            <option value="{{$sect->id_section}}">{{$sect->nama_section}}</option>
                                        @endif
                                    @endforeach
                                @endif
                            </select><br>
                        </div>
                    </div>
                    <div class="form-group">
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
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Edit User
                            </button>
                        </div>
                    </div>
                    </form>


                    
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
