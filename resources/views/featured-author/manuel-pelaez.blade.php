@extends('layouts.app')
@section('title')Media Spotlight: Manuel Pelaez @endsection
@section('og-title')Media Spotlight: Manuel Pelaez @endsection
@section('meta-description')He worked 30 years for the local government in Miami as a manager. He went to school in MDCC and FIU. He is presently working in the health and fitness industry, owning a gym, and music studio.@endsection
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
                                <img src="{{{ url('public/storage/featured-author/manuel-pelaez.jpg') }}}" class="img-circle" style="width:100%" alt="Manuel Pelaez">
                            </div>
                            <h3 class="text-center"><strong>Manuel Pelaez</strong> </h3>
                            <p>He worked 30 years for the local government in Miami as a manager. He went to school in MDCC and FIU. He is presently working in the health and fitness industry, owning a gym, and music studio. He's an author, and artist who enjoys writing in his spare time.</p>
                            
                            <h4 class="text-center"><small>follow Manuel Pelaez on</small><br><a href="https://instagram.com/mannypel" target="_blank" rel="nofollow"><span class="fa fa-instagram"></span> Instagram</a> <small>|</small> <a href="https://twitter.com/ManuelP96782044" target="_blank" rel="nofollow"><span class="fa fa-twitter"></span> Twitter</a></h4>
                            <br>
                            
                            
                            <div class="row">
                                <div class="col-md-8 center-block">
                                    <a href="https://www.amazon.com/Project-Manuel-Pelaez/dp/1543475426" target="_blank" rel="nofollow">
                                        <img src="{{{ url('public/storage/featured-author/the-project.png') }}}" class="" style="width:100%" alt="Messages from God: Hear God Like Never Before">
                                    </a>
                                </div>
                                
                            </div>
                            <h3 class="text-center"><strong>The Project</strong> </h3>
                            <p>Two teenagers different lives, caught up in over their heads in secrets, a mirage of events, assassin squads in every turn, government investigations, many battles between high tech machines against terrorist and rebel groups. One decides to hide among the ancient warlords and their underground forbidden cities, the other meets his fate, the secrets lead to suicide, and a secret team is assembled for a worldwide hunt.</p>
                            <br>
                            
                            

                            
                            <h4 class="text-center"><small>Get a copy of the book on</small><br><a href="https://www.amazon.com/Project-Manuel-Pelaez/dp/1543475426" target="_blank" rel="nofollow">Amazon</a></h4>
                            
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
