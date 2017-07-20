@include('layouts.head')
<body>

	<!-- Header -->
	<div id="wrapper">
		<div class="wrapper-holder">
			@include('layouts.header')
			
				<section id="main">
					<div class="container">
						<div class="row">
							<h2>Introduction</h2>
							<div class="btn-group btn-breadcrumb">
								<a href="#" class="btn btn-success">Introduction</i></a>
								<a class="btn btn-default">Pre-Test</a>
								<a class="btn btn-default">Modul</a>
								<a  class="btn btn-default">Post-Test</a>
							</div>
						</div>
			   
					</div>
					<br>
					
					<div class="block-advice">
							<div class = "text-center">
							<h2 class="brand-before">
									<small>Welcome to</small>
								</h2>
								<h1 class="brand-name">{{ $training['title'] }}</h1>
								<hr class="tagline-divider">
								<h4 align="justify">
									<strong>
										{{ $training['description'] }}
									</strong>	
								</h4><br>
								<h6>
									@if($training['open']==1)
									<a class="btn darkgreen" href="/section-training/{{$next_section->id}}">Next</a>
									@elseif($training['open']==2)
									<a class="btn darkgreen"  disabled>Access Requested</a>
									@else
									<a class="btn darkgreen" href="/request-access/{{$training->id}}">Request Access</a>
									@endif
								</h6>
							</div>
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
