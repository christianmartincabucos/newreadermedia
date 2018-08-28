@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box" style="margin-bottom:0">
                <div class="box-body">
                    {{-- BIG IMAGE --}}
                    <section class="box-section">
                        
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                            </ol>
                              
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img style="width:100%" src="{{{ url('public/storage/sample-img-1.jpg') }}}">
                                    <div class="carousel-caption">
                                        <h1>Instagram that shit</h1>
                                        <p>Snelsten dichtbij hectaren beletsel lamamijn is op. Planters geschikt machtige die resident elk negritos passeert men are. Afneemt mei gedaald men metalen wij opzicht proeven.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img style="width:100%" src="{{{ url('public/storage/sample-img-2.jpg') }}}">
                                    <div class="carousel-caption">
                                        <h1>O.P.A.W.</h1>
                                        <p>Af inhouds ik ze gevolge schijnt nu hoeveel. Om of stellen afwegen beperkt percent te. Gelden genoeg kriang are mee.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img style="width:100%" src="{{{ url('public/storage/sample-img-3.jpg') }}}">
                                    <div class="carousel-caption">
                                        <h1>Another Opaw</h1>
                                        <p>Leeningen far der vernielen maleische behoorden wassching. Is om bijgang anderen blijven al vlakten. Het eens den een meer kan door heen.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img style="width:100%" src="{{{ url('public/storage/sample-img-4.jpg') }}}">
                                    <div class="carousel-caption">
                                        <h1>Where is my Five minutes?</h1>
                                        <p>Toe lot sap ten europeesch ongunstige verscholen plotseling.</p>
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
                    </section>
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
                        <div class="col-md-6">
                            <section class="box-section" style="border-top: 3px solid rgb(180, 40, 40);">
                                
                                <div class="box-article">
                                    <img style="width:100%" src="{{{ url('public/storage/sample-img-5.jpg') }}}">
                                    <h4><a href="{{ url('/') }}">The Art of Peace</a></h4>
                                    <p>
                                        Verzameld daaronder gewijzigd al stichting ze na. Gehouden veertien zoo sembilan millioen van lamamijn bij vluchten. 
                                        <br><small>News | Aug 18, 2018</small>
                                    </p>
                                
                                </div>
                                <div class="divider"></div>
                                <div class="box-article">
                                        <img style="width:100%" src="{{{ url('public/storage/sample-img-6.jpg') }}}">
                                    <h4><a href="{{ url('/') }}">Travel Guide for Dummies</a></h4>
                                    <p>
                                        Verzameld daaronder gewijzigd al stichting ze na. Gehouden veertien zoo sembilan millioen van lamamijn bij vluchten. 
                                        <br><small>Travel | Aug 18, 2018</small>
                                    </p>
                                
                                </div>
                                
                                
                            </section>
                        </div>
                        <div class="col-md-6">
                            <section class="box-section" style="border-top: 3px solid rgb(180, 40, 40);">
                                <div class="box-article">
                                    <img style="width:100%" src="{{{ url('public/storage/sample-video-1.jpg') }}}">
                                   
                                    <p class="small">
                                        Verzameld daaronder gewijzigd al stichting ze na. Gehouden veertien zoo sembilan millioen van lamamijn bij vluchten.
                                    </p>
                                
                                </div>
                            </section>
                            <section class="box-section" style="border-top: 3px solid rgb(180, 40, 40);">
                                <div class="box-article">
                                    
                                    <div class="row">
                                        <div class="col-md-4">
                                          <img src="{{{ url('public/storage/sample-thumbnail-1.jpg') }}}" style="width:100%">
                                        </div>
                                        <div class="col-md-8">
                                          <h4><a href="{{ url('/') }}">I Hate Nothing About U</a> <br><small>Author Name</small></h4>
                                          <p>Verzameld daaronder gewijzigd al stichting ze na. Gehouden veertien zoo sembilan millioen van lamamijn bij vluchten.</p>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="row">
                                        <div class="col-md-4">
                                          <img src="{{{ url('public/storage/sample-thumbnail-2.jpg') }}}" style="width:100%">
                                        </div>
                                        <div class="col-md-8">
                                          <h4><a href="{{ url('/') }}">this must be the place</a> <br><small>Author Name</small></h4>
                                          <p>Verzameld daaronder gewijzigd al stichting ze na. Gehouden veertien zoo sembilan millioen van lamamijn bij vluchten.</p>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="row">
                                        <div class="col-md-4">
                                          <img src="{{{ url('public/storage/sample-thumbnail-3.jpg') }}}" style="width:100%">
                                        </div>
                                        <div class="col-md-8">
                                          <h4><a href="{{ url('/') }}">Honeybee</a> <br><small>Author Name</small></h4>
                                          <p>Verzameld daaronder gewijzigd al stichting ze na. Gehouden veertien zoo sembilan millioen van lamamijn bij vluchten.</p>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </section>
                            
                        </div>
                    </div>
                    
                   
                    
                </div>
                <div class="box-body" style="position:relative;width:100%;background:url({{{ url('public/storage/sample-background.jpeg') }}}) center center no-repeat;background-size: cover;">
                    <div class="layer" style="background-color: rgba(255, 255, 255, 0.7);position: absolute;top: 0;left: 0;width: 100%;height: 100%;">
                    </div>
                    <div class="row">
                        <div class="col-md-10 center-block text-center">
                            
                            <h4 class="text-red"><b>SUBSCRIBE</b></h4>
                            <p style="color:#222">Our aim is to provide quality content online, and we want to make as much of our content available to everyone—for free. We hope to someday bring our journal to print and infiltrate some real-world spaces to bring all these intrepid new voices to an even wider audience. Since we’re a growing wee ‘un of a new media outlet, we need and greatly appreciate your patronage. In exchange for a subscription to our quarterly journal, you get premium content, updates, services, and more.</p>
                            <p style="color:#222">A subscription only costs $5.99 per issue and is even better value at our yearly rate at $15.99. Subscription fees will go to the publication, marketing, and circulation of our contributors’ work.</p>
                            <br>
                            <div class="row">
                                <div class="col-md-6 center-block">

                                    <form action="" method="post">
                                        
                                        <div class="form-group">
                                            <input type="text" name="" id="" class="form-control" placeholder="Name">
                                        </div>
                                    
                                    
                                        <div class="form-group">
                                            <input type="email" name="" id="" class="form-control" placeholder="Email">
                                        </div>
                                    
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-danger bg-red">Submit</button>
                                        </div>
                                        
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="box-footer bg-red">
                    
                    <div class="row" style="color:#fff;padding:50px 15px">
                        <div class="col-md-12 text-center" style="margin-bottom:30px">
                            <ul class="list-inline">
                                <li><a href="{{ url('/') }}" style="color:#fff">Home</a></li>
                                <li><a href="{{ url('/') }}" style="color:#fff">About</a></li>
                                <li><a href="{{ url('/') }}" style="color:#fff">Contribute</a></li>
                                <li><a href="{{ url('/') }}" style="color:#fff">Trends</a></li>
                                <li><a href="{{ url('/') }}" style="color:#fff">Subscribe</a></li>
                                
                            </ul>
                            
                        </div>
                        <div class="col-md-3 text-center">
                            <img style="width:200px" src="{{{ url('public/storage/nrmedia-logo.png') }}}">
                        </div>
                        <div class="col-md-4 col-md-push-5">
                            <h4>GET IN TOUCH</h4>
                            <p class="small">100 Church Street, Suite 800 New York, NY 10007, USA</p>
                            <p><span class="fa fa-phone"></span> 1 800-734-7871</p>
                            <p><span class="fa fa-envelope"></span> contact@newreadersinternational.com</p>
                            
                            <p><a style="margin-right:15px;color:white" href="{{ url('/') }}"><span class="fa fa-twitter"></span></a> <a style="margin-right:15px;color:white"  href="{{ url('/') }}"><span class="fa fa-facebook"></span></a> <a style="margin-right:15px;color:white"  href="{{ url('/') }}"><span class="fa fa-linkedin"></span></a></p>
                        
                        </div> 
                        <div class="col-md-5 col-md-pull-4" style="border-right:1px solid #eee">
                            <div class="row">
                                
                                
                                <div class="col-md-12 text-center">
                                    <br>
                                    <p class="text-justify">New Reader Media is a marketing and publicity firm for enterprising creatives, artists, and independent authors. We also offer film-to-screen literary agent services and filmmaking services for authors who want to break into the world of film and television.</p>    
                                    <br><br>
                                    <p class="small" style="margin-top:15px">Copyright &copy; 2018 {{ config('app.name' )}}. All Rights Reserved.</p>
                                </div>
                            </div>
                        </div>
                         
                        
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</div>
@endsection
