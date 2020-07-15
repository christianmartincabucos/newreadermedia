@extends('layouts.app')
@section('title')New Reader Media | Blogs | Arts and Culture @endsection
@section('og-title')New Reader Media | Blogs | Arts and Culture @endsection
@section('meta-description')We find the coolest stuff and curate it for your delectation. We've got a bunch of great topics for the inquiring mind. From haunted houses to SEO techniques. See them here now.@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box" style="margin-bottom:0">
                <div class="box-body">
                    {{-- BIG IMAGE --}}
                    <div class="row">
                    <section class="box-section">
                        <div class="col-md-12"><h1 class="header-white">Arts and Culture</h1></div>
                        <div class="col-md-9 right-divider">
                            <div class="box-article">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <a href="{{ url('blogs/arts-and-culture/greatest-cons-in-history') }}">
                                            <div style="position:relative;width:100%;height:164px;background:url({{{ url('storage/blogs/arts-and-culture/victor-lustig.jpg') }}}) center center no-repeat;background-size: cover;overflow:hidden;margin-bottom:10px">
                                                <div class="layer" style="background-color: rgba(0, 0, 0, 0.0);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                                    
                                                    
                                                </div>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <h2 class="title"><a href="{{ url('blogs/arts-and-culture/greatest-cons-in-history') }}">Greatest Cons in History</a></h2>
                                        <p class="text-white lead" style="margin:0">People who do cons are called Confidence man or in short “con-man”. They prey on people who are naïve and irresponsible. Over the years, many cons have happened, here are the top 3 greatest cons in history.</p>
                                        <small class="text-muted">by S. Roberts</small>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="box-article">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <a href="{{ url('blogs/arts-and-culture/aphantasia') }}">
                                            <div style="position:relative;width:100%;height:164px;background:url({{{ url('storage/blogs/arts-and-culture/aphantasia.jpg') }}}) center center no-repeat;background-size: cover;overflow:hidden;margin-bottom:10px">
                                                <div class="layer" style="background-color: rgba(0, 0, 0, 0.0);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                                    
                                                    
                                                </div>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <h2 class="title"><a href="{{ url('blogs/arts-and-culture/aphantasia') }}">Aphantasia: Weak Imagination or No Imagination at All?</a></h2>
                                        <p class="text-white lead" style="margin:0">Did you know that some people can literally visualize images in their minds? If that isn’t surprising, you should know that some people can’t.</p>
                                        <small class="text-muted">by M. Turner</small>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                            
                            
                        </div>
                        @include('blogs.arts-and-culture.sidebar')
                    </section>
                    </div>                    
                </div>
                
                @include('layouts.footer')
            </div>
        </div>
        
    </div>
</div>
@endsection
