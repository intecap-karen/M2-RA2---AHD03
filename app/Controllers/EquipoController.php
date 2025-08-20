<?php
namespace App\Controllers;
use App\Models\EquipoModel;

class EquipoController extends BaseController
{
    public function index(): string
    {
        $equipo = new EquipoModel();
        $datos['datos'] = $equipo->findAll();
        return view('vista_equipos', $datos);
    }

    public function agregarEquipo()
    {
        $equipo = new EquipoModel();
        $datos = [
            'equipo_id' => $this->request->getPost('txt_id'),
            'no_serie' =>$this->request->getPost('txt_serie'),
            'marca_id' =>$this->request->getPost('txt_marca_id'),
            'descripcion' => $this->request->getPost('txt_desc'),
            'fecha_compra' =>$this->request->getPost('txt_fecha_compra'),
            'precio' =>$this->request->getPost('txt_precio'),
            'tipo_equipo' => $this->request->getPost('txt_tipo_equipo'),
            'empleado_id' => $this->request->getPost('txt_empleado_id'),
        ];
        $equipo->insert($datos);
        return redirect()->route('equipos');
    }

    public function eliminar($id)
    {
        $equipo = new EquipoModel();
        $equipo->delete($id);
        return redirect()->route('equipos');
    }

    public function buscar($id){
        $equipo = new EquipoModel();
        $datos['datos'] = $equipo->where(['equipo_id' => $id])->first();
        return view('form_modificar_equipo', $datos);
    }

    public function editar()
    {
        $equipo = new EquipoModel();
        $datos = [
            'equipo_id' => $this->request->getPost('txt_id'),
            'no_serie' =>$this->request->getPost('txt_serie'),
            'marca_id' =>$this->request->getPost('txt_marca_id'),
            'descripcion' => $this->request->getPost('txt_desc'),
            'fecha_compra' =>$this->request->getPost('txt_fecha_compra'),
            'precio' =>$this->request->getPost('txt_precio'),
            'tipo_equipo' => $this->request->getPost('txt_tipo_equipo'),
            'empleado_id' => $this->request->getPost('txt_empleado_id'),
        ];
        $equipo->update($datos['equipo_id'], $datos);
        return redirect()->route('equipos');
    }
}