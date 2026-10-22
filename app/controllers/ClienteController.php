<?php

require_once __DIR__ . "/../../models/Cliente.php";

class ClienteController {

    public function index(){
        try {
            $modelCliente = new Cliente();
            $clientes = $modelCliente->getAll();

            require_once __DIR__ . "/../../views/clientes/index.php";
        } catch (Exception $e) {
            echo "Error en el controlador de cliente: " . $e->getMessage();
        }
    }

    public function crear(){
        require_once __DIR__ . '/../../views/clientes/crear.php';
    }

    public function guardar(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = trim($_POST['nombre'] ?? '');

            if (empty($nombre)) {
                echo "El nombre del cliente es obligatorio.";
                return;
            }

            $modelCliente = new Cliente();
            $resultado = $modelCliente->guardar($nombre);

            if ($resultado) {
                header("Location: /cliente");
                exit();
            } else {
                echo "Error al guardar el cliente.";
            }
        }
    }

    //<-- Agregando el método editar 22/10/2026 -->
   public function editar(){
    $modelCliente = new Cliente();
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id_cliente  = filter_input(INPUT_POST, 'id_cliente', FILTER_VALIDATE_INT);
        $nombre      = filter_input(INPUT_POST, 'nombre', FILTER_DEFAULT);

        if (empty($nombre)) {
            echo "El nombre del cliente es obligatorio.";
            return;
        }

        $actualizado = $modelCliente->actualizar($id_cliente, $nombre);

        if ($actualizado) {
            header("Location: /cliente");
            exit();
        } else {
            echo "Error al actualizar el cliente.";
        }
    }
    
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $clientes = $modelCliente->getById($id);
    require_once __DIR__ . '/../../views/clientes/editar.php';
    }
}