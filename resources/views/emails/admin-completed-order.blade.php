@component('mail::message')
# GlobalExpert | Completed Order

Hello Admin,

Order <b>{{  }}</b> has been completed by writer.

@component('mail::panel')
Click here to use more details, <a href="{{ route('complete.orders') }}" target="_blank">visit here.</a><br>
@endcomponent

Thanks, 

{{ config('app.name') }}</a>.
@endcomponent
