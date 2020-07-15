@extends('layouts.app')
@section('title')Media Spotlight: Gary Smit @endsection
@section('og-title')Media Spotlight: Gary Smit @endsection
@section('meta-description')Gary Smit holds bachelor’s and master’s degrees and a doctorate in educational administration from Northern Illinois University. Committing 34 years to public education, he has been a teacher, principal and served 25 years as a school superintendent.@endsection
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
                                <img src="{{{ url('storage/featured-author/gary-smit.jpg') }}}" class="img-circle" style="width:100%" alt="Gary Smit">
                            </div>
                            <h3 class="text-center"><strong>Gary Smit</strong> </h3>
                            <p>Gary Smit holds bachelor’s and master’s degrees and a doctorate in educational administration from Northern Illinois University.  Committing 34 years to public education, he has been a teacher, principal and served 25 years as a school superintendent. His most recent superintendency was Lombard School District 44 in suburban Chicago where he was instrumental in the adoption and implementation of CHARACTER COUNTS!</p>
                            <p>Now, as one of the Josephson Institute’s most popular, experienced, and versatile speakers, Gary has trained educators and community leaders in character development, ethics in sports and school administrator ethics.  His trainings have been held throughout the United States, and in Puerto Rico, Colombia, Ecuador, United Arab Emirates, Singapore, Bermuda, Nigeria, Brazil.</p>
                            <p>Gary is the author of numerous journal articles and has co-authored the resource handbook, “Living the Four-Way Test – The Rotary Ethical Leadership Framework for Youth.” His book “Instilling Touchstones of Character,” is a practical guide with specific strategies to effectively teach 16 values and character traits.  His publications also include a series of grade level activity books for students in Grades 3-12, entitled, “Way To Go.” </p>
                            <br>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“Values are the building blocks of character and shape the nature and quality of our personal and social interactions.”</em></p>
                            </blockquote>
                            <div class="row">
                                <div class="col-md-4 center-block">
                                    <a href="https://www.amazon.com/Instilling-Touchstones-Character-Gary-Smit/dp/1621374769" target="_blank" rel="nofollow">
                                        <img src="{{{ url('storage/featured-author/gary-smit-book.png') }}}" class="" style="width:100%" alt="Instilling Touchstones of Character">
                                        
                                    </a>
                                    
                                </div>
                                <h3 class="text-center"><strong>Instilling Touchstones of Character</strong> </h3>
                            </div>
                            <br>
                            
                            <p>This engaging and practical book will assist parents, educators and youth leaders in the intentional and explicit teaching of character. You are going to find lessons, strategies and experiential activities that will capture students' interest while facilitating the development of attitudes, beliefs and convictions about values and character traits. There is no set formula on how to teach character and values. But, in this straightforward resource guide, you will discover "Touchstones of Character" or key beliefs for Common Core and 21st century skills, explicitly crafted to assist in creating or enhancing an existing character program. These beliefs, values and character traits are conveyed in a unique and incomparable resource with 240 inspiring quotations, hundreds of strategies to link values and character traits directly and intentionally with academic content, 96 constructive and experiential hands-on games and activities, and over a hundred stories and links to video clips shared as vicarious experiences for your students. What makes this book timely and relevant for students is that there is direct teaching content on 16 values, skills and character traits. In short, "Instilling Touchstones of Character" provides you with a flexible, ready-to-use guide for teaching children and young people to understand and apply values and character traits to their everyday lives.</p>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“Character education is not a ‘quick fix.’ It provides long–term solutions that address
                                    moral, ethical, and academic issues of growing concern to our society, and is key to the
                                    safety of our schools. Character education not only cultivates minds, it nurtures hearts.
                                    Character education gets to the heart of the matter – literally.”
                                    </em></p>
                            </blockquote>
                            <br>
                            
                            

                            <h4 class="text-center"><small>Get a copy of the book on</small> <a href="https://www.amazon.com/Instilling-Touchstones-Character-Gary-Smit/dp/1621374769" target="_blank" rel="nofollow">amazon</a></h4>
                            
                            
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
