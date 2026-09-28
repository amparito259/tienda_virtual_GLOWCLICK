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
        $sql = "SELECT id_venta, id_cliente, fecha, total FROM ventas";
        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll();
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