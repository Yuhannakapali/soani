@component('mail::message')

There is new message from Soanitech Contact us page from.<br>
##{{ $details['name'] }} <br>


#message
@component('mail::panel')
>{{$details['message']}}
@endcomponent


#phone

{{$details['phone']}}

#mail
{{$details['email']}}

Try to respond Asap,<br>
{{ config('app.name') }}
@endcomponent
