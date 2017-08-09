@include('Admin.AdminHead')
@extends('Admin.Template')
@section('section')
<link rel="stylesheet" href="{{ URL::asset('css/Upload.css')}}" />
<script type="text/javascript" src="{{ URL::asset('js/UpoladImg.js')}}"></script>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Edit News</div>
                <div class="panel-body">
                
                    <form id="myform" class="form-horizontal" role="form" method="POST" action="/berita/submit" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    
                    <input type="hidden" class="form-control" name="id_news" value="{{$news->id}}" required autofocus>
                    <input type="hidden" class="form-control" name="id_user" value="{{$news->id_user}}" required autofocus>

                    <div class="form-group">
                        <label for="title" class="col-md-4 control-label">Title</label>

                        <div class="col-md-6">
                            <input id="title" type="text" class="form-control" name="title" required autofocus value="{{$news->title}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content" class="col-md-4 control-label">Content</label>

                        <div class="col-md-6">
							<textarea id ="summernote" name="content"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="can_reply" class="col-md-4 control-label">Can Reply</label>                                     
                        <div class="col-md-2">
                            <select name="can_reply" class="form-control">
                                @if($news->can_reply == 1)
                                <option value="1" selected>Yes</option>
                                <option value="0">No</option>
                                @else
                                <option value="1">Yes</option>
                                <option value="0" selected>No</option>
                                @endif
                            </select><br>
                        </div>
                    </div>


                    


                        
                    
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Edit Slider
                            </button>
                        </div>
                    </div>
                    </form>


                    
                </div>
            </div>
        </div>
    </div>
@endsection
