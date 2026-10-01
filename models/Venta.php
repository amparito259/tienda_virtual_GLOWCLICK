<?php
require_once __DIR__ . "/../config/Database.php";

class Venta {
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getAll()
    {
        try {
            $sql = "SELECT id_venta, id_cliente, fecha, total FROM ventas";
            $consulta = $this->connection->query($sql);
            return $consulta->fetchAll();
        } catch (PDOException $e) {
            echo "Error Mostrando ventas: " . $e->getMessage();
        }
    }

    public function guardar($id_venta, $id_cliente, $fecha, $total)
    {
        try {
            $sql = "INSERT INTO ventas (id_venta, id_cliente, fecha, total) 
            VALUES (:id_venta, :id_cliente, :fecha, :total)";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":id_venta", $id_venta);
            $consulta->bindParam(":id_cliente", $id_cliente);
            $consulta->bindParam(":fecha", $fecha);
            $consulta->bindParam(":total", $total);
            $consulta->execute();
            return true;
        } catch (PDOException $e) {
            echo "Error guardando venta: " . $e->getMessage();
            return false;
        }
    }
    

    public function getById($idVenta)
    {
        try {
            $sql = "SELECT * FROM ventas WHERE id_venta = :idVentas";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":idVentas", $idVenta, PDO::PARAM_INT);
            $consulta->execute();

            return $consulta->fetch(); // fetch single record
        } catch (PDOException $e) {
            error_log("Error en getById de Venta: " . $e->getMessage());
            return false;
        }
    }
}