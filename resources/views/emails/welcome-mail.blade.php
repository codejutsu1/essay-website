@component('mail::message')
# GlobalExpert | Welcome To GlobalExpert

Hello ,

Welcome to {{ ENV('APP_NAME') }}.

If you need any help or information, contact our admin. 


@component('mail::panel')
To login, <a href="{{ route('login') }}" target="_blank">visit here.</a><br>

<a href="{{ route('home') }}">Contact us immediately if you did not authorise this registration.</a> 
@endcomponent

Thanks, for choosing <a href="{{ route('home') }}">{{ config('app.name') }}</a> as your custom paper provider.
@endcomponent
