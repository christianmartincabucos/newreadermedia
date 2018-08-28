@extends('layouts.app')

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
                                            <img style="width:100%" src="{{{ url('public/storage/services/screenplay-service.jpg') }}}">
                                            <div class="layer" style="background-color: rgba(40, 40, 40, 0.6);position: absolute;top: 0;left: 0;width: 100%;height: 100%;"></div>
                                            <div class="carousel-caption">
                                                <h1>Screenplay Service</h1>
                                                <p>Your story plus our writers, a complete script masterpiece!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img style="width:100%" src="{{{ url('public/storage/services/treatment-script-draft-service.jpg') }}}">
                                            <div class="layer" style="background-color: rgba(40, 40, 40, 0.6);position: absolute;top: 0;left: 0;width: 100%;height: 100%;"></div>
                                            <div class="carousel-caption">
                                                <h1>Treatment/Script Draft Service</h1>
                                                <p>Chapters and events are the main focus!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img style="width:100%" src="{{{ url('public/storage/services/synopsis-coverage-service.jpg') }}}">
                                            <div class="layer" style="background-color: rgba(40, 40, 40, 0.6);position: absolute;top: 0;left: 0;width: 100%;height: 100%;"></div>
                                            <div class="carousel-caption">
                                                <h1>Synopsis/Coverage Service</h1>
                                                <p>Your story ready for the big screen!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img style="width:100%" src="{{{ url('public/storage/services/website-creation.jpg') }}}">
                                            <div class="layer" style="background-color: rgba(40, 40, 40, 0.6);position: absolute;top: 0;left: 0;width: 100%;height: 100%;"></div>
                                            <div class="carousel-caption">
                                                <h1>Website Creation, Hosting and SEO</h1>
                                                <p>Your professional interactive portfolio!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img style="width:100%" src="{{{ url('public/storage/services/publicity-services.jpg') }}}">
                                            <div class="layer" style="background-color: rgba(40, 40, 40, 0.6);position: absolute;top: 0;left: 0;width: 100%;height: 100%;"></div>
                                            <div class="carousel-caption">
                                                <h1>Publicity Services</h1>
                                                <p>We make sure you will be famous!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img style="width:100%" src="{{{ url('public/storage/services/movie-agent.jpg') }}}">
                                            <div class="layer" style="background-color: rgba(40, 40, 40, 0.6);position: absolute;top: 0;left: 0;width: 100%;height: 100%;"></div>
                                            <div class="carousel-caption">
                                                <h1>Movie Agent</h1>
                                                <p>Our movie agents will get your story to the right hands!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img style="width:100%" src="{{{ url('public/storage/services/book-trailer.jpg') }}}">
                                            <div class="layer" style="background-color: rgba(40, 40, 40, 0.6);position: absolute;top: 0;left: 0;width: 100%;height: 100%;"></div>
                                            <div class="carousel-caption">
                                                <h1>Teaser Ads</h1>
                                                <p>What better way to entice producers than to give them a peek!</p>
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
                                    
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-4">
                                            <a class="article-link" href="{{ url('/press-release') }}"><img class="article-thumbnail" src="{{{ url('public/storage/nrmedia-logo2.png') }}}" style="width:100%;margin:auto 0"></a>
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <a class="article-link" href="{{ url('/press-release') }}"><h4 class="title title-red">What's New?</h4></a><strong>Press Release</strong>
                                            <p class="small">International Media Firm Launches Literary Magazine for the New Reader.<br><a class="small read-more" href="{{ url('/press-release') }}">Read more</a></p>
                                        </div>
                                    </div>
                                    <div class="divider" style="margin:0 0 5px 0"></div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-4">
                                          <a href="{{ url('/featured-client') }}"><img class="article-thumbnail img-circle" src="{{{ url('public/storage/featured-author/steven-bentley.jpeg') }}}" style="width:100%"></a>
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <a class="article-link" href="{{ url('/featured-client') }}"><h4 class="title title-red">Featured Client</h4></a><strong>Steven Bentley</strong>
                                            <p class="small">{{ str_limit("With a career spanning more than thirty years, Steven Bentley, M.D. describes the real world of emergency medicine from the viewpoints of a practicing physician. ",72) }} <br><a class="small read-more" href="{{ url('/featured-author') }}">Read more</a> </p>
                                        </div>
                                    </div>
                                    <div class="divider" style="margin:0 0 5px 0"></div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-4">
                                            <a class="article-link" href="https://www.newreadermagazine.com/download"><img class="article-thumbnail" src="https://www.newreadermagazine.com/images/nrm-second-issue.jpg" style="width:100%"></a>
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <a class="article-link" href="https://www.newreadermagazine.com/download"><h4 class="title title-red">New Reader Magazine</h4></a><strong>Issue no. 2</strong>
                                            <p class="small">{{ str_limit("The second issue is out! In this issue, we leave behind any preconceived notions about where people are from and the worlds they create. ",72) }}<br><a class="small read-more" href="https://www.newreadermagazine.com/download">Read more</a> </p>
                                        </div>
                                    </div>
                                    
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
                                            <p class="smallx">We can help you publish and publicize your book, and we can help you turn it into a movie. <a href="#" class="contact-button">Contact us</a>.</p>
                                            <p class="smallx">More info on our <a href="https://www.newreadermagazine.com/services/marketing" target="_blank">Marketing and Partnership</a> page.</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </section>
                            
                        </div>
                        <div class="col-md-4">
                            <section class="box-section" style="border-top: 3px solid rgb(180, 40, 40);">
                                
                                <div class="box-article">
                                    
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3 class="header-red">Subscribe</h3>
                                            <p class="hidden text-justify">Our aim is to provide quality content online, and we want to make as much of our content available to everyone—for free. We hope to someday bring our journal to print and infiltrate some real-world spaces to bring all these intrepid new voices to an even wider audience. Since we’re a growing wee ‘un of a new media outlet, we need and greatly appreciate your patronage. In exchange for a subscription to our quarterly journal, you get premium content, updates, services, and more.</p>
                                            <form action="">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" id="" placeholder="Name">
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" id="" placeholder="Email Address">
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-danger bg-red">Submit</button>
                                                </div>
                                            </form>
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
                                    {{-- <img class="article-thumbnail" style="width:100%" src="{{{ url('public/storage/book-to-screen.jpg') }}}">
                                    <h4 class="title"><a href="{{ url('/book-to-screen') }}">Book-to-Screen</a></h4>
                                    <p class="text-justify"> --}}
                                            {{-- There’s always a tension between plotting and knowing what the character wants. It’s a constant balancing act. One dial moves the storyline horizontally and the other moves it vertically. If you hit the right balance, you get a diagonal— which is not at all an easy feat to achieve. --}}
                                        {{-- <br><small>News | Aug 18, 2018</small> --}}
                                    {{-- </p> --}}
                                    <div style="position:relative;width:100%;height:300px;background:url({{{ url('public/storage/book-to-screen.jpg') }}}) center center no-repeat;background-size: cover;">
                                        <div class="layer" style="background-color: rgba(0, 0, 0, 0.5);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                            <p><a href="{{ url('/screen-adaptation') }}"><strong><span style="font-size: 18.0pt;color:#fff">Screen Adaptation</span></strong></a></p>
                                            <p class="text-justify">There’s always a tension between plotting and knowing what the character wants. It’s a constant balancing act. One dial moves the storyline horizontally and the other moves it vertically. If you hit the right balance, you get a diagonal— which is not at all an easy feat to achieve.
                                                <br><a class="small read-more" href="{{ url('/screen-adaptation') }}">Read more</a>
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="box-article">
                                    <img class="article-thumbnail" style="width:100%" src="{{{ url('public/storage/services/bsd1.jpg') }}}">
                                    <h4 class="title"><a href="{{ url('/bookstore-display') }}"><strong>Bookstore Display</strong></a></h4>
                                    <p class="text-justify">
                                            Living in the era of touchscreens and the internet, it makes people doubt the relevance of books, newspapers, and other print materials. The publishing industry continues to struggle against the new wave of online media but everyone should not keep their faces stuck in front of their phone screens. 
                                        {{-- <br><small>Travel | Aug 18, 2018</small> --}}
                                        <br><a class="small read-more" href="{{ url('/bookstore-display') }}">Read more</a> 
                                    </p>
                                    
                                </div>
                                
                                
                            </section>
                        </div>
                        <div class="col-md-4">
                            <section class="box-section" style="border-top: 3px solid rgb(180, 40, 40);">
                                <div class="box-article">
                                   
                                    <div style="position:relative;width:100%;min-height:300px;background:url({{{ url('public/storage/book-trailer.jpg') }}}) center center no-repeat;background-size: cover;">
                                        <div class="layer" style="background-color: rgba(0, 0, 0, 0.5);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                            
                                            <p><a href="{{ url('/teaser-ads') }}"><strong><span style="font-size: 18.0pt;color:#fff">Teaser Ads</span></strong></a></p>
                                            <p class="text-justify">If you want to be viral, you have to marry videos. Engagement with a global audience generates more than buzz and hype. It gets your message across instantly. Corporate entities project their personalities through relatable content and no other medium can do this more efficiently than videos.
                                                <br><a class="small read-more" href="{{ url('/teaser-ads') }}">Read more</a>
                                            </p>
                                        
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="box-section" style="border-top: 3px solid rgb(180, 40, 40);">
                                <div class="box-article">
                                    <h3 style="margin-top:0" class="header-red">Literary Works</h3>
                                    <div class="row">
                                        <div class="col-md-4">
                                          <img class="article-thumbnail" src="https://www.newreadermagazine.com/images/how-seo-can-help-you-build-a-readership-and-market-your-book.jpg" style="width:100%">
                                        </div>
                                        <div class="col-md-8">
                                          <h4 class="title"><a href="https://www.newreadermagazine.com/tips-and-guides/how-seo-can-help-you-build-a-readership-and-market-your-book" target="_blank">How SEO Can Help You Build a Readership and Market Your Book</a> <br><small>newreadermagazine.com</small></h4>
                                          <p class="text-justify">So, you’ve written the book. Now what? Find a readership, connect with other authors, and market your book with these simple SEO techniques.</p>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="row">
                                        <div class="col-md-4">
                                          <img class="article-thumbnail" src="https://www.newreadermagazine.com/images/the-beginners-guide-to-the-best-seo-practices-in-2017-and-2018.jpg" style="width:100%">
                                        </div>
                                        <div class="col-md-8">
                                          <h4 class="title"><a href="https://www.newreadermagazine.com/tips-and-guides/the-beginners-guide-to-the-best-seo-practices-in-2017-and-2018">The Beginner’s Guide to the Best SEO Practices in 2017 and 2018</a> <br><small>newreadermagazine.com</small></h4>
                                          <p class="text-justify">SEO doesn’t have to be scary at all. We'll help you tame the beast and appease the Google gods with this simple guide to the best and the latest in SEO practices.</p>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                
                            </section>
                            
                        </div>
                        <div class="col-md-4">
                            <section class="box-section" style="border-top: 3px solid rgb(180, 40, 40);">
                                <div class="box-article">
                                    {{-- <img style="width:100%" src="{{{ url('public/storage/interview.jpg') }}}"> --}}
                                    <div class="embed-container-x">
                                        {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/sDxmMkgPmaQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> --}}
                                        <video width="100%" height="auto" controls controlsList="nodownload">
                                            <source src="{{{ url('public/storage/videos/the-final-audit-interview.mp4') }}}" type="video/mp4">
                                            
                                              Your browser does not support the video tag.
                                        </video>
                                    </div>
                                    <h4 class="title"><a href="{{ url('/author-interview') }}"><strong>Author Interview: Carnie Matisonn, The Final Audit</strong></a></h4>
                                    <p class="small text-justify">
                                            Dr. Carnie Matisonn is an attorney admitted to the High Courts of South Africa, Lesotho and Botswana; recipient of the Norman Rosenberg Law Scholarship, and South African Institute of International Relations Graduate Research Scholarship.
                                    </p>
                                
                                </div>
                            </section>
                            <section class="box-section" style="border-top: 3px solid rgb(180, 40, 40);">
                                <div class="box-article">
                                    <a class="article-link" href="{{ url('/to-read-list') }}"><h3 style="margin-top:0" class="title title-red">To Read-List</h3></a>
                                    <div class="row">
                                        <div class="col-md-4">
                                          <img class="article-thumbnail" src="{{{ url('public/storage/featured-books/calvin-moir.png') }}}" style="width:100%">
                                        </div>
                                        <div class="col-md-8">
                                          <h4 class="title"><a href="{{ url('/to-read-list') }}">The Salt Box</a> <br><small>Calvin Moir</small></h4>
                                          <p>{{ str_limit("What had started as a search for his father has suddenly become troubled with deceit and conspiracy, as a
                                                lad finds himself, instead. The brazen act of Creech Jones&#39; alarming circumstances comes from hatred, pride
                                                and revenge. Success smiles upon Creech Jones; prestige and privilege accompany him. But on the inside,
                                                there is a void, a deep dissatisfaction, as he suffers a slow agonizing death. Then a casual interest in his
                                                parents&#39; separation and his family disintegration develops into an obsession with revenge that impelled him
                                                eventually to act on his fantasies, perhaps in a criminal way. The visit to his father&#39;s house was supposed to
                                                be a beneficial association. But the surprise trip turns bitter when the prodigal son returns home under a
                                                different identity to betray his family. Creech Jones&#39; reason for visiting the saltbox is his biggest secret,
                                                followed by frustration, humiliation - and then destruction. The Saltbox is a tale of what a person&#39;s stamina
                                                can bear, and what his intention can attain. What results is a forewarning account about guilt, responsibility
                                                and how jealousy can tear a loving family apart. The Saltbox has mystery, an atmosphere of quiet bullying
                                                and much realistically viewed life.",155) }}
                                                <br><a class="small read-more" href="{{ url('/to-read-list') }}">Read more</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="row">
                                        <div class="col-md-4">
                                          <img class="article-thumbnail" src="{{{ url('public/storage/featured-books/philip-persinger.png') }}}" style="width:100%">
                                        </div>
                                        <div class="col-md-8">
                                          <h4 class="title"><a href="{{ url('/to-read-list') }}">Tools of the Trade</a> <br><small>Philip Persinger</small></h4>
                                            <p>{{ str_limit("A heart-warming tale of alpha males facing a precipitous slide—for beta or for worse. Woody Steele is one of
                                                the richest men on the planet. Sadly one of his greatest assets has been recently downsized—sorry Casanova.
                                                Ivan Greenbriar, his fellow billionaire nemesis and creep extraordinaire, turns every activity into a pissing
                                                contest even when he’s alone. Sargent Scanlon, a hero cop solely on the merits of getting shot in the nuts,
                                                doesn’t know what fear is until he must match wits with his odious fourteen-year-old stepdaughter—she’s a
                                                crime against humanity.",155) }}
                                                <br><a class="small read-more" href="{{ url('/to-read-list') }}">Read more</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="row">
                                        <div class="col-md-4">
                                          <img class="article-thumbnail" src="{{{ url('public/storage/featured-books/tom-peavler.png') }}}" style="width:100%">
                                        </div>
                                        <div class="col-md-8">
                                          <h4 class="title"><a href="{{ url('/to-read-list') }}">Readjustment</a> <br><small>Tom Peavler</small></h4>
                                          <p >{{ str_limit("Readjustment is the continuing saga of Charley Johnson. He is an ordinary mechanic who discovers a
                                                way to adjust carburetors so that they can achieve 100 MPG. He is granted a patent, but his life is
                                                threatened by Big Oil and The Big Three Automakers. They attempt to prevent him from going into
                                                production of his adjustment. He faces attacks from Mexican street gangs, Japanese Ninjas, the French
                                                Foreign Legion, and an army of out-of-work auto makers. He is repeatedly challenged by three sons of
                                                his deceased partner.",155) }}
                                                <br><a class="small read-more" href="{{ url('/tp-read-list') }}">Read more</a>    
                                            </p>
                                        </div>
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
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                        
                                    </ol>
                                    
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            {{-- <img style="width:100%;height:200px" src="{{{ url('public/storage/sample-img-1.jpg') }}}"> --}}
                                            <div class="text-center" style="width:100%;height:300px;max-height:450px;background:transparent;padding-top:20px;"></div>
                                            <div class="carousel-caption">
                                                <img src="{{{ url('public/storage/testimonials/paul-antwi.png') }}}" alt="" class="img-circle" style="width:100px">
                                                <h4>"Thank you so much for this good job you have done of the great story created through the book. I've checked and see everything looks good and ready now."</h4>
                                                <p class="">- Paul Antwi, author Why Is Satan Against Christians</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            {{-- <img style="width:100%;height:200px" src="{{{ url('public/storage/sample-img-2.jpg') }}}"> --}}
                                            <div class="text-center" style="width:100%;height:300px;;max-height:450px;background:transparent;padding-top:20px;"></div>
                                            <div class="carousel-caption">
                                                <img src="{{{ url('public/storage/testimonials/carnie-mattisonn.png') }}}" alt="" class="img-circle" style="width:100px">
                                                <h4>"Your amendments to the script have been carefully and skillfully crafted to portray the story in a smooth and cohesive way that flows easily."</h4>
                                                <p class="">- Dr. Carnie Matisonn, author The Final Audit</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            {{-- <img style="width:100%;height:200px" src="{{{ url('public/storage/sample-img-3.jpg') }}}"> --}}
                                            <div class="text-center" style="width:100%;height:300px;;max-height:450px;background:transparent;padding-top:20px;"></div>
                                            <div class="carousel-caption">
                                                <img src="{{{ url('public/storage/testimonials/cathy-young.png') }}}" alt="" class="img-circle" style="width:100px">
                                                <h4>"I think you did a wonderful job on the screenplay project. I truly appreciate you, as well as the time and effort you placed into my project."</h4>
                                                <p class="">- Cathy Young, author Fall</p>
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
