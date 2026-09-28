<?php
require_once __DIR__ . "/../config/Database.php";

class Proveedor {
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getAll()
    {
        $sql = "SELECT id_proveedor, nombre, ciudad, direccion FROM proveedor";
        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll();
    }
    

    public function getById($idProveedor)
    {
        try {
            $sql = "SELECT * FROM proveedor WHERE id_proveedor = :idProveedor";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":idProveedor", $idProveedor, PDO::PARAM_INT);
            $consulta->execute();

            return $consulta->fetch(); // fetch single record
        } catch (PDOException $e) {
            error_log("Error en getById de Proveedor: " . $e->getMessage());
            return false;
        }
    }
}