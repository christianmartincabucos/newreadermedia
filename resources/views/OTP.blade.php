<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<style>
    * {
        font-family: 'Montserrat', sans-serif !important;
        font-weight: 400 !important;
    }

    p {
        margin: 0 auto !important;
        text-align: center;
    }
</style>
@component('mail::message')
<p style="text-align:center!important;"><b>NRMedia Alert: You are logging in to your NRMedia account</b></p>
<p>
    <h2 style="text-align:center!important;">Use this verification code to confirm this action:</h2>
</p>
<br>
<h1 style="text-align:center;font-size: 36px;color:#BC3738;font-weight:bold!important;">{{ $OTP }}</h1>
<br>
<p>DO NOT SHARE THE CODE WITH ANYONE. If you did not make this request, change your password immediately and contact support.</p>
<p>Note on account security: NRMedia will never ask for your password and verification code via email. Only log in to the official <a href="http://127.0.0.1:8000/verify">NRMedia homepage.</a></p>

@endcomponent