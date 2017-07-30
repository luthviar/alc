@include('layouts.head')

<body>

    <!-- Header -->
    <div id="wrapper">
        <div class="wrapper-holder">
            @include('layouts.header')
        
            
            <section id="main">
                <div class="block-advice">
                    <div class = "text-center">
                    <h2 class="brand-before">
                            <small>Welcome to</small>
                        </h2>
                        <h1 class="brand-name">{{ $modul['nama'] }}</h1>
                        <hr class="tagline-divider">
                        <p align="justify">
                            
                                {{ $modul['description'] }}
                                    
                        </p>   


                    </div>
                    <div class="row">
		                    <hr class="style3">
		            </div>
		            <div class="row">

                    <h2>Daftar Training Modul {{$modul->nama}}</h2>
                    <br>
                    @if($modul->id == 3)
						<ul>
						@foreach($department as $dep)
							<li><a data-toggle="collapse" href="#collapse1{{$dep->id_department}}"><h3>{{ $dep->nama_departmen}}</h3></a></li>
							<div id="collapse1{{$dep->id_department}}" class="panel-collapse collapse">
							<ul>
								@foreach($training as $trains)
									@if($trains->id_department == $dep->id_department)
										@if($trains['open'] == 1)
										<div class="panel-body"><li><a href="/training/{{$trains->id}}"><h5>{{$trains->title}}<span>  <i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></span></i></h5></a></div>
                                        @else
                                        <div class="panel-body"><li><a href="/training/{{$trains->id}}"><h5>{{$trains->title}}<span>  <i class="fa fa-window-close-o" style="color:red;" aria-hidden="true"></span></i></h5></a></li></div>
                                        @endif
                                        
									@endif
								@endforeach		
							</ul>
							</div>
						@endforeach
						</ul>
					@elseif($modul->id == 4 or $modul->id == 5)
                        <ul>
                        @foreach($training as $trains)
                            @if($trains['open'] == 1)
                                    <div class="panel-body">
                                        <li>
                                            <a href="/training/{{$trains->id}}">
                                                <h5>{{$trains->title}}
                                                <span>  <i class="fa fa-check-square-o" style="color:green;" aria-hidden="true">
                                                </i></span>
                                                </h5>
                                            </a>
                                        </li>
                                    </div>
                                    @else
                                    <div class="panel-body"><li><a href="/training/{{$trains->id}}"><h5>{{$trains->title}}<span>  <i class="fa fa-window-close-o" style="color:red;" aria-hidden="true"></span></i></h5></a></li></div>
                                    @endif
                                    
                        @endforeach     
                        </ul>
                    @else
						<ul>
							@foreach($training as $trains)
								<li><a href="/training/{{$trains->id}}"><h5>{{$trains->title}}</h5></a></li>
							@endforeach		
						</ul>
					@endif
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

