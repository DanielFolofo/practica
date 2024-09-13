<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\usuario\usuarioCtrl;



class frmRegistroCtrl extends Controller
{
    public function mostrarDatos(){
        return view('registro.frmRegistro');


    }
}
