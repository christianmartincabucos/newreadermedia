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
                            
                            <h1 class="header-white">Unsubscribe to NRMedia</h1>
                            
                            <div class="col-md-5 center-block">
                                <p class="text-justify">It's our goal to provide you with interesting, informative, and relevant content but we don't want to add to your inbox clutter if you'd rather not hear from us.</p>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong class="text-red">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                
                                <form method="POST" action="{{ route('subscriber.delete') }}">
                                    {{ csrf_field() }}
                                    <div class="input-group{{ $errors->has('email') ? ' has-errors' : '' }}">
                                        <input type="email" class="form-control input-lg subscribe-input" name="email" id="" placeholder="Enter your email">
                                        {{-- <i class="fa fa-envelope-o form-control-feedback" style="text-shadow:none;color:lightgray"></i> --}}
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-default btn-lg subscribe-btn"><span class="fa fa-send-o"></span></button>
                                        </span>
                                    </div>
                                    
                                    
                                </form>    
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
