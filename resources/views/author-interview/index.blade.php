@extends('layouts.app')
@section('title')Check out New Reader Media's author interviews for an in-depth look at emerging voices.@endsection
@section('og-title')Check out New Reader Media's author interviews for an in-depth look at emerging voices.@endsection
@section('meta-description')New Reader Media interviews inspiring authors, artists, and creatives from all around the world, to get a look at what inspires their work and what keeps them going.@endsection
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
                            <h1 class="header-white">Author Interview</h1>
                            <video width="100%" height="auto" controls controlsList="nodownload"poster="{{{ url('storage/videos/alkawther-makki-interview_thumbnail.jpg') }}}">
                                <source src="{{{ url('storage/videos/the-final-audit-interview.mp4') }}}" type="video/mp4">
                                
                                    Your browser does not support the video tag.
                            </video>
                            
                        </div>
                        
                        
                    </section>
                    
                    </div>                    
                </div>
                <div class="box-body">
                    <section class="box-section">
                        <div class="row">
                            <div class="col-md-8 center-block">
                                <?php
                                    // <h4 class="text-center" style="margin-top:10px"><strong>Author Interview: Carnie Matisonn, The Final Audit</strong></h4>
                                    // <p class="text-justify">
                                    //     Dr. Carnie Matisonn is an attorney admitted to the High Courts of South Africa, Lesotho and Botswana; recipient of the Norman Rosenberg Law Scholarship, and South African Institute of International Relations Graduate Research Scholarship.
                                    // </p>
                                ?>
                                <h4 class="text-center" style="margin-top:10px"><strong>Author Interview: Alkawther Makki, Unspoken Revivalism</strong></h4>
                                <p class="text-justify">
                                    Alkawther Makki demonstrates her broad imagination by portraying many forms of persona like an actress in different roles. Her innocent character reflects her real life experiences. On the other hand she can be a witty character in her melodramatic roles, provoking a new and unsurpassed thrilling form of poetry filled with grand illustrations, captivating readers to an exhilarating edge!
                                </p>
                                <p class="text-justify">
                                    As an extraordinary philosopher, Alkawther Makki stresses her incentives for promoting a grandeur ethical humanity; which may be sensed in poems and strongly expressed in proverbs, vindications and assertions. Her theories and definitions, quotes, and vignettes add to this overpowering literary tool for youth, students, teachers and any person pursuing formal or self-education.
                                </p>
                            </div>
                        </div>
                        
                    </section>
                </div>
                @include('layouts.footer')
            </div>
        </div>
    </div>
</div>
@endsection
