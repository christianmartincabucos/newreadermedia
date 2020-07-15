@extends('layouts.app')
@section('title')Media Spotlight: Lawrence Stentzel III @endsection
@section('og-title')Media Spotlight: Lawrence Stentzel III @endsection
@section('meta-description')He started sitting zazen in 1973, became a member of the Arica mystical school in 1975, embarked on his study and practice of T’ai Chi Ch’uan in 1977, and his Taoist studies in 1978. He is also a practitioner of the tantric system of the Six Yogas of Naropa.@endsection
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
                                <img src="{{{ url('storage/featured-author/lawrence-stentzel.jpg') }}}" class="img-circle" style="width:100%" alt="Lawrence Stentzel III">
                            </div>
                            <h3 class="text-center"><strong>Lawrence Stentzel III</strong> </h3>
                            <p>Lawrence Stentzel III received his BA in philosophy from Antioch College West and his MA in integral counselling psychology from The California Institute of Integral Studies. He earned his psychotherapy license and served Solano County Mental Health for 25 years as a clinical supervisor in charge of the 24-hour Crisis Service and ran two forensic mental health programs for mentally ill offenders. He started sitting zazen in 1973, became a member of the Arica mystical school in 1975, embarked on his study and practice of T’ai Chi Ch’uan in 1977, and his Taoist studies in 1978. He is also a practitioner of the tantric system of the Six Yogas of Naropa.</p>
                            <br>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“The people of Om had real-time quantum communications and had left a satellite conversion relay orbiting Ganahar.”</em></p>
                            </blockquote>
                            
                            <h3 class="text-center"><strong>A Tale of the Tail of Nine Stars: An Inner and Outer Space Odyssey</strong> </h3>
                            <p>The twenty-eight-thousand-year nonintervention policy of the planet Om had mutated from a moral ethos into a culpable misfortune and wrongdoing. The Kundabuffer Empire was usurping planets with humanoid populations into the war economy of its accelerating imperial expansion for more than a thousand years. Om had the technological power to end the suffering caused by this tumor-like empire, yet it did nothing. Om owed much of its advanced knowledge to a super-evolved race of posthumanoids who had also alerted them to an alien race perpetrating human genocide in three galaxies and a very precise prediction of when Om would be directly confronted by them. Om was further informed that in order to end this threat, a yellow sun human of the Hub Galaxy and a member of Om’s Clear Light Order of warrior monks would need to unite and travel to the Xegachtznel Galaxy. The time of the confrontation was nearly upon them.</p>
                            
                            <div class="row">
                                <div class="col-md-8 center-block">
                                    <a href="https://www.amazon.com/Tale-Tail-Nine-Stars-Odyssey/dp/1546242538/" target="_blank" rel="nofollow">
                                        <img src="{{{ url('storage/featured-author/a-tale-of-the-tail-of-nine-stars.png') }}}" class="" style="width:100%" alt="A Tale of the Tail of Nine Stars">
                                    </a>
                                </div>
                                
                            </div>
                            
                            <br>
                            
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“On Ganahar, no one had authority over anyone else and no one could ever tell anyone else what to do.”</em></p>
                            </blockquote>

                            <p class="text-center">You can get a copy of the book on <a class="link-white" href="https://www.amazon.com/Tale-Tail-Nine-Stars-Odyssey/dp/1546242538/" target="_blank" rel="nofollow">Amazon</a> and read more at <a class="link-white" href="http://lawrencestentzeliii.com/" target="_blank" rel="nofollow">lawrencestentzeliii.com</a></p>
                            
                            
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
