@extends('layouts.app')
@section('title')Media Spotlight: Skyelar Nelson @endsection
@section('og-title')Media Spotlight: Skyelar Nelson @endsection
@section('meta-description')The author of 42 self-published books including: 14 full-length poem books, 16 poetry chapbooks and 12 short story books, @endsection
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
                                <img src="{{{ url('storage/featured-author/skyelar-nelson.jpg') }}}" class="img-circle" style="width:100%" alt="Skyelar Nelson">
                            </div>
                            <h3 class="text-center"><strong>Skyelar Nelson</strong> </h3>
                            <p>Skyelar Nelson has been writing books, plays, and poetry since he was thirteen years old. He currently resides with his beautiful wife and three children in Charlotte, North Carolina, but was born and raised in Flint, Michigan, where he continues to nurture his dream of inspiring others through his writing. Payless is his first book.</p>
                            <br>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“The chaotic, unstable atmosphere of her home forced Quisha to grow up early.”</em></p>
                            </blockquote>
                            
                            
                            <div class="row">
                                <div class="col-md-8 center-block">
                                    <a href="https://www.amazon.com/Payless-Skyelar-Nelson/dp/148083419X/" target="_blank" rel="nofollow">
                                        <img src="{{{ url('storage/featured-author/payless.png') }}}" class="" style="width:100%" alt="Payless">
                                    </a>
                                </div>
                                
                            </div>
                            
                            <h3 class="text-center"><strong>Payless</strong> </h3>
                            <p>La’ Vicha Brown is a hardworking mother who is steadfastly committed to two things: her love for God and partying. As she attempts to straddle the fence between attaining her desires in life and meeting the needs of her three children, La’ Vicha has no idea she is about to discover that there are consequences for every one of her choices.</p>
                            <p>Quisha, Jerome Jr., and Niqua are three children with minds of their own. As La’ Vicha subjects them to demanding and abusive tirades that accompany her self-obsessed mindset, it is not long before one of her poor decisions intertwines with Niqua’s life and leads to a tragic event with long-term effects. Now only time will tell if La’ Vicha’s world will crash around her or if she will do what it takes to avoid permanent emotional damage.</p>
                            <p>Payless shares the tale of a narcissistic single mother as she juggles a lifestyle of church and partying and discovers the significance of her choices in life.</p>
                            <br>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“Change without working towards that change will never change your chance to change.”</em></p>
                            </blockquote>

                            <p class="text-center">You can get a copy of the book on <a class="link-white" href="https://www.amazon.com/Payless-Skyelar-Nelson/dp/148083419X/" target="_blank" rel="nofollow">Amazon</a> and read more at <a class="link-white" href="http://skyelarnelson.com/" target="_blank" rel="nofollow">skyelarnelson.com</a></p>
                            
                            
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
