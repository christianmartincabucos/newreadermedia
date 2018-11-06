@extends('layouts.app')
@section('title')New Reader Media's best, most informative blogs on a variety of topics.@endsection
@section('og-title')New Reader Media's best, most informative blogs on a variety of topics.@endsection
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
                        <div class="col-md-12"><h1 class="header-white">Blogs</h1></div>
                        <div class="col-md-9 right-divider">
                            <div class="box-article">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <a href="{{ url('http://kristykkraft.com/2018/10/18/top-shipwreck-or-castaway-movies/') }}" target="_blank" rel="nofollow">
                                            <div style="position:relative;width:100%;height:164px;background:url({{{ url('public/storage/top-shipwreck-castaway.jpg') }}}) center center no-repeat;background-size: cover;overflow:hidden">
                                                <div class="layer" style="background-color: rgba(0, 0, 0, 0.0);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                                    
                                                    
                                                </div>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <h1 class="title"><a href="{{ url('http://kristykkraft.com/2018/10/18/top-shipwreck-or-castaway-movies/') }}" target="_blank" rel="nofollow">Top Shipwreck or Castaway Movies</a></h1>
                                        <h4 class="text-white">Here’s a a round up of some of the best ten movies about people surviving on an island or at shipwreck. Did they find something more or even God?</h4>
                                        <p><img class="article-thumbnail img-circle" src="{{{ url('public/storage/featured-author/kristy-kraft.jpg') }}}" style="width:20px;height:20px;margin-right:5px;margin-top:5px"> <a class="article-links" href="{{ url('https://kristykkraft.com/') }}" target="_blank" rel="nofollow">Kristy Kraft</a></p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="box-article">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <a href="{{ url('https://mikemccluskey.net/2018/10/15/writing-as-a-form-of-therapy/') }}" target="_blank" rel="nofollow">
                                            <div style="position:relative;width:100%;height:164px;background:url({{{ url('public/storage/writing-as-a-form-of-therapy.jpg') }}}) center center no-repeat;background-size: cover;overflow:hidden">
                                                <div class="layer" style="background-color: rgba(0, 0, 0, 0.0);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                                    
                                                    
                                                </div>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <h1 class="title"><a href="{{ url('https://mikemccluskey.net/2018/10/15/writing-as-a-form-of-therapy/') }}" target="_blank" rel="nofollow">Writing as a Form of Therapy</a></h1>
                                        <h4 class="text-white">People with psychological problems no longer have to worry going to clinics for therapy when they can perform their treatment anywhere at any given time.</h4>
                                        <p><img class="article-thumbnail img-circle" src="{{{ url('public/storage/featured-author/mmccluskey.jpg') }}}" style="width:20px;height:20px;margin-right:5px;margin-top:5px"> <a class="article-links" href="{{ url('https://mikemccluskey.net/') }}" target="_blank" rel="nofollow">Mike McCluskey</a></p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="box-article">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <a href="{{ url('http://weightlossbible.net/2018/10/12/the-top-weight-loss-scams-in-the-world/') }}" target="_blank" rel="nofollow">
                                            <div style="position:relative;width:100%;height:164px;background:url({{{ url('public/storage/weightlossbibleblog.jpg') }}}) center center no-repeat;background-size: cover;overflow:hidden">
                                                <div class="layer" style="background-color: rgba(0, 0, 0, 0.0);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                                    
                                                    
                                                </div>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <h1 class="title"><a href="{{ url('http://weightlossbible.net/2018/10/12/the-top-weight-loss-scams-in-the-world/') }}" target="_blank" rel="nofollow">The Top Weight Loss Scams in the World</a></h1>
                                        <h4 class="text-white">The world of fitness can get shady and you could lose more than just pounds if you’re not careful.  Here are the top weight loss scams to avoid.</h4>
                                        <p><img class="article-thumbnail img-circle" src="{{{ url('public/storage/featured-author/zzeigler.jpg') }}}" style="width:20px;height:20px;margin-right:5px;margin-top:5px"> <a class="article-links" href="{{ url('http://weightlossbible.net/') }}" target="_blank" rel="nofollow">Zachary Zeigler Ph.D</a></p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="box-article">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <a href="{{ url('https://stevenbentleybooks.com/2018/09/03/top-5-most-accurate-medical-dramas/') }}" target="_blank" rel="nofollow">
                                            <div style="position:relative;width:100%;height:164px;background:url({{{ url('public/storage/scrub.jpg') }}}) center center no-repeat;background-size: cover;overflow:hidden">
                                                <div class="layer" style="background-color: rgba(0, 0, 0, 0.0);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                                    
                                                    
                                                </div>
                                            </div>
                                        </a>
                                        {{-- <a href="{{ url('/spotlight') }}"><img class="article-thumbnail" src="{{{ url('public/storage/scrub.jpg') }}}" style="width:100%"></a> --}}
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <h1 class="title"><a href="{{ url('https://stevenbentleybooks.com/2018/09/03/top-5-most-accurate-medical-dramas/') }}" target="_blank" rel="nofollow">Top 5 Most Accurate Medical Dramas</a></h1>
                                        <h4 class="text-white">Here are the Top 5 most accurate medical dramas that are doctor approved.</h4>
                                        <p><img class="article-thumbnail img-circle" src="{{{ url('public/storage/featured-author/steven-bentley.jpeg') }}}" style="width:20px;height:20px;margin-right:5px;margin-top:5px"> <a class="article-links" href="{{ url('https://stevenbentleybooks.com/') }}" target="_blank" rel="nofollow">Steven Bentley</a></p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-3">
                            <p><strong>RECENT POSTS</strong></p>
                            
                            <ul class="list-unstyled">
                                <li><a href="{{ url('http://kristykkraft.com/2018/10/18/top-shipwreck-or-castaway-movies/') }}" class="article-link" target="_blank" rel="nofollow">Top Shipwreck or Castaway Movies</a></li>
                                <li><a href="{{ url('https://mikemccluskey.net/2018/10/15/writing-as-a-form-of-therapy/') }}" class="article-link" target="_blank" rel="nofollow">Writing as a Form of Therapy</a></li>
                                <li><a href="{{ url('http://weightlossbible.net/2018/10/12/the-top-weight-loss-scams-in-the-world/') }}" class="article-link" target="_blank" rel="nofollow">The Top Weight Loss Scams in the World</a></li>
                                <li><a href="{{ url('https://stevenbentleybooks.com/2018/09/03/top-5-most-accurate-medical-dramas/') }}" class="article-link" target="_blank" rel="nofollow">Top 5 Most Accurate Medical Dramas</a></li>
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
