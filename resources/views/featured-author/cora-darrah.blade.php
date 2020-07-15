@extends('layouts.app')
@section('title')Media Spotlight: Cora Darrah @endsection
@section('og-title')Media Spotlight: Cora Darrah @endsection
@section('meta-description')Cora Darrah has been an educator for over thirty-five years in the public school system. When she retired from the classroom, she decided to write what she was passionate about.@endsection
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
                                <img src="{{{ url('storage/featured-author/cora-darrah.jpg') }}}" class="img-circle" style="width:100%" alt="Cora Darrah">
                            </div>
                            <h3 class="text-center"><strong>Cora Darrah</strong> </h3>
                            <p>Cora Darrah has been an educator for over thirty-five years in the public school system. She has taught all grade levels but found the most joy while working with elementary school children. When she retired from the classroom, she decided to write what she was passionate about.</p>
                            <p>Her first book, <em>Here We Go Joe</em>, was an Amazon Best Seller in its first week and dared to explore how Alzheimer's impacted her own family.  She was able to use researched based interventions effective for students with autism to help her father in law make the hardest decision of his life.</p>
                            <p>Since Joe’s passing, she has refocused on the young child she has spent a lifetime serving.Her next book, <em>Seasons at the Bus Stop</em>, focused on the importance of developing friendships, particularly with children that may struggle socially.</p>
                            <p>For the last five years, Cora has been collaborating with her daughter, Hannah on a new project that is very close to her heart. <em>Jerry Barry, Living Healthy</em>, highlights the importance of a healthy diet and active lifestyle for all children. Hannah’s expert use of clay animation coupled with Cora’s ability to create a story that is pertinent to young children will definitely send a positive message regarding the importance of making healthy choices.</p>
                            <p>Cora is a native of Durham, North Carolina and has called this her home for the majority of her life. She lives with her husband and two French bulldogs. She is a mother of two girls and a grandmother of four. When Cora isn’t blogging or writing new children’s books, she spends time outside in her vegetable garden or walking her dogs.</p>
                            <br>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>Then one night after the Barrys sat down to eat, each of them thought, “could the problem be me?”</em></p>
                            </blockquote>
                            
                            <h3 class="text-center"><strong>Jerry Barry: Living Healthy</strong> </h3>
                            <p>Does your child struggle with choosing foods that are good for them to eat?  Or does your child sit in front of a video game or TV screen instead of being physically active?  If so, Jerry Barry, Living Healthy is the book for you!  This fun to read book is a great tool to motivate all children to make the healthy choices needed to reach their potential.</p>
                            
                            <div class="row">
                                <div class="col-md-8 center-block">
                                    <a href="https://www.amazon.com/Jerry-Barry-Healthy-Cora-Darrah/dp/0998651427/" target="_blank" rel="nofollow">
                                        <img src="{{{ url('storage/featured-author/jerry-barry-living-healthy.png') }}}" class="" style="width:100%" alt="Jerry Barry: Living Healthy">
                                    </a>
                                </div>
                                
                            </div>
                            
                            
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“In school, remember some simple rules: be sure to drink lots of water, give yourself time to play.”</em></p>
                            </blockquote>

                            <p class="text-center">You can get a copy of the book on <a class="link-white" href="https://www.amazon.com/Jerry-Barry-Healthy-Cora-Darrah/dp/0998651427/" target="_blank" rel="nofollow">Amazon</a> and read more at <a class="link-white" href="http://coradarrahbooks.com/" target="_blank" rel="nofollow">coradarrahbooks.com</a></p>
                            
                            
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
