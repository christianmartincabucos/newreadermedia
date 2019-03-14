@extends('layouts.app')
@section('title')New Reader Media | Blogs | Arts and Culture @endsection
@section('og-title')New Reader Media | Blogs | Arts and Culture @endsection
@section('meta-description')We find the coolest stuff and curate it for your delectation. We've got a bunch of great topics for the inquiring mind. From haunted houses to SEO techniques. See them here now.@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box" style="margin-bottom:0">
                <div class="box-body">
                    {{-- BIG IMAGE --}}
                    <div class="row">
                    <section class="box-section">
                        <div class="col-md-12"><h1 class="header-white">Arts and Culture</h1></div>
                        <div class="col-md-9 right-divider">
                            <div class="box-article">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <a href="{{ url('blogs/arts-and-culture/greatest-cons-in-history') }}">
                                            <div style="position:relative;width:100%;height:164px;background:url({{{ url('public/storage/blogs/arts-and-culture/victor-lustig.jpg') }}}) center center no-repeat;background-size: cover;overflow:hidden;margin-bottom:10px">
                                                <div class="layer" style="background-color: rgba(0, 0, 0, 0.0);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                                    
                                                    
                                                </div>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <h2 class="title"><a href="{{ url('blogs/arts-and-culture/greatest-cons-in-history') }}">Greatest Cons in History</a></h2>
                                        <p class="text-white lead" style="margin:0">People who do cons are called Confidence man or in short “con-man”. They prey on people who are naïve and irresponsible. Over the years, many cons have happened, here are the top 3 greatest cons in history.</p>
                                        <small class="text-muted">by S. Roberts</small>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="box-article">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <a href="{{ url('blogs/arts-and-culture/aphantasia') }}">
                                            <div style="position:relative;width:100%;height:164px;background:url({{{ url('public/storage/blogs/arts-and-culture/aphantasia.jpg') }}}) center center no-repeat;background-size: cover;overflow:hidden;margin-bottom:10px">
                                                <div class="layer" style="background-color: rgba(0, 0, 0, 0.0);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                                    
                                                    
                                                </div>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <h2 class="title"><a href="{{ url('blogs/arts-and-culture/aphantasia') }}">Aphantasia: Weak Imagination or No Imagination at All?</a></h2>
                                        <p class="text-white lead" style="margin:0">Did you know that some people can literally visualize images in their minds? If that isn’t surprising, you should know that some people can’t.</p>
                                        <small class="text-muted">by M. Turner</small>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="box-article">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <a href="{{ url('http://amazingcreationsofgod.com/2018/10/19/stories-about-the-beginning-of-everything/') }}" target="_blank" rel="nofollow">
                                            <div style="position:relative;width:100%;height:164px;background:url({{{ url('http://amazingcreationsofgod.com/wp-content/uploads/2018/10/moonmoon-e1539930473239.jpg') }}}) center center no-repeat;background-size: cover;overflow:hidden;margin-bottom:10px">
                                                <div class="layer" style="background-color: rgba(0, 0, 0, 0.0);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                                    
                                                    
                                                </div>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <h2 class="title"><a href="{{ url('http://amazingcreationsofgod.com/2018/10/19/stories-about-the-beginning-of-everything/') }}" target="_blank" rel="nofollow">Stories About The Beginning Of Everything</a></h2>
                                        <p class="text-white lead" style="margin:0">Imagine hearing stories about creation, different versions of how everything came to be. How would that have changed the way you saw the world?</p>
                                        <small><img class="article-thumbnail img-circle" src="{{{ url('public/storage/featured-author/lindy-kerr.jpg') }}}" style="width:20px;height:20px;margin-right:5px;margin-top:5px"> <a class="article-links" href="{{ url('http://amazingcreationsofgod.com/') }}" target="_blank" rel="nofollow">Lindy Kerr</a></small>
                                    </div>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="box-article">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <a href="{{ url('http://dburyshawbooks.com/2018/10/18/modern-day-poets-from-print-to-screen/') }}" target="_blank" rel="nofollow">
                                            <div style="position:relative;width:100%;height:164px;background:url({{{ url('http://dburyshawbooks.com/wp-content/uploads/2018/10/dfsvlk-e1539850745928.jpg') }}}) center center no-repeat;background-size: cover;overflow:hidden;margin-bottom:10px">
                                                <div class="layer" style="background-color: rgba(0, 0, 0, 0.0);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                                    
                                                    
                                                </div>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <h2 class="title"><a href="{{ url('http://dburyshawbooks.com/2018/10/18/modern-day-poets-from-print-to-screen/') }}" target="_blank" rel="nofollow">Modern-Day Poets: From Print To Screen</a></h2>
                                        <p class="text-white lead" style="margin:0">Different thoughts and different opinions in the form of verses and phrases—this is what makes an Instagram poet a modern-day Shakespeare.</p>
                                        <small><img class="article-thumbnail img-circle" src="{{{ url('public/storage/featured-author/dorothy-bury-shaw.jpg') }}}" style="width:20px;height:20px;margin-right:5px;margin-top:5px"> <a class="article-links" href="{{ url('http://dburyshawbooks.com/') }}" target="_blank" rel="nofollow">Dorothy Bury Shaw</a></small>
                                    </div>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="box-article">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <a href="{{ url('http://authorlesklinefelter.com/2018/10/18/top-charismatic-personalities-with-effective-communication-skills/') }}" target="_blank" rel="nofollow">
                                            <div style="position:relative;width:100%;height:164px;background:url({{{ url('http://authorlesklinefelter.com/wp-content/uploads/2018/10/1-e1539842946598.jpg') }}}) center center no-repeat;background-size: cover;overflow:hidden;margin-bottom:10px">
                                                <div class="layer" style="background-color: rgba(0, 0, 0, 0.0);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                                    
                                                    
                                                </div>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <h2 class="title"><a href="{{ url('http://authorlesklinefelter.com/2018/10/18/top-charismatic-personalities-with-effective-communication-skills/') }}" target="_blank" rel="nofollow">Top Charismatic Personalities with Effective Communication Skills</a></h2>
                                        <p class="text-white lead" style="margin:0">Having trouble with your communication skills? Let&#039;s take a look at today&#039;s top charismatic personalities and learn from their interactions.</p>
                                        <small><img class="article-thumbnail img-circle" src="{{{ url('public/storage/featured-author/lklinefelter.jpg') }}}" style="width:20px;height:20px;margin-right:5px;margin-top:5px"> <a class="article-links" href="{{ url('http://authorlesklinefelter.com/') }}" target="_blank" rel="nofollow">Les Klinefelter</a></small>
                                    </div>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="box-article">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <a href="{{ url('http://charlescampiseauthor.com/2018/10/17/inspiring-rideshare-tales-thatll-definitely-put-a-smile-on-your-face/') }}" target="_blank" rel="nofollow">
                                            <div style="position:relative;width:100%;height:164px;background:url({{{ url('http://charlescampiseauthor.com/wp-content/uploads/2018/10/g-e1539749035805.jpg') }}}) center center no-repeat;background-size: cover;overflow:hidden;margin-bottom:10px">
                                                <div class="layer" style="background-color: rgba(0, 0, 0, 0.0);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                                    
                                                    
                                                </div>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <h2 class="title"><a href="{{ url('http://charlescampiseauthor.com/2018/10/17/inspiring-rideshare-tales-thatll-definitely-put-a-smile-on-your-face/') }}" target="_blank" rel="nofollow">Inspiring Rideshare Tales That’ll Definitely Put a Smile On Your Face</a></h2>
                                        <p class="text-white lead" style="margin:0">Extraordinary Rideshare Driver Stories</p>
                                        <small><img class="article-thumbnail img-circle" src="{{{ url('public/storage/featured-author/charles-campise.jpg') }}}" style="width:20px;height:20px;margin-right:5px;margin-top:5px"> <a class="article-links" href="{{ url('http://charlescampiseauthor.com/') }}" target="_blank" rel="nofollow">Charles Campise</a></small>
                                    </div>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="box-article">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <a href="{{ url('http://skyelarnelson.com/2018/10/18/partying-as-a-parent-the-fine-line-between-parenting-and-partying/') }}" target="_blank" rel="nofollow">
                                            <div style="position:relative;width:100%;height:164px;background:url({{{ url('http://skyelarnelson.com/wp-content/uploads/2018/10/bb-e1539826915806.jpg') }}}) center center no-repeat;background-size: cover;overflow:hidden;margin-bottom:10px">
                                                <div class="layer" style="background-color: rgba(0, 0, 0, 0.0);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                                    
                                                    
                                                </div>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <h2 class="title"><a href="{{ url('http://skyelarnelson.com/2018/10/18/partying-as-a-parent-the-fine-line-between-parenting-and-partying/') }}" target="_blank" rel="nofollow">Partying As A Parent: The Fine Line Between Parenting and Partying</a></h2>
                                        <p class="text-white lead" style="margin:0">As a parent who loves partying like a teenager, how do you balance parenting and partying?</p>
                                        <small><img class="article-thumbnail img-circle" src="{{{ url('public/storage/featured-author/skyelar-nelson.jpg') }}}" style="width:20px;height:20px;margin-right:5px;margin-top:5px"> <a class="article-links" href="{{ url('http://skyelarnelson.com/') }}" target="_blank" rel="nofollow">Skyelar Nelson</a></small>
                                    </div>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="box-article">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <a href="{{ url('http://kristykkraft.com/2018/10/18/top-shipwreck-or-castaway-movies/') }}" target="_blank" rel="nofollow">
                                            <div style="position:relative;width:100%;height:164px;background:url({{{ url('public/storage/top-shipwreck-castaway.jpg') }}}) center center no-repeat;background-size: cover;overflow:hidden;margin-bottom:10px">
                                                <div class="layer" style="background-color: rgba(0, 0, 0, 0.0);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                                    
                                                    
                                                </div>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <h2 class="title"><a href="{{ url('http://kristykkraft.com/2018/10/18/top-shipwreck-or-castaway-movies/') }}" target="_blank" rel="nofollow">Top Shipwreck or Castaway Movies</a></h2>
                                        <p class="text-white lead" style="margin:0">Here’s a a round up of some of the best ten movies about people surviving on an island or at shipwreck. Did they find something more or even God?</p>
                                        <small><img class="article-thumbnail img-circle" src="{{{ url('http://kristykkraft.com/wp-content/uploads/2018/10/8.jpg') }}}" style="width:20px;height:20px;margin-right:5px;margin-top:5px"> <a class="article-links" href="{{ url('https://kristykkraft.com/') }}" target="_blank" rel="nofollow">Kristy Kraft</a></small>
                                    </div>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="box-article">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <a href="{{ url('https://mikemccluskey.net/2018/10/15/writing-as-a-form-of-therapy/') }}" target="_blank" rel="nofollow">
                                            <div style="position:relative;width:100%;height:164px;background:url({{{ url('https://mikemccluskey.net/wp-content/uploads/2018/10/MMcCluskey-Therapy-e1539333549203.jpg') }}}) center center no-repeat;background-size: cover;overflow:hidden;margin-bottom:10px">
                                                <div class="layer" style="background-color: rgba(0, 0, 0, 0.0);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                                    
                                                    
                                                </div>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <h2 class="title"><a href="{{ url('https://mikemccluskey.net/2018/10/15/writing-as-a-form-of-therapy/') }}" target="_blank" rel="nofollow">Writing as a Form of Therapy</a></h2>
                                        <p class="text-white lead" style="margin:0">People with psychological problems no longer have to worry going to clinics for therapy when they can perform their treatment anywhere at any given time.</p>
                                        <small><img class="article-thumbnail img-circle" src="{{{ url('public/storage/featured-author/mmccluskey.jpg') }}}" style="width:20px;height:20px;margin-right:5px;margin-top:5px"> <a class="article-links" href="{{ url('https://mikemccluskey.net/') }}" target="_blank" rel="nofollow">Mike McCluskey</a></small>
                                    </div>
                                </div>
                            </div>
                            <div class="divider hidden"></div>
                            <div class="box-article hidden">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <a href="{{ url('http://weightlossbible.net/2018/10/12/the-top-weight-loss-scams-in-the-world/') }}" target="_blank" rel="nofollow">
                                            <div style="position:relative;width:100%;height:164px;background:url({{{ url('http://weightlossbible.net/wp-content/uploads/2018/10/ZZeigler-Weight-loss-e1539334648126.jpg') }}}) center center no-repeat;background-size: cover;overflow:hidden;margin-bottom:10px">
                                                <div class="layer" style="background-color: rgba(0, 0, 0, 0.0);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                                    
                                                    
                                                </div>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <h2 class="title"><a href="{{ url('http://weightlossbible.net/2018/10/12/the-top-weight-loss-scams-in-the-world/') }}" target="_blank" rel="nofollow">The Top Weight Loss Scams in the World</a></h2>
                                        <p class="text-white lead" style="margin:0">The world of fitness can get shady and you could lose more than just pounds if you’re not careful.</p>
                                        <small><img class="article-thumbnail img-circle" src="{{{ url('public/storage/featured-author/zzeigler.jpg') }}}" style="width:20px;height:20px;margin-right:5px;margin-top:5px"> <a class="article-links" href="{{ url('http://weightlossbible.net/') }}" target="_blank" rel="nofollow">Zachary Zeigler Ph.D</a></small>
                                    </div>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="box-article">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <a href="{{ url('https://stevenbentleybooks.com/2018/09/03/top-5-most-accurate-medical-dramas/') }}" target="_blank" rel="nofollow">
                                            <div style="position:relative;width:100%;height:164px;background:url({{{ url('https://stevenbentleybooks.com/wp-content/uploads/2018/09/scrubs.jpg') }}}) center center no-repeat;background-size: cover;overflow:hidden;margin-bottom:10px">
                                                <div class="layer" style="background-color: rgba(0, 0, 0, 0.0);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                                    
                                                    
                                                </div>
                                            </div>
                                        </a>
                                        {{-- <a href="{{ url('/spotlight') }}"><img class="article-thumbnail" src="{{{ url('public/storage/scrub.jpg') }}}" style="width:100%"></a> --}}
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <h2 class="title"><a href="{{ url('https://stevenbentleybooks.com/2018/09/03/top-5-most-accurate-medical-dramas/') }}" target="_blank" rel="nofollow">Top 5 Most Accurate Medical Dramas</a></h2>
                                        <p class="text-white lead" style="margin:0">Here are the Top 5 most accurate medical dramas that are doctor approved.</p>
                                        <small><img class="article-thumbnail img-circle" src="{{{ url('public/storage/featured-author/steven-bentley.jpeg') }}}" style="width:20px;height:20px;margin-right:5px;margin-top:5px"> <a class="article-links" href="{{ url('https://stevenbentleybooks.com/') }}" target="_blank" rel="nofollow">Steven Bentley</a></small>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        @include('blogs.arts-and-culture.sidebar')
                    </section>
                    </div>                    
                </div>
                
                @include('layouts.footer')
            </div>
        </div>
        
    </div>
</div>
@endsection
