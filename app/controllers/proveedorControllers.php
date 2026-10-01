<?php

require_once __DIR__ . "/../../models/proveedor.php";

class ProveedorController {
    public function index(){
        try {
            $modelProveedor = new Proveedor();
            $proveedor = $modelProveedor->getAll();

            require_once __DIR__ . "/../../views/proveedor/index.php";
        } catch (Exception $e) {
            echo "Error en el controlador de proveedor" .$e->getMessage();
        }
    }

   public function crear(){
        require_once __DIR__ . '/../../views/proveedor/crear.php';
    }

    public function guardar(){
        $id_proveedor = $_POST['id_proveedor'] ?? null;
        $nombre = $_POST['nombre'] ?? null;
        $ciudad = $_POST['ciudad'] ?? null;
        $direccion = $_POST['direccion'] ?? null;

        $modelProveedor = new Proveedor();
        $resultado = $modelProveedor->guardar($id_proveedor, $nombre, $ciudad, $direccion);

        if ($resultado) {
            echo "Proveedor guardado correctamente.";
            $modelProveedor->getAll();
        } else {
            echo "Error al guardar el proveedor.";
        }
    }
}