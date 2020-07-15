@extends('layouts.app')
@section('title')Media Spotlight: Bill Sanford @endsection
@section('og-title')Media Spotlight: Bill Sanford @endsection
@section('meta-description')Bill Sanford is a native-born Texan. In the early ’70s, he served two years as a teaching missionary in Mexico. When he returned to the US, he served in the air force in Louisiana and Utah and also began his college education.@endsection
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
                                <img src="{{{ url('storage/featured-author/bill-sanford.jpg') }}}" class="img-circle" style="width:100%" alt="Bill Sanford">
                            </div>
                            <h3 class="text-center"><strong>Bill Sanford</strong> </h3>
                            <p>Bill Sanford is a native-born Texan. In the early &rsquo;70s, he served two years as a teaching missionary in Mexico. When he returned to the US, he served in the air force in Louisiana and Utah and also began his college education. He graduated from the University of Texas at Austin in 1982 with a Bachelor of Arts degree in Psychology and Spanish. Currently, he lives in Grand Prairie, Texas, with his wife Debra, where he teaches Spanish at a local school district.</p>
                            <br>
                            
                            <div class="row">
                                <div class="col-md-5 center-block">
                                    <a href="https://booksofjasher.com/" target="_blank" rel="nofollow">
                                        <img src="{{{ url('storage/featured-author/bill-sanford-book.png') }}}" class="" style="width:100%" alt="The Scar of Cain: The Book of Jasher">
                                        
                                    </a>
                                    
                                </div>
                                <h3 class="text-center"><strong>The Scar of Cain<br><small>The Book of Jasher</small></strong> </h3>
                            </div>
                            <br>
                            
                            <p>Man's most ancient and feared enemy's goal is to establish a one-world order where he can control our destiny as he consolidates his power and marshals his dark forces. Benjamin Jasher is the only man who can expose this dark adversary.</p>
                            <p><em>The Scar of Cain: The Book of Jasher</em> tells the story of antiquities dealer Benjamin Jasher, who may be the only thing standing between this darkness and his goal of utter domination.</p>
                            
                            <br>
                            
                            

                            <h4 class="text-center"><small>You can visit his website and get a copy of the book at</small> <a href="https://booksofjasher.com/" target="_blank" rel="nofollow">booksofjasher.com</a></h4>
                            
                            
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
