@component('mail::message')
# GlobalExpert | New User Order

Hello Admin,

A user has successfully placed an order.

@component('mail::panel')
Click here to use more details, <a href="{{ route('orders.admin') }}" target="_blank">visit here.</a><br>
@endcomponent

Thanks, 

{{ config('app.name') }}</a>.
@endcomponent
