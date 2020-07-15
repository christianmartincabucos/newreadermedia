@extends('layouts.app')
@section('title')Media Spotlight: Bernadette Butler @endsection
@section('og-title')Media Spotlight: Bernadette Butler @endsection
@section('meta-description')Bernadette Butler self-published a collection of poems, express-ing her relationship with God and all he has brought her through. Her desire is to share her story about her journey with her son, who has autism. Her hope is to inspire and encourage parents and the children who have the disorder.@endsection
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
                                <img src="{{{ url('storage/featured-author/bernadette-butler.jpg') }}}" class="img-circle" style="width:100%" alt="Bernadette Butler">
                            </div>
                            <h3 class="text-center"><strong>Bernadette Butler</strong> </h3>
                            <p>Bernadette Butler is a wife and mother of three children and two step-children. Born and raised in Chicago, Illinois, her home life was challenging. Later, she moved to Southern California, where she lived for thirty years. She later made Ohio her home.
                                Bernadette has lived an adventurous life. She went from computer data entry to; serving two terms as a school board member, State of California Legislature Woman of the year 1994, flight attendant, school crossing guard and finally, author. Her passion is writing
                                poetry. She self-published in 2016 a collection of poems, “Words of Praise, Joy and Love”, express-ing her relationship with God and all he has brought her through. Her desire is to share her story about her journey with her son, who has autism. Her hope is to
                                inspire and encourage parents and the children who have the disorder.
                            </p>
                            <br>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>I was unclear, but Melvin was precise. Melvin had made up his mind. One day in the kitchen, he said to me, “Mom, I know something is wrong with me. My friend have gone off to college. I need my own place. I am a MAN.” </em></p>
                            </blockquote>
                            <div class="row">
                                <div class="col-md-4 center-block">
                                    <a href="https://www.amazon.com/Living-Autism-Bernadette-Butler/dp/1641386045" target="_blank" rel="nofollow">
                                        <img src="{{{ url('storage/featured-author/bernadette-butler-book.png') }}}" class="" style="width:100%" alt="Living with Autism">
                                        
                                    </a>
                                    
                                </div>
                                <h3 class="text-center"><strong>Living with Autism</strong> </h3>
                            </div>
                            <br>
                            
                            <p>Bernadette was nineteen years old, pregnant, and married. She was excited and afraid all at the same time. She could not wait to hold the baby, all her hopes and dreams she envisioned for him. He laughed and smiled, he crawled and walked. Then silence crept in, this silence lead to an unexpected diagnosis that sent them both on a challenging journey. Autism, what does it mean? She blamed herself for so many years, feeling that Father God was punishing her. It took all these years of healing and learning that God was not punishing her. He knew she would love her son unconditionally. God was taking all her ashes and making a beautiful fragrance to share with others. Out of her journey blossomed: Lord Be the Center of My Life Ministry, INC.</p>
                            <br>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“I was trapped in fear. Afraid of my own shadow. This was not about me; this is about Melvin’s life. I must step out of this fear.”</em></p>
                            </blockquote>
                            

                            <h4 class="text-center"><small>Get a copy of the book on</small> <a href="https://www.amazon.com/Living-Autism-Bernadette-Butler/dp/1641386045" target="_blank" rel="nofollow">amazon</a></h4>
                            
                            
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
