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
		</div>
	
			
            <section id="main">
            <div class="container">
				<div class="row">
				
					<div class="btn-group btn-breadcrumb">
						<a href="#" class="btn btn-default">Introduction</i></a>
						<a href="#" class="btn btn-default">Pre-Test</a>
						<a href="#" class="btn btn-success">Modul</a>
						<a href="#" class="btn btn-default">Post-Test</a>
					</div>
				</div>
	   
			</div>
			<br>
			<div class="block-advice">
					<div class = "text-center">
					<h2 class="brand-before">
							<small>Procurement Training</small>
						</h2>
						<h1 class="brand-name">Materi Training</h1>

						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="headingOne">
						      <h4 class="panel-title">
						        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
						          Collapsible Group Item #1
						        </a>
						      </h4>
						    </div>
						    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
						      <div class="panel-body">
						      <iframe id="viewer" src = "{{URL::to('/ViewerJS/index.html#../KAKP.pdf')}}" width='100%' height='600' allowfullscreen webkitallowfullscreen></iframe>
						        
						      </div>
						    </div>
						  </div>
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="headingTwo">
						      <h4 class="panel-title">
						        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          Collapsible Group Item #2
						        </a>
						      </h4>
						    </div>
						    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						      <div class="panel-body">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
						    </div>
						  </div>
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="headingThree">
						      <h4 class="panel-title">
						        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          Collapsible Group Item #3
						        </a>
						      </h4>
						    </div>
						    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						      <div class="panel-body">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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
            
	
	
	   <!-- Footer -->
        @include('layouts.footer')
    </div>

    @include('layouts.script')
</body>
</html>
<script type="text/javascript">
$('iframe').ready(function() {
   setTimeout(function() {
      $('iframe').contents().find('#download').remove();
   }, 100);
});
</script>