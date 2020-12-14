@extends('layouts.app')
@section('title')New Reader Media Photo Gallery.@endsection
@section('og-title')New Reader Media's best, most informative blogs on a variety of topics.@endsection
@section('meta-description')We find the coolest stuff and curate it for your delectation. We've got a bunch of great topics for the inquiring mind. From haunted houses to SEO techniques. See them here now.@endsection
@push('css')
<style>
    .lightbox{
        position: fixed!important;
        right: 0;
        bottom: 0;
        left: 0;
        top:10%!important;
        display: none;
        overflow: hidden;
        -webkit-overflow-scrolling: touch;
        outline: 0;
        overflow-y: hidden;
    }
    .lightboxOverlay{
        pointer-events:none!important;
    }
</style>
@endpush
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box" style="margin-bottom:0">
                <div class="box-body">
                    <div class="row" id="app">
                       <!-- <album-gallery></album-gallery> -->
                       <ul id="WS-LiSli" class="grid">
                            @foreach($datas as $data)
                            <li>
                                <!-- <img title="Title 1" src="{{ $data->image_path }}" > -->
                                <a class="example-image-link" href="{{ $data->image_path }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                                    <img class="example-image" src="{{ $data->image_path }}" style="border-radius: 2%;" alt=""/>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        @if (count($datas) == 0)
                        <div class="text-center">
                            <i class="fa fa-picture-o fa-5x" style="color: #FB8C00; "></i>
                            <h3>You're album is empty! </h3>
                            <p>Upload some images <i class="fa fa-smile-o"  style="color:#FB8C00;"></i></p>
                        </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<script type="text/javascript">
    $(function() {
        $('#WS-LiSli').WS_lightbox_free({
            'enable': ['close', 'arrows'],
            buttons: {
                size: 40,
                style: 'square', // ( default, square, circle, rounded )
                color: 'black',
                color_icon: 'white',
                border_width: 0,
                border_color: '',
                opacity: .5,
                hover_opacity: 1
            },
            arrows: {
                position: 'attached', // ( inside, outside, attached )
                style: 'svelt', // (default, square, circle, rounded, svelt)
                icon_style: 'angle', // (default, caret, angle, chevron)
                icon_size: 20,
                opacity: .5,
                hover_effect: 'shrink', // (zoom, shrink, translate)
                hover_opacity: .8
            },
            image: {
                border_radius: 0,
                border_color: '',
                border_width: 0,
                bg: 'none'
            },
            background: {
                filter: 'image',
                opacity: .5
            },
            display_velocity: 'low',
            slide_velocity: 'fast'
        });

    });
</script>

@endsection