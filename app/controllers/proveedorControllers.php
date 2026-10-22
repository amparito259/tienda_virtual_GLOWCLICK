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

    //<-- Agregando el método editar 22/10/2026 -->
   public function editar(){
    $modelproveedor = new Proveedor();
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id_proveedor  = filter_input(INPUT_POST, 'id_proveedor', FILTER_VALIDATE_INT);
        $nombre         = filter_input(INPUT_POST, 'nombre', FILTER_DEFAULT);
        $ciudad   = filter_input(INPUT_POST, 'ciudad', FILTER_DEFAULT);
        $direccion   = filter_input(INPUT_POST, 'direccion', FILTER_DEFAULT);
        if (empty($nombre)) {
            echo "El nombre del proveedor es obligatorio.";
            return;
        }

        $actualizado = $modelproveedor->actualizar($id_proveedor, $nombre, $ciudad, $direccion);

        if ($actualizado) {
            header("Location: /proveedor");
            exit();
        } else {
            echo "Error al actualizar la proveedor.";
        }
    }

   $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $proveedor = $modelproveedor->getById($id);
    require_once __DIR__ . '/../../views/proveedor/editar.php';
    }
}
