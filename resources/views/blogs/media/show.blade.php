@extends('layouts.app')
@section('title')New Reader Media's best, most informative blogs on a variety of topics.@endsection
@section('og-title')New Reader Media's best, most informative blogs on a variety of topics.@endsection
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
                            <div class="col-md-12 lead px-5">
                                @foreach ($datas as $data)
                                <h3 class="text-center"><strong>{{ $data->title }}</strong></h3>
                                <!-- <h4 class="text-center">{{ $data->meta_desc }}</h4> -->
                                {!! $data->body !!}
                                <!-- <div class="col-md-12">
                                    <h5 style="font-size:1rem!important;"><a>Author: {{ $data->author }}</a></h5>
                                </div> -->
                                @endforeach
                            </div>
                        </section>
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