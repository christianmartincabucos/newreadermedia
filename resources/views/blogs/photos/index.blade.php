@extends('layouts.app')
@section('title')New Reader Media Photo Gallery.@endsection
@section('og-title')New Reader Media's best, most informative blogs on a variety of topics.@endsection
@section('meta-description')We find the coolest stuff and curate it for your delectation. We've got a bunch of great topics for the inquiring mind. From haunted houses to SEO techniques. See them here now.@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body" style="margin-bottom:50px;">
                    <div class="row" id="app">
                       <album></album>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
    
@endsection