@extends('layouts.app')
@section('title')New Reader Media - Home @endsection
@section('og-title')New Reader Media - Home @endsection
@section('meta-description')New Reader Media has the marketing and promotional services your book needs. Bookstore displays, screenplays and beyond!@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box" style="margin-bottom:0">
                <div class="box-body">
                    {{-- BIG IMAGE --}}
                    <div class="row">
                    <section class="box-section">
                        <div class="col-md-8">
                            <div class="" style="margin-bottom:15px">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                        <li data-target="#myCarousel" data-slide-to="3"></li>
                                        <li data-target="#myCarousel" data-slide-to="4"></li>
                                        <li data-target="#myCarousel" data-slide-to="5"></li>
                                        <li data-target="#myCarousel" data-slide-to="6"></li>
                                    </ol>
                                    
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img style="width:100%" src="{{{ url('public/storage/services/screenplay-service-v2.jpg') }}}" alt="Screenplay Service">
                                            <div class="layer" style="background-color: rgba(40, 40, 40, 0.6);position: absolute;top: 0;left: 0;width: 100%;height: 100%;"></div>
                                            
                                            <div class="carousel-caption" style="background-color: rgba(0, 0, 0, 0.5);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                                <p class="text-left"><strong><span style="font-size: 22.0pt;color:#fff">Screenplay Service</span></strong></p>
                                                <p class="text-left" style="margin-top:0"><span style="font-size: 16.0pt;color:#fff">Your story plus our writers, a complete script masterpiece!</span></p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img style="width:100%" src="{{{ url('public/storage/services/treatment-script-draft-service.jpg') }}}" alt="Treatment Script Draft Service">
                                            <div class="layer" style="background-color: rgba(40, 40, 40, 0.6);position: absolute;top: 0;left: 0;width: 100%;height: 100%;"></div>
                                            
                                            <div class="carousel-caption" style="background-color: rgba(0, 0, 0, 0.5);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                                <p class="text-left"><strong><span style="font-size: 22.0pt;color:#fff">Treatment/Script Draft Service</span></strong></p>
                                                <p class="text-left" style="margin-top:0"><span style="font-size: 16.0pt;color:#fff">Chapters and events are the main focus!</span></p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img style="width:100%" src="{{{ url('public/storage/services/synopsis-coverage-service-v2.jpg') }}}" alt="Synopsis Coverage Service">
                                            <div class="layer" style="background-color: rgba(40, 40, 40, 0.6);position: absolute;top: 0;left: 0;width: 100%;height: 100%;"></div>
                                            
                                            <div class="carousel-caption" style="background-color: rgba(0, 0, 0, 0.5);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                                <p class="text-left"><strong><span style="font-size: 22.0pt;color:#fff">Synopsis/Coverage Service</span></strong></p>
                                                <p class="text-left" style="margin-top:0"><span style="font-size: 16.0pt;color:#fff">Your story ready for the big screen!</span></p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img style="width:100%" src="{{{ url('public/storage/services/website-creation-v2.jpg') }}}" alt="Website Creation">
                                            <div class="layer" style="background-color: rgba(40, 40, 40, 0.6);position: absolute;top: 0;left: 0;width: 100%;height: 100%;"></div>
                                            
                                            <div class="carousel-caption" style="background-color: rgba(0, 0, 0, 0.5);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                                <p class="text-left"><strong><span style="font-size: 22.0pt;color:#fff">Website Creation, Hosting and SEO</span></strong></p>
                                                <p class="text-left" style="margin-top:0"><span style="font-size: 16.0pt;color:#fff">Your professional interactive portfolio!</span></p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img style="width:100%" src="{{{ url('public/storage/services/publicity-services-v2.jpg') }}}" alt="Publicity Services">
                                            <div class="layer" style="background-color: rgba(40, 40, 40, 0.6);position: absolute;top: 0;left: 0;width: 100%;height: 100%;"></div>
                                            
                                            <div class="carousel-caption" style="background-color: rgba(0, 0, 0, 0.5);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                                <p class="text-left"><strong><span style="font-size: 22.0pt;color:#fff">Publicity Services</span></strong></p>
                                                <p class="text-left" style="margin-top:0"><span style="font-size: 16.0pt;color:#fff">We make sure you will be famous!</span></p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img style="width:100%" src="{{{ url('public/storage/services/movie-agent-v2.jpg') }}}" alt="Movie Agent">
                                            <div class="layer" style="background-color: rgba(40, 40, 40, 0.6);position: absolute;top: 0;left: 0;width: 100%;height: 100%;"></div>
                                            
                                            <div class="carousel-caption" style="background-color: rgba(0, 0, 0, 0.5);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                                <p class="text-left"><strong><span style="font-size: 22.0pt;color:#fff">Movie Agent</span></strong></p>
                                                <p class="text-left" style="margin-top:0"><span style="font-size: 16.0pt;color:#fff">Our movie agents will get your story to the right hands!</span></p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img style="width:100%" src="{{{ url('public/storage/services/sneak-peek-service-v2.jpg') }}}" alt="Sneak Peek">
                                            <div class="layer" style="background-color: rgba(40, 40, 40, 0.6);position: absolute;top: 0;left: 0;width: 100%;height: 100%;"></div>
                                            
                                            <div class="carousel-caption" style="background-color: rgba(0, 0, 0, 0.5);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                                <p class="text-left"><strong><span style="font-size: 22.0pt;color:#fff">Sneak Peek</span></strong></p>
                                                <p class="text-left" style="margin-top:0"><span style="font-size: 16.0pt;color:#fff">What better way to entice producers than to give them a peek!</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                        {{-- <span class="fa fa-chevron-left"></span> --}}
                                        {{-- <span class="sr-only">Previous</span> --}}
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                        {{-- <span class="glyphicon glyphicon-chevron-right"></span> --}}
                                        {{-- <span class="sr-only">Next</span> --}}
                                    </a>
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-4">
                            <section class="box-section" style="border-top: 3px solid rgb(180, 40, 40);">
                                <div class="box-article">
                                    <a class="article-link" href="{{ url('/sneak-peeks') }}"><h4 class="title title-red">Sneak Peeks</h4></a>    
                                    <div class="embed-container" style="margin-bottom:10px">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/hvRXBeXfMXo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                    
                                    <h4 class="title"><a href="https://www.youtube.com/watch?v=hvRXBeXfMXo" target="_blank" rel="nofollow"><strong>Unspoken Revivalism - Sneak Peek</strong></a></h4>
                                    <p>As an extraordinary philosopher, Alkawther Makki stresses her incentives for promoting a grandeur ethical humanity; which may be sensed in poems and strongly expressed in proverbs, vindications and assertions.</p>
                                   
                                    
                                </div>
                                
                            </section>
                        </div>
                        
                    </section>
                    </div>
                    <div class="row">
                    
                        <div class="col-md-8 text-justify">
                            <section class="box-section" style="border-top: 3px solid rgb(180, 40, 40);">
                                <div class="box-article">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3 class="header-white">Who We Are</h3>
                                            <p class="smallx">New Reader Media is a creative marketing and PR firm. We know a lot of amazing people who rock at what they do, and we can help get your brand stories out into the world.</p>
                                            <p class="smallx">We can help you connect with your audiences and craft your brand with ads and marketing. We produce quality white label content that resonates, from writing to photography to a number of different types of media, including film, infographics, and everything in between.</p>
                                            <p class="smallx">New Reader Media has marketing, ad, and PR services. We’ll get you the right media and online publicist and run advertising campaigns online and beyond.</p>
                                            <p class="smallx">We can help you publish and publicize your book, and we can help you turn it into a movie. <a href="#" class="contact-button link-white">Contact us</a>.</p>
                                            <p class="smallx">More info on our <a class="link-white" href="{{ url('/marketing-and-partnership') }}" target="_blank">Marketing and Partnership</a> page.</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </section>
                            
                        </div>
                        <div class="col-md-4">
                            <section class="box-section" style="border-top: 3px solid rgb(180, 40, 40);">
                                
                                <div class="box-article">
                                    
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-4">
                                            <a class="article-link" href="{{ url('/press-release') }}"><img class="article-thumbnail" src="{{{ url('public/storage/nrmedia-logo2.png') }}}" style="width:100%;margin:auto 0" alt="New Reader Media"></a>
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <a class="article-link" href="{{ url('/press-release') }}"><h4 class="title title-red">What's New?</h4></a><strong>Press Release</strong>
                                            <p class="small">International Media Firm Launches Literary Magazine for the New Reader.<br><a class="small read-more" href="{{ url('/press-release') }}" rel="nofollow">Read more</a></p>
                                        </div>
                                    </div>
                                    <div class="divider hidden" style="margin:0 0 5px 0"></div>
                                    <div class="row hidden">
                                        <div class="col-xs-12 col-sm-4">
                                            <a href="{{ url('/spotlight') }}"><img class="article-thumbnail img-circle" src="{{{ url('public/storage/spotlight.jpg') }}}" style="width:100%" alt="Spotlight"></a>
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <a class="article-link" href="{{ url('/spotlight') }}"><h4 class="title title-red">Spotlight</h4></a>
                                            <p class="small">{{ str_limit("Check out who gets to be in New Reader Media's spotlight.",72) }} <br><a class="small read-more" href="{{ url('/spotlight') }}" rel="nofollow">Read more</a> </p>
                                        </div>
                                    </div>
                                    <div class="divider" style="margin:0 0 5px 0"></div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-4">
                                            <a class="article-link" href="https://www.newreadermagazine.com/download" target="_blank"><img class="article-thumbnail" src="https://www.newreadermagazine.com/images/nrm-issue-7.jpg" style="width:100%" alt="NRM Issue 7"></a>
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <a class="article-link" href="https://www.newreadermagazine.com/download" target="_blank"><h4 class="title title-red">New Reader Magazine</h4></a><strong>Issue no. 7</strong>
                                            <p class="small">{{ str_limit("For this third quarter, New Reader Magazine's 'Herald' pays tribute to unsung heroes and celebrates moments that aspire us to become better versions of ourselves.",72) }}<br><a class="small read-more" href="https://www.newreadermagazine.com/download" rel="nofollow">Read more</a> </p>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </section>
                        </div>
                        
                    
                    </div>
                    <br>
                    {{-- SLIDER IMAGES --}}
                    <section class="box-section hidden">
                        <div class="row">
                            <div class="col-md-3">
                                <img style="width:100%" src="{{{ url('public/storage/no-image.jpg') }}}">
                            </div>
                            <div class="col-md-3">
                                <img style="width:100%" src="{{{ url('public/storage/no-image.jpg') }}}">
                            </div>
                            <div class="col-md-3">
                                <img style="width:100%" src="{{{ url('public/storage/no-image.jpg') }}}">
                            </div>
                            <div class="col-md-3">
                                <img style="width:100%" src="{{{ url('public/storage/no-image.jpg') }}}">
                            </div>
                        </div>
                    </section>
                    
                    {{-- ARTICLES --}}
                    <div class="row">
                        <div class="col-md-4">
                            <section class="box-section" style="border-top: 3px solid rgb(180, 40, 40);">
                                
                                <div class="box-article">
                                    
                                    <div style="position:relative;width:100%;height:250px;background:url({{{ url('public/storage/services/bookstore-v2-1.jpg') }}}) center center no-repeat;background-size: cover;overflow:hidden">
                                        <div class="layer" style="background-color: rgba(0, 0, 0, 0.7);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                            
                                            <a class="article-link" href="{{ url('/bookstore-display') }}"><h3 class="header-red-box"><strong>9 Reasons Why Bookstores Are Still The Real Deal</strong></h3></a>
                                            <p class="text-justify" style="font-size:12px;position: relative;top: 35%;transform: translateY(-60%); ">Who goes to bookstores anymore? Nowadays one can simply get a book online and have it delivered to the doorstep. E-books? Audiobooks? And shall I say, pirated books? 
                                                But there’s something that bookstores offer that’s better than convenience. 
                                                <br><a class="small read-more" href="{{ url('/bookstore-display') }}" rel="nofollow">Read more</a>
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </section>
                        </div>
                        <div class="col-md-4">
                            <section class="box-section" style="border-top: 3px solid rgb(180, 40, 40);">
                                
                                <div class="box-article">
                                    
                                    <div style="position:relative;width:100%;height:250px;background:url({{{ url('public/storage/services/adapted-screenplay-v2-1.jpg') }}}) center center no-repeat;background-size: cover;overflow:hidden">
                                        <div class="layer" style="background-color: rgba(0, 0, 0, 0.7);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                            
                                            <a class="article-link" href="{{ url('/screen-adaptation') }}"><h3 class="header-red-box"><strong>Let’s turn your book into a movie</strong></h3></a>
                                            <p class="text-justify" style="font-size:12px;position: relative;top: 35%;transform: translateY(-60%); ">If you and your audience can picture the plot and characters inside your head, then think about elevating those images and seeing the actual event right before your eyes. This is what screenplay adaptation aims. They take a book and rewrite it to ensure that the story works as a film.
                                                <br><a class="small read-more" href="{{ url('/screen-adaptation') }}" rel="nofollow">Read more</a>
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </section>
                        </div>
                        <div class="col-md-4">
                            <section class="box-section" style="border-top: 3px solid rgb(180, 40, 40);">
                                <div class="box-article">
                                   
                                    <div style="position:relative;width:100%;min-height:250px;background:url({{{ url('public/storage/services/sneak-peeks-v2-1.jpg') }}}) center center no-repeat;background-size: cover;overflow:hidden">
                                        <div class="layer" style="background-color: rgba(0, 0, 0, 0.7);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                            
                                            
                                            <a class="article-link" href="{{ url('/sneak-peek') }}"><h3 class="header-red-box"><strong>Sneak Peeks: Why do you need them</strong></h3></a>
                                            <p class="text-justify" style="font-size:12px;position: relative;top: 35%;transform: translateY(-50%); ">Sneak Peeks have been gaining a lot of interest from the self-published authors lately for a good reason.  Sneak Peeks are ultra-short and cinematic videos which follow the same principle as movie trailers. In less than two minutes, it presents a book’s story while teasing audiences with its best parts.
                                                <br><a class="small read-more" href="{{ url('/sneak-peek') }}" rel="nofollow">Read more</a>
                                            </p>
                                        
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <section class="box-section" style="border-top: 3px solid rgb(180, 40, 40);">
                                <div class="box-article">
                                    
                                    <div class="embed-container-x">
                                        
                                        <video width="100%" height="auto" controls controlsList="nodownload" poster="{{{ url('public/storage/videos/alkawther-makki-interview_thumbnail.jpg') }}}">
                                            <source src="{{{ url('public/storage/videos/alkawther-makki-interview.mp4') }}}" type="video/mp4">
                                            
                                              Your browser does not support the video tag.
                                        </video>
                                    </div>
                                    <h4 class="title"><a href="{{ url('/author-interview') }}"><strong>Author Interview: Alkawther Makki, Unspoken Revivalism</strong></a></h4>
                                    <p class="small text-justify">
                                        Alkawther Makki demonstrates her broad imagination by portraying many forms of persona like an actress in different roles. Her innocent character reflects her real life experiences. On the other hand she can be a witty character in her melodramatic roles, provoking a new and unsurpassed thrilling form of poetry filled with grand illustrations, captivating readers to an exhilarating edge!
                                    </p>
                                
                                </div>
                            </section>
                        </div>
                        <div class="col-md-4">
                            
                            <section class="box-section" style="border-top: 3px solid rgb(180, 40, 40);">
                                <div class="box-article">
                                    <h3 style="margin-top:0" class="header-red">Literary Works</h3>
                                    <div class="row">
                                        <div class="col-md-4">
                                          <img class="article-thumbnail" src="https://www.newreadermagazine.com/images/how-seo-can-help-you-build-a-readership-and-market-your-book.jpg" style="width:100%" alt="How SEO Can Help You Build a Readership and Market Your Book">
                                        </div>
                                        <div class="col-md-8">
                                          <h4 class="title"><a href="https://www.newreadermagazine.com/tips-and-guides/how-seo-can-help-you-build-a-readership-and-market-your-book" target="_blank"  rel="nofollow">How SEO Can Help You Build a Readership and Market Your Book</a> <br><small>newreadermagazine.com</small></h4>
                                          <p class="text-justify">So, you’ve written the book. Now what? Find a readership, connect with other authors, and market your book with these simple SEO techniques.</p>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="row">
                                        <div class="col-md-4">
                                          <img class="article-thumbnail" src="https://www.newreadermagazine.com/images/the-beginners-guide-to-the-best-seo-practices-in-2017-and-2018.jpg" style="width:100%" alt="The Beginner’s Guide to the Best SEO Practices in 2017 and 2018">
                                        </div>
                                        <div class="col-md-8">
                                          <h4 class="title"><a href="https://www.newreadermagazine.com/tips-and-guides/the-beginners-guide-to-the-best-seo-practices-in-2017-and-2018" target="_blank"  rel="nofollow">The Beginner’s Guide to the Best SEO Practices in 2017 and 2018</a> <br><small>newreadermagazine.com</small></h4>
                                          <p class="text-justify">SEO doesn’t have to be scary at all. We'll help you tame the beast and appease the Google gods with this simple guide to the best and the latest in SEO practices.</p>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                
                            </section>
                            
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            
                            <section class="box-section" style="border-top: 3px solid rgb(180, 40, 40);">
                                <div class="box-article">
                                    <h3 style="margin-top:0" class="header-red">Something worth a read...</h3>
                                    <div class="row">
                                        
                                        @include('pages.recommendations')
                                    
                                    </div>
                                </div>
                                
                            </section>
                            
                        </div>
                    </div>
                   
                    
                </div>
                
                <div class="" style="position:relative;width:100%;background:url({{{ url('public/storage/sample-background.jpeg') }}}) center center no-repeat;background-size: cover;">
                    <div class="layer" style="background-color: rgba(180, 40, 40, 0.8);position: absolute;top: 0;left: 0;width: 100%;height: 100%;">
                    </div>
                    <div class="col-md-12s">
                            <div class="">
                                <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel2" data-slide-to="1"></li>
                                        <li data-target="#myCarousel2" data-slide-to="2"></li>
                                        <li data-target="#myCarousel2" data-slide-to="3"></li>
                                        <li data-target="#myCarousel2" data-slide-to="4"></li>
                                        
                                    </ol>
                                    
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            {{-- <img style="width:100%;height:200px" src="{{{ url('public/storage/sample-img-1.jpg') }}}"> --}}
                                            <div class="text-center" style="width:100%;height:300px;max-height:450px;background:transparent;padding-top:20px;"></div>
                                            <div class="carousel-caption">
                                                <img src="{{{ url('public/storage/testimonials/paul-antwi.png') }}}" alt="Paul Antwi" class="img-circle" style="width:100px">
                                                <h4>"Thank you so much for this good job you have done of the great story created through the book. I've checked and see everything looks good and ready now."</h4>
                                                <p class="">- Paul Antwi</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            {{-- <img style="width:100%;height:200px" src="{{{ url('public/storage/sample-img-2.jpg') }}}"> --}}
                                            <div class="text-center" style="width:100%;height:300px;;max-height:450px;background:transparent;padding-top:20px;"></div>
                                            <div class="carousel-caption">
                                                <img src="{{{ url('public/storage/testimonials/carnie-mattisonn.png') }}}" alt="Carni Mattisonn" class="img-circle" style="width:100px">
                                                <h4>"Your amendments to the script have been carefully and skillfully crafted to portray the story in a smooth and cohesive way that flows easily."</h4>
                                                <p class="">- Dr. Carnie Matisonn</p>
                                            </div>
                                        </div>
                                        
                                        <div class="item">
                                            {{-- <img style="width:100%;height:200px" src="{{{ url('public/storage/sample-img-3.jpg') }}}"> --}}
                                            <div class="text-center" style="width:100%;height:300px;;max-height:450px;background:transparent;padding-top:20px;"></div>
                                            <div class="carousel-caption">
                                                <img src="{{{ url('public/storage/testimonials/manuel-pelaez.png') }}}" alt="Manuel Pelaez" class="img-circle" style="width:100px">
                                                <h4>"Their dedication towards professionalism, is unbelievable. They dedicate themselves to bring an author, writer, and artist, to a higher level, without any doubt, I will continue joint ventures with them, into successful outcomes, they are part of my family now, thank you."</h4>
                                                <p class="">- Manuel Pelaez</p>
                                            </div>
                                        </div>

                                        <div class="item">
                                            {{-- <img style="width:100%;height:200px" src="{{{ url('public/storage/sample-img-3.jpg') }}}"> --}}
                                            <div class="text-center" style="width:100%;height:300px;;max-height:450px;background:transparent;padding-top:20px;"></div>
                                            <div class="carousel-caption">
                                                <img src="{{{ url('public/storage/testimonials/allen-bonck.jpg') }}}" alt="Allen Bonck" class="img-circle" style="width:100px">
                                                <h4>"I was especially impressed with your research and attention to details. I feel you really understood the story and made it come alive. I think you asked all the right questions and was willing to hear my input."</h4>
                                                <p class="">- Allen Bonck</p>
                                            </div>
                                        </div>
                                        
                                        <div class="item">
                                            {{-- <img style="width:100%;height:200px" src="{{{ url('public/storage/sample-img-3.jpg') }}}"> --}}
                                            <div class="text-center" style="width:100%;height:300px;;max-height:450px;background:transparent;padding-top:20px;"></div>
                                            <div class="carousel-caption">
                                                <img src="{{{ url('public/storage/testimonials/rita-dunham.jpg') }}}" alt="Rita Dunham" class="img-circle" style="width:100px">
                                                <h4>"I am really happy with the outcome of A Token for the Journey, and your ability to stick with the simplicity of the story line. I am very excited about this project. The screenwriter really did an excellent job. Thank you for your committed hard work!"</h4>
                                                <p class="">- Rita Dunham</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
                                        {{-- <span class="fa fa-chevron-left"></span> --}}
                                        {{-- <span class="sr-only">Previous</span> --}}
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel2" data-slide="next">
                                        {{-- <span class="glyphicon glyphicon-chevron-right"></span> --}}
                                        {{-- <span class="sr-only">Next</span> --}}
                                    </a>
                                </div> 
                            </div>
                        </div>
                </div>
                @include('layouts.footer')
                
            </div>
        </div>
    </div>
</div>
@endsection
