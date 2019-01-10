@extends('layouts.app')
@section('title')Get hyped with New Reader Media's Sneak Peeks.@endsection
@section('og-title')Get hyped with New Reader Media's Sneak Peeks.@endsection
@section('meta-description')How do you get more people to read your book? Do sneak peek really work? Here's some info on sneak peeks and how New Reader Media can help.@endsection
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
                            <h1 class="header-white">Sneak Peeks, why do we need them?</h1>
                            
                            <div style="position:relative;width:100%;height:500px;background:url({{{ url('public/storage/services/bt2.jpg') }}}) center center no-repeat;background-size: cover;">
                                <div class="layer" style="background-color: rgba(0, 0, 0, 0.0);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <br>
                                    <p class="text-justify"><span style="">If you want to be viral, you have to marry videos. Engagement with a global audience generates more than buzz and hype. It gets your message across instantly. Corporate entities project their personalities through relatable content and no other medium can do this more efficiently than videos. It’s more than conveying what they do but more on why they do it.  Nothing transmits the magical eloquence of why in the form of an emotion-driven moving picture.</span></p>
                                    
                                    <p class="text-justify"><span style="">Visuals mixed with audio can convey a thousand ideas in a range of seconds to viewers. Authors who have gained followers through the written word have the opportunity to strengthen and nurture that connection with their readers online through videos.</span></p>
                                    
                                    <p class="text-justify"><span style="">Sneak Peeks have been proven to be an effective marketing tool for self-published authors. Where everything is shareable, authors can showcase not only their work but offer readers a chance to experience them on a personal level.  Social media sites like Facebook, Twitter, Tumblr, YouTube, and Google+, have an enormous amount of traffic can reel in potential readers into buying your book.</span></p>
                                    
                                    <p class="text-justify"><span style="">Products are now being sold online. Social media sites like Facebook, Twitter, Tumblr, YouTube, and Google+, has an enormous amount of population and traffic everyday making it a chance to reach to a wide range of potential readers. It is indeed a powerful tool as it persuades the potential customers to know the author and into buying and reading your book.</span></p>
                                    <p class="text-justify"><span style="">Sneak Peeks follow the same principle as movie trailers. The general gist of the film is shown in less than a minute. But when done with right, it gives the audience just enough for them to bite through the fishing lines without catching the fish. It creates anticipation and intrigue and leaves them wanting.</span></p>    
                                </div>
                                <div class="col-md-6">
                                    <br>
                                    
                        
                                    <p class="text-justify"><span style="">One of the many challenges, if not the only challenge, of unknown self-published authors is the fierce competition for eyeballs when sitting next to bestselling authors. This is especially true when selling books. Sneak Peeks can glue in potential readers in the four-sided screen and communicate the idea of the book faster compared to printed ads or any other form of static medium.</span></p>
                                    
                                    <p class="text-justify"><span style="">The reality is that we live in an age where many are watching and fewer people are reading. Book trailers are a bridge that links potential readers and authors on a different dimension. A world full of unknown possibilities that could potentially turn into an escape, a temporary reality, the more you immerse yourself in it.</span></p>
                                    
                                    <p class="text-justify"><span style="">So do the work. Create a great and impressionable Sneak Peeks and make your story lasts for all time. Swing from the heels and never look back.</span></p>
                                    <img class="article-thumbnail" src="{{{ url('public/storage/services/bt1.jpg') }}}" style="width:100%" alt="Teaser Ads">
                                </div>
                            </div>
                            
                            
                            
                            
                            
                        </div>
                       
                        
                    </section>
                    </div>                    
                </div>
                
                @include('layouts.footer')
            </div>
        </div>
    </div>
</div>
@endsection
