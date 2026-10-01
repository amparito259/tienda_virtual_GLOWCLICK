<?php

require_once __DIR__ . "/../../models/Venta.php";

class VentaController {
    public function index(){
        try {
            $modelVenta = new Venta ();
            $ventas = $modelVenta->getAll();

            require_once __DIR__ . "/../../views/Ventas/index.php";
        } catch (Exception $e) {
            echo "Error en el controlador de Venta" .$e->getMessage();
        }
    }

   public function crear(){
        require_once __DIR__ . '/../../views/ventas/crear.php';
    }

    public function guardar(){
        $id_venta=$_POST['id_venta'];
        $id_cliente=$_POST['id_cliente'];
        $fecha=$_POST['fecha'];
        $total=$_POST['total'];

        $modelVenta = new Venta();
        $resultado = $modelVenta->guardar($id_venta, $id_cliente, $fecha, $total);

        if ($resultado) {
            echo "Venta guardada correctamente.";
            $modelVenta->getAll();
        } else {
            echo "Error al guardar la venta.";
        }
    }
}