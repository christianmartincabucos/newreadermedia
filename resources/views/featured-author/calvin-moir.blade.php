@extends('layouts.app')
@section('title')Media Spotlight: Calvin Moir @endsection
@section('og-title')Media Spotlight: Calvin Moir @endsection
@section('meta-description')After becoming a columnist and reporter for the local newspapers, Calvin Moir turned his attention to the creation of books. The Saltbox is his fifth novel.@endsection
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
                            
                            <h3 class="text-center"><strong>Calvin Moir</strong> </h3>
                            <p>Calvin Moir was born in Belize, Central America where he studied journalism. After becoming a columnist and reporter for the local newspapers, he turned his attention to the creation of books. The Saltbox is his fifth novel. He now lives in Colorado, with his wife.</p>
                            <br>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“We are born with an inherent need and desire for dignity and freedom.”</em></p>
                            </blockquote>
                            
                            <div class="row">
                                <div class="col-md-8 center-block">
                                    <a href="https://www.amazon.com/Saltbox-Calvin-Moir/dp/1463432933/" target="_blank" rel="nofollow">
                                        <img src="{{{ url('public/storage/featured-author/the-saltbox.png') }}}" class="" style="width:100%">
                                    </a>
                                </div>
                                
                            </div>
                            <h3 class="text-center"><strong>The Saltbox</strong> </h3>
                            <p>What had started as a search for his father has suddenly become troubled with deceit and conspiracy, as a lad finds himself, instead. The brazen act of Creech Jones' alarming circumstances comes from hatred, pride and revenge. Success smiles upon Creech Jones; prestige and privilege accompany him. But on the inside, there is a void, a deep dissatisfaction, as he suffers a slow agonizing death. Then a casual interest in his parents' separation and his family disintegration develops into an obsession with revenge that impelled him eventually to act on his fantasies, perhaps in a criminal way. The visit to his father's house was supposed to be a beneficial association. But the surprise trip turns bitter when the prodigal son returns home under a different identity to betray his family. Creech Jones' reason for visiting the saltbox is his biggest secret, followed by frustration, humiliation - and then destruction. The Saltbox is a tale of what a person's stamina can bear, and what his intention can attain. What results is a forewarning account about guilt, responsibility and how jealousy can tear a loving family apart. The Saltbox has mystery, an atmosphere of quiet bullying and much realistically viewed life.</p>
                            <br>
                            
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“Before she could replace the shade, the vessel exploded, setting Leonie on fire.”</em></p>
                            </blockquote>

                            <p>You can get a copy of the book on <a class="link-white" href="https://www.amazon.com/Saltbox-Calvin-Moir/dp/1463432933/" target="_blank" rel="nofollow">Amazon</a> and read more at <a class="link-white" href="http://calvinmoir.com/" target="_blank" rel="nofollow">calvinmoir.com</a></p>
                            
                            
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
