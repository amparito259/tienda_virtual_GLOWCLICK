<?php

require_once __DIR__ . "/../../models/Usuario.php";

class UsuarioController {
    public function index(){
        try {
            $modelusuario = new usuario();
            $usuarios = $modelusuario->getAll();

           require_once __DIR__ . '/../../views/usuarios/index.php';
        } catch (Exception $e) {
            echo "Error en el controlador de Usuario" .$e->getMessage();
        }
    }

  public function crear(){
        require_once __DIR__ . '/../../views/usuarios/crear.php';
    }

    public function guardar(){
        $id_usuario=$_POST['id_usuario'];
        $nombre=$_POST['nombre'];
        $correo=$_POST['correo'];
        $contrasena=$_POST['contrasena'];
        $estado=$_POST['estado'];

        $modelUsuario = new Usuario();
        $resultado = $modelUsuario->guardar($id_usuario, $nombre, $correo, $contrasena, $estado);

        if ($resultado) {
            echo "Usuario guardado correctamente.";
            $modelUsuario->getAll();
        } else {
            echo "Error al guardar el usuario.";
        }
    }

    
}