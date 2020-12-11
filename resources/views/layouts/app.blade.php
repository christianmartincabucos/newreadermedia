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
    <meta property="og:image" content="@yield('og-image', url('storage/nrmedia-tag.jpg'))">
    <link rel="canonical" href="@yield('canonical', URL::current() )" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('masonry/style.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    {{-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet"> --}}
    <link rel="shortcut icon" href="{{{ url('storage/nrmedia-logo2.png') }}}">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <style>
        .tox-notifications-container {
            display: none !important;
        }

        .panel-review {
            font-weight: bold;
            background: #6d927f;
            color: #fff;
            padding: 5rem;
            border-radius: 15px 40px 100px 20px;
        }

        @media only screen and (max-width: 400px) {
            .px-5 {
                padding-left: 0.5rem !important;
                padding-right: 0rem !important;
            }
        }

        @media only screen and (min-width: 401px) {
            .px-5 {
                padding-left: 5rem !important;
                padding-right: 5rem !important;
            }
        }

        .box-section a {
            color: #fff !important;
            text-shadow: none !important;
        }

        .box-section a:hover {
            font-weight: bold;
        }

        .cke_source {
            color: #000 !important;
        }

        .panel-default>.panel-heading {
            margin-bottom: 22px;
            /* background-color: #fff; */
            background-color: rgba(0, 0, 0, 0.9) !important;
            border: 0px solid transparent;
            background-color: rgba(0, 0, 0, 0.9) !important;
            -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05) !important;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05) !important;
            color: white !important;
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.9) !important;
        }

        .btn:hover {
            color: #fff;
        }

        .btn-maron {
            border-color: #B42828 !important;
            background-color: transparent !important;
        }

        .btn-maron:hover {
            background-color: #B42828 !important;
        }

        .btn-sm {
            padding: 2px 10px !important;
        }

        .float-right {
            float: right !important;
            margin-right: 5px;
        }

        .btn-curve {
            /* border-radius: 5px 5px 25px!important; */
        }

        .modal-dialog {
            width: 98% !important;
        }

        .modal {
            color: #fff !important;
            border-radius: 5px !important;
        }

        .modal .modal-header,
        .modal-footer {
            background: rgb(180, 40, 40) !important;
            padding: 5px !important;
        }

        .modal .modal-content {
            border-radius: .3rem !important;
            background: rgba(0, 0, 0, 0.9) !important;
        }

        /* .pagination>li>a,
        .pagination>li>span {
            background-color: #333 !important;
            border: 1px solid #ddd !important;
        }
        */
        .pagination>li>a:hover {
            background-color: #333 !important;
        }

        .pagination>li>a,
        .pagination>li>span {
            background-color: rgba(0, 0, 0, 0.9) !important;
            border: 1px solid #a94442 !important;
        }

        /*  .modal-content{
            height: 100%!important;
        } */
    </style>
    @stack('css')
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125947986-1"></script>
    <script async src="{{ asset('masonry/lighbox.js') }}"></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
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

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-126701606-10');
    </script>
</head>

