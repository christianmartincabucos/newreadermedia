@extends('layouts.app')
@section('title')Media Spotlight: Malaika B. Horne @endsection
@section('og-title')Media Spotlight: Malaika B. Horne @endsection
@section('meta-description')Malaika B. Horne is the founding director of the Executive Leadership Consortium at the University of Missouri- St. Louis. She is also an academic writer, book author and journalist, writing on topics about politics, health and social causes to women’s issues.@endsection
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
                                <img src="{{{ url('public/storage/featured-author/malaika-horne.jpg') }}}" class="img-circle" style="width:100%" alt="Malaika B. Horne">
                            </div>
                            <h3 class="text-center"><strong>Malaika B. Horne</strong> </h3>
                            <p>Malaika B. Horne is the founding director of the Executive Leadership Consortium at the University of Missouri- St. Louis. She is also an academic writer, book author and journalist, writing on topics about politics, health and social causes to women&rsquo;s issues.</p>
                            <br>
                            
                            <div class="row">
                                <div class="col-md-5 center-block">
                                    <a href="https://exaltmotherhood.com/" target="_blank" rel="nofollow">
                                        <img src="{{{ url('public/storage/featured-author/malaika-horne-book.png') }}}" class="" style="width:100%" alt="Mother Wit">
                                        
                                    </a>
                                    
                                </div>
                                <h3 class="text-center"><strong>Mother Wit<br><small>Exalting Motherhood while Honoring a Great Mother </small> </strong> </h3>
                            </div>
                            <br>
                            
                            <p>This book vividly describes the remarkable ability of a mid-twentieth century black woman. Living under the practices of Apartheid in the United States, she struggles to overcome the harsh and even grotesque societal obstacles while rearing six children.</p>
                            <p>Malaika B. Horne&rsquo;s book will also give the readers insights on topics that are still taboo; such as, colorism and intra-group violence that brings forth self-hate among many in the African American Community.</p>
                            
                            <blockquote class="blockquote">
                                <p class="text-red"><em>&ldquo;One of the most influential books I ever read on race, all from original sources. Dr. Horne's book is a gem. A rarity.&rdquo; -Kit Olson</em></p>
                            </blockquote>
                            
                            <br>
                            
                            

                            <h4 class="text-center"><small>You can visit her website and get a copy of the book at</small> <a href="https://exaltmotherhood.com/" target="_blank" rel="nofollow">exaltmotherhood.com</a></h4>
                            
                            
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
