@extends('layouts.app')
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
                            <video width="100%" height="auto" controls controlsList="nodownload">
                                <source src="{{{ url('public/storage/videos/the-final-audit-interview.mp4') }}}" type="video/mp4">
                                
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
                                
                                <h4 class="text-center" style="margin-top:10px"><strong>Author Interview: Carnie Matisonn, The Final Audit</strong></h4>
                                <p class="text-justify">
                                    Dr. Carnie Matisonn is an attorney admitted to the High Courts of South Africa, Lesotho and Botswana; recipient of the Norman Rosenberg Law Scholarship, and South African Institute of International Relations Graduate Research Scholarship.
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
