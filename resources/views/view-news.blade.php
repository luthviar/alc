@include('layouts.head')

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
				<div class ="col-lg-8 col-md-8 col-sm-8">
					<h3>{{ $news['title'] }}</h3>
					<h6>{{ \Carbon\Carbon::parse($news->create_at)->format('l jS \\of F Y')}}</h6>
					<hr class="style14">
					@if(empty($news->image))
						<img src="{{URL::asset('Elegantic/images/ALS.jpg')}}" alt="Card image cap" style="width:100%;">
					@else
						<img src="{{URL::asset($news['image'])}}" alt="Card image cap" style="width:100%;">
					@endif
					<hr class="style14"> 
					<p align="justify" class="big">
						{!! html_entity_decode($news['content']) !!}

					</p>
					<div class='pull-right'>
						1. <i class="fa fa-paperclip" aria-hidden="true"></i>  Nama File.pdf <br>
						2. <i class="fa fa-paperclip" aria-hidden="true"></i>  Attachment.jpg <br>
						3. <i class="fa fa-paperclip" aria-hidden="true"></i>  File.pdf
					</div>
					<br><br><br><br>

					@if($news->can_reply == 1)
						<div class="block-advice">
							<h3>Comments({{count($replies)}})</h3>
							<br>
							@foreach($replies as $reply)
								<div class="panel panel-default">
									<div class="panel-heading"><strong>{{ $reply['title'] }}</strong><br>
										{{$reply['user']->fname}} {{$reply['user']->lname}}, {{ \Carbon\Carbon::parse($reply->create_at)->format('d - m - Y , H:i:s')}}</div>
									<div class="panel-body">

											{!! html_entity_decode($reply['content']) !!}
											<br>
											<div class ="pull-right">
												1. <i class="fa fa-paperclip" aria-hidden="true"></i>  Nama File.pdf <br>
											</div>
 
									</div>
								</div>
								<br>
							@endforeach

							
						</div>
						@if(Auth::user() == null)
						
						@else

							<div class="block-advice">
								<form id="myform" class="form-horizontal" role="form" method="POST" action="{{ URL::action('NewsReplieController@store') }}">
		                        	{{ csrf_field() }}
		                        	<input type="hidden" name="id_user" value="{{Auth::user()->id}}">
		                        	<input type="hidden" name="id_news" value="{{$news->id}}">
		                        	<div class="form-group">
					                    <label for="title" class="col-md-2 control-label">Title</label>

					                    <div class="col-md-8">
					                        <input id="title" type="text" class="form-control" name="title" required  value="[RE:] {{$news['title']}}">
					                    </div>
					                </div>
					                <div class="form-group">
					                    <label for="content" class="col-md-2 control-label">Content</label>

					                    <div class="col-md-8">
											<textarea id="summernote" name="content"></textarea>
					                    </div>
					                </div>
									
									<div class="form-group">
										<label for="image" class="col-md-2 control-label">Upload attachment</label>

										<div class="col-md-8">
											 <div class="input-group">
												<span class="input-group-btn">
													<span class="btn btn-default btn-file">
														Browse… <input type="file" id="imgInp" name="image"/>
													</span>
												</span>
												<input type="text" class="form-control" readonly>
											</div></br>
											<div class='file-uploaded'>
												1. <i class="fa fa-paperclip" aria-hidden="true"></i>  Nama File.pdf <br>
												2. <i class="fa fa-paperclip" aria-hidden="true"></i>  Attachment.jpg <br>
												3. <i class="fa fa-paperclip" aria-hidden="true"></i>  File.pdf <br>
											</div>
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
				
				<div class="col-lg-4  col-md-4 col-sm-12">
					<div class="well">
						<h4>Recent Post</h4>
						<hr class="style14">
						@foreach($beritas as $brt)
							<a href="/berita/{{$brt->id}}"><p>{{$brt->title}}</p></a>
						@endforeach
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