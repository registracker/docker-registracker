@component('mail::message')
Hola **{{$name}}**,  {{-- use double space for line break --}}
¡Gracias por utilizar Registracker!
Haz clic en el siguiente botón para restablecer tu contraseña.
@component('mail::button', ['url' => $link])
Restablecer contraseña
@endcomponent
Atentamente,
el equipo de Registracker.
@endcomponent