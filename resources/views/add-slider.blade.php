@include('Admin.AdminHead')
@extends('Admin.Template')
@section('section')
<link rel="stylesheet" href="{{ URL::asset('css/Upload.css')}}" />
<script type="text/javascript" src="{{ URL::asset('js/UpoladImg.js')}}"></script>


<script>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
</script>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Add New Slider</div>
                <div class="panel-body">

                    <form id="myform" class="form-horizontal" role="form" method="POST" action="{{ URL::action('ContentSliderController@store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}


                    
                    <div class="form-group">
                        <label for="title" class="col-md-4 control-label">Title</label>

                        <div class="col-md-6">
                            <input id="title" type="text" class="form-control" name="title" required autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content" class="col-md-4 control-label">Content</label>

                        <div class="col-md-6">
                            <textarea rows="4" col="50" id="content" type="text" class="form-control" name="content" required style="resize: none;"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="image" class="col-md-4 control-label">Upload Image</label>

                        <div class="col-md-6">
                             <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse… <input type="file" id="imgInp" name="image" accept="image/gif, image/jpeg, image/png">
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div></br>
                            <img id='img-upload'/>
                        </div>
                    </div>


						
					
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Add Slider
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
