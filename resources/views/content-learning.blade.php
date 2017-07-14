@include('layouts.head')

<body>

    <!-- Header -->
    <div id="wrapper">
        <div class="wrapper-holder">
			@include('layouts.header')
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
							<small>{{$training->title}}</small>
						</h2>
						<h1 class="brand-name">Materi Training</h1>

						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						@foreach($content as $materi)
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="headingOne">
						      <h4 class="panel-title">
						        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
						          {{$materi->file_name}}
						        </a>
						      </h4>
						    </div>
						    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
						      <div class="panel-body">
						      <iframe  src = "{{URL::to($materi->url)}}" width='100%' height='600' allowfullscreen webkitallowfullscreen></iframe>
						        
						      </div>
						    </div>
						  </div>
						  @endforeach
						</div>
							
						
						<br>
						<h6>
							@if(empty($logout))
							<a class="btn darkgreen" href="/section-training/{{$next_section->id}}">Next</a>
							@else
							<a class="btn btn-warning" href="/">Back</a>
							<a class="btn darkgreen" href="/section-training/{{$next_section->id}}">Next</a>
							@endif
							
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