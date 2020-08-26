@extends('layouts.app')
<style>
    .hide-show {
        display: none !important;
    }
</style>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="margin-top:8rem;">
            <div class="panel panel-default box">
                <div class="panel-heading">Enter OTP</div>
                @if($errors->count() > 0)
                <div class="alert alert-warning alert-dismissible fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    @foreach($errors->all() as $error)
                    <strong>Warning!</strong>{{ $error }}
                    @endforeach
                </div>
                @endif
                <div class="panel-body">
                    <form action="{{ route('verifyOTP') }}" class="form-horizontal" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label form="otp" class="col-md-4 control-label">Your OTP</label>

                            <div class="col-md-6">
                                <input type="text" name="OTP" id="OTP" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-3 col-md-offset-4">
                                <button type="submit" class="btn btn-maron">Verify</button>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-link btn-block" onclick="event.preventDefault();
                                                     document.getElementById('resend-form').submit();">Resend</button>
                            </div>
                        </div>
                    </form>
                    <form id="resend-form" action="{{ route('resendOTP') }}" class="form-horizontal" method="post" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection