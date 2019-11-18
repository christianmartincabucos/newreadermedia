@extends('layouts.app')
@section('title')Contact New Reader Media @endsection
@section('og-title')Contact New Reader Media @endsection
@section('meta-description')If you have business inquiries or other questions, please fill out the following form to contact us.@endsection
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
                            <h1 class="header-white">Contact Us</h1>
                            @if ($errors->has('email'))
                            
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="box" style="margin-bottom:0;background:rgba(180,40,40,.9)">
                                            <div class="box-body">
                                                
                                                    <span class="help-block text-center">
                                                        <strong class="text-white"><span class="fa fa-warning"></span> {{ $errors->first('email') }}</strong>
                                                    </span>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                            @endif
                            <div class="row">
                                
                                <div class="col-md-5 center-block">
                                    <div class="divider"></div>
                                    <form method="POST" action="{{ url('/contact') }}">
                                
                                        <p class="text-center">If you have business inquiries or other questions, please fill out the following form to contact us.</p>
                                        
                                            {{ csrf_field() }}
                                            <div class="form-group{{ $errors->has('name') ? ' has-errors' : '' }}">
                                                <input type="text" class="form-control " name="name" id="" placeholder="Your Name" required>
                                                
                                            </div>
                                            <div class="form-group{{ $errors->has('email') ? ' has-errors' : '' }}">
                                                <input type="email" class="form-control " name="email" id="" placeholder="Your Email Address" required>
                                                
                                            </div>
                                            <div class="form-group{{ $errors->has('subject') ? ' has-errors' : '' }}">
                                                <input type="text" class="form-control " name="subject" id="" placeholder="Subject" required>
                                                
                                            </div>
                                            <div class="form-group{{ $errors->has('body') ? ' has-errors' : '' }}">
                                             <textarea id="contactform-body" class="form-control" name="body" rows="6" placeholder="Body" aria-required="true" aria-invalid="true"></textarea>
                                                
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-default btn-danger">Submit</button>
                                            </div>
                                    
                                    </form>
                                    <div class="divider"></div>
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
