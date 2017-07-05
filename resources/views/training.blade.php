@include('layouts.head')
<body>

	<!-- Header -->
	<div id="wrapper">
		<div class="wrapper-holder">
			<header id="header">
				<span class ="Logo"><a href="index.html"><img src="Elegantic/images/ALS.jpg" width="170px" height="100" > Aerofood Learning Center</a></span>
				<hr class = "style14">
				<ul class="tools-nav tools-nav-mobile">
					<li class="login"><a href="login">Logged As (Faisal Rizky,Financial Departement)</a></li>
				</ul>
				<div class="bar-holder">
				<a class="menu_trigger" href="#">menu</a>
					<nav id="nav">
						<ul>
							<li><a href="HomeLogin">Home</a></li>
							<li><a href="HomeLogin">About ALC</a></li>
							<li><a href="HomeLogin">News</a></li>
							<li><a href="HomeLogin">Contact Us</a></li>
							<li><a href="products.html">Forum</a></li>
							<div class="dropdown">
								<li><a class="dropbtn">My Modules</a></li>
								<div class="dropdown-content">
									<a href="#">Induction Module</a>
								</div>
							</div>
						</ul>
					</nav>
					<ul class="tools-nav">
						<li class="login"><a href="login">Logged As (Faisal Rizky,Financial Departement)</a></li>
					</ul>
				</div>
			</header>
			
		<section id="main">
			<div class="container">
				<div class="row">
				<h2>Introduction</h2>
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
							<small>Welcome to</small>
						</h2>
						<h1 class="brand-name">Induction Trainning</h1>
						<hr class="tagline-divider">
						<h2>
							<small>
								<strong>Excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
									</strong>
							</small>
						</h2><br>
							<h6>
								<strong>Quiz Duration = 30 min<br></strong>
								<button class="button" ><a href="Pre-Test">Next</a></button>
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
