@include('layouts.head')


<body>



<div id="wrapper">
    <div class="wrapper-holder">
        @include('layouts.header')

        <section id="main">
            <div class="block-advice">
                <div class = "text-center">
                    <div id="exTab1">
                        <ul  class="nav nav-tabs nav-justified">
                            <li class="active">
                                <a  href="#umum" data-toggle="tab">Forum Umum</a>
                            </li>
                            <li>
                                <a href="#jobfamily" data-toggle="tab">Forum Job Family</a>
                            </li>
                            <li>
                                <a href="#dept" data-toggle="tab">Forum Department</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="umum">

                                <h1>Forum Umum</h1>
                                <p>forum ini ditujukan untuk seluruh karyawan PT Aerofood Indonesia</p>
                                <button  class="btn btn-info" data-toggle="modal" data-target="#modal_umum">New Thread</button><br><br>

                                <table  class="table table-striped detailTable">
                                <thead>
                                <tr>
                                    <th>Topic Discussion</th>
                                    <th>Started By</th>
                                    <th>replies</th>
                                    <th>last post</th>
                                </tr>
                                </thead>
                                    <tbody>

                                        @foreach($forum_umum as $forum)
                                        <tr>
                                            <td><a href="/forum/{{$forum->id}}">{{$forum->title}}</a></td>
                                            <td>{{$forum['personnel']->fname}} {{$forum['personnel']->lname}}</td>
                                            <td>{{count($forum['replie'])}}</td>
                                            @if($forum['replie'] == null)
                                            <td>-</td>
                                            @else
                                            <td>{{$forum['last_reply_personnel']['fname']}} {{$forum['last_reply_personnel']['lname']}}, {{ \Carbon\Carbon::parse($forum['last_reply'][0]->created_at)->format('l jS \\of F Y')}}</td>
                                            @endif
                                            
                                        </tr>
                                        @endforeach
                                    
                                    </tbody>
                                </table>


                            </div>


                            <div class="tab-pane" id="jobfamily">
                                <h1>Forum {{$job_family->name}}</h1>
                                <p>forum ini ditujukan untuk karyawan {{$job_family->name}} PT Aerofood Indonesia</p>
                                <button  class="btn btn-info" data-toggle="modal" data-target="#modal_job_family">New Thread</button><br><br>

                                <table  class="table table-striped detailTable">
                                <thead>
                                <tr>
                                    <th>Topic Discussion</th>
                                    <th>Started By</th>
                                    <th>replies</th>
                                    <th>last post</th>
                                    
                                </tr>
                                </thead>
                                    <tbody>

                                        @foreach($forum_job_family as $forum)
                                        <tr>
                                            <td><a href="/forum/{{$forum->id}}">{{$forum->title}}</a></td>
                                            <td>{{$forum['personnel']->fname}} {{$forum['personnel']->lname}}</td>
                                            <td>{{count($forum['replie'])}}</td>
                                            @if($forum['replie'] == null)
                                            <td>-</td>
                                            @else
                                            <td>{{$forum['last_reply_personnel']['fname']}} {{$forum['last_reply_personnel']['lname']}}, {{ \Carbon\Carbon::parse($forum['last_reply'][0]->created_at)->format('l jS \\of F Y')}}</td>
                                            @endif
                                            
                                        </tr>
                                        @endforeach
                                    
                                    </tbody>
                                </table>

                            </div>



                            <div class="tab-pane" id="dept">
                                <h1>Forum {{$department->nama_departmen}}</h1>
                                <p>forum ini ditujukan untuk karyawan {{$department->nama_departmen}} PT Aerofood Indonesia</p>
                                <button  class="btn btn-info" data-toggle="modal" data-target="#modal_department">New Thread</button><br><br>

                                <table  class="table table-striped detailTable">
                                <thead>
                                <tr>
                                    <th>Topic Discussion</th>
                                    <th>Started By</th>
                                    <th>replies</th>
                                    <th>last post</th>
                                    
                                </tr>
                                </thead>
                                    <tbody>

                                        @foreach($forum_department as $forum)
                                        <tr>
                                            <td><a href="/forum/{{$forum->id}}">{{$forum->title}}</a></td>
                                            <td>{{$forum['personnel']->fname}} {{$forum['personnel']->lname}}</td>
                                            <td>{{count($forum['replie'])}}</td>
                                            @if($forum['replie'] == null)
                                            <td>-</td>
                                            @else
                                            <td></td>
                                            @endif
                                            
                                        </tr>
                                        @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>
    </div>

    <!-- Footer -->
    @include('layouts.footer')
