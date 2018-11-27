@extends('layouts.app')
@section('title')Media Spotlight: Charles P. Arnold, Jr., Ph.D. @endsection
@section('og-title')Media Spotlight: Charles P. Arnold, Jr., Ph.D. @endsection
@section('meta-description')After becoming a columnist and reporter for the local newspapers, Charles Arnold turned his attention to the creation of books. The Saltbox is his fifth novel.@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box" style="margin-bottom:0">
                <div class="box-body">
                    {{-- BIG IMAGE --}}
                    <div class="row">
                    <section class="box-section">
                        <div class="col-md-12">
                            <h1 class="header-white">Spotlight</h1>
                            
                        </div>
                        
                        <div class="col-md-9 text-justify right-divider">
                            
                            <h3 class="text-center"><strong>Charles P. Arnold, Jr., Ph.D.</strong> </h3>
                            <p>Charles P. Arnold, Jr., Ph.D. holds degrees in Mathematics and Physics, Meteorology, and Atmospheric Science. Before committing himself to the study of God’s word in the early 1990’s, Dr. Arnold was already into his second career as an Atmospheric scientist and consultant with companies in the Washington D.C. area. In his earlier career as an Air Force Colonel, he had become world renowned in the fields of Typhoon research and satellite meteorology. Since 2008 he has written The Eschaton: A Biblical Interpretation of the End of the World and Suffering: A Biblical Study. This, his latest book, explores those questions many people have, both Christians and non-Christians, regarding their purpose and place in life.  His desire is that you the reader catch the same fire which has motivated him, in your own study of God’s word.  Arnold is married with four adult children and four grandchildren. He and his wife live outside Washington, D.C. in suburban Maryland.</p>
                            <br>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“If this essay were really a matter of good news and bad news we might be tempted to say ‘let us consider the bad news first—that of suffering.”</em></p>
                            </blockquote>
                            
                            <div class="row">
                                <div class="col-md-8 center-block">
                                    <a href="http://charlesarnold.site/" target="_blank" rel="nofollow">
                                        <img src="{{{ url('public/storage/featured-author/spiritual-essays.png') }}}" class="" style="width:100%">
                                    </a>
                                </div>
                                
                            </div>
                            <h3 class="text-center"><strong>Spiritual Essays: A Personal Collection</strong> </h3>
                            <p>Spiritual Essays – A Personal Collection, provides answers to many of the questions Christian bible study produces. These questions range from “Why is my life seemingly a mix of blessings and sufferings?”, or “If Satan is real what threat does he pose for me?” or “Why is God such a jealous God?” or “When Christians speak of peace, how does that differ from worldly peace?“ Many Christians today, both male and female, are seeking a more inclusive religion, one which promotes a greater role for them in their relationship with God. Arnold has found some very significant theological evidence that an inclusive Christianity is precisely what Jesus Christ had in mind for his Church. His essay on Synerology - A Theology of Participation develops this evidence in an exceptionally clear and persuasive manner. Another big question in this postmodern age is whether the Bible is inerrant. Arnold’s essay on this subject should prove to be very convincing and uplifting. Other essays consider the difference between the spirit and the soul, trials and temptations, belief and obedience, and the meaning of Predestination. In these 25 Essays the reader will discover the meaning of life and will become engaged in a study of the Bible.</p>
                            <br>
                            
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“Solomon wrote Proverbs, a book which serves us today as an enchiridion or handbook of daily life.”</em></p>
                            </blockquote>

                            <h3 class="text-center"><small>visit website at</small><br><a href="http://charlesarnold.site/" target="_blank" rel="nofollow">charlesarnold.site</a></h3>
                            
                            
                        </div>
                        @include('featured-author.sidebar')
                        
                    </section>
                    </div>                    
                </div>
                
                @include('layouts.footer')
            </div>
        </div>
    </div>
</div>
@endsection
