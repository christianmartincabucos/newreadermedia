@extends('layouts.app')
@section('title')Media Spotlight: Charles Campise @endsection
@section('og-title')Media Spotlight: Charles Campise @endsection
@section('meta-description')Charles Campise began looking for something fun to do. He found an offer from a ride-sharing company on the fourth day of retirement, signed up, and was driving one week later on.@endsection
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
                                <img src="{{{ url('public/storage/featured-author/charles-campise.jpg') }}}" class="img-circle" style="width:100%">
                            </div>
                            <h3 class="text-center"><strong>Charles Campise</strong> </h3>
                            <p>Charles Campise was born in Houston, Texas. He is the grandson of immigrants from Poggioreale, Sicily, who came to an Italian settlement near Bryan, Texas in the late 1880s. He has a Bachelor's degree in Philosophy and a double Master's, covering Educational Psychology and Social Work. He has become fluent in Spanish through his own personal efforts at study. He retired from service to the foster care system in Texas in June 2014 after forty-four years. Then, he began looking for something fun to do. He found an offer from a ride-sharing company on the fourth day of retirement, signed up, and was driving one week later on.</p>
                            <br>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“Sometimes, the rain won’t come. In that case, the seed waits and rests until it is just the right time to sprout.”</em></p>
                            </blockquote>
                            
                            <h3 class="text-center"><strong>Adventures of a Rideshare Driver</strong> </h3>
                            <p>This book is a collection of the author's favorite experiences of driving passengers who use the ride-sharing mode of transportation. Stories are limited to his experiences in the region in and around Austin, Texas and other communities in the central part of the state for more than three years, beginning in June 2014.</p>
                            <p>The book often mentions the stories he told his passengers about the history of the region. He tells some of his own life experiences and his personal connections with the cities in America and elsewhere. He has been sure to tell the He has some episodes about his most interesting passengers and his most famous ones. The author has been a ride-sharing driver on more than seven thousand trips and has served more than twenty thousand passengers. He has driven for three different companies.</p>
                            
                            <div class="row">
                                <div class="col-md-8 center-block">
                                    <a href="https://www.amazon.com/Adventures-Rideshare-Driver-Charles-Campise/dp/1478743204/" target="_blank" rel="nofollow">
                                        <img src="{{{ url('public/storage/featured-author/adventures-of-a-rideshare-driver.png') }}}" class="" style="width:100%">
                                    </a>
                                </div>
                                
                            </div>
                            <p><em>"This captivating ride had me laughing and learning to the end. It reminded me not to prejudge people."</em></p>
                            <h4 class="text-right"><em>- CATALINA V. VILLALPANDO, Former U.S. Treasurer</em></h4>
                            <br>
                            
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“And who made the seeds to travel in so many fun ways to cover the earth with plants? God did!”</em></p>
                            </blockquote>

                            <p class="text-center">You can get a copy of the book on <a class="link-white" href="https://www.amazon.com/Adventures-Rideshare-Driver-Charles-Campise/dp/1478743204/" target="_blank" rel="nofollow">Amazon</a> and read more at <a class="link-white" href="http://charlescampiseauthor.com/" target="_blank" rel="nofollow">charlescampiseauthor.com</a></p>
                            
                            
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
