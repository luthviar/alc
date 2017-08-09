@include('Admin.AdminHead')
@extends('Admin.Template')
@section('section')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<script type="text/javascript">
    $(document).ready(function() {
        $('#detailTable').DataTable();
    });
</script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

<style type="text/css">
/* Hazır */

.fordtreeview{
	width: 100%;
	border-color: 1px solid green;
}
.fordtreeview ul{
  display:none;
  margin: 15px -16px;
  list-style:none;
}

.fordtreeview ul.expanded{
  display:block;
}

.fordtreeview ul li{
  left:30px;
  margin-right:40px; 
  color: #333;
}

.fordtreeview > li:first-child{
  display:block !important;
}

.fordtreeview li,
.fordtreeview a{
  color: #333; 
  text-decoration:none; 
  cursor:pointer;
}

.fordtreeview i.glyphicon{
  margin-right:5px;
}

.subactivated,
.fordtreeview > li:not(:first-child):hover{
  background-color: lightgreen;
}
</style>
<script type="text/javascript">
	$(document).ready(function () {
	$('.hasSub').click(function () {
    	$(this).parent().toggleClass('subactivated');
		$(this).parent().children('ul:first').toggle();
    
    
	}); 
  
  $(".menufilter").keyup(function () {
     //$(this).addClass('hidden');
  
    var searchTerm = $(".menufilter").val();
    var listItem = $('.fordtreeview').children('li');
  
    var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
    
      //extends :contains to be case insensitive
  $.extend($.expr[':'], {
  'containsi': function(elem, i, match, array)
  {
    return (elem.textContent || elem.innerText || '').toLowerCase()
    .indexOf((match[3] || "").toLowerCase()) >= 0;
  }
});
    
    $(".fordtreeview li").not(":containsi('" + searchSplit + "')").each(function(e)   {
      $(this).hide()
    });
    
    $(".fordtreeview li:containsi('" + searchSplit + "')").each(function(e) {

      $(this).show();
    });
  });  
});
</script>
{{--<script type="text/javascript">--}}
	{{--$(document).ready(function () {--}}
	{{--$('.hasSub').click(function () {--}}
    {{--$(this).parent().toggleClass('subactivated');--}}
		{{--$(this).parent().children('ul:first').toggle();--}}
    {{----}}
    {{----}}
	{{--}); --}}
  {{----}}
  {{--$(".menufilter").keyup(function () {--}}
     {{--//$(this).addClass('hidden');--}}
  {{----}}
    {{--var searchTerm = $(".menufilter").val();--}}
    {{--var listItem = $('.fordtreeview').children('li');--}}
  {{----}}
    {{--var searchSplit = searchTerm.replace(/ /g, "'):containsi('")--}}
    {{----}}
      {{--//extends :contains to be case insensitive--}}
  {{--$.extend($.expr[':'], {--}}
  {{--'containsi': function(elem, i, match, array)--}}
  {{--{--}}
    {{--return (elem.textContent || elem.innerText || '').toLowerCase()--}}
    {{--.indexOf((match[3] || "").toLowerCase()) >= 0;--}}
  {{--}--}}
{{--});--}}
    {{----}}
    {{--$(".fordtreeview li").not(":containsi('" + searchSplit + "')").each(function(e)   {--}}
      {{--$(this).hide()--}}
    {{--});--}}
    {{----}}
    {{--$(".fordtreeview li:containsi('" + searchSplit + "')").each(function(e) {--}}
      {{--$(this).show();--}}
    {{--});--}}
  {{--});  --}}
{{--});--}}
{{--</script>--}}


<div class="col-md-12 ">
	<div id="narrow-browser-alert" class="alert alert-success text-center">
      	<strong><h4>Organization Structure of Aerofood ACS</h4></strong> 
      	
      	<a href="/struktur/create"><span><i class="glyphicon glyphicon-plus"></i> new_structure</span> </a>
    </div>
    
    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
      	
      	<!-- Tab menu -->
      	<ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
      		@php
      			$count = 0;
      		@endphp
      		@foreach($divisi as $org_struk)
      			@if($count == 0)
		        	<li role="presentation"  class="active">
		          		<a href="#divisi{{$org_struk->id_divisi}}" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
		            	<span class="text">{{$org_struk->nama_divisi}}</span>
		          		</a>
		        	</li>
		        	@php
		        		$count += 1;
		        	@endphp
        		@else
        			<li role="presentation" >
		          		<a href="#divisi{{$org_struk->id_divisi}}" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
		            	<span class="text">{{$org_struk->nama_divisi}}</span>
		          		</a>
		        	</li>
        		@endif
        	@endforeach
      	</ul>

      	<!-- Content of tab menu-->

      	<div id="myTabContent" class="tab-content">
      		@php
      			$hitung = 0;
      		@endphp

      		@foreach($divisi as $org_struk)
      			@if($hitung == 0)
		        	<div role="tabpanel" class="tab-pane fade in active" id="divisi{{$org_struk->id_divisi}}" aria-labelledby="home-tab">
		        		<br>
		        		@foreach($org_struk['unit'] as $value)
			          		<div class="col-md-4 col-lg-4" style="text-align: center; padding-top: 5px;">
			          			<div class="panel panel-info">
			          				@foreach($units as $unit)
				          				@if($value->id_unit == $unit->id_unit)
									  		<div class="panel-heading">{{$unit->nama_unit}}</div>
									  	@endif
								  	@endforeach

								  	<div class="panel-body">
								    	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

								     	@foreach($value['department'] as $department)
									  		<div class="panel panel-success">
									    		<div class="panel-heading" role="tab" id="headingOne">
									      			<h4 class="panel-title">
									        		<a role="button" data-toggle="collapse" data-parent="#accordion" href="#divisi{{$org_struk->id_divisi}}unit{{$value->id_unit}}department{{$department->id_department}}" aria-expanded="true" aria-controls="collapseOne">
											          @foreach($departments as $deps)
											          	@if($deps->id_department == $department->id_department)
											          		{{$deps->nama_departmen}}
											          	@endif
											          @endforeach
									        		</a>
									      			</h4>
									    		</div>
									    		<div id="divisi{{$org_struk->id_divisi}}unit{{$value->id_unit}}department{{$department->id_department}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
										      		<div class="panel-body">
										      		<!-- List of section -->
										        		<div class="list-group">
										        			@foreach($department['section'] as $section)
										        				@if(!empty($section))
										        					@foreach($sections as $sect)
										        						@if($sect->id_section == $section->id_section)
																  		<button type="button" class="list-group-item">
																  		{{$sect->nama_section}}</button>
													  					@endif
													  				@endforeach
													  			@endif
													  			<br>
													  			<div class="pull-right">
													  				<span><a><i class="glyphicon glyphicon-plus"></i> new_section</a></span>
													  			</div>
												  			@endforeach
														</div>
										      		</div>
									    		</div>
									  		</div>
									  	@endforeach
										
										</div>
								  	</div>
								</div>
			          		</div>

			          		@php
			          			$hitung +=1
			          		@endphp

		          		@endforeach
		          	</div>
		        @else
		          	<div role="tabpanel" class="tab-pane fade" id="divisi{{$org_struk->id_divisi}}" aria-labelledby="home-tab">
		        		<br>
		        		@foreach($org_struk['unit'] as $value)
			          		<div class="col-md-4 col-lg-4" style="text-align: center; padding-top: 5px;">
			          			<div class="panel panel-info">
			          				@foreach($units as $unit)
				          				@if($value->id_unit == $unit->id_unit)
									  		<div class="panel-heading">{{$unit->nama_unit}}</div>
									  	@endif
								  	@endforeach

								  	<div class="panel-body">
								    	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

								     	@foreach($value['department'] as $department)
									  		<div class="panel panel-success">
									    		<div class="panel-heading" role="tab" id="headingOne">
									      			<h4 class="panel-title">
									        		<a role="button" data-toggle="collapse" data-parent="#accordion" href="#divisi{{$org_struk->id_divisi}}unit{{$value->id_unit}}department{{$department->id_department}}" aria-expanded="true" aria-controls="collapseOne">
											          @foreach($departments as $deps)
											          	@if($deps->id_department == $department->id_department)
											          		{{$deps->nama_departmen}}
											          	@endif
											          @endforeach
									        		</a>
									      			</h4>
									    		</div>
									    		<div id="divisi{{$org_struk->id_divisi}}unit{{$value->id_unit}}department{{$department->id_department}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
										      		<div class="panel-body">
										      		<!-- List of section -->
										        		<div class="list-group">
										        			@foreach($department['section'] as $section)
										        				@if(!empty($section))
										        					@foreach($sections as $sect)
										        						@if($sect->id_section == $section->id_section)
																  		<button type="button" class="list-group-item">
																  		{{$sect->nama_section}}</button>
													  					@endif
													  				@endforeach
													  			@endif
													  			<br>
													  			<div class="pull-right">
													  				<span><a><i class="glyphicon glyphicon-plus"></i> new_section</a></span>
													  			</div>
												  			@endforeach
														</div>
										      		</div>
									    		</div>
									  		</div>
									  	@endforeach
										
										</div>
								  	</div>
								</div>
			          		</div>
		          		@endforeach
		          	</div>
		        @endif
		    @endforeach
      	</div>
    </div>

    
</div>
<ul class="fordtreeview list-group col-md-2">
	<li class="list-group-item">
		<label for="ORGSearch">Organization Structure Search</label>
		<input type="text" name="ORGSearch" id="FAQSearch" /><input type="submit" id="SearchFAQ" value="search" />
		<input type="text" class="form-control menufilter" placeholder="Search..."/>
	</li>
	@foreach($divisi as $org_struk)
  	<li class="list-group-item">
    	<span class="hasSub"><i class="glyphicon glyphicon-globe"></i> Divisi {{$org_struk->nama_divisi}}</span>
    	<ul class="list-group">
    		@foreach($org_struk['unit'] as $value)
      		<li class="list-group-item">
      			@foreach($units as $unit)
      				@if($value->id_unit == $unit->id_unit)
				  		<span class="hasSub"><i class="glyphicon glyphicon-map-marker"></i> Unit {{$unit->nama_unit}} </span>
				  	@endif
				@endforeach
        		<ul class="list-group">
        			@foreach($value['department'] as $department)
          			<li class="list-group-item">
          				@foreach($departments as $deps)
				          	@if($deps->id_department == $department->id_department)
				          		<span class="hasSub"><i class="glyphicon glyphicon-adjust"></i> Department {{$deps->nama_departmen}}</span>
				          	@endif
				        @endforeach
            			<ul class="list-group">
              				<li class="list-group-item"><i class="glyphicon glyphicon-tint"></i> Section A2a1</li>
              				<li class="list-group-item"><i class="glyphicon glyphicon-tint"></i> Section A2a2</li>
            			</ul>
            		</li>
            		@endforeach
            	</ul>
          	</li>
          	@endforeach
        </ul>
    </li>
    @endforeach
</ul>

	<script>
        $('#SearchFAQ').click(function () {
            $('#FAQ').children('div.TopicContents').hide().children('div.Answer').hide();
            if ($('#FAQSearch').val() != '') {
                $('div.Answer:Contains(' + $('#FAQSearch').val().toUpperCase() + ')').show().parent().show(300);
                try {
                    $('.highlight').removeClass("highlight");
                    $('div.Answer:Contains(' + $('#FAQSearch').val().toUpperCase() + ')').each(function () {
                        $(this).html(
                            $(this).html().replace(
                                new RegExp($('#FAQSearch').val(), "ig"),
                                function(match) {
                                    return '<span class="highlight">' + match + '</span>';
                                }
                            )
                        )
                    });
                }
                catch (err) {
                }
            }
            return false;
        });
	</script>

@endsection
