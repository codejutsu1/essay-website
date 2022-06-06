@component('mail::message')
# GlobalExpert | Assigned Order

Hello Admin,

You have assigned an order to this writer.

@component('mail::panel')
Click here to use more details, <a href="{{ route('complete.orders') }}" target="_blank">visit here.</a><br>
@endcomponent

Thanks, 

{{ config('app.name') }}</a>.
@endcomponent
