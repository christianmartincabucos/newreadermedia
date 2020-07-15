@extends('layouts.app')
@section('title')Media Spotlight: Tom Peavler @endsection
@section('og-title')Media Spotlight: Tom Peavler @endsection
@section('meta-description')He was competitive in sports until the age of 54. After that, he began to take up writing. His first efforts included songs, poems, and short stories.@endsection
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
                                <img src="{{{ url('storage/featured-author/tom-peavler.jpg') }}}" class="img-circle" style="width:100%" alt="Tom Peavler">
                            </div>
                            <h3 class="text-center"><strong>Tom Peavler</strong> </h3>
                            <p>Tom Peavler was born in Mushkogee Oklahoma in 1940 and graduated from Muskogee Central High in 1958. He was a member of both the State and National Honor Society. In 1962 he graduated from Northeast University with a major in Spanish and English and in 1970 he put together a Country and Western Trio which toured Eastern Kansas. He played lead guitar and was a vocalist with two former students.</p>
                            <p>He was competitive in sports until the age of 54. After that, he began to take up writing. His first efforts included songs, poems, and short stories. His first novel "The Adjustment" was published in 2003. What followed were "Readjustment" and "The Final Adjustment" to end the trilogy.</p>
                            <br>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“You have got to remember that these are the guys who blew up a boardroom and a super tanker. We know what they are capable of.”</em></p>
                            </blockquote>
                            
                            <h3 class="text-center"><strong>Readjustment</strong> </h3>
                            <p>Readjustment is the continuing saga of Charley Johnson. He is an ordinary mechanic who discovers a way to adjust carburetors so that they can achieve 100 MPG. He is granted a patent, but his life is threatened by Big Oil and The Big Three Automakers. They attempt to prevent him from going into production of his adjustment. He faces attacks from Mexican street gangs, Japanese Ninjas, the French Foreign Legion, and an army of out-of-work auto makers. He is repeatedly challenged by three sons of his deceased partner.</p>
                            <div class="row">
                                <div class="col-md-8 center-block">
                                    <a href="https://www.amazon.com/Readjustment-Tom-Peavler/dp/144015256X/" target="_blank" rel="nofollow">
                                        <img src="{{{ url('storage/featured-author/readjustment.png') }}}" class="" style="width:100%" alt="Readjustment">
                                    </a>
                                </div>
                                
                            </div>
                            
                            <br>
                            
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“Are you aware of what the oil companies tried to do to us?”</em></p>
                            </blockquote>

                            <p class="text-center">You can get a copy of the book on <a class="link-white" href="https://www.amazon.com/Readjustment-Tom-Peavler/dp/144015256X/" target="_blank" rel="nofollow">Amazon</a> and read more at <a class="link-white" href="http://tompeavler.com/" target="_blank" rel="nofollow">tompeavler.com</a></p>
                            
                            
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
