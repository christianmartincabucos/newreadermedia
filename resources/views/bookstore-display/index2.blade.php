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
                            <h1 class="header-white">Bookstore Displays: Why are they important?</h1>
                            
                            <div style="position:relative;width:100%;height:500px;background:url({{{ url('public/storage/services/bsd1.jpg') }}}) center center no-repeat;background-size: cover;">
                                <div class="layer" style="background-color: rgba(0, 0, 0, 0.0);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                    
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                        <br>
                                        <p class="text-justify" style="text-indent:30px"><span style="">Bookstore&mdash;noun. A store where books are sold.</span></p>
                                        
                                        <p class="text-justify"  style="text-indent:30px"><span style="">Living in the era of touchscreens and the internet, it makes people doubt the relevance of books, newspapers, and other print materials. The publishing industry continues to struggle against the new wave of online media but everyone should not keep their faces stuck in front of their phone screens.</span></p>
                                        
                                        <p class="text-justify"  style="text-indent:30px"><span style="">There are people who continue to spend their time stuck in a book instead of their phone screens. People who love flipping through pages of books, those that love the smell of print, and the feel of the book&rsquo;s paperback covers, still exist. These are the people who take time in browsing books at bookstore, exploring genres one book at a time.</span></p>
                                        
                                        <p class="text-justify"  style="text-indent:30px"><span style="">This is why bookstores are important and why a spot at a bookstore helps in promoting books by underground authors. People come into bookstores all the time. The mere fact that a book is displayed, there is enough to let people know of its existence. One hour or more is the average time most people spend at bookstores to browse at books, which means, a chance for your book to be discovered by another bibliophile.</span></p>
                                        
                                        <p class="text-justify"  style="text-indent:30px"><span style="">Bookstores always give the readers a lot of different options, and a chance to discover new authors, and other possibilities that their displayed books can offer. Your imagination is the limit, after all.</span></p>
                                        
                                        <p class="text-justify"  style="text-indent:30px"><span style="">Aside from helping authors promote their books, bookstores provide these books with homes as well&mdash;by placing&nbsp;them in effective spots, categorizing them according to genre, and also, by holding book signing, and book-reading events.</span></p>
                                </div>
                                <div class="col-md-6">
                                        
                                        <br>
                                        <p class="text-justify"  style="text-indent:30px"><span style="">Being in places like these also helps in making new connections. Imagine having a film producer stumble upon a certain book, and decides to turn that book into a film. The bookstore offers endless possibilities to authors, and readers, alike.</span></p>
                                        
                                        <p class="text-justify"  style="text-indent:30px"><span style="">These are just a few of the things that make bookstores still relevant, and bookstore displays important. Technology may continue to rapidly rise against books but nothing will ever beat the cream-antique color of the books&rsquo; </span><span style="">pages.</span></p>
                                        <br>
                                        <img class="article-thumbnail" src="{{{ url('public/storage/services/bsd2.jpg') }}}" style="width:100%">
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
