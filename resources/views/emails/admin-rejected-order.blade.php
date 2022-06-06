@component('mail::message')
# GlobalExpert | Rejected Order

Hello Admin,

Order belonging to user has been rejected by writer.

@component('mail::panel')
Click here to use more details, <a href="{{ route('complete.orders') }}" target="_blank">visit here.</a><br>
@endcomponent

Thanks, 

{{ config('app.name') }}</a>.
@endcomponent
