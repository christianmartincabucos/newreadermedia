@component('mail::layout')

@component('mail::panel')
    <img src="{{ asset('public/storage/nrmedia1.png') }}">
@endcomponent
{{-- Body --}}
{{ $slot }}

{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
{{ $subcopy }}
@endcomponent
@endslot
@endisset

@endcomponent