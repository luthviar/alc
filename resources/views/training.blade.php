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
							<a class="btn darkgreen" href="Pre-Test">Next</a>
						</h6>
					</div>
				</div>
		</section>

				

	</div>
	
	<!-- Modul -->
	@include('layouts.footer')
	</div>

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="Elegantic/js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="Elegantic/js/jquery.placeholder.js"></script>
	<script type="text/javascript" src="Elegantic/js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="Elegantic/js/fancySelect.js"></script>
	<script type="text/javascript" src="Elegantic/js/main.js"></script>
</body>
</html>
