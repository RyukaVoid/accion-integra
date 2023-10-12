@component('mail::message')
<h1>Nueva postulacion Socio</h1>

<b>Nombre: </b>{{$nombre}}<br>
<b>Correo: </b>{{$email}}<br>
<b>Mensaje: </b>{{$mensaje}}<br>

@component('mail::button', ['url' => 'mailto:'.$email])
Enviar correo
@endcomponent
@endcomponent
