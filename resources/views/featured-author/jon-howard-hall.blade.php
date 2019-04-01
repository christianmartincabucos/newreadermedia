@extends('layouts.app')
@section('title')Media Spotlight: Jon Howard Hall @endsection
@section('og-title')Media Spotlight: Jon Howard Hall @endsection
@section('meta-description')Jon Howard Hall, writer of historical fiction, enjoys touring national battlefields and cemeteries whenever he has a chance. These sites usually provide him with the inspiration he needs for his novels set during the American Civil War era.@endsection
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
                            <div class="col-md-4 center-block">
                                <img src="{{{ url('public/storage/featured-author/jon-howard-hall.jpg') }}}" class="img-circle" style="width:100%" alt="Jon Howard Hall">
                            </div>
                            <h3 class="text-center"><strong>Jon Howard Hall</strong> </h3>
                            <p>Jon Howard Hall, writer of historical fiction, enjoys touring national battlefields and cemeteries whenever he has a chance. These sites usually provide him with the inspiration he needs for his novels set during the American Civil War era. His favorite place to visit is Gettysburg.</p>
                            <p>Hall attended Auburn University and currently enjoys researching his family ancestry from England in his spare time as well as traveling to places he has never been. He is married to Paula, his wife of fifty-one years, and they live together in St. Clair County, Alabama.</p>
                            <p>Corporal Archer and the Siege of Vicksburg is his third novel.</p>
                            <br>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>(Prologue p. xviii)  “My brother William used to always kid me by saying that the best part of the Archer brothers ran down our father’s leg. He was constantly joking around, so full of life.”</em></p>
                            </blockquote>
                            <div class="row">
                                <div class="col-md-4 center-block">
                                    <a href="https://www.amazon.com/Corporal-Archer-Siege-Vicksburg-Historical-ebook/dp/B079KJLZK5/" target="_blank" rel="nofollow">
                                        <img src="{{{ url('public/storage/featured-author/jon-howard-hall-book.png') }}}" class="" style="width:100%" alt="Corporal Archer and the Siege of Vicksburg: A Novel of Historical Fiction">
                                        
                                    </a>
                                    
                                </div>
                                <h3 class="text-center"><strong>Corporal Archer<br>and the<br>Siege of Vicksburg<br><small>A Novel of Historical Fiction</small></strong> </h3>
                            </div>
                            <br>
                            
                            <p>Siege!</p>
                            <p>With the threat of yet another battle during the summer of 1863, Corporal Jonathan Archer discovers a renewed strength as he must find a way to provide safety and protect his family while also serving in the defense of his hometown. The battle led by Union General Ulysses S. Grant for control of the Mississippi River at the port of Vicksburg looms over the city like a mighty eagle swooping down upon its prey. Hill City is ultimately held under siege for weeks as the Army of Vicksburg and its remaining citizens brace themselves for the standoff.</p>
                            <p>Fortunately, Corporal Archer begins his first assignment as an aide to Lt. General John C. Pemberton at the Confederate headquarters. This newly acquired position allows him firsthand knowledge as he works alongside his commander while he gains insight into the specific battle plans of the Confederacy. Corporal Archer will have to depend upon his strong faith and undying love for his wife and family in order to survive the siege.</p>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>(Chapter 3 p.24)  “As a final act, mother and daughter were torn apart, separated, as they kicked and screamed for mercy while they were dragged from the dining room in opposite directions. Resha had only one brief moment to yell to Lettie that she would find her one day.”</em></p>
                            </blockquote>
                            <br>
                            
                            

                            <h4 class="text-center"><small>Get a copy of the book on</small> <a href="https://www.amazon.com/Corporal-Archer-Siege-Vicksburg-Historical-ebook/dp/B079KJLZK5/" target="_blank" rel="nofollow">amazon</a></h4>
                            
                            
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
