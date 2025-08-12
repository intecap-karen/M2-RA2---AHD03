<?php
namespace App\Controllers;
//utilizar el archivp que tiene el modelo
use App\Models\EmpleadosModel;

class EmpleadoController extends BaseController
{
    public function index(): string 
    {
        $empleado= new EmpleadosModel();
        $datos['datos']=$empleado->findAll();
        return view ('vista_empleados', $datos);
    }

    public function agregarEmpleado()
    {
        //crear un objeto de tipo EmpleadosModel
        $empleado = new EmpleadosModel();
        $datos=[
            'empleado_id' =>$this->request->getPost('txt_id'),
            'nombre' =>$this->request->getPost('txt_nombre'),
            'apellido' =>$this->request->getPost('txt_apellido'),
            'telefono' =>$this->request->getPost('txt_tel'),
            'puesto_id' =>$this->request->getPost('txt_puesto_id'),
            'fecha_nacimiento' =>$this->request->getPost('txt_fecha_nacimiento'),
        ];
        $empleado->insert($datos);
        //return $this->index();
        return redirect()->route('empleados');
    }
    
    public function eliminar($id) 
    {
        $empleado = new EmpleadosModel();
        $empleado->delete($id);
        //dos formas de redireccionar 
        return redirect()->route('empleados');
        //return $this->index();
    }

    public function buscar($id) 
    {
        $empleado = new EmpleadosModel();
        //select * from empleado where empleado_id
        $datos['datos']=$empleado->where(['empleado_id'=>$id])->first();
        return view ('form_modificar_empleado', $datos);
    }

    public function editar(){
        $datos=[
            'empleado_id'=>$this->request->getPost('txt_id'),
            'nombre'=>$this->request->getPost('txt_nombre'),
            'apellido'=>$this->request->getPost('txt_apellido'),
            'telefono'=>$this->request->getPost('txt_telefono'),
            'puesto_id'=>$this->request->getPost('txt_puesto_id'),
            'fecha_nacimiento'=>$this->request->getPost('txt_fecha_nacimiento'),
        ];
        //print_t ($datos);
        $empleado= new EmpleadosModel();
        $empleado->update($datos['empleado_id'], $datos);
        //return $this->index();
        return redirect()->route('empleados');
    }
}
?>