@include('layouts.head')

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
			<h2>Create Training</h2>
			
			



                <form class="" action="/training" method="post">
                  Module : <br>
				  <div>
                  <div class="rows-holder">
							<div class="rows rows-select">
								<div class="row">
									<label for="size">Size:</label>
									<select id="size">
										<option>XL</option>
										<option>XXL</option>
									</select>
								</div>
							</div>
							<div class="rows rows-select">
								<div class="row">
									<label for="quantity">Quantity:</label>
									<select id="quantity">
										<option>1</option>
										<option>2</option>
									</select>
								</div>
							</div>
							<div class="rows rows-price">
								<span>$399.00</span>
							</div>
							<div class="rows rows-delete">
								<a class="btn-delete" href="#">delete</a>
							</div>
						</div>


				  </div><br><br>
                  Training Title :<br>
                  <input type="text" name="title"><br><br>
                  Training Description :<br>
                  <textarea name="desc" rows="8" cols="80"></textarea><br><br>
                  Enroll Key (optional) :<br>
                  <input type="text" name="enroll_key"><br><br>
                  Select Departement :<br>
                  <select class="forms" dir="rtl" name="department">
                    <option value="">All Department</option>
                      <option value="1">1adsufhiusza</option>
                  </select><br><br>                  

                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  
                  <input type="submit" name="name" value="post">
                </form>
	
	</section>	
	<BR>
	
	</div>
        
        <!-- Footer -->
        @include('layouts.footer')
    </div>

    @include('layouts.script')
	
