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
            echo "Error mostrando proveedores: " . $e->getMessage();
            return [];
        }
    }

    public function guardar($nombre, $ciudad, $direccion)
    {
        try {
            $sql = "INSERT INTO proveedor (nombre, ciudad, direccion) 
                    VALUES (:nombre, :ciudad, :direccion)";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":nombre", $nombre);
            $consulta->bindParam(":ciudad", $ciudad);
            $consulta->bindParam(":direccion", $direccion);
            $consulta->execute();
            
            return $this->connection->lastInsertId();
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

            return $consulta->fetch();
        } catch (PDOException $e) {
            error_log("Error en getById de Proveedor: " . $e->getMessage());
            return false;
        }
    }

    //<-- Agregando el método actualizar 22/10/2026 -->
    public function actualizar($id_proveedor, $nombre, $ciudad, $direccion){
      try {
            $sql = "UPDATE proveedor 
                    SET nombre=:nombre, 
                        ciudad=:ciudad, 
                        direccion=:direccion 
                    WHERE id_proveedor=:id_proveedor";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":id_proveedor", $id_proveedor);
            $consulta->bindParam(":nombre", $nombre);
            $consulta->bindParam(":ciudad", $ciudad);
            $consulta->bindParam(":direccion", $direccion);

            return $consulta->execute();;
        } catch (PDOException $e) {
            echo "Error actualizar el proveedor: " . $e->getMessage();
            return false;
        }
     
    }
}