</div>

@include('layouts.script')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<script src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.detailTable').DataTable();
    });
</script>
<script src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
</body>
</html>

<!-- New Thread Umum -->
<div class="modal fade" id="modal_umum" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content" >
            <form class="form-horizontal" role="form" method="POST" action="{{ URL::action('ForumController@store') }}">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">New Thread</h4>
                </div>
                    
                <div class="modal-body">
                    {{ csrf_field() }}

                    <input type="hidden" name="id_department" value="">
                    <input type="hidden" name="id_job_family" value="">
                            
                            
                    <div class="form-group">
                        <label for="title" class="col-md-3 control-label">Title</label>
                
                        <div class="col-md-6">
                            <textarea id="title" placeholder="Thread Title" type="text" class="form-control" name="title" required autofocus>

                            </textarea>
                        </div>
                    </div>
                            
                    <div class="form-group">
                        <label for="can_reply" class="col-md-3 control-label">Can Reply</label>                                     
                        <div class="col-md-6">
                            <select name="can_reply" class="selectpicker">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content" class="col-md-3 control-label">Content</label>
                        
                        <div class="col-lg-6">
                            <textarea id="content" placeholder="Thread content" type="text" class="form-control" name="content" required autofocus>

                            </textarea>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>   
    </div>
</div>


<!-- New Thread Department -->
<div class="modal fade" id="modal_department" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content" >
            <form class="form-horizontal" role="form" method="POST" action="{{ URL::action('ForumController@store') }}">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">New Thread</h4>
                </div>
                    
                <div class="modal-body">
                    {{ csrf_field() }}

                    <input type="hidden" name="id_department" value="{{$department->id_department}}">
                    <input type="hidden" name="id_job_family" value="">
                            
                            
                    <div class="form-group">
                        <label for="title" class="col-md-3 control-label">Title</label>
                
                        <div class="col-md-6">
                            <textarea id="title" placeholder="Thread Title" type="text" class="form-control" name="title" required autofocus>

                            </textarea>
                        </div>
                    </div>
                            
                    <div class="form-group">
                        <label for="can_reply" class="col-md-3 control-label">Can Reply</label>                                     
                        <div class="col-md-6">
                            <select name="can_reply" class="selectpicker">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content" class="col-md-3 control-label">Content</label>
                        
                        <div class="col-lg-6">
                            <textarea id="content" placeholder="Thread content" type="text" class="form-control" name="content" required autofocus>

                            </textarea>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>   
    </div>
</div>

<!-- New Thread Job Family -->
<div class="modal fade" id="modal_job_family" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content" >
            <form class="form-horizontal" role="form" method="POST" action="{{ URL::action('ForumController@store') }}">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">New Thread</h4>
                </div>
                    
                <div class="modal-body">
                    {{ csrf_field() }}

                    <input type="hidden" name="id_department" value="">
                    <input type="hidden" name="id_job_family" value="{{$job_family->id}}">
                            
                            
                    <div class="form-group">
                        <label for="title" class="col-md-3 control-label">Title</label>
                
                        <div class="col-md-6">
                            <textarea id="title" placeholder="Thread Title" type="text" class="form-control" name="title" required autofocus>

                            </textarea>
                        </div>
                    </div>
                            
                    <div class="form-group">
                        <label for="can_reply" class="col-md-3 control-label">Can Reply</label>                                     
                        <div class="col-md-6">
                            <select name="can_reply" class="selectpicker">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content" class="col-md-3 control-label">Content</label>
                        
                        <div class="col-lg-6">
                            <textarea id="content" placeholder="Thread content" type="text" class="form-control" name="content" required autofocus>

                            </textarea>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>   
    </div>
</div>