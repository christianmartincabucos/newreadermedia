@extends('layouts.app')
@section('title')Media Spotlight: Ted Lau @endsection
@section('og-title')Media Spotlight: Ted Lau @endsection
@section('meta-description')Get to know more about Ted Lau a.k.a. PornStarRapper and his book.@endsection
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
                                <img src="{{{ url('storage/featured-author/ted-lau.jpg') }}}" class="img-circle" style="width:100%" alt="Ted Lau">
                            </div>
                            <h3 class="text-center"><strong>Ted Lau</strong> </h3>
                            <p>Greetings to the readers of the world, my name is: Ted C. Lau. My life in a nutshell, I was born and raised in Southern California. My parents immigrated to the United States from Hong Kong, which was a British Colony then. My parents worked as chefs, and I grew up working in the restaurant business. I would think, I had a childhood that wasn’t too much out of the ordinary. I had a standard curriculum of public schooling, and I had participated in the All American sports such as Football. I went to UC Santa Barbara for college, and started having a taste of freedom. It was said that UCSB is a party school, however I would like to think of it as having an awesome social environment. “Party hard, Study hard,” somehow through sweat, tears, & beers I had graduated; in chemistry of all majors. Like most graduates we became a part of the workforce. Years had passed, and felt nearly I had worked myself nearly to death... “Carpe Diem”, somehow I had journeyed into making creative arts again. Enjoying life, and having fun. Cheers to the world!</p>
                            <br>
                            
                            <div class="row">
                                <div class="col-md-4 center-block">
                                    <a href="https://www.amazon.com/PornStarRapper-Quotes-Vol-1/dp/1388689634/" target="_blank" rel="nofollow">
                                        <img src="{{{ url('storage/featured-author/ted-lau-book.png') }}}" class="" style="width:100%" alt="20 One F#ckN Quotes Vol. #1">
                                        
                                    </a>
                                    
                                </div>
                                <h3 class="text-center"><strong>20 One F#ckN Quotes Vol. #1</strong> </h3>
                            </div>
                            <br>
                            
                            <p>This book, “20 One F#ckN Quotes Vol. #1” was born from the first book titled, “PornStarRapper® “What’s That”. The first book is a short story about how the comic character came about by way of fiction. Moving forward onto this book, it is a collection of quotes that defines the character as its name states, PornStarRapper. Yes, this animated “cock hero” like character speaks foul. Thankfully for the general public, PornStarRapper was raised to speak foul language that is stylized in grawlixed form. The comic quotes within are number of expressions of text, not directed toward any particular one in the real world. The text is rather an expression of how this “hard cock hero” feels and expresses itself. I hope the readers enjoy; and will be inspired by PornStarRapper’s sensual undertones.</p>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>Rise And F#ckN Shine</em></p>
                            </blockquote>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>F#ckN Belly ClapN Good</em></p>
                            </blockquote>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>Action F#ckN Packed</em></p>
                            </blockquote>
                            <br>
                            
                            

                            <h4 class="text-center"><small>Get a copy of the book on</small> <a href="https://www.amazon.com/PornStarRapper-Quotes-Vol-1/dp/1388689634/" target="_blank" rel="nofollow">amazon</a></h4>
                            
                            
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
