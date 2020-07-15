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
                                <img src="{{{ url('storage/featured-author/manuel-pelaez.jpg') }}}" class="img-circle" style="width:100%" alt="Manuel Pelaez">
                            </div>
                            <h3 class="text-center"><strong>Manuel Pelaez</strong> </h3>
                            <p>He worked 30 years for the local government in Miami as a manager. He went to school in MDCC and FIU. He is presently working in the health and fitness industry, owning a gym, and music studio. He's an author, and artist who enjoys writing in his spare time.</p>
                            
                            <h4 class="text-center"><small>follow Manuel Pelaez on</small><br><a href="https://instagram.com/mannypel" target="_blank" rel="nofollow"><span class="fa fa-instagram"></span> Instagram</a> <small>|</small> <a href="https://twitter.com/ManuelP96782044" target="_blank" rel="nofollow"><span class="fa fa-twitter"></span> Twitter</a></h4>
                            <br>
                            
                            <div class="divider"></div>
                            <div class="row">
                                <div class="col-md-8 center-block">
                                    <a href="https://www.amazon.com/Project-Manuel-Pelaez/dp/1543475426" target="_blank" rel="nofollow">
                                        <img src="{{{ url('storage/featured-author/the-project.png') }}}" class="" style="width:100%" alt="The Project">
                                    </a>
                                </div>
                                
                            </div>
                            <h3 class="text-center"><strong>The Project</strong> </h3>
                            <p>Two teenagers different lives, caught up in over their heads in secrets, a mirage of events, assassin squads in every turn, government investigations, many battles between high tech machines against terrorist and rebel groups. One decides to hide among the ancient warlords and their underground forbidden cities, the other meets his fate, the secrets lead to suicide, and a secret team is assembled for a worldwide hunt.</p>
                            <h4 class="text-center"><small>Get a copy of the book on</small> <a href="https://www.amazon.com/Project-Manuel-Pelaez/dp/1543475426" target="_blank" rel="nofollow">amazon</a></h4>
                            <div class="divider"></div>
                            <div class="row">
                                <div class="col-md-8 center-block">
                                    <a href="https://www.amazon.com/Hunt-Manuel-Pelaez/dp/1543482562/" target="_blank" rel="nofollow">
                                        <img src="{{{ url('storage/featured-author/the-hunt.png') }}}" class="" style="width:100%" alt="The Hunt">
                                    </a>
                                </div>
                                
                            </div>
                            <h3 class="text-center"><strong>The Hunt</strong> </h3>
                            <p>Agent Jones from the FBI assembles a special team under strict orders from a United States congressman to hunt down four rouge CIA operatives hiding in different remote country regions. Using informants and intel from other government secret services, they are planning covert operations to minimize casualties. The end result brings Marcus out of hiding in Africa to start a new beginning to a top secret robotic program that will save human soldier lives for futures to come.</p>
                            <h4 class="text-center"><small>Get a copy of the book on</small> <a href="https://www.amazon.com/Hunt-Manuel-Pelaez/dp/1543482562/" target="_blank" rel="nofollow">amazon</a></h4>

                            <div class="divider"></div>
                            <div class="row">
                                <div class="col-md-8 center-block">
                                    <a href="https://www.amazon.com/dp/1984516043" target="_blank" rel="nofollow">
                                        <img src="{{{ url('storage/featured-author/the-program.png') }}}" class="" style="width:100%" alt="The Program">
                                    </a>
                                </div>
                                
                            </div>
                            <h3 class="text-center"><strong>The Program</strong> </h3>
                            <p>Agent Jones, from the FBI, and his special team, return back to the states, after fierce covert operations, bringing an end to the four rouge CIA operatives. Julie, helps bring Marcus, out of hiding in Africa, and bring celebrations, medals, promotions, and a new future, and a new team, new leadership, to the robotic engineering scientists program. The assignmentis in brutal Afghanistan, where the program will be tested, beyond any imagination. The team is joined by military strategists, and experts, using the latest technologies available, for aerial spider drones, robotic super soldiers, to make history, save lives, solve problems, for futures to come.</p>
                            
                            
                            <h4 class="text-center"><small>Get a copy of the book on</small> <a href="https://www.amazon.com/dp/1984516043" target="_blank" rel="nofollow">amazon</a></h4>
                            
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
