@include('layouts.head')
<body class="page-header-fixed page-full-width">
    <!-- Header -->
	@extends('layouts.header')
	@section('navbar')
	<li class="classic-menu-dropdown active">
						<a href="/">
							 Home
							<span class="selected">
							</span>
						</a>
					</li>
					<li class="classic-menu-dropdown"><a href="/news-board">News</a></li>
					@if(Auth::user())
					<li class="classic-menu-dropdown"><a href="{{url('/forum')}}">Forum</a></li>
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
            <div class="page-content" class="wrapper-holder" style="margin-bottom: -109px;">
                <!-- Slider -->
    			<!-- <hr class="style13"> -->
                <div class="promo" >
                    <ul class="slider">
                        @foreach ($slider as $slide)

                        <li style="background: url({{$slide->image or 'Elegantic/images/ALS.jpg'}}) no-repeat 100% 100%; width:100% !important;">

                            <div class="slide-holder">
                                <div class="slide-info">
                                    <h1>{{$slide->title}}</h1>
                                    <p>{!! html_entity_decode(str_limit($slide->content, $limit = 150, $end = '...')) !!}</p>
                                    <a class="btn btn-ghost"  href="/slider/{{$slide->id}}">Read More</a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    
                </div>
            </div>
            <div class="clearfix"></div>
             <!-- NEWS -->
            <div class="page-content" style="background-color: rgb(243, 247, 248);opacity: 1;">

                <div class="blog-page">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-6 col-sm-6 article-block">
                            <p class="border-panel-title-wrap"> 
                                <!-- <div class="panel-title-wrap"> -->
                                    <span class="panel-title-text">News</span>
                                <!-- </div> -->
                                
                            </p>
                           
                            @foreach ($berita as $news)
                            <div class="row">
                                <div class="col-md-4 blog-img blog-tag-data">
                                    @if(empty($news->image))

                                        <img class="img-responsive" src="/Elegantic/images/ALS.jpg" alt="">
                                        @else
                                        <img class="img-responsive" src="{{$news->image or 'Elegantic/images/ALS.jpg'}}" alt="">
                                    @endif
                                    <ul class="list-inline">
                                        <li>
                                            <i class="fa fa-calendar"></i>
                                            <a href="#">
                                                {{ $news->created_at }}
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </div>
                                <div class="col-md-8 blog-article">
                                    <h3>
                                        <a href="/news/{{$news->id}}">
                                            {{ str_limit($news->title, $limit = 50, $end = '...') }}
                                        </a>
                                    </h3>
                                    <p>
                                         {{ strip_tags(str_limit($news->content, $limit = 360, $end = '...')) }}
                                    </p>
                                    <a href="/news/{{$news->id}}" class="btn hijau-muda">
                                         Read more <i class="m-icon-swapright m-icon-white"></i>
                                    </a>
                                </div>
                            </div>
                            <hr>
                            @endforeach
                     
                            <ul class="pagination pull-right">
                                 <a href="/news-board" class="btn hijau-muda" href="page_blog_item.html">
                                         More News <i class="m-icon-swapright m-icon-white"></i>
                                    </a>
                            </ul>
                        </div>

                        <div class="col-md-3 col-sm-6 article-block">
                            <p class="border-panel-title-wrap"> 
                                <span class="panel-title-text">Links</span>    
                            </p>
                            <div class="row">
                                <div class="col-md-12 clearfix">            
                                    <a href="#" class="btn btn-lg default" style="margin:5px 1px">
                                         IMS 
                                    </a>
                                    <a href="#" class="btn btn-lg red" style="margin:5px 1px">
                                         IMS  
                                    </a>
                                    <a href="#" class="btn btn-lg blue" style="margin:5px 1px">
                                         IMS
                                    </a>
                                    <a href="#" class="btn btn-lg green" style="margin:5px 1px">
                                         IMS  
                                    </a>
                                    <a href="#" class="btn btn-lg yellow" style="margin:5px 1px">
                                         IMS  
                                    </a>
                                    <a href="#" class="btn btn-lg purple" style="margin:5px 1px">
                                        IMS
                                    </a>
                                    <a href="#" class="btn btn-lg green" style="margin:5px 1px">
                                         IMS  
                                    </a>
                                    <a href="#" class="btn btn-lg dark" style="margin:5px 1px">
                                         IMS  
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
					<!-- end Div links-->
                   
                </div>
            
            </div>
            <div class="clearfix"></div>
        <!-- Footer -->
        </div>
        @include('layouts.footer')
        </div>


    @include('layouts.script')
</body>
</html>