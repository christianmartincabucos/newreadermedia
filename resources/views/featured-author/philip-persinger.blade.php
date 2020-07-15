@extends('layouts.app')
@section('title')Media Spotlight: Philip B. Persinger @endsection
@section('og-title')Media Spotlight: Philip B. Persinger @endsection
@section('meta-description')Philip B. Persinger has been writing stuff for over 40 years. Early on, he wrote the Fishing News for the Montauk Pioneer. That might have been easier if he had ever gone fishing. Then he supported a playwriting habit by setting type—legitimate theatre, he’s got an MFA from Chapel Hill to prove it.@endsection
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
                                <img src="{{{ url('storage/featured-author/philip-persinger.jpg') }}}" class="img-circle" style="width:100%" alt="Philip Persinger">
                            </div>
                            <h3 class="text-center"><strong>Philip B. Persinger</strong> </h3>
                            <p>Philip B. Persinger has been writing stuff for over 40 years. Early on, he wrote the Fishing News for the Montauk Pioneer. That might have been easier if he had ever gone fishing. Then he supported a playwriting habit by setting type—legitimate theatre, he’s got an MFA from Chapel Hill to prove it. Then he wrote code. He leaned how to do that at Vassar by majoring in ancient Greek—they’re both about syntax. In 2002 Fate bounced him on the head, which he recounted in his first award-winning novel. He also got an instant family just by signing a piece of paper. He had been an expert on childrearing before he had some. That changed everything. He and Emily are very happy in their old house and art studio in the Hudson River Valley.</p>
                            <br>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“There is no attempted hostile takeover of his casino in Macao now.”</em></p>
                            </blockquote>
                            
                            <h3 class="text-center"><strong>Tools of the Trade</strong> </h3>
                            <p>A heart-warming tale of alpha males facing a precipitous slide—for beta or for worse. Woody Steele is one of the richest men on the planet. Sadly one of his greatest assets has been recently downsized—sorry Casanova. Ivan Greenbriar, his fellow billionaire nemesis and creep extraordinaire, turns every activity into a pissing contest even when he’s alone. Sargent Scanlon, a hero cop solely on the merits of getting shot in the nuts, doesn’t know what fear is until he must match wits with his odious fourteen-year-old stepdaughter—she’s a crime against humanity.</p>
                            <p>Meanwhile, looking down from above is Colonel Pavlenko, the world’s oldest practicing Stalinist (mutually assured destruction anyone?). This is a real time, real world story about manly men—and their women, women who are ready to break through the glass ceiling, even if they have to use their mate as a battering ram.</p>
                            <p>Sex can be the means to an end, but what happens at the end of the means?</p>
                            <div class="row">
                                <div class="col-md-8 center-block">
                                    <a href="https://www.amazon.com/Tools-Trade-Philip-B-Persinger-ebook/dp/B01CD0NOF2/" target="_blank" rel="nofollow">
                                        <img src="{{{ url('storage/featured-author/tools-of-the-trade.png') }}}" class="" style="width:100%" alt="Tools of the Trade">
                                    </a>
                                </div>
                                
                            </div>
                            
                            <br>
                            
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“As Victoria watches from above, he slips into a meditative state, cycling through a mental slide show that he has prepared over time.”</em></p>
                            </blockquote>

                            <p class="text-center">You can get a copy of the book on <a class="link-white" href="https://www.amazon.com/Tools-Trade-Philip-B-Persinger-ebook/dp/B01CD0NOF2/" target="_blank" rel="nofollow">Amazon</a> and read more at <a class="link-white" href="http://philippersinger.com/" target="_blank" rel="nofollow">philippersinger.com</a></p>
                            
                            
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
