@include('layouts.head')

<script>
    $(document).ready(function() {
        $('.summernote').summernote({
          height: 200,                 // set editor height
          minHeight: null,             // set minimum height of editor
          maxHeight: null,             // set maximum height of editor

        });

    });
</script>

<body class="page-header-fixed page-full-width">
            @extends('layouts.header')
	@section('navbar')
					<li><a href="/">Home</a></li>
					<li class="classic-menu-dropdown"><a href="/news-board">News</a></li>
					@if(Auth::user())
					<li class="classic-menu-dropdown active"><a href="{{url('/forum')}}">Forum</a><span class="selected">
							</span></li>
					<li class="classic-menu-dropdown">
						<a data-toggle="dropdown" data-hover="dropdown" data-close-others="true" href="#">
							My Modules <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							@foreach ($module as $modul)
								<li>
									<a href="/module/{{$modul->id}}">{{$modul->nama}}</a>
								</li>
							@endforeach
						</ul>

					</li>


					<li class="classic-menu-dropdown"><a href="/raport/{{Auth::user()->id}}">My Profile</a></li>
					@endif
	@endsection

	<div class="page-container" id="wrapper">
       <div class="page-content-wrapper">
        <div class="page-content" style="background-color: rgb(243, 247, 248);opacity: 1;">
            <div class="block-advice">
                <div class="" id="modal_edit_forum" role="dialog">
                    <div class="">
                        <!-- Modal content-->
                        <div class="" >
                            <form
                                    class="form-horizontal"
                                    role="form" method="POST"
                                    action="/forum/user/update"
                                    enctype="multipart/form-data">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">

                                        <a href="{{url()->previous()}}"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
                                        Edit Your Thread</h4>
                                </div>

                                <div class="modal-body">
                                    {{ csrf_field() }}

                                    <input type="hidden" name="id_forum" value="{{ $forum->id  }}"/>

                                    <div class="form-group">
                                        <label for="title" class="col-md-3 control-label">Title</label>

                                        <div class="col-md-6">
                                            <input type="text" id="title_edit" name="title" value="{{ $forum->title  }}"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="can_reply" id="can_reply_edit" class="col-md-3 control-label">Can Reply</label>
                                        <div class="col-md-6">
                                            <select name="can_reply" >
                                                @if($forum->can_reply == 1)
                                                    <option value="1" selected>Yes</option>
                                                    <option value="0">No</option>
                                                @else
                                                    <option value="1">Yes</option>
                                                    <option value="0" selected>No</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="content" class="col-md-3 control-label">Content</label>

                                        <div class="col-md-10 col-xs-offset-1">
                                            <textarea id ="summernote" name="content">{{$forum->content}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="image" class="col-md-3 control-label">Upload attachment</label>

                                        <div class="col-md-6">
                                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse..
                                        <input type="file"
                                               id="filetiga"
                                               onchange="javascript:updateList4()"
                                               name="file_pendukung[]"
                                               multiple/>
                                    </span>
                                </span>
                                                <input type="text" class="form-control" value="select file(s)" readonly>
                                            </div></br>
                                            <div class='file-uploaded'>
                                                <p id="attachments_edit">

                                                </p>
                                                <p>
                                                <div id="fileListtiga">

                                                </div>
                                                </p>
                                                <hr>
                                                @foreach($forum['file_pendukung'] as $file)
                                                    <a href="{{URL::asset($file->url)}}"><i class="fa fa-paperclip" aria-hidden="true"></i>  {{$file->name}}</a>       <span><a href="/news_attachment_delete/{{$file->id}}" style="color: red;"><i class="fa fa-trash" aria-hidden="true"></i>delete</a></span><br>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <input type="submit" class="btn btn-primary" value="Update">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('layouts.footer')
</div>

@include('layouts.script')


<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<script src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.detailTable').DataTable({
            "order": [[ 0, "desc" ]]
        });
    });
</script>
<script src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

            {{-- modal edit forum --}}



            {{--modal edit forum--}}


        <script>
            updateList = function() {
                var input = document.getElementById('file');
                var output = document.getElementById('fileList');

                output.innerHTML = 'Selected file(s) <br><ul>';
                for (var i = 0; i < input.files.length; ++i) {
                    output.innerHTML += '<li>' + input.files.item(i).name + '</li>';

                }
                output.innerHTML += '</ul>';
            }

            updateList2 = function() {
                var input = document.getElementById('filedua');
                var output = document.getElementById('fileListdua');

                output.innerHTML = 'Selected file(s) <br><ul>';
                for (var i = 0; i < input.files.length; ++i) {
                    output.innerHTML += '<li>' + input.files.item(i).name + '</li>';

                }
                output.innerHTML += '</ul>';
            }

            updateList3 = function() {
                var input = document.getElementById('filetiga');
                var output = document.getElementById('fileListtiga');

                output.innerHTML = 'Selected file(s) <br><ul>';
                for (var i = 0; i < input.files.length; ++i) {
                    output.innerHTML += '<li>' + input.files.item(i).name + '</li>';

                }
                output.innerHTML += '</ul>';
            }

            updateList4 = function() {
                var input = document.getElementById('filetiga');
                var output = document.getElementById('fileListtiga');

                output.innerHTML = 'Selected file(s) <br><ul>';
                for (var i = 0; i < input.files.length; ++i) {
                    output.innerHTML += '<li>' + input.files.item(i).name + '</li>';

                }
                output.innerHTML += '</ul>';
            }
        </script>

            {{--edit forum script--}}
        <script>
            function editForum($id_edit,$title,$can_reply,$content,$attachments) {
                $("#id_forum_edit").val($id_edit);
                $("#title_edit").val($title);
                $("#can_reply_edit").val($can_reply);

                $("#summernote_edit").summernote("code", $content);
//                $("#content_edit").html($content);

                $("#attachments_edit").html($attachments);

                $('#modal_edit_forum').modal("show");
            }
        </script>
</body>
</html>

