@extends('layouts.app')
@section('title')Check out the latest book trailers made by New Reader Media.@endsection
@section('og-title')Check out the latest book trailers made by New Reader Media.@endsection
@section('meta-description')Book trailers have been proven to be an effective marketing tool. Where everything is shareable, we showcase not only the works but offer readers a chance to experience the authors on a personal level.@endsection
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
                            <h1 class="header-white">Sneak Peeks</h1>
                        </div>
                        <div class="col-md-8 right-divider">
                            <div class="box-article">
                                <div class="embed-container" style="margin-bottom:10px">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/_aA-W-tvz6k" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                                
                                <h4 class="title"><a href="https://www.youtube.com/watch?v=_aA-W-tvz6k" target="_blank" rel="nofollow"><strong>Battle with Chronic Fatigue Syndrome - Sneak Peek</strong></a></h4>
                                <p>As a former CFS sufferer and current healthcare practitioner, I feel Ms. Butcher provides an informative and interesting perspective on this disease and her road to recovery". Kyrie Kleinfelter, D.C, Upper Cervical Chiropractor. "As a fellow sufferer of CFS, I was truly able to relate to Ms. Butchers' experiences, thoughts and feelings. Her reference to the Word of God comforted my heart. Truly inspiring and honest". Darla Canney, CFS Patient. Ms. Butcher shares her intense and emotional journey of how the autoimmune disease chronic fatigue syndrome impacted her life from her first symptoms to the progress of her treatment and physical, spiritual and emotional recovery. By sharing with others, she hopes to inspire others to seek help so they may lead better lives as well. She wants them to know there is hope.</p>
                                
                                    
                            </div>
                            <div class="divider"></div>
                            <div class="box-article">
                                <div class="embed-container" style="margin-bottom:10px">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/O0qePkOcf1o" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                                
                                <h4 class="title"><a href="https://www.youtube.com/watch?v=O0qePkOcf1o" target="_blank" rel="nofollow"><strong>Lies Deceit and an Innocent Man - Sneak Peek</strong></a></h4>
                                <p>Todd Bainbridge had his life planned. His future was secured. And in five years he would be a doctor. Bradfords local doctor; Doctor Chandler promised him a partnership in his practice. When Katies body was found on the York moor a week after her disappearance his life fell apart.</p>
                                
                                    
                            </div>
                            <div class="divider"></div>
                            <div class="box-article">
                                <div class="embed-container" style="margin-bottom:10px">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/aqzxUMJiU8A" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                                
                                <h4 class="title"><a href="https://www.youtube.com/watch?v=aqzxUMJiU8A" target="_blank" rel="nofollow"><strong>Aftermath: Nomads, Pirates and Frogfaces - Sneak Peek</strong></a></h4>
                                <p>A nomad headquarters gets attacked by pirates and later on, saved by a female leader of another nomad group only to reveal they are up against a bigger enemy than the pirates.</p>
                                
                                    
                            </div>
                        </div>
                        <div class="col-md-4">
                            <p><strong>RECENT VIDEOS</strong></p>
                            
                            <ul class="" style="padding-left:20px">
                                <li><a href="{{ url('https://www.youtube.com/watch?v=_aA-W-tvz6k') }}" class="article-link" target="_blank" rel="nofollow">Battle with Chronic Fatigue Syndrome</a></li>
                                <li><a href="{{ url('https://www.youtube.com/watch?v=O0qePkOcf1o') }}" class="article-link" target="_blank" rel="nofollow">Lies Deceit and an Innocent Man</a></li>
                                <li><a href="{{ url('https://www.youtube.com/watch?v=aqzxUMJiU8A') }}" class="article-link" target="_blank" rel="nofollow">Aftermath: Nomads, Pirates and Frogfaces</a></li>
                                
                            </ul>
                        </div>
                        
                       
                        
                    </section>
                    </div>                    
                </div>
                
                @include('layouts.footer')
            </div>
        </div>
    </div>
</div>
@endsection
