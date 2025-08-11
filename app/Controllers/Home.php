<?php

namespace App\Controllers;
use App\Models\EmpleadosModel;
use App\Models\PuestoModel;
class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function inicio():string 
    {
        return view('inicio');
    }
}

