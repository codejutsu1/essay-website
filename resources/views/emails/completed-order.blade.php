@component('mail::message')
# GlobalExpert | Order Completed

Hello ,

Your Order has been completed. Proceed to your dashboard to download your order.

@component('mail::panel')
To download your order, <a href="{{ route('user.orders') }}" target="_blank">visit here.</a><br>

<a href="{{ route('home') }}">For more information, contact us.</a> 
@endcomponent

Thanks, 

{{ config('app.name') }}.
@endcomponent
