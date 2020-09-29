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
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    @guest
                    @else
                    <div id="disqus_thread"></div>
                    @endguest
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
<p><img src="https://www.newreadermedia.com/public/storage/blogs/media/media1601348769.jpg" alt="" /></p>
<p>Men dominated the art world for centuries. History shows women not being allowed to even step inside galleries despite being often used as muses and subjects for paintings. After the late 19th Century, however, there was a wind of change. A new media art was on the rise: a movement led mostly by women artists.</p>
<p>After the French and American revolutions, women became more active in campaigning for their sexual, reproductive, and economic rights. It was then that they fought to be granted suffrage or the right to vote, and to stand for parliamentary office. Though revolutionary, this period was only the first of the would-be three "waves" of feminism.</p>
<p>In the 1960s, the second wave took place, and Feminist art emerged. People were fighting for civil rights, gender equality, and protesting against war. The resistance was for sisterhood and unity, influenced by feminism and utopian ideals. Through art and new media, feminists made non-traditional ways to change the world. Part of this was the concept of "de-gendering", which was to go out from petty and decorative, to bold and rebellious as a form of art. An example is Yayou Kusama's 'Over-pan', which consists of a metal pan covered with bulbous lumps of the same material. The metal pan, which is usually something one can associate to a woman, is given a more aggressive function. Overall, feminist art was simply all about a feminist that makes art.&nbsp;</p>
<p>Theorists began to put their focus on a feminist view of art and of society: on the experience of women and the construction of identity and gender roles in society, the media, and in male-dominated traditions of art&nbsp; history.<a href="#_ftn1" name="_ftnref1">[1]</a> Instead of painting, women preferred to use new media such as body art, fabric, photography, video art, and conceptual art to show the experiences of women and the need for gender equality. The body, which was previously an object for the male gaze, was now a weapon against socially constructed ideologies of gender.</p>
<p>The third wave came as a need to re-define feminism arose due to issues growing inside their domain itself. Instead of one, there were now four types of feminisms: Radical, Marxist, Liberal, and Dual Systems, which combines Marxist and Radical feminism.&nbsp;</p>
<p>Today, feminism is still a powerful ideology. Artists like Barbara Kruger, Judy Chicago, Miriam Schapiro, Cindy Sherman, Hannah Wilke, Ana Mendieta, and many others have made great contributions in expanding the definition of art and feminism through their perspectives, hoping to change society. Art critic Lucy R. Lippard said, &ldquo;Feminist art is neither a style nor a movement but instead a value system, a revolutionary strategy, a way of life.&rdquo;</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>