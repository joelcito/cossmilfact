<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function formulario(Request $request){
        // para el siat LA CONECCION
        $siat = app(SiatContrller::class);
        $verificacionSiat = json_decode($siat->verificarComunicacion());

        return view('facturacion.formulario')->with(compact('verificacionSiat'));
    }
}
