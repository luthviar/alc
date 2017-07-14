@include('layouts.head')

<body>

    <!-- Header -->
    <div id="wrapper">
        <div class="wrapper-holder">
            @include('layouts.header')
        
            
            <section id="main">
                <div class="block-advice">
                    <div class = "text-center">
                    
                        <h2>Raport Saya</h2><br>
                        <p align="justify">
                            
                                <iframe id="viewer" src = "{{URL::to($raport->url_file_pdf)}}" width='100%' height='600' allowfullscreen webkitallowfullscreen></iframe>
                                    
                        </p>   
                    </div>
                </div>
            </section>
            
            
            
            
            
            
            
        </div>
        
        <!-- Footer -->
        @include('layouts.footer')
    </div>

    @include('layouts.script')
</body>
</html>

