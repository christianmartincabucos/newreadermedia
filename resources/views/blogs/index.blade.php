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
                        <div class="col-md-12"><h1 class="header-white">Blogs</h1></div>
                        <div class="col-md-9">
                            <div class="box-article">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <a href="{{ url('https://stevenbentleybooks.com/2018/09/03/top-5-most-accurate-medical-dramas/') }}" target="_blank">
                                            <div style="position:relative;width:100%;height:164px;background:url({{{ url('public/storage/scrub.jpg') }}}) center center no-repeat;background-size: cover;overflow:hidden">
                                                <div class="layer" style="background-color: rgba(0, 0, 0, 0.0);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                                    
                                                    
                                                </div>
                                            </div>
                                        </a>
                                        {{-- <a href="{{ url('/spotlight') }}"><img class="article-thumbnail" src="{{{ url('public/storage/scrub.jpg') }}}" style="width:100%"></a> --}}
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <h1 class="title"><a href="{{ url('https://stevenbentleybooks.com/2018/09/03/top-5-most-accurate-medical-dramas/') }}" target="_blank">Top 5 Most Accurate Medical Dramas</a></h1>
                                        <h4 class="text-white">Here are the Top 5 most accurate medical dramas that are doctor approved.</h4>
                                        <p><img class="article-thumbnail img-circle" src="{{{ url('public/storage/featured-author/steven-bentley.jpeg') }}}" style="width:20px;height:20px;margin-right:5px;margin-top:5px"> <a class="article-links" href="{{ url('https://stevenbentleybooks.com/') }}" target="_blank">Steven Bentley</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <p><strong>RECENT POSTS</strong></p>
                            
                            <ul class="list-unstyled">
                                <li><a href="article-link" target="_blank">Top 5 Most Accurate Medical Dramas</a></li>
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
