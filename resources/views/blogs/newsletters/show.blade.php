@extends('layouts.app')
@section('title')New Reader Media's best, most informative blogs on a variety of topics.@endsection
@section('og-title')New Reader Media's best, most informative blogs on a variety of topics.@endsection
@section('meta-description')We find the coolest stuff and curate it for your delectation. We've got a bunch of great topics for the inquiring mind. From haunted houses to SEO techniques. See them here now.@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box" style="margin-bottom:0">
                <div class="box-body" style="color:#fff!important;text-shadow:none!important;">
                    {{-- BIG IMAGE --}}
                    <div class="row">
                        <section class="box-section">
                            @foreach ($datas as $data)
                            <!-- <img src="" style="width:100%;"> -->
                            <div class="col-md-12 lead">
                                <div class="px-5">
                                    <br>
                                    <h1 class="text-center">{{ $data->title}}</h1>
                                    <br>
                                    <br>
                                    {!! $data->body !!}


                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </section>
                        @endforeach
                    </div>
                </div>

                @include('layouts.footer')
            </div>
        </div>

    </div>
</div>
<style>
    .ul .nav .nav-pills .nav-justified {
        display: none !important;
    }
</style>
@endsection