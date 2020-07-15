@extends('layouts.app')
@section('title')New Reader Media | Blogs | Editor's Picks @endsection
@section('og-title')New Reader Media | Blogs | Editor's Picks @endsection
@section('meta-description')The best of the best. We have a fresh collection of blogs and articles from our Editor’s Picks. @endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box" style="margin-bottom:0">
                <div class="box-body">
                    {{-- BIG IMAGE --}}
                    <div class="row">
                    <section class="box-section">
                        <div class="col-md-12"><h1 class="header-white">Editor's Picks</h1></div>
                        <div class="col-md-9 right-divider">
                            <div class="box-article">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <a href="{{ url('blogs/editors-picks/free-as-my-hair') }}">
                                            <div style="position:relative;width:100%;height:164px;background:url({{{ url('storage/blogs/editors-picks/free-as-my-hair.jpg') }}}) center center no-repeat;background-size: cover;overflow:hidden;margin-bottom:10px">
                                                <div class="layer" style="background-color: rgba(0, 0, 0, 0.0);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                                    
                                                    
                                                </div>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <h2 class="title"><a href="{{ url('blogs/editors-picks/free-as-my-hair') }}">Free As My Hair</a></h2>
                                        <p class="text-white lead" style="margin:0">Have you ever gone through an old photo album and just cringe at the haircut you rocked back in the day?</p>
                                        <small class="text-muted">by E.V. Miller</small>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                        </div>
                        <div class="col-md-3">
                            <p><strong>RECENT POSTS</strong></p>
                            
                            <ul class="" style="padding-left:20px">
                                <li><a href="{{ url('blogs/editors-picks/free-as-my-hair') }}" class="article-link">Free As My Hair</a></li>    
                                
                            </ul>
                        </div>
                        
                        
                        
                    </section>
                    </div>                    
                </div>
                
                @include('layouts.footer')
            </div>
        </div>
        
    </div>
</div>
@endsection
