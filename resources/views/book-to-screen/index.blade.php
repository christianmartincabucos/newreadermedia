@extends('layouts.app')
@section('title')Let’s turn your book into a movie @endsection
@section('og-title')Let’s turn your book into a movie @endsection
@section('meta-description')If you and your audience can picture the plot and characters inside your head, then think about elevating those images and seeing the actual event right before your eyes. This is what screenplay adaptation aims. They take a book and rewrite it to ensure that the story works as a film.@endsection
@section('og-image'){{{ url('public/storage/services/adapted-screenplay-v2-1.jpg') }}}@endsection
@section('og-image'){{{ url('/screen-adaptation') }}}@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box" style="margin-bottom:0">
                <div class="box-body">
                    {{-- BIG IMAGE --}}
                    <div class="row">
                    <section class="box-section">
                        <div class="col-md-12 lead">
                            <h1 class="header-white">Screen Adaptation</h1>
                            <div style="position:relative;width:100%;height:400px;background:url({{{ url('public/storage/services/adapted-screenplay-v2-1.jpg') }}}) center center no-repeat;background-size: cover;">
                                <div class="layer" style="background-color: rgba(0, 0, 0, 0.5);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                    <p><strong><span style="font-size: 40.0pt;color:#fff">Let’s turn your book into a movie</span></strong></p>
                                    <p style="margin-top:3%"><strong><span style="font-size: 36.0pt;color:#fff"></span></strong></p>
                                </div>
                            </div>
                            
                            <br>
                            <p>Every writer&rsquo;s dream is seeing people read their book. You&rsquo;re even luckier if these individuals are the right crowd. And if it reaches a much larger audience and transcends its genre-- then you&rsquo;re very <strong>lucky</strong>.</p>
                            <p>&nbsp;</p>
                            <p>All this hinges on several factors other than your skills as a writer, such as marketing and distribution. Sometimes, being good at writing is not enough.</p>
                            <p>&nbsp;</p>
                            <p>This is where screenplay adaptation comes in.</p>
                            <p>If you and your audience can picture the plot and characters inside your head, then think about elevating those images and seeing the actual event right before your eyes. This is what screenplay adaptation aims. They take a book and rewrite it to ensure that the story works as a film.</p>
                            <p>&nbsp;</p>
                            <p>Here at NRM, we make sure that we bring justice to the book you wrote. Our creative staff will work hand-in-hand with you on how your screenplay should play out: the dialogues, the movements and the particular details about the scenario.</p>
                            <p>&nbsp;</p>
                            <p>A romantic conversation between two names on a page is now two characters looking at each other&rsquo;s eyes--talking, touching, and smiling ear to ear. All of that began with your words on pages.</p>
                            
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
