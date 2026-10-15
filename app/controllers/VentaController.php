<?php

require_once __DIR__ . "/../../models/Venta.php";

class VentaController {

    public function index(){
        try {
            $modelVenta = new Venta();
            $ventas = $modelVenta->getAll();

            require_once __DIR__ . "/../../views/ventas/index.php";
        } catch (Exception $e) {
            echo "Error en el controlador de Venta: " . $e->getMessage();
        }
    }

    public function crear(){
        require_once __DIR__ . '/../../views/ventas/crear.php';
    }

    public function guardar(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_cliente = trim($_POST['id_cliente'] ?? '');
            $fecha = trim($_POST['fecha'] ?? '');
            $total = trim($_POST['total'] ?? 0);

            if (empty($id_cliente) || empty($fecha) || empty($total)) {
                echo "El cliente, la fecha y el total son obligatorios.";
                return;
            }

            $modelVenta = new Venta();
            $resultado = $modelVenta->guardar($id_cliente, $fecha, $total);

            if ($resultado) {
                header("Location: /venta");
                exit();
            } else {
                echo "Error al guardar la venta.";
            }
        }
    }
}