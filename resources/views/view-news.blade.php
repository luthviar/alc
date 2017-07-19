@include('layouts.head')
<body>

	<!-- Header -->
	<div id="wrapper">
		<div class="wrapper-holder">
			@include('layouts.header')
			
				<section id="main">
					
					<div class="block-advice">
							
							<h3>{{ $news['title'] }}</h3>
							<h6>{{ \Carbon\Carbon::parse($news->create_at)->format('d - m - Y , H:i:s')}}</h6>

								
							<p align="justify">
								{{ $news['content'] }}
							</p><br>
							
						@if($news->can_reply == 1)
							@foreach($replies as $reply)
								<div class="block-advice">
									<h4>{{ $reply['title'] }}</h4>
									<h6>{{ \Carbon\Carbon::parse($reply->create_at)->format('d - m - Y , H:i:s')}}</h6>
									<p align="justify">
										{{ $reply['content'] }}
									</p>
								</div>	
							@endforeach
							@if(Auth::user() == null)
							@else
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
			                            <textarea id="content" type="text" class="form-control" name="content" required autofocus style="resize: none;"></textarea>
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
						@endif
					</div>
				</section>
			</div>
	
		<!-- Modul -->
		@include('layouts.footer')
		</div>
	</div>

	@include('layouts.script')
</body>
</html>
