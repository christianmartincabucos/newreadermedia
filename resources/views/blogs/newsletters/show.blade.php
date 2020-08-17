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
                                </div>
                            </div>
                        </section>
                        @endforeach
                    </div>
                    <div id="disqus_thread"></div>
                    <script>
                        /**
                         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

                        var disqus_config = function() {
                            this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
                            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };

                        (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document,
                                s = d.createElement('script');
                            s.src = 'https://newreadermedia.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

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