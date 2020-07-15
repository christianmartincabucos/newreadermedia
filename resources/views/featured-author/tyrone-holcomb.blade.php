@extends('layouts.app')
@section('title')Media Spotlight: Tyrone Holcomb @endsection
@section('og-title')Media Spotlight: Tyrone Holcomb @endsection
@section('meta-description')Tyrone Holcomb is serving on staff at the Cathedral of Central Texas, the “Christian House of Prayer”.@endsection
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
                                <img src="{{{ url('storage/featured-author/tyrone-holcomb.jpg') }}}" class="img-circle" style="width:100%" alt="Tyrone Holcomb">
                            </div>
                            <h3 class="text-center"><strong>Tyrone Holcomb</strong> </h3>
                            <p>Tyrone Holcomb is serving on staff at the Cathedral of Central Texas, the “Christian House of Prayer”. He is a devoted husband to his wife Andrea; a dedicated father of two sons, Omar and Vaughn; two daughters, Jada and Ty.</p>
                            <br>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“Many of God’s people are having near-life experiences; meaning they’re enduring life, not enjoying life.”</em></p>
                            </blockquote>
                            <div class="row">
                                <div class="col-md-4 center-block">
                                    <a href="https://www.amazon.com/More-Less-Turning-Disabilities-Possibilities/dp/1629985635/" target="_blank" rel="nofollow">
                                        <img src="{{{ url('storage/featured-author/tyrone-holcomb-book.png') }}}" class="" style="width:100%" alt="More For Less: Turning Disabilities Into Possibilities">
                                        
                                    </a>
                                    
                                </div>
                                <h3 class="text-center"><strong>More For Less<br><small>Turning Disabilities Into Possibilities</small></strong> </h3>
                            </div>
                            <br>
                            
                            <p>A very uplifting and inspiring book about stories and experiences that remind us about how God can make use of ourselves  regardless of our past situations or shortcomings. This book is a brilliant piece of work that will empower people to achieve extraordinary success and also show us how God’s ability to turn our disabilities into his possibilities, how our breaking point can become his breakout moment.</p>
                            
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“Remember, a disappointment to us is only an appointment with God. Nothing takes Him by surprise.” </em></p>
                            </blockquote>
                            
                            <br>
                            
                            

                            <h4 class="text-center"><small>Get a copy of the book on</small> <a href="https://www.amazon.com/More-Less-Turning-Disabilities-Possibilities/dp/1629985635/" target="_blank" rel="nofollow">amazon</a></h4>
                            
                            
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
