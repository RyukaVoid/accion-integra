@component('mail::message')
<h1>Nuevo mensaje de contacto</h1>

<b>Nombre: </b>{{$nombre}}<br>
<b>Correo: </b>{{$email}}<br>
<b>Mensaje: </b>{{$mensaje}}<br>

@component('mail::button', ['url' => 'mailto:'.$email])
Responder mensaje
@endcomponent
@endcomponent
