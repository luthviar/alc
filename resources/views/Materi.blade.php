@include('layouts.head')

<body>

    <!-- Header -->
    <div id="wrapper">
        <div class="wrapper-holder">
			@include('layouts.header')s
		</div>
	
			
            <section id="main">
                <div class="block-advice">
                    <h4>Bla Bla Modul</h4>
						<table border=0 class="underlined">
							<tr>
								<td>
								<ol id="example1">
								<li><a href='#'>There is a 2 drink minimum for all guests with reserved seating tickets</p></li>
								<li><a href='#'>Dancing is not allowed on the premises. (abc-257 & 253)</p></li>
								<li><a href='#'>No alcoholic beverages shall be consumed off the premises. (abc-257 & 253)</p></li>
								<li><a href='#'>Flash photography is not permitted in the lounge.</p></li>
								<li><a href='#'>Please present tickets upon arrival.</p></li>
								</ol>
								</td>
							</tr>
						</table>
                </div>
            </section>
            
	
	
	   <!-- Footer -->
        @include('layouts.footer')
    </div>

    @include('layouts.script')
</body>
</html>