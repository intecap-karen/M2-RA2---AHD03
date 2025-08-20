<?php
namespace App\Controllers;
use App\Models\UsuarioModel;

class UsuarioController extends BaseController
{
    public function index(): string
    {
        $usuario = new UsuarioModel();
        $datos['datos'] = $usuario->findAll();
        return view('vista_usuarios', $datos);
    }

    public function agregarUsuario()
    {
        $usuario = new UsuarioModel();
        $datos = [
            'usuario_id'=>$this->request->getPost('txt_id'),
            'usuario' =>$this->request->getPost('txt_usuario'),
            'email' =>$this->request ->getPost('txt_email'),
            'password' =>$this->request->getPost('txt_password'),
            'estado' =>$this->request->getPost('txt_estado'),
            'rol_id' =>$this->request->getPost('txt_rol_id'),
        ];
        $usuario->insert($datos);
        return redirect()->route('usuarios');
    }

    public function eliminar($id)
    {
        $usuario = new UsuarioModel();
        $usuario->delete($id);
        return redirect()->route('usuarios');
    }

    public function buscar($id)
    {
        $usuario = new UsuarioModel();
        $datos['datos']=$usuario->where(['usuario_id'=>$id])->first();
        return view('form_modificar_usuario', $datos);
    }

    public function editar()
    {
        $usuario = new UsuarioModel();
        $id = $this->request->getPost('txt_id');
        $datos = [
            'usuario_id' => $this->request->getPost('txt_id'),
            'usuario' => $this->request->getPost('txt_usuario'),
            'email' => $this->request->getPost('txt_email'),
            'password' => $this->request->getPost('txt_password'),
            'estado' => $this->request->getPost('txt_estado'),
            'rol_id' => $this->request->getPost('txt_rol_id'),
        ];
        $usuario->update($id, $datos);
        return redirect()->route('usuarios');
    }
}