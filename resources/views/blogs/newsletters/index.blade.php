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
                            <div class="col-md-12 ">
                                <h1 class="header-white">Blogs

                                </h1>
                            </div>
                            <div class="col-md-9 right-divider">
                                @if ($datas == '')
                                <h1 style="text-align:center;color:#B42828;"><b>No data Found!</b></h1>
                                @endif
                                @foreach ($datas as $data)
                                <!-- <a href="{{ $data->url }}">{{ $data->title }}</a> -->
                                <div class="box-article">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-4">
                                            <a href="{{ $data->url }}" rel="nofollow">
                                                @if($data->image != '')
                                                <img src="{{ asset('storage/blogs/newsletter/'.$data->image) }}" style="position:relative;width:100%;overflow:hidden;margin-bottom:10px">
                                                @else
                                                <img src="{{ asset('storage/nrmedia-logo2.png') }}" style="position:relative;width:100%;overflow:hidden;margin-bottom:10px">
                                                @endif
                                                <div class="layer" style="background-color: rgba(0, 0, 0, 0.0);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                                </div>
                                            </a>

                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <h2 class="title"><a href="{{ $data->url }}" rel="nofollow">{{ $data->title }}</a></h2>
                                            <p class="text-white lead" style="margin:0">{{ $data->meta_desc }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider"></div>

                                @endforeach
                                <div class="text-center">
                                    {{ $datas->links() }}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <p><strong>RECENT POSTS</strong></p>

                                <ul class="" style="padding-left:20px">
                                    @foreach ($recent as $data)
                                    <li><a href="{{ route('blog-show', $data->blog_id) }}" class="article-link" target="_blank" rel="nofollow">{{ $data->title }}</a></li>
                                    @endforeach
                                </ul>
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