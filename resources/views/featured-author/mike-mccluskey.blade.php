@extends('layouts.app')
@section('title')Media Spotlight: Mike McCluskey @endsection
@section('og-title')Media Spotlight: Mike McCluskey @endsection
@section('meta-description')The author of 42 self-published books including: 14 full-length poem books, 16 poetry chapbooks and 12 short story books, @endsection
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
                                <img src="{{{ url('public/storage/featured-author/mmccluskey.png') }}}" class="img-thumbnail" style="width:100%">
                            </div>
                            <h3 class="text-center"><strong>Mike McCluskey</strong> </h3>
                            <p>The author of 42 self-published books including: 14 full-length poem books, 16 poetry chapbooks and 12 short story books, Mike McCluskey has been a resident of Holly, Michigan for the past 26 years. Mike began writing as a young child in the 1980’s. He had a notebook with various monsters on the cover and he would fill the pages with short stories of horror and monsters. He would then share these stories with family and neighbors. After they were read, Mike would erase all the stories and write the pages once again with new stories. Mike wrote his first poem in 1991 to his mother as a mother’s day gift. He ultimately began a lifelong dedication to poetry in 1997, while occasionally writing short stories. After many failed attempts at getting his work published, Mike started self-publishing his own books to share his art and inner turmoil. So DARK MAN INC. began in 2002.</p>
                            <br>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>He has a severely disturbed mind,<br>
                                        Brought about by time.
                                        </em></p>
                            </blockquote>
                            
                            
                            <div class="row">
                                <div class="col-md-8 center-block">
                                    <a href="https://www.amazon.com/THERAPY-Mike-McCluskey/dp/1984513532/" target="_blank" rel="nofollow">
                                        <img src="{{{ url('public/storage/featured-author/therapy.png') }}}" class="" style="width:100%">
                                    </a>
                                </div>
                                
                            </div>
                            
                            <h3 class="text-center"><strong>THERAPY</strong> </h3>
                            <p>Does your child struggle with choosing foods that are good for them to eat?  Or does your child sit in front of a video game or TV screen instead of being physically active?  If so, Jerry Barry, Living Healthy is the book for you!  This fun to read book is a great tool to motivate all children to make the healthy choices needed to reach their potential.</p>
                            <br>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>He lives within his head. <br>
                                        Far beyond driven in your dread
                                        </em></p>
                            </blockquote>

                            <p class="text-center">You can get a copy of the book on <a class="link-white" href="https://www.amazon.com/THERAPY-Mike-McCluskey/dp/1984513532/" target="_blank" rel="nofollow">Amazon</a> and read more at <a class="link-white" href="https://mikemccluskey.net/" target="_blank" rel="nofollow">mikemccluskey.net</a></p>
                            
                            
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
