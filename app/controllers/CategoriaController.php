<?php

require_once __DIR__ . "/../../models/categoria.php";

class CategoriaController {
    public function index(){
        try {
          $modelCategoria = new Categoria();
          $categorias = $modelCategoria->getAll();

            require_once __DIR__ . "/../../views/categorias/index.php";
        } catch (Exception $e) {
            echo "Error en el controlador de categoria" .$e->getMessage();
        }
    }

    public function crear()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
require_once __DIR__ . '/../../views/categorias/crear.php';
        }
    }
}