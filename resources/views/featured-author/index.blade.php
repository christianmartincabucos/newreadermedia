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
                            <h1 class="header-white">Spotlight</h1>
                            
                        </div>
                        <div class="col-md-3 center-block">
                            <img src="{{{ url('public/storage/featured-author/steven-bentley.jpeg') }}}" class="img-circle" style="width:100%">
                        </div>
                        <div class="col-md-6 text-justify center-block">
                            
                            <h3 class="text-center"><strong>Steven Bentley</strong> </h3>
                            <p>Steven Bentley, M.D. graduated from the Medical College of Georgia in Augusta, Georgia in 1978. The majority of his career has been in the emergency departments of North Carolina hospitals. He grew up in Georgia.</p>
                            <br>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>"My life consisted of sleeping, eating and working shifts."</em></p>
                            </blockquote>
                            <h3 class="text-center"><strong> A License to Heal</strong> </h3>
                            <p>Steven Bentley, M.D. is an American Board of Emergency Medicine certified ED doctor. His journey began in the mid-1970s, when he chose to pursue a career in medicine. In his youthful perspective, he came to regard doctors as the good guys, the ones who healed people and saved lives. He knew he’d be one of those good guys one day.</p>
                            <p>Now, with a career spanning more than thirty years, he works as an emergency-room physician in North Carolina. In A License to Heal: Random Memories of an ER Doctor, Bentley describes the real world of emergency medicine from the viewpoint of a practicing physician. This memoir is filled with real-life stories of the ER, including life and death, triumph and tragedy.</p>
                            <p>Meet a man named Solomon Darby, who spoke to long-dead relatives during his own near-death experience. Bentley also recalls the heartbreaking story of a young widow who desperately needed to understand and cope with the death of her husband. Amid the grief, there are also episodes of great humor and human comedy.</p>
                            <p>In the dynamic world of emergency medicine, there is a great deal of pain, blood, and tragedy, but there is also hope, compassion, and excitement—for both the patients and the staff.</p>

                            <br>
                            
                            <blockquote class="blockquote">
                                <p class="text-red"><em>"Sometimes you have to sacrifice the heart, to save the patient."</em></p>
                            </blockquote>

                            <div class="row">
                                <div class="col-md-6">
                                    <a href="https://www.amazon.com/License-Heal-Random-Memories-Doctor-ebook/dp/B0793SYDN9/" target="_blank">
                                        <img src="{{{ url('public/storage/featured-author/a-license-to-heal.png') }}}" class="" style="width:100%">
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://www.amazon.com/Poor-No-More-American-Dream-ebook/dp/B079653GWF/" target="_blank">
                                        <img src="{{{ url('public/storage/featured-author/poor-no-more.png') }}}" class="" style="width:100%">
                                    </a>
                                </div>
                            </div>

                            
                            <p>A License to Heal: Random Memories of an ER Doctor is a very blunt account of life in the emergency room from the perspective of the medical staff. Bentley chronicles heartbreaking loss, triumphant recoveries and everything in between, including the emotional toll of trying to help others often on the brink of death. He even touches on the evolution (or devolution) of the American healthcare system. This book is exactly what it claims to be: a random account of one ER doctor’s experiences in the field.</p>
                            <h4 class="text-right text-red"><em>- Pacific Book Review</em></h4>
                        </div>
                        <div class="col-md-12">
                            
                            
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
