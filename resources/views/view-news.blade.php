@include('layouts.head')
<script type="text/javascript" src="js/textarea.js"></script>
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
				<div class ="col-sm-9">
				<h3>{{ $news['title'] }}</h3>
							<h6>{{ \Carbon\Carbon::parse($news->create_at)->format('d - m - Y , H:i:s')}}</h6>
							<hr class="style14">
								<img src="/Elegantic/images/ALS.jpg" alt="Card image cap" width="100%">
							<hr class="style14"> 
								<p align="justify" class="big">
									{{ $news['content'] }}
								</p><br>
								
								@if($news->can_reply == 1)
									
							<div class="block-advice">
							 <h1>Comments(9)</h1>

							@foreach($replies as $reply)
							<div class="panel panel-default">
								<div class="panel-heading">{{ $reply['title'] }}<br>
								Rohmat, {{ \Carbon\Carbon::parse($reply->create_at)->format('d - m - Y , H:i:s')}}</div>
								<div class="panel-body">&nbsp;
										{{ $reply['content'] }}&nbsp</div>
							</div><br>
							@endforeach
							</div>
							<div class="block-advice">
							<form id="myform" class="form-horizontal" role="form" method="POST" action="{{ URL::action('NewsReplieController@store') }}">
                        		{{ csrf_field() }}
                        		<input type="hidden" name="id_user" value="{{Auth::user()->id}}">
                        		<input type="hidden" name="id_news" value="{{$news->id}}">
                        		<div class="form-group">
			                        <label for="title" class="col-md-4 control-label">Title</label>

			                        <div class="col-md-6">
			                            <input id="title" type="text" class="form-control" name="title" required autofocus value="[RE:] {{$news['title']}}">
			                        </div>
			                    </div>
			                    <div class="form-group">
			                        <label for="content" class="col-md-4 control-label">Content</label>

			                        <div class="col-md-6">
			                            <textarea id="content" type="text" class="form-control"name="content" required autofocus style="resize: none;">
										</textarea>
			                        </div>
			                    </div>
			                    <div class="form-group">
			                        <div class="col-md-6 col-md-offset-4">
			                            <button type="submit" class="btn btn-info">
			                                Comment
			                            </button>
			                        </div>
			                    </div>
							</form>
							</div>	
						@endif
						
				</div>
				
				<div class="col-lg-3  col-md-3 col-sm-12">
						<div class="well">
							<h4>Recent Post</h4>
							<hr class="style14">
						<p>ALC NEWS 5</p>
						<p>ALC NEWS 4</p>
						<p>ALC NEWS 3</p>
						<p>ALC NEWS 2</p>
						<p>ALC NEWS 1</p>
					<br>
						
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