@include('layouts.head')
<body>

	<!-- Header -->
	<div id="wrapper">
		<div class="wrapper-holder">
			 @include('layouts.header')
			
			
		<section id="main">
			<div class="container">
				<div class="row">
				
					<div class="btn-group btn-breadcrumb">
						<a href="#" class="btn btn-success">Introduction</i></a>
						<a href="#" class="btn btn-default">Pre-Test</a>
						<a href="#" class="btn btn-default">Modul</a>
						<a href="#" class="btn btn-default">Post-Test</a>
					</div>
				</div>
	   
			</div>
			<br>
			
			<div class="block-advice">
					<div class = "text-center">
					<h2 class="brand-before">
							<small>{{$training->title}}</small>
						</h2>
						<h1 class="brand-name">Hasil Test</h1>
							
						<div class="row">
							<div class="col-md-6">
								<div class="panel panel-default">
									<div class="panel-heading">
									    <h3 class="panel-title"><strong>Pre-Test Score</strong></h3>
									</div>
									<div class="panel-body" style="font-size: 100px;">
									    {{$skor_pre_test}}
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="panel panel-default">
									<div class="panel-heading">
									    <h3 class="panel-title"><strong>Post-Test Score</strong></h3>
									</div>
									<div class="panel-body" style="font-size: 100px;">
									    {{$skor_post_test or '?'}}
									</div>
								</div>
							</div>
						</div>
						
						<br>
						<h6>
							<a class="btn darkgreen" href="Pre-Test">Next</a>
						</h6>
						
					</div>
				</div>
		</section>

				

	</div>
	
	<!-- Modul -->
	@include('layouts.footer')
	</div>

	@include('layouts.script')
</body>
</html>
