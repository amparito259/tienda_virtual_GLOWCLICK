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

     //<-- Agregando el método editar 19/10/2026 -->
   public function editar(){
    $modelventa = new Venta();
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id_ventas  = filter_input(INPUT_POST, 'id_ventas', FILTER_VALIDATE_INT);
        $id_cliente       = filter_input(INPUT_POST, 'id_cliente', FILTER_DEFAULT);
        $fecha      = filter_input(INPUT_POST, 'fecha', FILTER_VALIDATE_FLOAT);
        $total     = filter_input(INPUT_POST, 'total', FILTER_VALIDATE_INT);

        if (empty($nombre)) {
            echo "El nombre de la venta es obligatorio.";
            return;
        }
        
        $actualizado = $modelventa->actualizar($id_ventas, $id_cliente, $fecha, $total);

        if ($actualizado) {
            header("Location: /venta");
            exit();
        } else {
            echo "Error al actualizar la venta.";
        }
    }
    
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $productos = $modelventa->getById($id);
    require_once __DIR__ . '/../../views/ventas/editar.php';
    }
}