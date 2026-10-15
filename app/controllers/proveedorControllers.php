<?php

require_once __DIR__ . "/../../models/proveedor.php";

class ProveedorController {

    public function index(){
        try {
            $modelProveedor = new Proveedor();
            $proveedor = $modelProveedor->getAll();

            require_once __DIR__ . "/../../views/proveedor/index.php";
        } catch (Exception $e) {
            echo "Error en el controlador de proveedor: " . $e->getMessage();
        }
    }

    public function crear(){
        require_once __DIR__ . '/../../views/proveedor/crear.php';
    }

    public function guardar(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = trim($_POST['nombre'] ?? '');
            $ciudad = trim($_POST['ciudad'] ?? '');
            $direccion = trim($_POST['direccion'] ?? '');

            if (empty($nombre)) {
                echo "El nombre del proveedor es obligatorio.";
                return;
            }

            $modelProveedor = new Proveedor();
            $resultado = $modelProveedor->guardar($nombre, $ciudad, $direccion);

            if ($resultado) {
                header("Location: /proveedor");
                exit();
            } else {
                echo "Error al guardar el proveedor.";
            }
        }
    }
}