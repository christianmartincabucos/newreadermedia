@extends('layouts.app')
@section('title') {!! $blog->title !!}@endsection
@section('meta-description') {!! $blog->meta_desc !!}@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box" style="margin-bottom:0">
                <div class="box-body">
                    {{-- BIG IMAGE --}}
                    <div class="row">
                        <section class="box-section">
                            <img src="{{ asset('public/public/storage/blogs/nmagazine/'.$blog->image) }}" style="width:100%;">
                            <div class="col-md-12 lead">
                                <br>
                                <br>
                                <!-- <div class="panel panel-default box"> -->
                                <!-- <div class="panel-heading"> -->
                                <h1 class="text-center">{{ $blog->title}}</h1>
                                <br>
                                <!-- </div> -->

                                <!-- <div class="panel-body"> -->
                                <!-- <p> -->
                                <!-- {{ $blog->body }} -->
                                <p>@parsedown ($blog->body)</p>
                                <!-- </p> -->
                                <!-- </div> -->
                                <!-- </div> -->
                                <!-- <img src="{{ $blog->image}}">

                                <div class="blog-container">

                                    <div class="blog-header">
                                        <div class="blog-cover">
                                            <div class="blog-author">
                                                <h3>Russ Beye</h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="blog-body">
                                        <div class="blog-title">
                                            <h1><a href="#">I Like To Make Cool Things</a></h1>
                                        </div>
                                        <div class="blog-summary">
                                            <p>I love working on fresh designs that <a href="https://www.youtube.com/watch?v=hANtM1vJvOo">breathe</a>. To that end, I need to freshen up my portfolio here because it does exactly the opposite. For the next month I will be working almost exclusively on my portfolio. Sounds like a lot of fun!</p>
                                        </div>
                                        <div class="blog-tags">
                                            <ul>
                                                <li><a href="#">css</a></li>
                                                <li><a href="#">web design</a></li>
                                                <li><a href="#">codepen</a></li>
                                                <li><a href="https://twitter.com/russbeye">twitter</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="blog-footer">
                                        <ul>
                                            <li class="published-date">2 days ago</li>
                                            <li class="comments"><a href="#"><svg class="icon-bubble">
                                                        <use xlink:href="#icon-bubble"></use>
                                                    </svg><span class="numero">4</span></a></li>
                                            <li class="shares"><a href="#"><svg class="icon-star">
                                                        <use xlink:href="#icon-star"></use>
                                                    </svg><span class="numero">1</span></a></li>
                                        </ul>
                                    </div>

                                </div> -->
                                <br>
                                <h5 style="font-size:1rem!important;"><a>Author: {{ $blog->author }}</a></h5>
                            </div>
                        </section>
                    </div>
                </div>

                @include('layouts.footer')
            </div>
        </div>

    </div>
</div>
<style>
    .ul .nav .nav-pills .nav-justified {
        display: none !important;
    }
</style>
@endsection