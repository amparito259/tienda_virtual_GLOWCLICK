<?php

require_once __DIR__ . "/../../models/Cliente.php";

class ClienteController {
    public function index(){
        try {
            $database = new Database();
            $cliente = new Cliente($database->getConnection());

            require_once __DIR__ . "/../../views/clientes/index.php";
        } catch (Exception $e) {
            echo "Error en el controlador de cliente" .$e->getMessage();
        }
    }

    public function crear()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
require_once __DIR__ . '/../../views/clientes/crear.php';
        }
    }
}