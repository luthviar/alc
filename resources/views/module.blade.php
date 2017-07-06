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
							<li><h3>{{ $dep->nama_departmen}}</h3></li>
							<ul>
								@foreach($training as $trains)
									@if($trains->id_department == $dep->id_department)
										<li><a href="/training/{{$trains->id}}"><h5>{{$trains->title}}</h5></a></li>
									@endif
								@endforeach		
							</ul>
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

