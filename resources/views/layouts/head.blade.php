<!DOCTYPE html>
<!--[if lte IE 8]> <html class="oldie" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="format-detection" content="telephone=no">	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ALC | Aerofood Learning Center</title>
	<link rel="icon" href="{{URL::asset('Elegantic/images/ALS.png')}}" type="image/jpg" sizes="16x16">
	<link rel="stylesheet" href="{{ URL::asset('Elegantic/css/fancySelect.css')}}" />
	<link rel="stylesheet" href="{{ URL::asset('Elegantic/css/uniform.css')}}" />
	<link rel="stylesheet" href="{{ URL::asset('Elegantic/css/all.css')}}" />
	<link media="screen" rel="stylesheet" type="text/css" href="{{ URL::asset('Elegantic/css/screen.css')}}" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.js"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/Upload.css')}}" />
    <script type="text/javascript" src="{{ URL::asset('js/UpoladImg.js')}}"></script>
	
	
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css"/>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css"/>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="{{ URL::asset('Elegantic/css/uniform.css')}}" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->

	<!-- BEGIN THEME STYLES -->
	 
	<link href="{{ URL::asset('metro/style-metronic.css')}}" 	rel="stylesheet" type="text/css"/>
	<link href="{{ URL::asset('metro/style.css')}}" 			rel="stylesheet" type="text/css"/>
	<link href="{{ URL::asset('metro/style-responsive.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{ URL::asset('metro/plugins.css')}}" 			rel="stylesheet" type="text/css"/>
	<link href="{{ URL::asset('metro/blog.css')}}" 			   rel="stylesheet" type="text/css"/>
	<link href="{{ URL::asset('metro/themes/default.css')}}" 	rel="stylesheet" type="text/css" id="style_color"/>
	<link href="{{ URL::asset('metro/custom.css')}}" 			rel="stylesheet" type="text/css"/>
	<!-- END THEME STYLES -->

  
  
<!-- summernote script -->
<script>
    $(document).ready(function() {
		$('#summernote').summernote({
		  height: 200,                 // set editor height
		  minHeight: null,             // set minimum height of editor
		  maxHeight: null,             // set maximum height of editor
		  
		});
		
    });
</script>
  

 <style>
.card a img {
    border: 0;
    width: 100%;
}
 </style>
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>