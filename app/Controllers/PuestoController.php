<?php

namespace App\Controllers;
//utilizar el modelo
use App\Models\PuestoModel;

class PuestoController extends BaseController
{
    public function vistaPuestos():string
    {
        //crear un objeto
        $puesto = new PuestoModel();    
        $datos['datos']=$puesto->findAll();
        return view('vista_puestos', $datos);
    }
    }
