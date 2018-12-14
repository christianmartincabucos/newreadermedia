@extends('layouts.app')
@section('title')Subscribe to New Reader Media @endsection
@section('og-title')Subscribe to New Reader Media @endsection
@section('meta-description')Sign up for free newsletters and get more of New Reader Media delivered to your inbox.@endsection
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
                            <h1 class="header-white">Subscribe</h1>
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
                            <div class="row" style="height:450px">
                                <br><br><br><br>
                                <div class="col-md-4 center-block">
                                    <div class="divider"></div>
                                    <form method="POST" action="{{ route('subscriber.store') }}">
                                
                                        <p class="text-center">Sign up for free newsletters and get more of New Reader Media delivered to your inbox.</p>
                                        
                                            {{ csrf_field() }}
                                            <div class="input-group{{ $errors->has('email') ? ' has-errors' : '' }}">
                                                <input type="email" class="form-control input-lg subscribe-input" name="email" id="" placeholder="Enter your email" required>
                                                {{-- <i class="fa fa-envelope-o form-control-feedback" style="text-shadow:none;color:lightgray"></i> --}}
                                                <span class="input-group-btn">
                                                    <button type="submit" class="btn btn-default btn-lg subscribe-btn"><span class="fa fa-send-o"></span></button>
                                                </span>
                                            </div>
                                            
                                            
                                        
                                        <br>
                                        <p class="small text-center"><em>By signing up, you agree to receive promotional and marketing emails from New Reader Media.</em></p>
                                    
                                        
                                    
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
