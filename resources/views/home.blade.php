@include('layouts.head')
<body>
    <!-- Header -->
    <div id="wrapper">
        <div class="wrapper-holder">
            @include('layouts.header')
        
            <!-- Slider -->
			<hr class="style13">
            <section class="promo">
                <ul class="slider">
                    @foreach ($slider as $slide)

                    <li style="background: url({{$slide->image or 'Elegantic/images/ALS.jpg'}}) no-repeat 100% 100%;">

                        <div class="slide-holder">
                            <div class="slide-info">
                                <h1>{{$slide->title}}</h1>
                                <p>{{strip_tags(str_limit($slide->content, $limit = 150, $end = '...')) }}</p>
                                <a class="btn darkgreen"  href="/slider/{{$slide->id}}">Read More</a>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </section>
            
            
            <div>
                <div class="container">
                    <hr class="style3">
                </div>
            </div>
            
            <section id="main">
                <div class="block-advice">
                    <div class = "text-center">
                        <h2 class="brand-before">
                            <small>Welcome to</small>
                        </h2>
                        <h1 class="brand-name">Aerofood Learning Center</h1>
                        <hr class="tagline-divider">
                        <h2>
                            <small>
                                <strong>Excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
                                </strong>
                            </small>
                        </h2>
                    </div>
                </div>
            </section>
            
            
            
            <div>
                <div class="container">
                    <hr class="style3">
                </div>
            </div>
            
            
            <!-- News Board -->
            <section id="main">
                <div class="block-advice">
                    <div class = "text-center">
                        <h1 class="brand-name">News</h1>
                    </div>
                    <br>
                    <div class="row">
                        @foreach ($berita as $news)
                          <div class="col-lg-4 col-sm-6 portfolio-item" style="
                          height: 400px;">
                                <div class="card h-100">
                                    <a href="#">
                                    @if(empty($news->image))
                                    <img class="card-img-top img-fluid" src="{{URL::asset('/Elegantic/images/ALS.jpg')}}" alt="" style="border: 1px solid green; border-radius:5%; ">
                                    @else
                                    <img class="card-img-top img-fluid" src="{{$news->image or 'Elegantic/images/ALS.jpg'}}" alt="" style="border: 1px solid green; border-radius:5%; ">
                                    @endif</a>
                                    <div class="card-block">
    									<div  style="height:15vh; width:100%;">
                                            <h4 class="card-title"><a href="/berita/{{$news->id}}">{{ str_limit($news->title, $limit = 20, $end = '...') }}</a></h4>
        									<p class="card-text" align="justify">{{strip_tags(str_limit($news->content, $limit = 150, $end = '...')) }}</p>
                                        </div>
                                        <p class="text-right" ><a href="/berita/{{$news->id}}">Read more </a></p><br>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>            
                    <br>
                    <div style="text-align: center">
                        <a class="btn white big" href="/news-board">Read More</a>
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

