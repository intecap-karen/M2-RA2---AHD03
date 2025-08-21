<?php
namespace App\Controllers;
use App\Models\TipoEquipoModel;

class TipoEquipoController extends BaseController
{
    public function index(): string
    {
        $tipoEquipo = new TipoEquipoModel();
        $datos['datos'] = $tipoEquipo->findAll();
        return view('vista_tipos_equipos', $datos);
    }

    public function agregarTipoEquipo()
    {
        $tipoEquipo = new TipoEquipoModel();
        $datos = [
            'tipo_id' => $this->request->getPost('txt_id'),
            'nombre' => $this->request->getPost('txt_nombre'),
        ];
        $tipoEquipo->insert($datos);
        return redirect()->route('tipos_equipos');
    }
    
    public function eliminar($id)
    {
        $tipoEquipo = new TipoEquipoModel();
        $tipoEquipo->delete($id);
        return redirect()->route('tipos_equipos');
    }

    public function buscar($id)
    {
        $tipoEquipo = new TipoEquipoModel();
        $datos['datos'] = $tipoEquipo->where(['tipo_id' => $id])->first();
        return view('form_modificar_tipo_equipo', $datos);
    }

    public function editar()
    {
        $tipoEquipo = new TipoEquipoModel();
        $datos = [
            'tipo_id' => $this->request->getPost('txt_id'),
            'nombre' => $this->request->getPost('txt_nombre')
        ];
        $tipoEquipo->update($datos['tipo_id'], $datos);
        return redirect()->route('tipos_equipos');
    }
}