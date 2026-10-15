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
}