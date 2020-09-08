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

                                    <!-- <a class="btn btn-maron btn-sm float-right btn-curve" data-toggle="modal" data-target="#myModal">Create Blog</a> -->
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
                                            <a href="{{ route('blog-show', $data->blog_id) }}" rel="nofollow">
                                                @if($data->image != '')
                                                <img src="{{ asset('storage/blogs/nmagazine/'.$data->image) }}" style="position:relative;width:100%;overflow:hidden;margin-bottom:10px">
                                                @else
                                                <img src="{{ asset('storage/nrmedia-logo2.png') }}" style="position:relative;width:100%;overflow:hidden;margin-bottom:10px">
                                                @endif
                                                <div class="layer" style="background-color: rgba(0, 0, 0, 0.0);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                                </div>
                                            </a>

                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <h2 class="title"><a href="{{ route('blog-show', $data->blog_id) }}" rel="nofollow">{{ $data->title }}</a></h2>
                                            <p class="text-white lead" style="margin:0">{{ $data->meta_desc }}</p>
                                            <small> <a class="article-links">{{ $data->author}}</a></small>
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
<!-- <div class="modal fade" id="myModal" style="padding-right:0px!important;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Create Blog</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form class="" method="POST" action="{{ route('blog.post') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Enter title...">
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Meta Description</label>
                                <input type="text" class="form-control" name="meta-desc" id="meta-desc" placeholder="Enter meta description...">
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="author">Author</label>
                                <input type="text" class="form-control" name="author" id="author" placeholder="Enter author...">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sel1">Category</label>
                                <select class="form-control" name="category">
                                    @foreach($categories as $category)
                                    <option value="{{$category->blog_category_id}}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="blog-editor">Description:</label>

                        <textarea name="blog-editor" id="blog-editor" rows="40" style="color:#000!important; visibility: visible!important;">
                        </textarea>
                    </div>
                    <div class="text-right">

                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-warning">Clear</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->

@endsection