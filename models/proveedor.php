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
        try {
            $sql = "SELECT id_proveedor, nombre, ciudad, direccion FROM proveedor";
            $consulta = $this->connection->query($sql);
            return $consulta->fetchAll();
        } catch (PDOException $e) {
            echo "Error Mostrando proveedores: " . $e->getMessage();
        }
    }

    public function guardar($id_proveedor, $nombre, $ciudad, $direccion)
    {
        try {
            $sql = "INSERT INTO proveedor (id_proveedor, nombre, ciudad, direccion) 
            VALUES (:id_proveedor, :nombre, :ciudad, :direccion)";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":id_proveedor", $id_proveedor);
            $consulta->bindParam(":nombre", $nombre);
            $consulta->bindParam(":ciudad", $ciudad);
            $consulta->bindParam(":direccion", $direccion);
            $consulta->execute();
            return true;
        } catch (PDOException $e) {
            echo "Error guardando proveedor: " . $e->getMessage();
            return false;
        }
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