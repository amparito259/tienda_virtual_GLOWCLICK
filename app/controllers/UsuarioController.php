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

     //<-- Agregando el método editar 19/10/2026 -->
   public function editar(){
    $modelusuarios = new Usuario();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id_usuario = filter_input(INPUT_POST, 'id_usuario', FILTER_VALIDATE_INT);
        $nombre     = filter_input(INPUT_POST, 'nombre', FILTER_DEFAULT);
        $correo     = filter_input(INPUT_POST, 'correo', FILTER_DEFAULT); // <-- Cambiado
        $contrasena = filter_input(INPUT_POST, 'contrasena', FILTER_DEFAULT); // <-- Cambiado sin tilde y FILTER_DEFAULT
        $estado     = filter_input(INPUT_POST, 'estado', FILTER_DEFAULT);     // <-- Cambiado a FILTER_DEFAULT

        if (empty($nombre)) {
            echo "El nombre del usuario es obligatorio.";
            return;
        }

        $actualizado = $modelusuarios->actualizar($id_usuario, $nombre, $correo, $contrasena, $estado);

        if ($actualizado) {
            header("Location: /usuario");
            exit();
        } else {
            echo "Error al actualizar el usuario.";
        }
    }

    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $usuario = $modelusuarios->getById($id); // <-- Cambiado de $productos a $usuario (singular)
    require_once __DIR__ . '/../../views/usuarios/editar.php';
}
}