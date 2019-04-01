@extends('layouts.app')
@section('title')Media Spotlight: Kiera Donna Laike @endsection
@section('og-title')Media Spotlight: Kiera Donna Laike @endsection
@section('meta-description')Kiera Donna Laike, IRW, has been writing fairy tales for children with whom she worked for 30 years. Each fairy tale emerged out of Kiera’s true ability to connect with each child and foster their healing.@endsection
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
                                <img src="{{{ url('public/storage/featured-author/kiera-laike.jpg') }}}" class="img-circle" style="width:100%" alt="Kiera Donna Laike">
                            </div>
                            <h3 class="text-center"><strong>Kiera Donna Laike</strong> </h3>
                            <p>Kiera Donna Laike, IRW, has been writing fairy tales for children with whom she worked for 30 years. Each fairy tale emerged out of Kiera&rsquo;s true ability to connect with each child and foster their healing. Through the creation of a story personal to each child, she activates the non-verbal space in the child&rsquo;s brain that then causes the brain to settle and ultimately heal. Out of Kiera&rsquo;s desire to reach as many children as possible with this profound healing, she wrote <em>The Dance of Reflective Relationship </em>for all children. This special book offers a means through which each child&rsquo;s brain will settle, heal, and develop, uniquely in sync with who each of them are on the inside.</p>
                            <p><em>The Dance of Reflective Relationship</em> is a story to aid in the struggles of all children.<br /> <br /> Kiera is currently writing to support her work through The One Cause Foundation, a nonprofit organization whose mission is to teach children and adults that we are energetic, evolutionary beings. A portion of the proceeds from this book will support The One Cause Foundation in the development of classes and programs to facilitate the energetic development of children.</p>
                            <p>Kiera experienced a deep grief during her position supervising therapists, witnessing limited temporary relief, and finding no mechanism to heal the whole being. In response, Kiera developed Bio Self-Emergence, and the 13 Energetic and Developmental Stages of Humans, which evolved into the Theory of Sensology. This theory encompasses a multi-level healing practice that embodies human energetic field communication with Earth, Sky and ultimately the Universe.</p>
                            <p>Kiera&rsquo;s first book, <em>Soul Orientation: The Dance of Reflective Relationship</em>, describes her multileveled healing process, called Embodied Practice. Kiera founded the Sensology Institute in Michigan and the Embodied Teacher and Practitioner Certification programs. She and her staff teach and treat both children and adults utilizing the Theory and Practice of Sensology.</p>
                            <br>
                            
                            <div class="row">
                                <div class="col-md-4 center-block">
                                    <a href="https://www.amazon.com/Dance-Reflective-Relationship-Fairy-Creation-ebook/dp/B0741DB3JH/ref=sr_1_1?ie=UTF8&qid=1538754067&sr=8-1&keywords=dance+reflective+relationship" target="_blank" rel="nofollow">
                                        <img src="{{{ url('public/storage/featured-author/kiera-laike-book.png') }}}" class="" style="width:100%" alt="A Dance of Reflective Relationship: A Fairy Tale of Creation">
                                        
                                    </a>
                                    
                                </div>
                                <h3 class="text-center"><strong>A Dance of Reflective Relationship<br><small>A Fairy Tale of Creation</small></strong> </h3>
                            </div>
                            <br>
                            
                            
                            <p><em>A Dance of Reflective Relationship</em> will ever open to the hearts of the children holding the book. The words wash over as brilliant watercolor illustrations meet the sparkle in the eyes of us all. The reflective magic of space comes to life on Earth, as the star people take form, creating a place for the child to snuggle into the wonders of our galaxy. Snuggled in, the book will take them on a powerful journey of creation, moving through a great love and expressing the power of reflection. Both children and adults will be moved by this story as it is a way of understanding soul through a connection to the stars. Alongside an underlying importance of holding one&rsquo;s uniqueness, the power of love is realized through the creation of planet Earth.</p>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“Caterina, because she had been touched by Aragon held a dance of reflection.”</em></p>
                            </blockquote>
                            <p>What <em>A Dance of Reflective Relationship</em> offers its young-minded reader is the ability to sink in and flow with concepts of creation and love. Children still hold the ability to have changing thoughts about the wonders of our galaxy. The book provides children a safe space to explore their limitless knowing. A true tale, one that spirals with triumphs and tribulations, embodies the traits of all things brought into being on planet Earth. Life and love do not progress in a linear manner, but rather take shape with the good, the bad and the unforeseen changes.&nbsp;</p>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“Aragon not wanting to lose one sparkle of his Caterina, moved and the sky formed to catch his Caterina.”</em></p>
                            </blockquote>
                            <p>Coinciding the notion of flow with Earth&rsquo;s creation and the first love story between human souls brings forth a connection not usually offered in any youth literature. Opening the ground work for the reader to wonder about his/her place of origin and journey into form in reflection yet again.<em> A Dance of Reflective Relationship</em> opens the possibility of his/her connection to a star, allowing for individual development. Supported by the unique traits of the star people, those that make them who they are, the reader experiences how the great creation of Earth emerged from each star person embodying their unique characteristic. It is another subtle, yet imperative reminder for our youth to know who they are and to stand strong in that knowing. Through a breath&hellip; a wave&hellip; a twinkle&hellip; we desire to awake every child to his/her unique magnificence.</p>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“Listen and learn, feel, dance, touch, from the form which holds this book.”</em></p>
                            </blockquote>
                            <br>
                            
                            

                            <h4 class="text-center"><small>Get a copy of the book on</small> <a href="https://www.amazon.com/Dance-Reflective-Relationship-Fairy-Creation-ebook/dp/B0741DB3JH/ref=sr_1_1?ie=UTF8&qid=1538754067&sr=8-1&keywords=dance+reflective+relationship" target="_blank" rel="nofollow">amazon</a></h4>
                            
                            
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
