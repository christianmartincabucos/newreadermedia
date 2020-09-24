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
                            <div class="col-md-12 px-5">

                                @if ($datas == '')
                                <h1 style="text-align:center;color:#B42828;"><b>No data Found!</b></h1>
                                @endif
                                <!-- <h1 class="text-center ">REVIEWS</h1> -->
                                @foreach($datas as $data)
                                <div class="px-5">
                                    <br>
                                    <br>
                                    <blockquote>
                                        <div class="panel-review">
                                            {!!$data->body!!}

                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <h4 class="float-right text-uppercase">
                                                <strong>{!! $data->author !!}</strong>
                                            </h4>
                                            <br>
                                            <br>
                                        </div>
                                    </blockquote>
                                    <hr />
                                </div>
                                @endforeach

                                <div class="text-center">
                                    {{ $datas->links() }}
                                </div>
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