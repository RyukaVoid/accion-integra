<?php

namespace App\Http\Controllers;

use App\Mail\Contactanos;
use App\Mail\HazteSocio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomePageController extends Controller
{
    public function voluntariado()
    {
        return view('voluntariado');
    }

    public function tiendita(){
        return view('tienda.tiendita');
    }

    // Correos
    public function contactanos(Request $request){
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'mensaje' => 'required'
        ]);

        Mail::to(config('mail.admin_email'))->queue(new Contactanos($request->all()));

        return redirect()->to(url()->previous() . '#conclusion')
            ->with('status', 'Gracias por contactarnos, pronto nos comunicaremos con usted.');
    }

    public function hazteSocio(Request $request){
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'mensaje' => 'required'
        ]);

        Mail::to(config('mail.admin_email'))->queue(new HazteSocio($request->all()));

        return redirect()->to(url()->previous() . '#voluntariado')
            ->with('status', 'Gracias por contactarnos, pronto nos comunicaremos con usted.');
    }
}
