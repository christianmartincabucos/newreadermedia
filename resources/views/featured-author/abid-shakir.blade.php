@extends('layouts.app')
@section('title')Media Spotlight: Abid Shakir @endsection
@section('og-title')Media Spotlight: Abid Shakir @endsection
@section('meta-description')As a teenager, I always wanted my own business, but I had no idea as to how to get started. After finishing high school in 1966 I worked as a merchant seaman for two and a half years.@endsection
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
                                <img src="{{{ url('storage/featured-author/abid-shakir.jpg') }}}" class="img-circle" style="width:100%" alt="Abid Shakir">
                            </div>
                            <h3 class="text-center"><strong>Abid Shakir</strong> </h3>
                            <p>As a teenager, I always wanted my own business, but I had no idea as to how to get started. After finishing high school in 1966 I worked as a merchant seaman for two and a half years. In 1969 I was drafted into the United States Army, where I served for two years; one year was spent in Vietnam as an Infantry Soldier. After serving in the military, I got a job driving tractor trailer trucks long distances. During that time, I had a continuing desire to own my own business. I thought I needed a large amount of money to get started; but realized later that was not the case.</p>
                            <br>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“Millions of people practice this ritual without understanding; understanding is very important.”</em></p>
                            </blockquote>
                            
                            <h3 class="text-center"><strong>Understanding the Ark</strong> </h3>
                            <p>This publication is an attempt to make CLEAR the REAL meaning of the glorious ARC and rid acceptance of unrealistic concepts that serve to deprive growth of insight and understanding that support human development. But what we must remember is that satin STILL exist, his plan to undermine human dignity has not slowed at all. One of satin methods is to use blind passion (red and black) over time to weaken humanity morally, from the beginning he said that he would approach man from all sides; to make WRONG seam RIGHT and make RIGHT seam WRONG. Satin is ANTI-ARC he is the ARCH enemy, satin is the master of AN-ARCY so WAKE UP, UNDERSTAND and SEE; the time is NOW.</p>
                            
                            <div class="row">
                                <div class="col-md-8 center-block">
                                    <a href="https://www.amazon.com/Understanding-Ark-Abid-Shakir/dp/1479765465/" target="_blank" rel="nofollow">
                                        <img src="{{{ url('storage/featured-author/understanding-the-ark.png') }}}" class="" style="width:100%" alt="Understanding the Ark">
                                    </a>
                                </div>
                                
                            </div>
                            
                            <br>
                            
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“Revelation started with Adam and ended with the PROPHET MUHAMMAD.”</em></p>
                            </blockquote>

                            <p class="text-center">You can get a copy of the book on <a class="link-white" href="https://www.amazon.com/Understanding-Ark-Abid-Shakir/dp/1479765465/" target="_blank" rel="nofollow">Amazon</a> and read more at <a class="link-white" href="http://abidshakir.com/" target="_blank" rel="nofollow">abidshakir.com</a></p>
                            
                            
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