<body style="background:url({{{ url('storage/poster.PNG') }}}) center center no-repeat;background-size: cover;">

    <nav class="navbar navbar-fixed-top navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- New Reader Media -->
                    <img src="{{ asset('storage/nrmedia.png')}}" style="width:70px;">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    @guest
                    <li class="text-center"><a href="{{ route('login') }}">Login</a></li>
                    <li class="text-center"><a href="{{ route('register') }}">Register</a></li>
                    @else
                    @if(Auth::user()->is_verified != 6)
                    <li class="text-center"> <a data-toggle="modal" data-target="#myModal">Create Blog</a></li>
                    <li class="text-center" class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li class="text-center">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endif
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="fullscreen-bg">

        <video loop muted autoplay poster="{{{ url('storage/poster.png') }}}" class="fullscreen-bg__video">

            {{-- <source src="{{{ url('storage/videos/film-production.webm') }}}" type="video/webm"> --}}
            <source src="{{{ url('storage/videos/film-production.mov') }}}" type="video/mp4">
            {{-- <source src="{{{ url('storage/videos/film-production.ogv') }}}" type="video/ogg"> --}}
        </video>
    </div>
    <div id="app">
        <form-blog></form-blog>
        <div class="container hide-show" style="margin-top:50px!important;">

            <div id="banner" style="height:120px;background:url({{{ url('storage/reel-bg4.jpg') }}});background-size: cover;border-bottom: 1px solid rgba(255,255,255,.2);padding:0;">

                <div style="">
                    <a href="{{ url('/') }}">
                        <img src="{{{ url('storage/nrmedia-black.png') }}}" alt="" style="height:120px;" alt="New Reader Media">
                    </a>

                    {{-- <span style="color:#000;font-size:50px">New <span class="text-red">Reader</span> Media</span> --}}
                </div>

            </div>
            <div id="banner-header">
                <a href="{{ url('/') }}">
                    <img src="{{{ url('storage/nrmedia.png') }}}" alt="" style="height:50px">
                </a>
            </div>
            <nav class="navbar navbar-default  navbar-static-top" style="min-height:0;border-radius:0;margin-bottom:0">
                <div>
                    <div class="navbar-header" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle-center text-left" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="fa fa-bars"></span>
                            <span class="navmenu">MENU</span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse navbar-nav-justified" id="bs-example-navbar-collapse-1">
                        <ul class="nav nav-pills nav-justified">
                            <li class="{{{ (Request::is(['/']) ? 'active' : '') }}}"><a href="{{ url('/') }}" style="border-radius:0">Home</a></li>

                            <!-- <li class="{{{ (Request::is(['blogs', 'screen-adaptation/*']) ? 'active' : '') }}}"><a href="{{ url('/screen-adaptation') }}">Blogs</a></li> -->
                            <li class="{{{ (Request::is(['screen-adaptation', 'screen-adaptation/*']) ? 'active' : '') }}}"><a href="{{ url('/screen-adaptation') }}">Screen Adaptation</a></li>
                            <li class="{{{ (Request::is(['bookstore-display', 'bookstore-display/*']) ? 'active' : '') }}}"><a href="{{ url('/bookstore-display') }}">Bookstore Display</a></li>

                            <!-- <li class="  {{{ (Request::is(['spotlight', 'spotlight/*']) ? 'active' : '') }}}"><a href="{{ url('/spotlight') }}">Spotlight</a></li> -->

                            <li class="dropdown ">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blogs</a>

                                <ul class="dropdown-menu">
                                    <li class="{{{ (Request::is(['blogs-media']) ? 'active' : '') }}}"><a href="{{ url('/blogs/media') }}">Media</a></li>
                                    <li class=" {{{ (Request::is(['blog-nrm/*']) ? '' : '') }}}"><a href="{{ url('/blogs/new-reader-media') }}">NMagazine</a></li>
                                    <li class=" {{{ (Request::is(['reviews/*']) ? '' : '') }}}"><a href="{{ url('/blogs/reviews') }}">Reviews</a></li>
                                    <!-- <li class=" {{{ (Request::is(['blogs/*']) ? '' : '') }}}"><a href="{{ url('/blogs') }}"></a></li> -->
                                    <!-- <li class="{{{ (Request::is(['blogs/arts-and-culture']) ? '' : '') }}}"><a href="{{ url('/blogs/arts-and-culture') }}">Arts and Culture</a></li> -->
                                    <li class=" {{{ (Request::is(['blogs-newsletters*']) ? '' : '') }}}"><a href="{{ url('/blogs/newsletters') }}">Writing Tips</a></li>
                                    <li class=" {{{ (Request::is(['photos.gallery*']) ? '' : '') }}}"><a href="{{ url('/blogs/photos') }}">Photos</a></li>
                                </ul>
                            </li>
                            {{-- <li class="{{{ (Request::is(['partnership', 'partnership/*']) ? 'active' : '') }}}"><a href="{{ url('/partnership') }}" style="border-radius:0">Partnership</a></li> --}}
                            <li class="{{{ (Request::is(['subscribe', 'subscribe/*']) ? 'active' : '') }}}"><a href="{{ url('/subscribe') }}">Subscribe</a></li>
                            <li class="{{{ (Request::is(['contact', 'contact/*']) ? 'active' : '') }}}"><a href="{{ url('/contact') }}">Contact Us</a></li>
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
    @stack('scripts')

    <script src="{{ asset('tinymce/tinymce.js') }}"></script>
    <!-- <script>
        var editor_config = {
            path_absolute: "{{ URL::to('/') }}/",
            selector: "textarea",
            height: 400,
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern",
                "image code"
            ],
            images_upload_url: "/ckeditor/upload",
            
            file_picker_types: 'image',
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function() {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = function() {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);
                        cb(blobInfo.blobUri(), {
                            title: file.name
                        });
                    };
                };
                input.click();
            },
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | fullscreen | code",
            relative_urls: false,
            file_browser_callback: function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementByTagName('body')[0].clientWidth;
                var y = window.innerHeight || document.documentElement.clientHeight || document.grtElementByTagName('body')[0].clientHeight;
                var cmsURL = editor_config.path_absolute + 'laravel-filemanaget?field_name' + field_name;
                if (type = 'image') {
                    cmsURL = cmsURL + '&type=Images';
                } else {
                    cmsUrl = cmsURL + '&type=Files';
                }

                tinyMCE.activeEditor.windowManager.open({
                    file: cmsURL,
                    title: 'Filemanager',
                    width: x * 0.8,
                    height: y * 0.8,
                    resizeble: 'yes',
                    close_previous: 'no'
                });
            }
        };

        tinymce.init(editor_config);
    </script> -->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    {!! Toastr::message() !!}
    <script>
        $(document).ready(function() {
            const timeout = 1800000; // 900000 ms = 15 minutes
            var idleTimer = 1800000;
            $('*').bind('mousemove click mouseup mousedown keydown keypress keyup submit change mouseenter scroll resize dblclick', function() {
                clearTimeout(idleTimer);

                idleTimer = setTimeout(function() {
                    document.getElementById('logout-form').submit();
                }, timeout);
            });
            $("body").trigger("mousemove");
        });
        $(".contact-button").click(function() {
            event.preventDefault();
            $('html,body').animate({
                    scrollTop: $("#footer").offset().top
                },
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

                jQuery('html, body').animate({
                    scrollTop: 0
                }, duration);

                return false;

            })

        });
    </script>
    <!-- <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/adapters/jquery.js') }}"></script> -->

    <script id="dsq-count-scr" src="//newreadermedia.disqus.com/count.js" async></script>
</body>

</html>