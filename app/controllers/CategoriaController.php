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
    public function crear(){
        require_once __DIR__ . '/../../views/categorias/crear.php';
    }

    public function guardar(){
        $id_categoria=$_POST['id_categoria'];
        $nombre=$_POST['nombre'];
        $descripcion=$_POST['descripcion'];

        $modelCategoria = new Categoria();
        $resultado=$modelCategoria->guardar($id_categoria, $nombre, $descripcion);

        if ($resultado) {
            echo "Categoría guardada correctamente.";
            $modelCategoria->getAll();
        } else {
            echo "Error al guardar la categoría.";
        }
    }
}