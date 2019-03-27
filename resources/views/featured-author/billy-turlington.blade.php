@extends('layouts.app')
@section('title')Media Spotlight: Billy Turlington @endsection
@section('og-title')Media Spotlight: Billy Turlington @endsection
@section('meta-description')Billy Turlington He and his wife of over ten years have a five-year-old daughter who is the inspiration for the main character in Princess Ariadne of Micheland, his debut book.@endsection
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
                                <img src="{{{ url('public/storage/featured-author/billy-turlington.jpg') }}}" class="img-circle" style="width:100%" alt="Billy Turlington">
                            </div>
                            <h3 class="text-center"><strong>Billy Turlington</strong> </h3>
                            <p>Billy Turlington was born and raised on a farm in Covington, Georgia, where he resides today. He and his wife of over ten years have a five-year-old daughter who is the inspiration for the main character in Princess Ariadne of Micheland, his debut book.</p>
                            
                            <br>
                           
                            <div class="row">
                                <div class="col-md-4 center-block">
                                    <a href="https://www.amazon.com/Princess-Ariadne-Micheland-Billy-Turlington/dp/147879416X/" target="_blank" rel="nofollow">
                                        <img src="{{{ url('public/storage/featured-author/billy-turlington-book.png') }}}" class="" style="width:100%" alt="Princess Ariadne of Micheland">
                                        
                                    </a>
                                    
                                </div>
                                <h3 class="text-center"><strong>Princess Ariadne of Micheland</strong> </h3>
                            </div>
                            <br>
                            
                            <p>A magical tale of friendship and adventure... When Princess Ariadne and her best friend Dooby the penguin are accidently transported from the magical world of Micheland to the world of humans, they know they're in trouble. But then they meet Danielle, a friendly young girl about Princess Ariadne's age who volunteers to help them find their way back home. As they search for a portal that can return them to their world, Princess Ariadne, Dooby, and Danielle take on bullying and disrespect for elders, and perform a heroic act. Together, they discover that their new friendship is truly magical!</p>
                            <br>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“Wow!” said Danielle. “You have a penguin that can talk? That’s so cool!”</em></p>
                            </blockquote>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>Danielle secretly wished that she could live in Micheland and have penguin friends too. But most of all, Danielle wished she had a family like Princess Ariadne. She didn’t even care if they were royalty or lived in a castle.</em></p>
                                <p class="text-red"><em>Danielle just wanted parents who would love and take care of her.</em></p>
                            </blockquote>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>Princess Ariadne and Dooby pushed the button on the side of their magic bracelets and, in a flash, they were gone. Left behind on the ground where they once stood was a heart with “I will never forget you!” written inside.</em></p>
                            </blockquote>

                            <h4 class="text-center"><small>Get a copy of the book on</small> <a href="https://www.amazon.com/Princess-Ariadne-Micheland-Billy-Turlington/dp/147879416X/" target="_blank" rel="nofollow">amazon</a></h4>
                            
                            
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
