@component('mail::message')
# GlobalExpert | Order Sent

Hello {{ ucwords($name) }},

Your Order, <b>{{ $order_name }}</b> has been successfully confirmed. You will see more details about the order as soon as the Admin assigns it to a writer.

@component('mail::panel')
To see more details, <a href="{{ route('user.orders') }}" target="_blank">visit here.</a><br>

<a href="{{ route('home') }}">Contact us immediately if you did not authorise this registration.</a> 
@endcomponent

Thanks, 

{{ config('app.name') }}.
@endcomponent
