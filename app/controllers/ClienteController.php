<?php

require_once __DIR__ . "/../../models/Cliente.php";

class ClienteController {
    public function index(){
        try {
          $modelCliente = new Cliente();
          $clientes = $modelCliente->getAll();

            require_once __DIR__ . "/../../views/clientes/index.php";
        } catch (Exception $e) {
            echo "Error en el controlador de cliente" .$e->getMessage();
        }
    }

    public function crear(){
        require_once __DIR__ . '/../../views/clientes/crear.php';
    }

    public function guardar(){
        $id_cliente=$_POST['id_cliente'];
        $nombre=$_POST['nombre'];

        $modelCliente = new Cliente();
        $resultado=$modelCliente->guardar($id_cliente, $nombre);

        if ($resultado) {
            echo "Cliente guardado correctamente.";
            $modelCliente->getAll();
        } else {
            echo "Error al guardar el cliente.";
        }
    }
}