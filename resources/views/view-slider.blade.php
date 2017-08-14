@include('layouts.head')
<body>
<body class="page-header-fixed page-full-width">

            @include('layouts.header')
	<div class="page-container" id="wrapper">
       <div class="page-content-wrapper"> 
        <div class="page-content" style="background-color: rgb(243, 247, 248);opacity: 1;">		

					<div class="block-advice">
							
							<h3>{{ $slider['title'] }}</h3>
							<h6>{{ \Carbon\Carbon::parse($slider->create_at)->format('d - m - Y , H:i:s')}}</h6>	
							<p align="justify">
								{{ strip_tags($slider['content']) }}
							</p><br>
					</div>
				</div>
			</div>
	
		<!-- Modul -->
		@include('layouts.footer')
		</div>
	</div>

	@include('layouts.script')
</body>
</html>
