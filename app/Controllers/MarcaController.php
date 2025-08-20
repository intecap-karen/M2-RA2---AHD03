<?php
namespace App\Controllers;
use App\Models\MarcaModel;

class MarcaController extends BaseController
{
    public function index(): string
    {
        $marca = new MarcaModel();
        $datos['datos']=$marca->findAll();
        return view ('vista_marcas', $datos);
    }

    public function agregarMarca()
    {
        $marca = new MarcaModel();
        $datos=[
            'marca_id'=>$this->request->getPost('txt_id'),
            'marca'=>$this->request->getPost('txt_nombre_marca'),
        ];
        $marca->insert($datos);
        return redirect()->route('marcas');
    }
    
    public function eliminar($id)
    {
        $marca = new MarcaModel();
        $marca->delete($id);
        return redirect()->route('marcas');
    }

    public function buscar($id)
    {
        $marca = new MarcaModel();
        $datos['datos']=$marca->where(['marca_id'=>$id])->first();
        return view('form_modificar_marca', $datos);
    }

    public function editar()
    {
        $marca = new MarcaModel();
        $datos = [
            'marca_id'=>$this->request->getPost('txt_id'),
            'marca'=>$this->request->getPost('txt_nombre_marca')
        ];
        $marca->update($datos['marca_id'], $datos);
        return redirect()->route('marcas');
    }
}