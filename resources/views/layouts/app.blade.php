<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>
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
                    
                    <li class="{{{ (Request::is(['spotlight', 'spotlight/*']) ? 'active' : '') }}}"><a href="{{ url('/spotlight') }}">Spotlight</a></li>
                    <li class="{{{ (Request::is(['blogs', 'blogs/*']) ? 'active' : '') }}}"><a href="{{ url('/blogs') }}">Blogs</a></li>
                    {{-- <li class="{{{ (Request::is(['partnership', 'partnership/*']) ? 'active' : '') }}}"><a href="{{ url('/partnership') }}" style="border-radius:0">Partnership</a></li> --}}
                    <li><a data-toggle="modal" href="#subscribe_modal">Subscribe</a></li>
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
        @if ($errors->has('email'))
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="box" style="margin-bottom:0;background:rgba(180,40,40,.9)">
                        <div class="box-body">
                            
                                <span class="help-block text-center">
                                    <strong class="text-white"><span class="fa fa-warning"></span> {{ $errors->first('email') }}</strong>
                                </span>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @yield('content')
        <!-- Modal -->
        <div id="subscribe_modal" class="modal fade text-white" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <form method="POST" action="{{ route('subscriber.store') }}">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Subscribe</h4>
                    </div>
                    <div class="modal-body">
                            
                        <p class="text-center">Sign up for free newsletters and get more of New Reader Media delivered to your inbox.</p>
                        
                            {{ csrf_field() }}
                            <div class="input-group{{ $errors->has('email') ? ' has-errors' : '' }}">
                                <input type="email" class="form-control input-lg subscribe-input" name="email" id="" placeholder="Enter your email" required>
                                {{-- <i class="fa fa-envelope-o form-control-feedback" style="text-shadow:none;color:lightgray"></i> --}}
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default btn-lg subscribe-btn"><span class="fa fa-send-o"></span></button>
                                </span>
                            </div>
                            
                            
                        
                        <br>
                        <p class="small text-center"><em>By signing up, you agree to receive promotional and marketing emails from New Reader Media.</em></p>
                            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                    </form>
                </div>

            </div>
        </div>
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
