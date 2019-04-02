@extends('layouts.app')
@section('title')Media Spotlight: Walter W. Tunstall, Ph.D. @endsection
@section('og-title')Media Spotlight: Walter W. Tunstall, Ph.D. @endsection
@section('meta-description')Walter W. Tunstall, Ph. D. earned B. S., M. S., and Ph.D. degrees at Virginia Commonwealth University. He taught courses in Psychology at numerous colleges in Virginia and Washington State, and he worked in public institutions with chronically disabled persons in both states.@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box" style="margin-bottom:0">
                <div class="box-body">
                    {{-- BIG IMAGE --}}
                    <div class="row">
                    <section class="box-section">
                        <div class="col-md-12">
                            <h1 class="header-white">Spotlight</h1>
                            
                        </div>
                        
                        <div class="col-md-9 text-justify right-divider">
                            <div class="col-md-4 center-block">
                                <img src="{{{ url('public/storage/featured-author/walter-tunstall.jpg') }}}" class="img-circle" style="width:100%" alt="Walter W. Tunstall, Ph.D.">
                            </div>
                            <h3 class="text-center"><strong>Walter W. Tunstall, Ph.D.</strong> </h3>
                            <p>Walter W. Tunstall, Ph. D. earned B. S., M. S., and Ph.D. degrees at Virginia Commonwealth University. He taught courses in Psychology at numerous colleges in Virginia and Washington State, and he worked in public institutions with chronically disabled persons in both states. Dr. Tunstall is retired and lives in Olympia, Washington.</p>
                            <br>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>Self-worth (dignity) and self-esteem are not the same thing.</em></p>
                            </blockquote>
                            <div class="row">
                                <div class="col-md-4 center-block">
                                    <a href="https://www.amazon.com/Origin-Dignity-Its-Creation-Enhancement/dp/1480851744/" target="_blank" rel="nofollow">
                                        <img src="{{{ url('public/storage/featured-author/walter-tunstall-book.png') }}}" class="" style="width:100%" alt="On the Origin of Dignity: Its Creation and Enhancement">
                                        
                                    </a>
                                    
                                </div>
                                <h3 class="text-center"><strong>On the Origin of Dignity<br><small>Its Creation and Enhancement</small></strong> </h3>
                            </div>
                            <br>
                            
                            <p>On the Origin of Dignity: Its Creation and Enhancement describes where our dignity, our sense of self-worth, comes from and how we get it. The book moves beyond thousands of years of time-honored convention to provide a new and alternative understanding of dignity that does not depend upon social norms, or philosophical and religious traditions. On the Origin of Dignity demonstrates how previous beliefs about dignity are the result of an underlying and dynamic co-creative interpersonal process that occurs when we interact with one another. With an understanding of this process we can become conscious and deliberate creators of not only our own dignity but the dignity of others as well.</p>
                            
                            <blockquote class="blockquote">
                                <p class="text-red"><em>To have dignity you have to treat people with dignity</em></p>
                            </blockquote>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>Dignity as process describes the dynamic experiential flux from which personal worth emerges.</em></p>
                            </blockquote>
                            <br>
                            
                            

                            <h4 class="text-center"><small>Get a copy of the book on</small> <a href="https://www.amazon.com/Origin-Dignity-Its-Creation-Enhancement/dp/1480851744/" target="_blank" rel="nofollow">amazon</a></h4>
                            
                            
                        </div>
                        @include('featured-author.sidebar')
                        
                    </section>
                    </div>                    
                </div>
                
                @include('layouts.footer')
            </div>
        </div>
    </div>
</div>
@endsection
