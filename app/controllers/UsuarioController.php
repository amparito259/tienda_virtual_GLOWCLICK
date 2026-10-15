<?php

require_once __DIR__ . "/../../models/Usuario.php";

class UsuarioController {

    public function index(){
        try {
            $modelUsuario = new Usuario();
            $usuarios = $modelUsuario->getAll();

            require_once __DIR__ . '/../../views/usuarios/index.php';
        } catch (Exception $e) {
            echo "Error en el controlador de Usuario: " . $e->getMessage();
        }
    }

    public function crear(){
        require_once __DIR__ . '/../../views/usuarios/crear.php';
    }

    public function guardar(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = trim($_POST['nombre'] ?? '');
            $correo = trim($_POST['correo'] ?? '');
            $contrasena = $_POST['contrasena'] ?? '';
            $estado = trim($_POST['estado'] ?? 'Activo');

            if (empty($nombre) || empty($correo) || empty($contrasena)) {
                echo "Nombre, correo y contraseña son obligatorios.";
                return;
            }

            // Encriptar la contraseña por seguridad
            $contrasenaHash = password_hash($contrasena, PASSWORD_BCRYPT);

            $modelUsuario = new Usuario();
            $resultado = $modelUsuario->guardar($nombre, $correo, $contrasenaHash, $estado);

            if ($resultado) {
                header("Location: /usuario");
                exit();
            } else {
                echo "Error al guardar el usuario.";
            }
        }
    }
}