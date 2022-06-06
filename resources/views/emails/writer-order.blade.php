@component('mail::message')
# GlobalExpert | Order Received

Hello ,

An Order has been assigned to you. Proceed to your dashboard to accept or reject the order.

@component('mail::panel')
To see more details about the order, <a href="{{ route('received.orders') }}" target="_blank">visit here.</a><br>

<a href="{{ route('home') }}">For more information, contact us.</a> 
@endcomponent

Thanks, 

{{ config('app.name') }}.
@endcomponent
