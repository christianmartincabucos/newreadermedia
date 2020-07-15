@extends('layouts.app')
@section('title')Media Spotlight: Zachary Zeigler, Ph.D. @endsection
@section('og-title')Media Spotlight: Zachary Zeigler, Ph.D. @endsection
@section('meta-description')Dr. Zeigler teaches Exercise Physiology and Nutrition courses and is an active researcher investigating the impacts of obesity on cardiovascular health.@endsection
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
                                <img src="{{{ url('storage/featured-author/zachary-zeigler.jpg') }}}" class="img-circle" style="width:100%" alt="Zachary Zeigler">
                            </div>
                            <h3 class="text-center"><strong>Zachary Zeigler, Ph.D.</strong> </h3>
                            <p>Dr. Zeigler received his doctoral degree in Physical Activity, Nutrition, and Wellness from Arizona State University. He
                                is an Assistant Professor at Grand Canyon University. He teaches Exercise Physiology and Nutrition courses and is an
                                active researcher investigating the impacts of obesity on cardiovascular health. Dr. Zeigler has five children and has
                                been married to his wife for 11 years. Dr. Zeigler and his family live in Mesa Arizona.</p>
                            <br>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“Don’t drink your calories! Sugar sweetened beverages are a major contributor to the obesity
                                    epidemic.”</em></p>
                            </blockquote>
                            
                            <div class="row">
                                <div class="col-md-8 center-block">
                                    <a href="https://www.amazon.com/Weight-Loss-Bible-Scientific-Approach-ebook/dp/B079ZJTQCM/ " target="_blank" rel="nofollow">
                                        <img src="{{{ url('storage/featured-author/weight-loss-bible.png') }}}" class="" style="width:100%" alt="The Weight Loss Bible">
                                    </a>
                                </div>
                                
                            </div>
                            <h3 class="text-center"><strong>The Weight Loss Bible</strong> </h3>
                            <p>QVC pundits, infomercials, social media multilevel marketing schemes, and pimple-faced personal trainers are all
                            making money off the concept that there is one thing you have been missing in your weight loss endeavor. They
                            have found the answer (of course, no one else has found this mysterious elixir). And if you buy their supplement,
                            workout video, piece of exercise equipment, protein shake, etc., then you will have the body of your dreams. This
                            crafty weight loss industry is making fifty billion dollars per year on the back of failed weight loss attempts. The
                            reality is, weight loss and weight maintenance is multifaceted with dozens of principles to consider and apply. This
                            book is meant to be a tool and guide on your weight loss/maintenance journey. The chapters of this book discuss the
                            hard facts on weight loss, why it is so hard to lose weight, and the many principles that need to be mastered to lose
                            weight. The hope of the author is for the reader to be empowered with a better understanding of what it takes to
                            lose weight and keep it off. Additionally, a plan called the twenty-four-hour weight loss plan is included that applies
                            all concepts in the text.</p>

                            <br>
                            
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“When weight loss is the goal, more exercise at high intensities is better.”</em></p>
                            </blockquote>


                            <h3 class="text-center"><small>visit website at</small><br><a href="https://weightlossbible.net" target="_blank" rel="nofollow">weightlossbible.net</a></h3>
                            
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
