<?php

require_once __DIR__ . "/../../models/producto.php";

class ProductoController {
    public function index(){
        try {
            $producto = new Producto();
            $productos = $producto->getAll();
            

            require_once __DIR__ . "/../../views/productos/index.php";
        } catch (Exception $e) {
            echo "Error en el controlador de productos" .$e->getMessage();
        }
    }

    public function crear(){
        require_once __DIR__ . '/../../views/productos/crear.php';
    }

    public function guardar(){
        $id_producto=$_POST['id_producto'];
        $nombre=$_POST['nombre'];
        $precio=$_POST['precio'];
        $stock=$_POST['stock'];
        $id_categoria=$_POST['id_categoria'];
        $id_proveedor=$_POST['id_proveedor'];

        $modelProducto = new Producto();
        $resultado = $modelProducto->guardar($id_producto, $nombre, $precio, $stock, $id_categoria, $id_proveedor);

        if ($resultado) {
            echo "Producto guardado correctamente.";
            $modelProducto->getAll();
        } else {
            echo "Error al guardar el producto.";
        }
    }


}