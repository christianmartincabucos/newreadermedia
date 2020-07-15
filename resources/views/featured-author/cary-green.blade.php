@extends('layouts.app')
@section('title')Media Spotlight: Cary J. Green, Ph.D. @endsection
@section('og-title')Media Spotlight: Cary J. Green, Ph.D. @endsection
@section('meta-description')Cary J. Green, PhD, equips students with skills for academic success and employability. Dr. Green spent twenty years teaching and advising university students before founding CaryJGreen.com. He has served as director of a college-level recruiting and career center, department chair, and associate dean for academic programs.@endsection
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
                                <img src="{{{ url('storage/featured-author/cary-green.jpg') }}}" class="img-circle" style="width:100%" alt="Cary J. Green, Ph.D.">
                            </div>
                            <h3 class="text-center"><strong>Cary J. Green, Ph.D.</strong> </h3>
                            <p>Cary J. Green, PhD, equips students with skills for academic success and employability. Dr. Green spent twenty years teaching and advising university students before founding <a class="link-white" href="https://www.caryjgreen.com/">CaryJGreen.com</a>. He has served as director of a college-level recruiting and career center, department chair, and associate dean for academic programs. He recently received a Parent and Teacher Choice Award from HowToLearn.com, and Parenting 2.0 recognized Green as a Global Presence Ambassador for his commitment to developing success skills in young people.</p>
                            <br>
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“A well-developed skill set enables you to perform at the level of your ability.”</em></p>
                            </blockquote>
                            <div class="row">
                                <div class="col-md-5 center-block">
                                    <a href="https://www.caryjgreen.com/" target="_blank" rel="nofollow">
                                        <img src="{{{ url('storage/featured-author/cary-green-book.png') }}}" class="" style="width:100%" alt="SUCCESS SKILLS: For High School, College, and Career">
                                        
                                    </a>
                                    
                                </div>
                                <h3 class="text-center"><strong>SUCCESS SKILLS<br><small>For High School, College, and Career</small></strong> </h3>
                            </div>
                            <br>
                            
                            <p>Successful students and employees have something in common: a well-developed skill set that transcends book smarts. The skills needed for success in the classroom and on the job can be honed with deliberate effort and the right resources. With average six-year college graduation rates hovering around 60% (U.S. Department of Education, 2018), and with employers commonly reporting skill deficits in recent graduates, students can distinguish themselves by building skills for academic success and employability.</p>
                            <p><em>Success Skills for High School, College, and Career</em> offers step-by-step guidelines and hands-on exercises to enable students to enhance their academic performance and prepare for future career success.</p>
                            
                            <blockquote class="blockquote">
                                <p class="text-red"><em>“Don’t limit your future based on your current skills and abilities. Empower your future by daring to believe in what you will become!”</em></p>
                            </blockquote>
                            
                            <br>
                            
                            

                            <h4 class="text-center"><small>You can visit his website and get a copy of the book at</small> <a href="https://www.caryjgreen.com/" target="_blank" rel="nofollow">CaryJGreen.com</a></h4>
                            
                            
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
