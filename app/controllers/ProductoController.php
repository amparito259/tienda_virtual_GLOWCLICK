<?php

require_once __DIR__ . "/../../models/producto.php";

class ProductoController {

    public function index(){
        try {
            $modelProducto = new Producto();
            $productos = $modelProducto->getAll();

            require_once __DIR__ . "/../../views/productos/index.php";
        } catch (Exception $e) {
            echo "Error en el controlador de productos: " . $e->getMessage();
        }
    }

    public function crear(){
        require_once __DIR__ . '/../../views/productos/crear.php';
    }

    public function guardar(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = trim($_POST['nombre'] ?? '');
            $precio = $_POST['precio'] ?? 0;
            $stock = $_POST['stock'] ?? 0;
            $id_categoria = $_POST['id_categoria'] ?? null;
            $id_proveedor = $_POST['id_proveedor'] ?? null;

            if (empty($nombre)) {
                echo "El nombre del producto es obligatorio.";
                return;
            }
            $modelProducto = new Producto();
            $resultado = $modelProducto->guardar($nombre, $precio, $stock, $id_categoria, $id_proveedor);

            if ($resultado) {
                header("Location: /producto");
                exit();
            } else {
                echo "Error al guardar el producto.";
            }
        }
    }
    public function editar(){
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $modelProducto = new Producto();
        $producto = $modelProducto->getById($id);
        require_once __DIR__ . '/../../views/productos/editar.php';
    }
}