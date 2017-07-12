
<nav class="navbar navbar-default navbar-static-top">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">
				ALC-Admin Page
			</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">			
			<ul class="nav navbar-nav navbar-right">
				<li><a href="/" >Acting as User</a></li>
				<li class="dropdown ">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						Admin Name
						<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class="container-fluid main-container">
		<div class="col-md-2 sidebar">
			<ul class="nav nav-pills nav-stacked">
						
			  <li><a href="AdminHome#dashboard">Dashboard</a></li>
			  <li><a href="CreateTrainning">CreateTrainning</a></li>
			  <li><a href="CreateDepartement">Create Departement</a></li>
			  <li><a href="AddUser">Add New User</a></li>
			  <li><a href="UserList">User List</a></li>
			  <li><a href="#users">Create Quiz</a></li>
			  <li><a href="#tools">Trainning List</a></li>
			  <li><a href="#users">users</a></li>
			  <li><a href="#tools">tools</a></li>
			  <li><a href="#settings">settings</a></li>
			</ul>
		</div>
		<div class="col-md-10 content">
                <div class="panel-body">
                    @yield('section')
                </div>
		</div>
		<footer class="pull-left footer">
			<p class="col-md-12">
				<hr class="divider">
				Copyright &COPY; 2015 <a href="http://www.pingpong-labs.com">Gravitano</a>
			</p>
		</footer>
	</div>