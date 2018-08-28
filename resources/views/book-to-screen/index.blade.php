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
                            <h1 class="header-white">Screen Adaptation</h1>
                            <div style="position:relative;width:100%;height:300px;background:url({{{ url('public/storage/book-to-screen.jpg') }}}) center center no-repeat;background-size: cover;">
                                <div class="layer" style="background-color: rgba(0, 0, 0, 0.5);position: absolute;top: 0;left: 0;width: 100%;height: 100%;padding:10px 15px">
                                    <p><strong><span style="font-size: 22.0pt;color:#fff">Beyond Entertainment</span></strong></p>
                                    <p style="margin-top:3%"><strong><span style="font-size: 36.0pt;color:#fff">THE MAKING OF AN ADAPTED SCREENPLAY</span></strong></p>
                                </div>
                            </div>
                            
                            {{-- <img class="article-thumbnail" src="{{{ url('public/storage/book-to-screen.jpg') }}}" style="width:100%"> --}}
                            
                            <div class="row">
                                <div class="col-md-6">
                                        <p>&nbsp;</p>
                                        <p class="text-justify" style="text-indent:30px">Novelist Andre Aciman finds himself in a compromised position. In an article he wrote for Vanity Fair, he shares that while he was standing at a location shoot in Italy for his novel Call Me by Your Name, he knew then that &ldquo;very little in the film would correspond to [his] novel, and like any author, was wistfully resigned to watching [his] story morph under someone else&rsquo;s vision.&rdquo; The main characters of the story, Elio and Oliver, whom he originally wrote as &ldquo;mirror images of each other,&rdquo; look the exact opposite. Even the last scene, where we see Elio crying his heart out in front of a burning hearth after learning of Oliver&rsquo;s engagement, is a far cry from the novel&rsquo;s ending. Though plots in books and in films move in the same vein, the cuts and trims in the latter are more merciless. A dialogue that occurs in prose requires more time and space on the page compared to a dialogue that happens in film. What takes ten or more pages in writing can be distilled in just a few seconds during filming. A nervous pause or a longing glance on screen could lay bare the heart of the protagonist in ways that the written word never could. It is the difference between hating something completely one minute and then suddenly loving it so unreasonably in the next. Aciman concurs that what he does as a writer and what a film director does are not at all the same. &ldquo;A writer chisels a statue down to its finest, most elusive details. What a film director does is make the statue move.&rdquo;</p>
                                        <p>&nbsp;</p>
                                        <p class="text-justify" style="text-indent:30px">There&rsquo;s always a tension between plotting and knowing what the character wants. It&rsquo;s a constant balancing act. One dial moves the storyline horizontally and the other moves it vertically. If you hit the right balance, you get a diagonal&mdash; which is not at all an easy feat to achieve. What you don&rsquo;t want to happen is something sticking its head above the parapet. The person who makes sure this doesn&rsquo;t happen is the screenwriter. What a screenwriter does is far more difficult.</p>
                                    </div>
                                <div class="col-md-6">
                                        <p>&nbsp;</p>
                                        <p class="text-justify" style="text-indent:30px">Film adaptation can be likened to kite making: the novelist shapes the kite, the director holds the thread, and the screenwriter makes sure it flies. The screenwriter is responsible for molding the story into both the shaper&rsquo;s and the holder&rsquo;s vision. The screenwriter needs to let the story go where it needs to without compromising either vision or the integrity of the story. Original to Optioning Screenplays Screenwriters are known to take the highway or the paid way. They &ldquo;either pitch original ideas to producers, in the hope that they will be optioned or sold, or are commissioned by a producer to create a screenplay from a concept, true story, existing screen work or literary work, such as a novel, poem, play, comic book or short story.&rdquo; On the first route, screenwriters complete an original speculative (spec) script and register it with the Writer&rsquo;s Guild of America (WGA).This way, there&rsquo;s proper credit and there&rsquo;s no question as to whom the rights of the script belong. They then submit the same to a film production company or pitch it to a film executive or a producer. If all goes well, screenwriters get paid once the rights to their work are sold off. This process could take a few months, or at times even years before the work gets submitted for development. Screenwriters have to hunker down for the long and arduous wait. On the other hand, established screenwriters&mdash;the ones who get paid before starting on the work&mdash;take the second route. A film company or a producer selects a screenwriter to work on the screenplay based on an already published story idea. Most highly paid screenwriters take their cue from the &ldquo;franchise guys.&rdquo; Screenwriters Christopher Markus and Stephen McFeely, the duo behind six Marvel productions, including this year&rsquo;s highly anticipated Avengers: Infinity War, got their huge Hollywood screenplay deals by starting off with the classic Chronicles of Narnia adaptations. It all depends on the quality and subject of the work and whether or not the film industry, especially the paying audience, is ready for it. Film production and distribution fall under the discretion of film company executives.</p>
                                </div>
                            </div>
                            
                            <div class="row" style="vertical-align:middle">
                                <div class="col-md-6">
                                    <p>&nbsp;</p>
                                    <img src="{{{ url('public/storage/services/bts1.jpg') }}}" style="width:100%">
                                </div>
                                <div class="col-md-6" style="vertical-align:middle">
                                    <p>&nbsp;</p>
                                    <p class="text-red" style="margin:12% 0"><strong><span style="font-size: 22.0pt;">"What a screenwriter does is far more difficult. Film adaptation can be likened to kite making: the novelist shapes the kite, the director holds the thread, and the screenwriter makes sure it flies."</span></strong></p>
                                </div>
                            </div>
                            
                            <p>&nbsp;</p>
                            <p class="text-justify" style="text-indent:30px">When Farrar, Straus, and Giroux published Aciman&rsquo;s novel in 2007, producers Peter Spears and Howard Rosenman optioned the rights of the book for screenplay. In Hollywood, to option the screen rights of a book means that the buyer bought the &ldquo;exclusive right&rdquo; to purchase the screenplay. This is an accepted standard in the film industry and also a cheaper alternative compared to actually buying the screenplay even without a guaranteed funding for production. To &ldquo;option&rdquo; is to have the exclusive right to buy the work sometime in the future when the budget for production is secured. Contracts may vary in duration, but the usual time frame is within 12 to 18 months. Producers or film executives use that time to put together the financing aspects of filming in place. After Spears and Rosenman optioned the screen rights of the book, they invited their colleague, James Ivory, to produce and write the screenplay. When Luca Guadagnino came onboard, he agreed to not only produce but to codirect the film with Ivory. Both of them then worked on the screenplay for about nine months. Aciman commended their work and approved the screenplay some time in 2015. The screenplay was essential in getting financing for production. With the support of the Italian Ministry of Cultural Heritage and Activities and Tourism and funding from Frenesy Film Company (Guadagnino&rsquo;s own company), France&rsquo;s La Cin&eacute;facture, Brazil&rsquo;s RT Features, M.Y.R.A Entertainment, and Water&rsquo;s End Productions, the producers secured a $3.5-million budget for film production.</p>
                            <p>&nbsp;</p>
                            <img src="{{{ url('public/storage/services/bts2.jpg') }}}" style="width:100%">
                            <p>&nbsp;</p>
                            <p class="text-red text-center"><strong><span style="font-size: 22.0pt;">"The screenwriter is responsible for molding the story into both the shaper&rsquo;s and the holder&rsquo;s vision. The screenwriter needs to let the story go where it needs to without compromising either vision or the integrity of the story."</span></strong></p>
                            
                            <div class="row">
                                <div class="col-md-6">
                                        <p>&nbsp;</p>
                                        <p class="text-justify" style="text-indent:30px">Filming and Distribution During production, Ivory stepped down as co-director of the film and stayed on as the main screenplay writer. Guadagnino took the directorial reins and lived with the production team and cast in Crema&mdash;a small region in northern Italy. Filming started around May and wrapped up in June 2016. In his interview with Steve Weintraub of Collider, he admitted that the first cut of the film was four hours long. After a month of post-production editing, the film was featured at the Sundance Film Festival and considered as one of the most soughtafter properties. A report from Variety confirmed that Sony Pictures Classics (SPC) bought the worldwide distribution rights for a whopping $6 million. From its limited release date in November 24, 2017, representatives from SPC reported domestic gross earnings of $18 million. After the film award season, wherein the film received numerous nominations and bagged the Oscar for Best Adapted Screenplay award, SPC opened the floodgates and set the film&rsquo;s international release last January. The film&rsquo;s earnings skyrocketed to $40 million&mdash; Sony Pictures Classic&rsquo;s third highest grossing film to date.</p>
                                        <p>&nbsp;</p>
                                        <p class="text-justify" style="text-indent:30px">Killing Your Darlings In the same article, Aciman admitted initial misgivings in Guadagnino&rsquo;s sound choice. He&rsquo;s been known in the industry to personally handpick the artists he works with in his films. In an interview with Indiewire, Guadagnino wanted &ldquo;a voice that functions as a sort of emotional narrator to the film,&rdquo; an evocative voice that would resonate through music the story&rsquo;s setting in 1980&rsquo;s and stay as close as possible to Elio&rsquo;s perspective. He found that voice in Sufjan Stevens. Stevens, a contemporary artist known for diffusing his Christian faith in his work, recorded and emailed sample songs after a few conversations with Guadagnino and after reading the script and the book.</p>
                                    </div>
                                <div class="col-md-6">
                                        <p>&nbsp;</p>
                                        <p class="text-justify" style="text-indent:30px">The song played in the final shot of the movie (Elio&rsquo;s devastating close-up), called &ldquo;Visions of Gideon,&rdquo; stunned Aciman after watching the film for the first time at the Berlin Film Festival. The final song stayed with him, long after he walked out of the movie theater and, as happens, so rarely, into the next morning and the evening after that. The ending captured the spirit of the book&mdash;a remembrance of a profound love and lost. There&rsquo;s no guarantee that anyone can get through this story without being made transparent&mdash; to anyone, to the whole world. There will be no dry eyes; it&rsquo;s a disconcerting porousness. An emotional overcoming, distant from joy, more like melancholy&mdash;if melancholy is the recognition of an almost unbearable beauty. It&rsquo;s simply too risky to experience the story&rsquo;s evolved and adapted form in a well-lighted room. That&rsquo;s the kind of comfort for books. But in cinemas&mdash;a shared four-walled enclosure with a big screen&mdash; you&rsquo;ll be safe.</p>
                                        <img src="{{{ url('public/storage/services/bts3.jpg') }}}" style="width:100%">
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
