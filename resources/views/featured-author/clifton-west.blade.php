@extends('layouts.app')
@section('title')Media Spotlight: Clifton L. West III @endsection
@section('og-title')Media Spotlight: Clifton L. West III @endsection
@section('meta-description')Clifton L. West III worked as a software developer at IBM. He also served as a coach and assistant professor at Massachusetts Institute of Technology.@endsection
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
                                <img src="{{{ url('storage/featured-author/clifton-west.jpg') }}}" class="img-circle" style="width:100%" alt="Clifton L. West III">
                            </div>
                            <h3 class="text-center"><strong>Clifton L. West III</strong> </h3>
                            <p>Clifton L. West III worked as a software developer at IBM. He also served as a coach and assistant professor at Massachusetts Institute of Technology. He is a father of two and now is stepfather to one, has four grandchildren and two great grandchildren. Now he’s a deacon at Shiloh Baptist Church in Sacramento, California.</p>
                            <br>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>"Each and every one of us have been placed here on this earth in our own time to do something that no one who has ever lived before has done or that anyone who will ever live after us will do"</em></p>
                            </blockquote>
                            <div class="row">
                                <div class="col-md-4 center-block">
                                    <a href="https://www.amazon.com/Life-Time-Clifton-West-III/dp/1457553341/" target="_blank" rel="nofollow">
                                        <img src="{{{ url('storage/featured-author/clifton-west-book.png') }}}" class="" style="width:100%" alt="Of Life and Time">
                                        
                                    </a>
                                    
                                </div>
                                <h3 class="text-center"><strong>Of Life and Time</strong> </h3>
                            </div>
                            <br>
                            
                            <p>Clifton West shares his insights on love, inspiration, and knowing, understanding, and living by The Good News. <em>Of Life and Time</em> articulates God&rsquo;s purpose in West&rsquo;s life, and the stories in it tell of how the Holy Spirit guides our lives. This book will inspire readers to love one another and to trust in the Lord.</p>
                            
                            <blockquote class="blockquote">
                                <p class="text-red"><em>"Time exacts a price.  It's called Life!"</em></p>
                            </blockquote>
                            
                            <br>
                            
                            

                            <h4 class="text-center"><small>Get a copy of the book on</small> <a href="https://www.amazon.com/Life-Time-Clifton-West-III/dp/1457553341/" target="_blank" rel="nofollow">amazon</a></h4>
                            
                            
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
