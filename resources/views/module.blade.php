@include('layouts.head')

<body>

    <!-- Header -->
    <div id="wrapper">
        <div class="wrapper-holder">
            @include('layouts.header')
        
            <!-- Main Content -->
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

                    <h2>Training Modul {{$modul->nama}}</h2>
                    <br>
					
					@if($modul->id == 3)
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					  @foreach($department as $dep)
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
						  <h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1{{$dep->id_department}}" aria-expanded="true" aria-controls="#collapse1{{$dep->id_department}}">
							  {{ $dep->nama_departmen}}<span class="pull-right"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i></span>
							</a>
						  </h4>
						</div>
						<div id="collapse1{{$dep->id_department}}" class="panel-collapse collapse">
							  <div class="panel-body">
								<ul class="list-group">
									@foreach($training as $trains)
										@if($trains->id_department == $dep->id_department)
											@if($trains['open'] == 1)
											<li class ="list-group-item"><a href="/training/{{$trains->id}}"><h5>{{$trains->title}}<span class="pull-right">  <i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></span></i></h5></a></li>
											@else
											<li class ="list-group-item"><a href="/training/{{$trains->id}}"><h5>{{$trains->title}}<span class="pull-right">  <i class="fa fa-window-close-o" style="color:red;" aria-hidden="true"></span></i></h5></a></li>
											@endif
										@endif
									@endforeach
								</ul>
							  </div>
							</div>
						  </div>
						  	@endforeach
					</div>
					
					@elseif($modul->id == 4 or $modul->id == 5)
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							@foreach($training as $trains)
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingOne">
									  <h4 class="panel-title">
									
										@if($trains['open'] == 1)
												<a href="/training/{{$trains->id}}">
													{{$trains->title}}
													<span class ="pull-right">  <i class="fa fa-check-square-o" style="color:green;" aria-hidden="true">
													</i></span>
												</a>
										@else
										<a href="/training/{{$trains->id}}"><h5>{{$trains->title}}<span class ="pull-right">  <i class="fa fa-window-close-o" style="color:red;" aria-hidden="true"></span></i></h5></a>
										@endif 
									
									</h4>
								  </div>
								</div>
								@endforeach 
					  </div>
      				@else
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							@foreach($training as $trains)
							<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingOne">
									  <h4 class="panel-title">
								      <a href="/training/{{$trains->id}}">{{$trains->title}}</a></h4></div>
							</div>
							@endforeach		
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

