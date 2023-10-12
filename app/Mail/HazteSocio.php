<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class HazteSocio extends Mailable
{
    use Queueable, SerializesModels;

    private $nombre;
    private $email;
    private $mensaje;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $data)
    {
        $this->nombre = $data["nombre"];
        $this->email = $data["email"];
        $this->mensaje = $data["mensaje"];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mails.haztesocio')
            ->subject('Una nueva postulacion voluntariado Accion Integra')
            ->with([
                'nombre' => $this->nombre,
                'email' => $this->email,
                'mensaje' => $this->mensaje
            ]);
    }
}
