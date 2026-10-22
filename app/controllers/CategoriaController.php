<?php

require_once __DIR__ . "/../../models/categoria.php";

class CategoriaController
{
    public $modelCategoria;

    public function index()
    {
        try {
            $modelCategoria = new Categoria();
            $categorias = $modelCategoria->getAll();

            require_once __DIR__ . "/../../views/categorias/index.php";
        } catch (Exception $e) {
            echo "Error en el controlador de categoria" . $e->getMessage();
        }
    }
    public function crear()
    {
        require_once __DIR__ . '/../../views/categorias/crear.php';
    }

    public function guardar()
    {
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];

        $modelCategoria = new Categoria();
        $resultado = $modelCategoria->guardar($nombre, $descripcion);

        if ($resultado) {
            header("Location: /categoria");
            exit();
        } else {
            echo "Error al guardar la categoría.";
        }
    }

    //<-- Agregando el método editar 22/10/2026 -->
    public function editar()
    {
        $modelCategoria = new Categoria();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_categoria  = filter_input(INPUT_POST, 'id_categoria', FILTER_VALIDATE_INT);
            $nombre         = filter_input(INPUT_POST, 'nombre', FILTER_DEFAULT);
            $descripcion    = filter_input(INPUT_POST, 'descripcion', FILTER_DEFAULT);
            if (empty($nombre)) {
                echo "El nombre de la categoría es obligatorio.";
                return;
            }

            $actualizado = $modelCategoria->actualizar($id_categoria, $nombre, $descripcion);

            if ($actualizado) {
                header("Location: /categoria");
                exit();
            } else {
                echo "Error al actualizar la categoría.";
            }
        }

        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $categorias = $modelCategoria->getById($id);
        require_once __DIR__ . '/../../views/categorias/editar.php';
    }
}
