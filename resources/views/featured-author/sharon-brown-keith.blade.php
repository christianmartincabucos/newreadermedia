@extends('layouts.app')
@section('title')Media Spotlight: Sharon Brown Keith @endsection
@section('og-title')Media Spotlight: Sharon Brown Keith @endsection
@section('meta-description')Sharon decided to put her time to better use and began writing her memoir, Mockingbird Moments. This is her first book.@endsection
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
                            <div class="col-md-4 center-block text-center">
                                <img src="{{{ url('public/storage/featured-author/sharon-keith-brown.jpg') }}}" class="img-thumbnail" style="width:200px">
                            </div>
                            <h3 class="text-center"><strong>Sharon Brown Keith</strong> </h3>
                            <p>Sharon Brown Keith lives outside of Tyler, Texas, in the charming community of Arp. She and her husband, Brian, have two grown sons, Chris and Charles. Sharon is retired but works part-time as a junior high counselor. After a couple of days of enjoying her part-time work status by lounging on the couch, eating bonbons, and painting her nails, Sharon decided to put her time to better use and began writing her memoir, Mockingbird Moments. This is her first book.</p>
                            <p>Sharon grew up in the historic East Texas town of Nacogdoches and graduated from Nacogdoches High School in 1981. She received a degree in Education, Curriculum, and Instruction from Texas A&M University in 1985. After teaching English, history, and speech at the high school level for sixteen years and sponsoring every extracurricular activity known to man, Sharon completed her master’s of school counseling degree from the University of Texas–Tyler and has worked as a counselor since 2002.</p>
                                    
                            <p>Sharon enjoys spending time with her family, attending Texas A&M and Stephen F. Austin sporting events, reading, and hanging out with friends. She hopes to continue writing, and has recently completed a novel that she hopes to release in 2019.</p>
                            <br>
                            
                            
                            <h3 class="text-center"><strong>Mockingbird Moments: A Memoir</strong> </h3>
                            <p>On October 20, 1992, life for one East Texas family changed forever. Following the devastating sudden death of her father, Sharon Brown Keith embarked on a journey of grief and healing, of acceptance and personal growth and transformation.</p>
                            <p>In this moving memoir about love, loss, and letting go, Keith shares her recollections about growing up and coming of age under the tender and steadfast guidance of her father and hero. Weaving humor and popular culture throughout her heartfelt story, she reminds us that our pasts make us who we are in the present and that we can indeed encourage something truly positive to emerge from our darkest moments.</p>
                            
                            <div class="row">
                                <div class="col-md-8 center-block">
                                    <a href="https://www.amazon.com/Mockingbird-Moments-Sharon-Brown-Keith-ebook/dp/B071Z2ZTV2/ref=sr_1_3?ie=UTF8&qid=1540269921&sr=8-3&keywords=sharon+brown+keith" target="_blank" rel="nofollow">
                                        <img src="{{{ url('public/storage/featured-author/mockingbird-moments.png') }}}" class="" style="width:100%">
                                    </a>
                                </div>
                                
                            </div>
                            
                            
                            

                            <p class="text-center">You can get a copy of the book on <a class="link-white" href="https://www.amazon.com/Mockingbird-Moments-Sharon-Brown-Keith-ebook/dp/B071Z2ZTV2/ref=sr_1_3?ie=UTF8&qid=1540269921&sr=8-3&keywords=sharon+brown+keith" target="_blank" rel="nofollow">Amazon</a>.</p>
                            
                            
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
