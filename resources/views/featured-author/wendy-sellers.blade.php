@extends('layouts.app')
@section('title')Media Spotlight: Wendy Sellers @endsection
@section('og-title')Media Spotlight: Wendy Sellers @endsection
@section('meta-description')Wendy Sellers is "The HR Lady" who is different from most HR people. She is laser-focused on the bottom line, not emotions.@endsection
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
                                <img src="{{{ url('storage/featured-author/wendy-sellers.jpg') }}}" class="img-circle" style="width:100%" alt="Wendy Sellers">
                            </div>
                            <h3 class="text-center"><strong>Wendy Sellers</strong> </h3>
                            <p>Wendy Sellers is "The HR Lady" who is different from most HR people. She is laser-focused on the bottom line, not emotions. Wendy is often heard saying "Suck It Up, Buttercup." The phrase has taken a whole new meaning. In the past, it was directed at what she believed were inept employees. Now it is directed at the true root cause: inept leaders. In this book, she will show you how to be a strong yet positive, effective leader using skills that motivate people to want to work hard for you and, eventually, increase the bottom line. You will learn exactly how to be a leader people will follow.</p>
                            <p>Wendy is Chief Operating Officer and co-owner of BlackRain Partners LLC., a firm focused on People, Performance, and Profit. With over 20 years' experience in human resources and leadership development, Wendy speaks up and challenges the status quo. She has helped hundreds of executives increase their organization's productivity, leading to increased profits. Wendy has a master's degree in Human Resources, a master's degree in Health Care Administration and is HR certified as an SHRM-SCP and SPHR. She is health/life insurance licensed in Florida, a Dale Carnegie course graduate and an active council and board member of several non-profits and for-profits. Yes, she does sleep.</p>
                            <p>Currently, she lives in Central Florida and frequently travels encouraging business leaders to improve their bottom line. When she's not fixing people problems with clients, she volunteers at non-profits to help resolve their challenges. She also enjoys being active in nature, camping, paddle boarding, traveling to unique cities around the globe, and simply celebrating life with great wine.</p>
                            <br>
                            
                            
                            <h3 class="text-center"><strong>Suck It Up, Buttercup: Be a Leader People Will Follow</strong> </h3>
                            <p>Dominant, direct leaders who don't get emotional get the job done, right? Take charge and cut to the chase, right? Other people who allow their emotions to get in the way of business need to just "suck it up." Right? Wrong! Suck It Up, Buttercup. You might be part of the problem.</p>
                            <p>This book provides practical information for leaders to get employees more engaged in the company's mission by properly communicating, and not just with words. The lessons here are critical for anyone in a leadership role, as mistakes can tarnish a company's entire reputation, making it more difficult to attract and retain the right employees.</p>
                            <p>This short book covers topics ranging from personality styles (how some personality styles rub people the wrong way) to communication (which almost always goes wrong) and lack of common sense. Chapter 10 is an "Acting Lesson" which challenges you to change (but only for 15 minutes a day). This thought-provoking book emphasizes that you must shut up and listen to be a leader people will follow.</p>
                            
                            <div class="row">
                                <div class="col-md-8 center-block">
                                    <a href="https://www.amazon.com/dp/1543930832/" target="_blank" rel="nofollow">
                                        <img src="{{{ url('storage/featured-author/suck-it-up-buttercup.png') }}}" class="" style="width:100%" alt="Suck It Up, Buttercup: Be a Leader People Will Follow">
                                    </a>
                                </div>
                                
                            </div>
                            
                            <br>
                            
                            

                            <p class="text-center">You can get a copy of the book on <a class="link-white" href="https://www.amazon.com/dp/1543930832/" target="_blank" rel="nofollow">Amazon</a> and read more at <a class="link-white" href="https://thehrlady.com/" target="_blank" rel="nofollow">thehrlady.com</a></p>
                            
                            
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
