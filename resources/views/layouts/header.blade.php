<header id="header">
	<span class ="Logo"><a href="/"><img src="{{URL::asset('Elegantic/images/ALS.jpg')}}" width="20%" height="100%" ></a></span>
	<ul class="nav navbar-right">
		@if (Auth::guest())
			<br>
            <button class="btn btn-success btn-lg"><li><a style="color:white;" href="{{ route('login') }}"><i class="fa fa-user-circle" aria-hidden="true"></i> Login</a></li></button>
        @else
			<li class="dropdown">
				<br><br>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>  {{Auth::user()->get_nama()}} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li class="login">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        @if(Auth::user()->is_admin == 1)
                        <a href="/personnel">
                            Acting As Admin
                        </a>
                        @endif

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
				@if(Auth::user())
				<li><a href="{{url('/forum')}}">Forum</a></li>
				<div class="dropdown">
					<li><a class="dropbtn">My Modules</a></li>
					<div class="dropdown-content">
					@foreach ($module as $modul)
						
                            <a href="/module/{{$modul->id}}">{{$modul->nama}}</a>
                        
					@endforeach
					</div>
				</div>
				<li><a href="/raport/{{Auth::user()->id}}">My Profile</a></li>
				@endif
			</ul>
		</nav>
	</div>
</header>