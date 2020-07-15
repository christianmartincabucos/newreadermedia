@extends('layouts.app')
@section('title')Media Spotlight: Les Klinefelter @endsection
@section('og-title')Media Spotlight: Les Klinefelter @endsection
@section('meta-description')Les Klinefelter’s writing and teaching background has helped many people in their efforts to understand human behavior.@endsection
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
                                <img src="{{{ url('storage/featured-author/les-klinefelter.jpg') }}}" class="img-thumbnail" style="width:100%" alt="Les Klinefelter">
                            </div>
                            <h3 class="text-center"><strong>Les Klinefelter</strong> </h3>
                            <p>Les Klinefelter’s writing and teaching background has helped many people in their efforts to understand human behavior.  After spending over 30 years as a federal employee in a number of senior management positions, Les retired to a cabin on a lake in Vermont.</p>
                            <p>The quiet, solitude of rural Vermont allowed Les to reflect on his many years of experience working and relating with people from various backgrounds and cultures. His extensive background in various government and private organizations helped him realize how greater self-awareness and the use of effective communication skills can positively impact the life of individuals.</p>
                            <p>Using his vast experience and basing his writings on graduate studies at the University of Vermont and McGill University in the area of counseling psychology, Les decided to write this book.  It describes how effective communication skills and self-understanding can enhance the effectiveness and personal well-being of all of us.</p>
                            <br>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“Listening involves picking up and understanding messages sent by other people and communicating involves sending messages to other people.”</em></p>
                            </blockquote>
                            
                            <h3 class="text-center"><strong>Why Me? Effective Communication and Self Awareness</strong> </h3>
                            <p>Many of the problems we face can be attributed to ineffective communication skills.  We do not respect each other and fail to listen to what people are saying.  This book helps you find out more about yourself, improve your communication skills and enhance your personal relationships.  The exercises after each chapter reinforce the material presented and “personalize” it so it is directly related to you.</p>
                            <p>This book improves your listening and communicating skills, helps you understand the difference between thinking, feeling and behaving and how to deal with difficult people.  It presents transactional analysis in a clear, understandable manner and uses a systemic approach to solving everyday problems.</p>
                            <p>People, who have read this book, indicate it has helped them better understand themselves and their interactions.  The more we learn about ourselves, the more able we become to assume control over what happens to us in our work as well as personal life.</p>
                            
                            <div class="row">
                                <div class="col-md-8 center-block">
                                    <a href="https://www.amazon.com/Why-Effective-Communication-Self-Awareness/dp/1478796065/" target="_blank" rel="nofollow">
                                        <img src="{{{ url('storage/featured-author/why-me.png') }}}" class="" style="width:100%" alt="Why Me? Effective Communication and Self Awareness">
                                    </a>
                                </div>
                                
                            </div>
                            
                            
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“Clarifying something someone has said enables the other person to get a new perspective on what they are attempting to communicate.”</em></p>
                            </blockquote>

                            <p class="text-center">You can get a copy of the book on <a class="link-white" href="https://www.amazon.com/Why-Effective-Communication-Self-Awareness/dp/1478796065/" target="_blank" rel="nofollow">Amazon</a>.</p>
                            
                            
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
