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
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/yECQrh2b9Ok" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                
                                </div>
                                
                                <h4 class="title"><a href="https://www.youtube.com/watch?v=yECQrh2b9Ok" target="_blank" rel="nofollow"><strong>O'er The Ramparts - Official Sneak Peek</strong></a></h4>
                                <p>A story of young Laurel O'Malley a daughter of a highly regarded country doctor living just on the outskirts of Baltimore which is under threat of attack by the British. As war becomes ever so real to her and everyone she loves. Laurel finds herself having to stand tall for her country and for the man she has come to love.</p>
                                
                                    
                            </div>
                            <div class="divider"></div>
                            <div class="box-article">
                                <div class="embed-container" style="margin-bottom:10px">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/N7Whgu39GCM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                
                                <h4 class="title"><a href="https://www.youtube.com/watch?v=N7Whgu39GCM" target="_blank" rel="nofollow"><strong>The Adventures of Tina Kaneekchuk and Her Twin Brother, Tommy - Official Sneak Peek</strong></a></h4>
                                <p>Way up north above the Arctic Circle lived an Eskimo family. They had a very strange sounding last name. It was Kaneekchuk. There were Mama and Papa Kaneekchuk and their twins, Tina and Tommy, who were ten years old.</p>
                                
                                    
                            </div>
                            <div class="divider"></div>
                            <div class="box-article">
                                <div class="embed-container" style="margin-bottom:10px">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/7mrbiGzAjfU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                
                                <h4 class="title"><a href="https://www.youtube.com/watch?v=7mrbiGzAjfU" target="_blank" rel="nofollow"><strong>Hell Don't Last Always - Official Sneak Peek</strong></a></h4>
                                <p>"Hell Don't Last Always" is the sequel to, "I'm Catchin' Hell." The story resumes with Angelica Townsend as she endures mental rehabilitation. She discovers that everyone in this life has a story to tell, the only difference is the author.</p>
                                
                                    
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
                                <li><a href="{{ url('https://www.youtube.com/watch?v=yECQrh2b9Ok') }}" class="article-link" target="_blank" rel="nofollow">O'er The Ramparts</a></li>
                                <li><a href="{{ url('https://www.youtube.com/watch?v=N7Whgu39GCM') }}" class="article-link" target="_blank" rel="nofollow">The Adventures of Tina Kaneekchuk and Her Twin Brother, Tommy</a></li>
                                <li><a href="{{ url('https://www.youtube.com/watch?v=7mrbiGzAjfU') }}" class="article-link" target="_blank" rel="nofollow">Hell Don't Last Always</a></li>
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
