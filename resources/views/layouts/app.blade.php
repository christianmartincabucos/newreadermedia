<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    {{-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet"> --}}
    <link rel="shortcut icon" href="{{{ url('public/storage/nrmedia-logo2.png') }}}">
</head>
<body style="background:url({{{ url('public/storage/poster.PNG') }}}) center center no-repeat;background-size: cover;">
    
    <div class="fullscreen-bg">
        
        <video loop muted autoplay poster="{{{ url('public/storage/poster.png') }}}" class="fullscreen-bg__video">
            
            {{-- <source src="{{{ url('public/storage/videos/film-production.webm') }}}" type="video/webm"> --}}
            <source src="{{{ url('public/storage/videos/film-production.mov') }}}" type="video/mp4">
            {{-- <source src="{{{ url('public/storage/videos/film-production.ogv') }}}" type="video/ogg"> --}}
        </video>
    </div>
    <div id="app">
        <div class="container">
            <div id="banner" style="height:120px;background:url({{{ url('public/storage/reel-bg4.jpg') }}});background-size: cover;border-bottom: 1px solid rgba(255,255,255,.2);padding:0;">
                
                <div style="">
                    <a href="{{ url('/') }}">
                        <img src="{{{ url('public/storage/nrmedia-black.png') }}}" alt="" style="height:120px;">
                    </a>
                    <a class="hidden pull-right" href="{{ url('/') }}">
                        <img src="{{{ url('public/storage/sample-ads.gif') }}}" alt="" style="height:90px">
                    </a>
                        {{-- <span style="color:#000;font-size:50px">New <span class="text-red">Reader</span> Media</span> --}}
                </div>
            
            </div>
            <div id="banner-header">
                <a href="{{ url('/') }}">
                    <img src="{{{ url('public/storage/nrmedia.png') }}}" alt="" style="height:50px">
                </a>
            </div>
            <nav class="navbar navbar-default  navbar-static-top" style="min-height:0;border-radius:0;margin-bottom:0">
                <div>
                <div class="navbar-header" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle-center" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-bars"></span>
                    <span class="navmenu">MENU</span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-nav-justified" id="bs-example-navbar-collapse-1">
                    <ul class="nav nav-pills nav-justified">
                    <li class="{{{ (Request::is(['/']) ? 'active' : '') }}}"><a href="{{ url('/') }}" style="border-radius:0">Home</a></li>
                    
                    <li class="{{{ (Request::is(['screen-adaptation', 'screen-adaptation/*']) ? 'active' : '') }}}"><a href="{{ url('/screen-adaptation') }}">Screen Adaptation</a></li>
                    <li class="{{{ (Request::is(['bookstore-display', 'bookstore-display/*']) ? 'active' : '') }}}"><a href="{{ url('/bookstore-display') }}">Bookstore Display</a></li>
                    <li class="{{{ (Request::is(['to-read-list', 'to-read-list/*']) ? 'active' : '') }}}"><a href="{{ url('/to-read-list') }}">To-Read List</a></li>
                    <li class="{{{ (Request::is(['featured-client', 'featured-client/*']) ? 'active' : '') }}}"><a href="{{ url('/featured-client') }}">Featured Client</a></li>
                    <li class="{{{ (Request::is(['blogs', 'blogs/*']) ? 'active' : '') }}}"><a href="{{ url('/blogs') }}">Blogs</a></li>
                    {{-- <li class="{{{ (Request::is(['partnership', 'partnership/*']) ? 'active' : '') }}}"><a href="{{ url('/partnership') }}" style="border-radius:0">Partnership</a></li> --}}
                    <li><a href="#" class="contact-button">Contact Us</a></li>
                    <li role="presentation" class="dropdown hidden">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        Dropdown <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/') }}">Link 1</a></li>
                            <li><a href="{{ url('/') }}">Link 2</a></li>
                        </ul>
                    </li>
                    </ul>
                </div>
                </div>
            </nav>
        </div>
        @yield('content')
        <a href="#app" class="back-to-top" style="display: inline;color:#fff"><i class="fa fa-arrow-circle-up"></i></a>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $(".contact-button").click(function() {
            $('html,body').animate({
                scrollTop: $("#footer").offset().top},
                'slow');
        });
        
    </script>
    <script>
 
        jQuery(document).ready(function() {
         
        var offset = 250;
         
        var duration = 'slow';
         
        jQuery(window).scroll(function() {
         
        if (jQuery(this).scrollTop() > offset) {
         
        jQuery('.back-to-top').fadeIn(duration);
         
        } else {
         
        jQuery('.back-to-top').fadeOut(duration);
         
        }
         
        });
         
         
         
        jQuery('.back-to-top').click(function(event) {
         
        event.preventDefault();
         
        jQuery('html, body').animate({scrollTop: 0}, duration);
         
        return false;
         
        })
         
        });
         
    </script>
</body>
</html>
