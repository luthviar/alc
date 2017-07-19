<header id="header">
				<span class ="Logo"><a href="/"><img src="{{URL::asset('Elegantic/images/ALS.jpg')}}" width="170px" height="100" ></a></span>
				<ul class="nav navbar-nav navbar-right">
						@if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                        @else
							<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
				</ul>
				<hr class = "style14">
				<div class="bar-holder">
				<a class="menu_trigger" href="#">menu</a>
					<nav id="nav">
						<ul>
							<li><a href="/">Home</a></li>
							<li><a href="/news-board">News</a></li>
							<li><a href="products.html">Contact Us</a></li>
							@if(Auth::user())
							<li><a href="">Forum</a></li>
							<div class="dropdown">
								<li><a class="dropbtn">My Modules</a></li>
								<div class="dropdown-content">
								@foreach ($module as $modul)
								  <a href="/module/{{$modul->id}}">{{$modul->nama}}</a>
								@endforeach
								</div>
							</div>
							<li><a href="/raport/{{Auth::user()->id}}">Raport</a></li>
							@endif
						</ul>
					</nav>
				</div>
			</header>