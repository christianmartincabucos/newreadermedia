@extends('layouts.app')
@section('title')Media Spotlight: Alex Salaiz @endsection
@section('og-title')Media Spotlight: Alex Salaiz @endsection
@section('meta-description')Alex Salaiz is a retired army officer with the rank of Lieutenant Colonel retiring after 36 years of both active and reserve duty.  His last active duty assignment was state sides in support of ‘Operation Iraqi Freedom’. This is Alex’s third and final book, ‘Revenge Without Remorse’, in the trilogy of FBI Special Agent Chad Winters.@endsection
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
                                <img src="{{{ url('storage/featured-author/alex-salaiz.jpg') }}}" class="img-circle" style="width:100%" alt="Alex Salaiz">
                            </div>
                            <h3 class="text-center"><strong>Alex Salaiz</strong> </h3>
                            <p>Alex Salaiz received his B.A. degree in Political Science from Saint Mary’s University in San Antonio, Texas.  He is a retired government employee after directing a major federal agency in Denver, Colorado.  He is also a retired Army officer with the rank of Lieutenant Colonel retiring after 36 years of both active and reserve duty.  His last active duty assignment was state sides in support of ‘Operation Iraqi Freedom’. This is Alex’s third and final book, ‘Revenge Without Remorse’, in the trilogy of FBI Special Agent Chad Winters. His first book, ‘This Nation Under Attack’, was published in 2014 and the second book, ‘Unholy Terror Waged on Our Beloved Nation’, was published in 2016. Alex lives in San Antonio, Texas with his wife Nellie, a retired school teacher. They have three grown sons and a bunch of grandkids.</p>
                            <br>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“leave a little bit of sparkle wherever you go, Chad.”</em></p>
                            </blockquote>
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="https://www.amazon.com/This-Nation-under-Attack-Salaiz/dp/1460245539" target="_blank" rel="nofollow">
                                        <img src="{{{ url('storage/featured-author/alex-salaiz-book-1.png') }}}" class="" style="width:100%" alt="This Nation Under Attack">
                                        <h4 class="text-center"><strong>This Nation under Attack</strong> </h4>
                                    </a>
                                    
                                </div>
                                <div class="col-md-4">
                                    <a href="https://www.amazon.com/Unholy-Terror-Waged-Beloved-Nation-ebook/dp/B072M5XGY8/" target="_blank" rel="nofollow">
                                        <img src="{{{ url('storage/featured-author/alex-salaiz-book-2.png') }}}" class="" style="width:100%" alt="Unholy Terror Waged on Our Beloved Nation">
                                        <h4 class="text-center"><strong>Unholy Terror Waged on Our Beloved Nation</strong> </h4>
                                    </a>
                                    
                                </div>
                                <div class="col-md-4">
                                    <a href="https://www.amazon.com/Revenge-Without-Remorse-Special-Winters-ebook/dp/B07K2LQVF8/" target="_blank" rel="nofollow">
                                        <img src="{{{ url('storage/featured-author/alex-salaiz-book-3.png') }}}" class="" style="width:100%" alt="Revenge Without Remorse">
                                        <h4 class="text-center"><strong>Revenge Without Remorse</strong> </h4>
                                    </a>
                                    
                                </div>
                            </div>
                            <br>
                            
                            <p>The extreme right wing (Tea Party) votes not to approve both the continuing resolution and the debt ceiling increase eventually causing the federal government to shutdown. This gives a wealthy expatriated American the idea that this is the process to use to bring the US government down.</p>
                            <p>Failure to approve the debt ceiling increase would cause a catastrophic effect not only in the United States but throughout the free world because the United States would default on its debt. This would definitely bring the US economy down and destroy the country.</p>
                            <p>A corrupt Congressman is bribed with a few thousand dollars by the wealthy expatriated American to keep the US Congress from approving a continuing resolution (CR) and the debt ceiling increase. But the Congressman was talking too much and the expatriated American sends a terrorist to shut him up by assassinating him. He does not need the Congressman; other members of Congress are doing what he wants done.</p>
                            <p>Rookie FBI agent Chad Winters recognizes the assassin as a former Guantanamo detainee he had interviewed while he was in the Army and finds out the shooter is the link to the expatriated American.</p>
                            <p>The goal of the expatriated American in conjunction with the al-Qaida leadership was to bring the United States down based on their Muslim propaganda beliefs that the United States is to blame for all of their nations&rsquo; problems. No more flying planes into buildings. They will instead use the US Congress to do their job. Will they succeed?</p>
                            <p>The events become extremely challenging for the retired Army Colonel Winters more than the battlefields of Afghanistan and Iraq or the clandestine operation into Pakistan in solving the crime and bringing the expatriated American financier hiding in Yemen to face justice in the United States.</p>
                            <br>
                            
                            

                            <h4 class="text-center"><small>Get a copy of the books on</small> <a href="https://www.amazon.com/This-Nation-under-Attack-Salaiz/dp/1460245539" target="_blank" rel="nofollow">amazon</a></h4>
                            
                            
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
