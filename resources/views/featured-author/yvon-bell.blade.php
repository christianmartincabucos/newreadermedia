@extends('layouts.app')
@section('title')Media Spotlight: Yvon Bell @endsection
@section('og-title')Media Spotlight: Yvon Bell @endsection
@section('meta-description')Yvon Bell is a down to earth, country girl passionate to share and teach of Gods Voice in a solemn bid to change the thinking regarding Gods voice and His heart for future generations.@endsection
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
                                <img src="{{{ url('public/storage/featured-author/yvon-bell.jpg') }}}" class="img-circle" style="width:100%">
                            </div>
                            <h3 class="text-center"><strong>Yvon Bell</strong> </h3>
                            <p>Yvon Bell B.A. (University of Pretoria), Business woman and financial coach traveled from South Africa to the United States to speak with audiences in both small and arena-sized venues, leading discussions on how others can prepare and achieve communication with God. In her book, Messages from God, Bell shares her astonishing life experience in exacting detail. In short, Messages from God is a factual account serving as a map for readers to join her on an extraordinary, life-changing trip. Yvon Bell is a down to earth, country girl passionate to share and teach of Gods Voice in a solemn bid to change the thinking regarding Gods voice and His heart for future generations. Bells Journey with Gods voice changed her entire way of living. You too can find your true destiny by reading this book.</p>
                            <br>
                            
                            
                            <div class="row">
                                <div class="col-md-8 center-block">
                                    <a href="https://www.amazon.com/Messages-God-Hear-Never-Before/dp/1532034768/ref=sr_1_3?s=books&ie=UTF8&qid=1530643332&sr=1-3&keywords=Yvon+Bell" target="_blank" rel="nofollow">
                                        <img src="{{{ url('public/storage/featured-author/messages-from-god-yvon-bell.png') }}}" class="" style="width:100%">
                                    </a>
                                </div>
                                
                            </div>
                            <h3 class="text-center"><strong>Messages from God: Hear God Like Never Before</strong> </h3>
                            <p>What if you could hear detailed messages from God? Messages from God is an emotion-packed story explaining that there are no limits to hearing the voice of God, to clearly receiving divine instruction. Chronologically, it documents Bells journey across many years as God first reaches then teaches her. Messages from God puts a strong emphasis on listening to Gods voice. Hearing Gods voice, what He will tell you, will be simply inspiring, confesses Bell. For Bell, one of these life-changing experiences was a divine instruction to travel to Los Angeles to speak to vast audiences about what she was learning. With no plan Bell made that trip and found herself addressing jam-packed audiences for months afterward.</p>
                            <p>Session after session, Bell held audiences spell-bound for hours with unique and unplanned talks, never preparing a speech prior to the any of the meetings. After sharing her heart and experiences with her audiences she spend 10 years writing Messages from God. My goal is not to explain God, but to offer personal examples and real-life situations through which God manifests in our lives. Once I began hearing Gods voice, it instantly led to a very interesting life. I learned that God does not give up on anyone. I am now convinced that God makes His message clear to anyone who opens their ears. Messages from God is written to assist readers to find their own personal entrance to supernatural life but to hear GODs voice at an incredible high level.</p>
                            <br>
                            
                            

                            <p>You can get a copy of the book on <a class="link-white" href="https://www.amazon.com/Messages-God-Hear-Never-Before/dp/1532034768/ref=sr_1_3?s=books&ie=UTF8&qid=1530643332&sr=1-3&keywords=Yvon+Bell" target="_blank" rel="nofollow">Amazon</a> and read more at <a class="link-white" href="http://authoryvonbell.com/" target="_blank" rel="nofollow">authoryvonbell.com</a></p>
                            
                            
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
