@include('layouts.head')
<style>
	.pagination>li>a, .pagination>li>span { border-radius: 50% !important;margin: 0 5px;}
</style>
<body class="page-header-fixed page-full-width">

    <!--header -->
    @extends('layouts.header')
	@section('navbar')
					<li class="classic-menu-dropdown"><a href="/">Home</a></li>
					<li class="classic-menu-dropdown active"><a href="/news-board">News</a><span class="selected"></span></li>
					@if(Auth::user())
					<li class="classic-menu-dropdown"><a href="{{url('/forum')}}">Forum</a></li>
					<li class="classic-menu-dropdown">
						<a data-toggle="dropdown" data-hover="dropdown" data-close-others="true" href="#">
							My Modules <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							@foreach ($module as $modul)
								<li>
									<a href="/module/{{$modul->id}}">{{$modul->nama}}</a>
								</li>
							@endforeach
						</ul>
					 
					</li>
						
					 
					<li class="classic-menu-dropdown"><a href="/raport/{{Auth::user()->id}}">My Profile</a></li>
					@endif
	@endsection
	
    <div class="page-container" id="wrapper">
        <div class="page-content-wrapper"> 
            <div class="page-content" style="background-color: rgb(243, 247, 248);opacity: 1;">			

                <div class="block-advice">
                    <div class = "text-center">
                        <h1 class="brand-name">News</h1>
                    </div><br>
                <div class="row" >
                    @if(empty($berita[0]))
                        <div style="text-align: center;">
                            <h4>No news content</h4>
                        </div>
                    @else
                        <input type='hidden' id='current_page' />
                        <input type='hidden' id='show_per_page' />
                        <div id="content">
                        
                        @foreach ($berita as $news)
                            <div class="col-lg-4 col-sm-6 portfolio-item" style="height: 400px;">
                                <div class="card h-100">
                                    <a href="#"><img class="card-img-top img-fluid" src="{{$news->image or 'Elegantic/images/ALS.jpg'}}" alt="" style="border: 1px solid green; border-radius:5%; "></a>
                                    <div class="card-block">
                                            <h4 class="card-title"><a href="/news/{{$news->id}}">{{ str_limit($news->title, $limit = 20, $end = '...') }}</a></h4>
                                            <p class="card-text" align="justify">{{ strip_tags(str_limit($news->content, $limit = 360, $end = '...')) }}</p>
                                            <p class="text-right" ><a href="/news/{{$news->id}}">Read more </a></p>
                                            <br>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    @endif
                    <br> 
                </div>
                <div style="text-align: center">
                    <div class="container">
                        <ul class="pagination" id="page_navigation">
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
		
        </div>
        <!-- Footer -->
        @include('layouts.footer')
    </div>

    @include('layouts.script')
<script type="text/javascript">
$(document).ready(function(){
    //how much items per page to show
    var show_per_page = 6;
    //getting the amount of elements inside content div
    var number_of_items = $('#content').children().length;
    //calculate the number of pages we are going to have
    var number_of_pages = Math.ceil(number_of_items/show_per_page);
    //set the value of our hidden input fields
    $('#current_page').val(0);
    $('#show_per_page').val(show_per_page);
    //now when we got all we need for the navigation let's make it '
    /*
    what are we going to have in the navigation?
        - link to previous page
        - links to specific pages
        - link to next page
    */
    var navigation_html = '';
    var current_link = 0;
    while(number_of_pages > current_link){
        navigation_html += '<li><a class="page_link" href="javascript:go_to_page(' + current_link +')" longdesc="' + current_link +'">'+ (current_link + 1) +'</a></li>';
        current_link++;
    }
    navigation_html += '';
    
    $('#page_navigation').html(navigation_html);
    //add active_page class to the first page link
    $('#page_navigation .page_link:first').addClass('active_page');
    //hide all the elements inside content div
    $('#content').children().css('display', 'none');
    //and show the first n (show_per_page) elements
    $('#content').children().slice(0, show_per_page).css('display', 'block');
});
function previous(){
    new_page = parseInt($('#current_page').val()) - 1;
    //if there is an item before the current active link run the function
    if($('.active_page').prev('.page_link').length==true){
        go_to_page(new_page);
    }
}
function next(){
    new_page = parseInt($('#current_page').val()) + 1;
    //if there is an item after the current active link run the function
    if($('.active_page').next('.page_link').length==true){
        go_to_page(new_page);
    }
}
function go_to_page(page_num){
    //get the number of items shown per page
    var show_per_page = parseInt($('#show_per_page').val());
    //get the element number where to start the slice from
    start_from = page_num * show_per_page;
    //get the element number where to end the slice
    end_on = start_from + show_per_page;
    //hide all children elements of content div, get specific items and show them
    $('#content').children().css('display', 'none').slice(start_from, end_on).css('display', 'block');
    /*get the page link that has longdesc attribute of the current page and add active_page class to it
    and remove that class from previously active page link*/
    $('.page_link[longdesc=' + page_num +']').addClass('active_page').siblings('.active_page').removeClass('active_page');
    //update the current page input field
    $('#current_page').val(page_num);
}
</script>

</body>
</html>
