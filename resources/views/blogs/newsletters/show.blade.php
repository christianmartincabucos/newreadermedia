@extends('layouts.app')

@foreach ($datas as $data)
    @section('title') {!! $data->title !!}@endsection
    @section('meta-description') {!! $data->meta_desc !!}@endsection
@endforeach

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