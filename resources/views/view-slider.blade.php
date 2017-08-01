@include('layouts.head')
<body>

	<!-- Header -->
	<div id="wrapper">
		<div class="wrapper-holder">
			@include('layouts.header')
			
				<section id="main">
					
					<div class="block-advice">
							
							<h3>{{ $slider['title'] }}</h3>
							<h6>{{ \Carbon\Carbon::parse($slider->create_at)->format('d - m - Y , H:i:s')}}</h6>	
							<p align="justify">
								{{ strip_tags($slider['content']) }}
							</p><br>
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
