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

    public function agregarPuesto()
    {
        $puesto = new PuestoModel();
        $datos = [
            'puesto_id' => $this->request->getPost('txt_id'),
            'puesto' => $this->request->getPost('txt_nombre_puesto')
        ];
        $puesto->insert($datos);
        return redirect()->to('puestos');
    }

    public function eliminar($id)
    {
        $puesto = new PuestoModel();
        $puesto->delete($id);
        return redirect()->to('puestos');
    }

    public function buscar($id)
    {
        $puesto = new PuestoModel();
        //select * from puesto where puesto_id
        $datos['datos']=$puesto->where(['puesto_id'=>$id])->first();
        return view ('form_modificar_puesto', $datos);
    }

    public function editar()
    {
        $datos=[
            'puesto_id'=>$this->request->getPost('txt_id'),
            'puesto'=>$this->request->getPost('txt_nombre_puesto'),
        ];
        //print_t ($datos);
        $puesto= new PuestoModel();
        $puesto->update($datos['puesto_id'], $datos);
        //return $this->index();
        return redirect()->route('puestos');
    }
}
