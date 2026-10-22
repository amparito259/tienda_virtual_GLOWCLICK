<?php
require_once __DIR__ . "/../config/Database.php";

class Cliente {
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getAll()
    {
        try {
            $sql = "SELECT * FROM clientes";
            $consulta = $this->connection->query($sql);
            return $consulta->fetchAll();
        } catch (PDOException $e) {
            echo "Error Mostrando clientes: " . $e->getMessage();
            return [];
        }
    }

    public function guardar($nombre)
    {
        try {
            $sql = "INSERT INTO clientes (nombre) VALUES (:nombre)";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $consulta->execute();

            return $this->connection->lastInsertId();
        } catch (PDOException $e) {
            echo "Error guardando cliente: " . $e->getMessage();
            return false;
        }
    }

    public function getById($idCliente)
    {
        try {
            $sql = "SELECT * FROM clientes WHERE id_cliente = :idCliente";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":idCliente", $idCliente, PDO::PARAM_INT);
            $consulta->execute();

            return $consulta->fetch();
        } catch (PDOException $e) {
            error_log("Error en getById de Cliente: " . $e->getMessage());
            return false;
        }
    }

    //<-- Agregando el método actualizar 22/10/2026 -->
    public function actualizar($id_cliente, $nombre){
        try {
            $sql = "UPDATE clientes 
                    SET nombre=:nombre 
                    WHERE id_cliente=:id_cliente";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":id_cliente", $id_cliente);
            $consulta->bindParam(":nombre", $nombre);

            return $consulta->execute();
        } catch (PDOException $e) {
            echo "Error actualizando cliente: " . $e->getMessage();
            return false;
        }
    }
}