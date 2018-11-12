@extends('layouts.app')
@section('title')Media Spotlight: Kristy K. Kraft @endsection
@section('og-title')Media Spotlight: Kristy K. Kraft @endsection
@section('meta-description')Kristy K. Kraft grew up in Iowa, earning degrees in journalism and German at the University of Iowa, but has lived for many years in Kernersville, NC. She enjoys setting up at festivals and events to promote her book, True Treasure.@endsection
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
                                <img src="{{{ url('public/storage/featured-author/kkraft.jpg') }}}" class="img-circle" style="width:100%">
                            </div>
                            <h3 class="text-center"><strong>Kristy K. Kraft</strong> </h3>
                            <p>Author Kristy K. Kraft grew up in Iowa, earning degrees in journalism and German at the University of Iowa, but has lived for many years in Kernersville, NC.  She and her family and friends enjoy spending time at beautiful Smith Mountain Lake, VA, where she loves boating, waterskiing, and time on the dock.</p>
                            <p>Illustrator Adam D. Augustine grew up in Kernersville, NC, where he developed artistic talents at East Forsyth High School.  He also enjoys Smith Mountain Lake, where he excels at knee boarding.  He is pursuing a degree in Engineering at NC State University, where he is also a member of the Sailing Club.</p>
                            <p>Kristy K. Kraft enjoys setting up at festivals and events to promote True Treasure.  Here, at a Vacation Bible School picnic at Fountain of Life Lutheran Church in Kernersville, NC, she shares details and illustrations of the story with a young customer.  Along with the purchase of a book, the children are allowed to pick out a treasure coin from the treasure chest on display.</p>
                            <br>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“There’s still enough for everyone on the ship to have something! said Eric.”</em></p>
                            </blockquote>
                            
                            <div class="row">
                                <div class="col-md-8 center-block">
                                    <a href="https://www.amazon.com/True-Treasure-Kristy-K-Kraft-ebook/dp/B01B8F5GSG/" target="_blank" rel="nofollow">
                                        <img src="{{{ url('public/storage/featured-author/true-treasure.png') }}}" class="" style="width:100%">
                                    </a>
                                </div>
                                
                            </div>
                            <h3 class="text-center"><strong>True Treasure</strong> </h3>
                            <p>A young boy sets out to find adventure, not realizing what else he will find!  Even at his young age, he serves as a good influence on others with his generous heart.  He recognizes and appreciates God’s presence in his life, on the seas and upon returning home.  Come set sail with Eric to learn about True Treasure…</p>
                            <p>Originally told as a bedtime story to her young boys while at Smith Mountain Lake, VA, True Treasure has a Christian theme tucked into this adventure at sea.  (After the boys were asleep, Kraft ran to the table to write it all down and has kept it much as it was told.)</p>
                            <p>Adam, Kristy’s middle son, heard the story at age 4 1/2 while camping out in the living room with his older brother on a new inflatable raft island, complete with a palm tree and treasure chest!  He grew up to be a fine artist, and so was asked to illustrate his mother’s story.  He completed his detailed drawings just before heading off to college.</p>
                            <br>
                            
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“Eric thought about the captain, and was so glad he had allowed Eric to join the crew, even at his young age. He had been on an incredible adventure!”</em></p>
                            </blockquote>

                            <p>You can get a copy of her book on <a class="link-white" href="https://www.amazon.com/True-Treasure-Kristy-K-Kraft-ebook/dp/B01B8F5GSG/" target="_blank" rel="nofollow">Amazon</a> and read more of her work at <a class="link-white" href="http://kristykkraft.com" target="_blank" rel="nofollow">kristykkraft.com</a></p>
                            
                            
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
