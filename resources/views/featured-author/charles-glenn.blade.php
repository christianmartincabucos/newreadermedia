@extends('layouts.app')
@section('title')Media Spotlight: Dr. Charles G. Glenn @endsection
@section('og-title')Media Spotlight: Dr. Charles G. Glenn @endsection
@section('meta-description')Dr. Charles G. Glenn. was called into the ministry at the age of twenty. A proud Pastor of King of Kings Temple C.O.G.I.C., San Diego, California.@endsection
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
                                <img src="{{{ url('public/storage/featured-author/charles-glenn.jpg') }}}" class="img-circle" style="width:100%" alt="Dr. Charles G. Glenn">
                            </div>
                            <h3 class="text-center"><strong>Dr. Charles G. Glenn</strong> </h3>
                            <p>My name is Dr. Charles G. Glenn.  I was married to my lovely wife the late Janet L. Glenn for 45 wonderful years. We have three sons, one daughter, and six grandchildren.  I was born in Shreveport, Louisiana but now reside in San Diego, California.  I received the Lord at the age of twenty, and God also called me into ministry at the age of twenty.  I am the proud Pastor of King of Kings Temple C.O.G.I.C., San Diego, California.</p>
                            <p></p>
                            <br>
                           
                            <div class="row">
                                <div class="col-md-4 center-block">
                                    <a href="https://www.amazon.com/Holy-Spirit-Welcome-This-Place/dp/1478799099/" target="_blank" rel="nofollow">
                                        <img src="{{{ url('public/storage/featured-author/charles-glenn-book.png') }}}" class="" style="width:100%" alt="Holy Spirit You Are Welcome in This Place">
                                        
                                    </a>
                                    
                                </div>
                                <h3 class="text-center"><strong>Holy Spirit You Are Welcome in This Place</strong> </h3>
                            </div>
                            <br>
                            
                            <p>This book is referred to as the Book of Life, because it openly defines the duties and responsibilities of the Holy Spirit toward humanity and the universe. It also displays His submissiveness toward the will of God and His dear Son, Jesus Christ. It has been said that little is known about the Holy Spirit, but this book, "Holy Spirit You Are Welcome In This Place," places a wealth of knowledge at your fingertips. - The Names of the Holy Spirit - Proof of His Divinity - Divine Works Subscribed to Him - He Empowered the Church - He Has No Respect of Persons - Personal Life Changing Experiences Through the Holy Spirit - And much, much more.</p>
                            <p>As a person seeking a more in-depth understanding of the Holy Spirit, this book is just for you. Pastors, ministers and laymen, by having this book in your library it will free up hours of your research time.</p>
                            <br>
                            

                            <h4 class="text-center"><small>Get a copy of the book on</small> <a href="https://www.amazon.com/Holy-Spirit-Welcome-This-Place/dp/1478799099/" target="_blank" rel="nofollow">amazon</a></h4>
                            
                            
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
