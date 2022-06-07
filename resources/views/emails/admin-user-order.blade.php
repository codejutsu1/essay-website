@component('mail::message')
# GlobalExpert | New User Order

Hello Admin,

A user <b>{{ ucwords($name) }}</b> has successfully placed an order <b>{{ $order_name }}</b>.

@component('mail::panel')
Click here to use more details, <a href="{{ route('orders.admin') }}" target="_blank">visit here.</a><br>
@endcomponent

Thanks, 

{{ config('app.name') }}</a>.
@endcomponent
