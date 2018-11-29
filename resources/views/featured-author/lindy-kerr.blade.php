@extends('layouts.app')
@section('title')Media Spotlight: Lindy Kerr @endsection
@section('og-title')Media Spotlight: Lindy Kerr @endsection
@section('meta-description')Lindy Kerr is a long-time lover and observer of God’s beautiful creation. She grew up on a farm in Northwest New Mexico and fell in love with creation as a young child.@endsection
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
                                <img src="{{{ url('public/storage/featured-author/lindy-kerr.jpg') }}}" class="img-circle" style="width:100%" alt="Lindy Kerr">
                            </div>
                            <h3 class="text-center"><strong>Lindy Kerr</strong> </h3>
                            <p>Lindy Kerr is a long-time lover and observer of God’s beautiful creation. She grew up on a farm in Northwest New Mexico and fell in love with creation as a young child. Now, Lindy lives in the extreme Southwest corner of New Mexico, where God is evident in everything because only He could program the living things to survive in the desert. Lindy and her husband raised 4 boys who are now grown with families of their own. Lindy is a certified teacher in Science and Family and Consumer Sciences and taught Mid-School for 7 years. She would tell her students that science is the art of wondering- and she has wondered how the mysterious and complicated wonders of the earth have come to be. She has concluded that only an Almighty Creator could create such magnificence. The desire to share in that wonder and awe has bubbled over into this little book about seeds. Soak in the Joy of Creation!</p>
                            <br>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“Sometimes, the rain won’t come. In that case, the seed waits and rests until it is just the right time to sprout.”</em></p>
                            </blockquote>
                            
                            <div class="row">
                                <div class="col-md-8 center-block">
                                    <a href="https://www.amazon.com/GodS-Amazing-Creation-Story-Seeds-ebook/dp/B079N4GM87/" target="_blank" rel="nofollow">
                                        <img src="{{{ url('public/storage/featured-author/gods-amazing-creation.png') }}}" class="" style="width:100%" alt="Gods Amazing Creation">
                                    </a>
                                </div>
                                
                            </div>
                            <h3 class="text-center"><strong>God’s Amazing Creation: The Story of Seeds</strong> </h3>
                            <p>How are seeds specially programmed? How do seeds sprout? How do they spread all over the earth? What protects seeds in a drought? The Story of Seeds is a book that presents these questions and honors the God who made it all happen.</p>
                            <br>
                            
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“And who made the seeds to travel in so many fun ways to cover the earth with plants? God did!”</em></p>
                            </blockquote>

                            <p class="text-center">You can get a copy of her book on <a class="link-white" href="https://www.amazon.com/GodS-Amazing-Creation-Story-Seeds-ebook/dp/B079N4GM87/" target="_blank" rel="nofollow">Amazon</a> and read more of her work at <a class="link-white" href="http://amazingcreationsofgod.com/" target="_blank" rel="nofollow">amazingcreationsofgod.com</a></p>
                            
                            
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
