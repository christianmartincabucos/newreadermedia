@extends('layouts.app')

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
                            <h1 class="header-white">To-Read List</h1>
                            
                        </div>
                        <div class="col-md-8 center-block">
                            
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <img class="article-thumbnail" src="{{{ url('public/storage/featured-books/calvin-moir.png') }}}" style="width:100%">
                                    
                                </div>
                                <div class="col-md-8">
                                    <h3 class="title"><a href="{{ url('/featured-books/the-salt-box') }}">The Salt Box</a> <br><small>Calvin Moir</small></h3>
                                    
                                    <p>
                                        <a href="https://www.amazon.com/Saltbox-Calvin-Moir/dp/1463432933/ref=sr_1_1?s=books&ie=UTF8&qid=1535408446&sr=1-1&keywords=Calvin+Moir" class="btn btn-buy btn-sm  bg-red" target="_blank">Order now</a>
                                        <img class="article-thumbnails" src="{{{ url('public/storage/amazon.png') }}}" style="width:80px;padding-top:10px">
                                    </p>
                                    <p>What had started as a search for his father has suddenly become troubled with deceit and conspiracy, as a
                                        lad finds himself, instead. The brazen act of Creech Jones&#39; alarming circumstances comes from hatred, pride
                                        and revenge. Success smiles upon Creech Jones; prestige and privilege accompany him. But on the inside,
                                        there is a void, a deep dissatisfaction, as he suffers a slow agonizing death. Then a casual interest in his
                                        parents&#39; separation and his family disintegration develops into an obsession with revenge that impelled him
                                        eventually to act on his fantasies, perhaps in a criminal way. The visit to his father&#39;s house was supposed to
                                        be a beneficial association. But the surprise trip turns bitter when the prodigal son returns home under a
                                        different identity to betray his family. Creech Jones&#39; reason for visiting the saltbox is his biggest secret,
                                        followed by frustration, humiliation - and then destruction. The Saltbox is a tale of what a person&#39;s stamina
                                        can bear, and what his intention can attain. What results is a forewarning account about guilt, responsibility
                                        and how jealousy can tear a loving family apart. The Saltbox has mystery, an atmosphere of quiet bullying
                                        and much realistically viewed life.</p>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <img class="article-thumbnail" src="{{{ url('public/storage/featured-books/philip-persinger.png') }}}" style="width:100%">
                                    
                                </div>
                                <div class="col-md-8">
                                    <h3 class="title"><a href="{{ url('/featured-books/tools-of-the-trade') }}">Tools of the Trade</a> <br><small>Philip Persinger</small></h3>
                                    
                                    <p>
                                        <a href="https://www.amazon.com/Tools-Trade-Philip-B-Persinger/dp/1530197368/ref=sr_1_1?ie=UTF8&qid=1462228689&sr=8-1&keywords=philip+persinger" class="btn btn-buy btn-sm bg-red" target="_blank">Order now</a>
                                        <img class="article-thumbnail" src="{{{ url('public/storage/amazon.png') }}}" style="width:80px;padding-top:10px">
                                    </p>
                                    <p>A heart-warming tale of alpha males facing a precipitous slide—for beta or for worse. Woody Steele is one of
                                        the richest men on the planet. Sadly one of his greatest assets has been recently downsized—sorry Casanova.
                                        Ivan Greenbriar, his fellow billionaire nemesis and creep extraordinaire, turns every activity into a pissing
                                        contest even when he’s alone. Sargent Scanlon, a hero cop solely on the merits of getting shot in the nuts,
                                        doesn’t know what fear is until he must match wits with his odious fourteen-year-old stepdaughter—she’s a
                                        crime against humanity.</p>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <img class="article-thumbnail" src="{{{ url('public/storage/featured-books/tom-peavler.png') }}}" style="width:100%">
                                    
                                </div>
                                <div class="col-md-8">
                                    <h3 class="title"><a href="{{ url('/featured-books/readjustment') }}">Readjustment</a> <br><small>Tom Peavler</small></h3>
                                    
                                    <p>
                                        <a href="https://www.amazon.com/Readjustment-Tom-Peavler/dp/144015256X/ref=sr_1_1?s=books&ie=UTF8&qid=1535408484&sr=1-1&keywords=readjustment+tom+peavler" class="btn btn-buy btn-sm bg-red" target="_blank">Order now</a>
                                        <img class="article-thumbnail" src="{{{ url('public/storage/amazon.png') }}}" style="width:80px;padding-top:10px">
                                    </p>
                                    <p >Readjustment is the continuing saga of Charley Johnson. He is an ordinary mechanic who discovers a
                                        way to adjust carburetors so that they can achieve 100 MPG. He is granted a patent, but his life is
                                        threatened by Big Oil and The Big Three Automakers. They attempt to prevent him from going into
                                        production of his adjustment. He faces attacks from Mexican street gangs, Japanese Ninjas, the French
                                        Foreign Legion, and an army of out-of-work auto makers. He is repeatedly challenged by three sons of
                                        his deceased partner.</p>
                                </div>
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
@endsection
