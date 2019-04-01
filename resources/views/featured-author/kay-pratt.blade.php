@extends('layouts.app')
@section('title')Media Spotlight: Kay Pratt @endsection
@section('og-title')Media Spotlight: Kay Pratt @endsection
@section('meta-description')Kay Pratt is a Certified Expressive Art’s Practitioner and a Spiritual Life Coach residing in Ridgefield, Washington. She is an Artist and an Author with a focus on helping others move forward with their lives through creativity following treatment for serious injury, illness and trauma.@endsection
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
                                <img src="{{{ url('public/storage/featured-author/kay-pratt.jpg') }}}" class="img-circle" style="width:100%" alt="Kay Pratt">
                            </div>
                            <h3 class="text-center"><strong>Kay Pratt</strong> </h3>
                            <p>Kay Pratt is a Certified Expressive Art’s Practitioner and a Spiritual Life Coach residing in Ridgefield, Washington. She is an Artist and an Author with a focus on helping others move forward with their lives through creativity following treatment for serious injury, illness and trauma. Her practice includes helping men, women and families overcome the many challenges associated with long term rehabilitation and recovery.</p>
                            <p>“I was involved in a catastrophic accident at the height of my career as an Environmental Project Manager for an international consulting firm; my injuries, coupled with long term rehabilitation ended my career - blew me out of the water! I’d sustained multiple serious blunt head injuries including a Traumatic Brain Injury (TBI) and over seven years of cognitive rehabilitation and eventual recovery.</p>
                            <p>In my efforts to redefine myself, I turned to my art and writing; both, gifts I carried with me from my past experiences, now, gifts used to help others on their own journeys of healing and recovery.” Kay has written a series of HELP Books to help others navigate their way from trauma to recovery.</p>
                            <br>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“Their story, yours and mine – it’s what we all carry with us on this trip we take, and
                                    we owe it to each other to respect our stories and learn from them.” ~ William Carlos Williams ~
                                    </em></p>
                            </blockquote>
                            <div class="row">
                                <div class="col-md-4 center-block">
                                    <a href="https://www.amazon.com/Help-Brain-Injury-Feels-Dropped/dp/1478718072" target="_blank" rel="nofollow">
                                        <img src="{{{ url('public/storage/featured-author/kay-pratt-book.png') }}}" class="" style="width:100%" alt="Help! I Have a Brain Injury and It Feels Like I've Dropped Out of the Sky">
                                        
                                    </a>
                                    
                                </div>
                                <h3 class="text-center"><strong>Help! I Have a Brain Injury and It Feels Like I've Dropped Out of the Sky<br><small>A Survivor's Guide to Understanding and Managing Traumatic Brain Injury</small></strong> </h3>
                            </div>
                            <br>
                            
                            <p>WHAT do you know about brain injury? How does it happen? How does it affect one's life? What does it feel like? How long does it take to recover from a Traumatic Brain Injury? Will a survivor ever be the same again?</p>
                            <p>WHAT are your beliefs about the future of someone who's sustained a Traumatic Brain Injury? The answers to these questions are as broad and unique as the individuals who have sustained brain injuries. "In my own experience as a TBI survivor, I have come to understand that the degree to which we recover can be measured not only by our physical reality, but, by our personal and caregiver's belief systems; after all, if, we are cognitively and physically able, what we believe, shapes our every outcome!" Kay Pratt.</p>
                            <p>In this Book, TBI survivors share the answers to these questions and more through the voice of their experience. It is with sincere hope that by doing so, your understanding and beliefs about brain-injured individuals will be broadened and your perspectives enlightened.</p>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“Promise me you’ll always remember: You’re braver than you believe, and stronger than you seem, and smarter than you think.” ~ A.A. Milne’s, Winnie the Pooh ~</em></p>
                            </blockquote>
                            <br>
                            
                            

                            <h4 class="text-center"><small>Get a copy of the book on</small> <a href="https://www.amazon.com/Help-Brain-Injury-Feels-Dropped/dp/1478718072" target="_blank" rel="nofollow">amazon</a></h4>
                            
                            
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
