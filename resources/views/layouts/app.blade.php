<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'New Reader Media'))</title>
    <meta name="google-site-verification" content="hd1INGpSb_YOxoGy0HWmhkTXgzwzwOmqikxI7BtMFA8" />
    <meta property="fb:app_id" content="1878469292220598">
    <meta property="og:url" content="@yield('og-url', url('/') )">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('og-title', config('app.name') )" />
    <meta property="og:description" content="@yield('meta-description', 'New Reader Media is a marketing and publicity firm for enterprising creatives, artists, and independent authors.')" />
    <meta property="og:image" content="@yield('og-image', url('public/storage/nrmedia-tag.jpg'))">
    <link rel="canonical" href="@yield('canonical', URL::current() )"/>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    {{-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet"> --}}
    <link rel="shortcut icon" href="{{{ url('public/storage/nrmedia-logo2.png') }}}">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125947986-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-125947986-1');
    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-4818974161097446",
        enable_page_level_ads: true
      });
    </script>  
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126701606-10"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-126701606-10');
    </script>
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
                        <img src="{{{ url('public/storage/nrmedia-black.png') }}}" alt="" style="height:120px;" alt="New Reader Media">
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
                    
                    <li class=" hidden {{{ (Request::is(['spotlight', 'spotlight/*']) ? 'active' : '') }}}"><a href="{{ url('/spotlight') }}">Spotlight</a></li>
                    <li class="dropdown hidden">
                        <a href="{{ url('/blogs') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blogs</a>
                        <ul class="dropdown-menu">
                            <li class="{{{ (Request::is(['blogs/editors-picks']) ? 'active' : '') }}}"><a href="{{ url('/blogs/editors-picks') }}">Editor's Picks</a></li>
                            <li class="hidden {{{ (Request::is(['blogs/*']) ? 'active' : '') }}}"><a href="{{ url('/blogs') }}">Writing Tips</a></li>
                            <li class="hidden {{{ (Request::is(['blogs/*']) ? 'active' : '') }}}"><a href="{{ url('/blogs') }}">Humor</a></li>
                            <li class="{{{ (Request::is(['blogs/arts-and-culture']) ? 'active' : '') }}}"><a href="{{ url('/blogs/arts-and-culture') }}">Arts and Culture</a></li>
                            <li class="hidden {{{ (Request::is(['blogs/*']) ? 'active' : '') }}}"><a href="{{ url('/blogs') }}">News</a></li>
                        </ul>
                    </li>
                    {{-- <li class="{{{ (Request::is(['partnership', 'partnership/*']) ? 'active' : '') }}}"><a href="{{ url('/partnership') }}" style="border-radius:0">Partnership</a></li> --}}
                    <li class="{{{ (Request::is(['subscribe', 'subscribe/*']) ? 'active' : '') }}}"><a href="{{ url('/subscribe') }}">Subscribe</a></li>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    {!! Toastr::message() !!}
    <script>
        $(".contact-button").click(function() {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $("#footer").offset().top},
                'slow');
            return false;
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
