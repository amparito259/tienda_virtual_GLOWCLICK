<?php
require_once __DIR__ . "/../config/Database.php";

class Producto {
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getAll()
    {
        try {
            $sql = "SELECT id_producto, nombre, precio, stock, id_categoria, id_proveedor FROM producto";
            $consulta = $this->connection->query($sql);
            return $consulta->fetchAll();
        } catch (PDOException $e) {
            echo "Error mostrando productos: " . $e->getMessage();
            return [];
        }
    }

    public function guardar($nombre, $precio, $stock, $id_categoria, $id_proveedor)
    {
        try {
            $sql = "INSERT INTO producto (nombre, precio, stock, id_categoria, id_proveedor) 
                    VALUES (:nombre, :precio, :stock, :id_categoria, :id_proveedor)";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":nombre", $nombre);
            $consulta->bindParam(":precio", $precio);
            $consulta->bindParam(":stock", $stock);
            $consulta->bindParam(":id_categoria", $id_categoria);
            $consulta->bindParam(":id_proveedor", $id_proveedor);
            $consulta->execute();

            return $this->connection->lastInsertId();
        } catch (PDOException $e) {
            echo "Error guardando producto: " . $e->getMessage();
            return false;
        }
    }

    public function getById($idProducto)
    {
        try {
            $sql = "SELECT * FROM producto WHERE id_producto = :idProducto";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":idProducto", $idProducto, PDO::PARAM_INT);
            $consulta->execute();

            return $consulta->fetch();
        } catch (PDOException $e) {
            error_log("Error en getById de Producto: " . $e->getMessage());
            return false;
        }
    }
}