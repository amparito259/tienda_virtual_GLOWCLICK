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

    //<-- Agregando el método editar 19/10/2026 -->
   public function editar(){
    $modelProducto = new Producto();
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id_producto  = filter_input(INPUT_POST, 'id_producto', FILTER_VALIDATE_INT);
        $nombre       = filter_input(INPUT_POST, 'nombre', FILTER_DEFAULT);
        $precio       = filter_input(INPUT_POST, 'precio', FILTER_VALIDATE_FLOAT); // <-- Aquí decía 'nombre' en vez de 'precio'
        $stock        = filter_input(INPUT_POST, 'stock', FILTER_VALIDATE_INT);
        $id_categoria = filter_input(INPUT_POST, 'id_categoria', FILTER_VALIDATE_INT);
        $id_proveedor = filter_input(INPUT_POST, 'id_proveedor', FILTER_VALIDATE_INT);

        if (empty($nombre)) {
            echo "El nombre del producto es obligatorio.";
            return;
        }
        
        $actualizado = $modelProducto->actualizar($id_producto, $nombre, $precio, $stock, $id_categoria, $id_proveedor);

        if ($actualizado) {
            header("Location: /producto");
            exit();
        } else {
            echo "Error al actualizar el producto.";
        }
    }
    
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $productos = $modelProducto->getById($id);
    require_once __DIR__ . '/../../views/productos/editar.php';
    }

}