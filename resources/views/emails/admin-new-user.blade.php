@component('mail::message')
# GlobalExpert | New User Notification

Hello Admin,

A new user {{ ucwords($name) }} of role @if($role == 2) User @else Writer @endif has successfully registered.

@component('mail::panel')
Click here to use more details, <a href="{{ route('users.index') }}" target="_blank">visit here.</a><br>
@endcomponent

Thanks, 

{{ config('app.name') }}</a>.
@endcomponent
