@component('mail::message')
Hello **{{$name}}**,  {{-- use double space for line break --}}
Thank you for choosing Registracker!
Click below to start working right now
@component('mail::button', ['url' => $link])
Go to your inbox
@endcomponent
Sincerely,
Registracker team.
@endcomponent