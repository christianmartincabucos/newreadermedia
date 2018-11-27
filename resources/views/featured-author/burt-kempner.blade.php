@extends('layouts.app')
@section('title')Media Spotlight: Burt Kempner @endsection
@section('og-title')Media Spotlight: Burt Kempner @endsection
@section('meta-description')Burt Kempner is a scriptwriter, producer and children's book author. He has also written Larry the Lazy Blue Whale and Monty the Movie Star Moose.@endsection
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
                                <img src="{{{ url('public/storage/featured-author/burt-kempner.jpg') }}}" class="img-circle" style="width:100%">
                            </div>
                            <h3 class="text-center"><strong>Burt Kempner</strong> </h3>
                            <p>Writer-Producer Burt Kempner has worked professionally in New York, Philadelphia, Washington, D.C., and Florida. His work has won numerous major awards, and has been seen by groups ranging in size from a national television audience in the United States to a half-dozen Maori chieftains in New Zealand. Spurred by his love for young people, he started writing children's books in 2015.</p>
                            <p>Burt Kempner is a scriptwriter, producer and children's book author. He has also written <em>Larry the Lazy Blue Whale</em> and <em>Monty the Movie Star Moose</em>. He lives in Gainesville, Florida, with his wife, two dogs and a highly demanding cat.</p>
                            <br>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“Your actions have meaning, even when it doesn’t seem like they do.”</em></p>
                            </blockquote>
                            
                            <div class="row">
                                <div class="col-md-8 center-block">
                                    <a href="https://www.amazon.com/Five-Fierce-Tigers-Rosa-Martinez/dp/153560980X/ref=sr_1_1?ie=UTF8&qid=1541646355&sr=8-1&keywords=five+fierce+tigers" target="_blank" rel="nofollow">
                                        <img src="{{{ url('public/storage/featured-author/five-fierce-tigers.png') }}}" class="" style="width:100%">
                                    </a>
                                </div>
                                
                            </div>
                            <h3 class="text-center"><strong>The Five Fierce Tigers of Rosa Martinez</strong> </h3>
                            <p>Rosa Martinez is seriously ill. She has the loving support of her mother and grandfather and a doctor who takes good care of her. But she also has a secret weapon. Rosa can summon five tigers to come to her aid when she’s ailing or in big trouble. Her disease may think it has the upper hand, but wait until it encounters Gautama, Arik, Vashti, Selena and Quan – the five fierce tigers of Rosa Martinez. Young readers will delight in their daring adventures and who knows: they may even be able to call forth guardian animals of their own when they need them.</p>
                            <br>
                            
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“All you have to do is think of an animal you want to protect you and you’ll see it in your mind.”</em></p>
                            </blockquote>

                            <p>You can get a copy of the book on <a class="link-white" href="https://www.amazon.com/Five-Fierce-Tigers-Rosa-Martinez/dp/153560980X/ref=sr_1_1?ie=UTF8&qid=1541646355&sr=8-1&keywords=five+fierce+tigers" target="_blank" rel="nofollow">Amazon</a> and read more at <a class="link-white" href="http://burtkempner.com/" target="_blank" rel="nofollow">burtkempner.com</a></p>
                            
                            
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
