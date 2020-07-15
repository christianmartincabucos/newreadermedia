@extends('layouts.app')
@section('title')Media Spotlight: Richard A. Jurgensen @endsection
@section('og-title')Media Spotlight: Richard A. Jurgensen @endsection
@section('meta-description')Richard A. Jurgensen earned a Bachelor of Science in Chemistry from Colorado State University and a M.D. degree from the University of Colorado before heading to Hawaii for residency training where he established a private practice in psychiatry.@endsection
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
                                <img src="{{{ url('storage/featured-author/richard-jurgensen.jpg') }}}" class="img-circle" style="width:100%" alt="Richard A. Jurgensen">
                            </div>
                            <h3 class="text-center"><strong>Richard A. Jurgensen</strong> </h3>
                            <p>Richard A. Jurgensen earned a Bachelor of Science in Chemistry from Colorado State University and a M.D. degree from the University of Colorado before heading to Hawaii for residency training where he established a private practice in psychiatry. He specializes in dream interpretation and medication techniques as a consultant to individuals interested in personal growth.</p>
                            <p>In his book, he conveys that if you chose the path of awareness and Truth, you will begin to see a rapidly increasing number of defects and tears in the synthetic fabric that society calls &lsquo;reality&rsquo;.</p>
                            <p>His writing is inspired by classical authors such as Dickens, Dostoyevsky, Carroll, Nietzsche etc.</p>
                            <br>
                            
                            <div class="row">
                                <div class="col-md-5 center-block">
                                    <a href="https://landofpo.net/" target="_blank" rel="nofollow">
                                        <img src="{{{ url('storage/featured-author/richard-jurgensen-book.png') }}}" class="" style="width:100%" alt="Land of Po">
                                        
                                    </a>
                                    
                                </div>
                                <h3 class="text-center"><strong>Land of Pō</strong> </h3>
                            </div>
                            <br>
                            
                            <p><em>Land of Pō </em>is a fast-paced autobiographical novel that follows a young medical doctor through an emergency room and hospital psychiatric wards during the first years of his residency training. A tropical paradise provides the setting and a stark contrast to the challenging struggles for sanity and survival that he and his patients face within the institutions of society.</p>
                            <p>&ldquo;Land of Pō is a book for the curious and courageous as hinted by a quote from the author: &lsquo;<em>The Truth is never hidden; it&rsquo;s what you&rsquo;re hiding from</em>.&rsquo;&rdquo;</p>
                            <p>Richard Jurgensen&rsquo;s book provides an interesting take on his critique with society and its people. It's a perfect mix of humor, charm, and drama.</p>
                            
                            
                            
                            <br>
                            
                            

                            <h4 class="text-center"><small>You can visit his website and get a copy of the book at</small> <a href="https://landofpo.net/" target="_blank" rel="nofollow">landofpo.net</a></h4>
                            
                            
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
