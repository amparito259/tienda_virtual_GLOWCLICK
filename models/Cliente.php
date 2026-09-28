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
        $sql = "SELECT id_cliente, nombre, FROM cliente";
        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll();
    }
    

    public function getById($idCliente)
    {
        try {
            $sql = "SELECT * FROM cliente WHERE idCliente = :idCliente";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":idCliente", $idCliente, PDO::PARAM_INT);
            $consulta->execute();

            return $consulta->fetch(); // fetch single record
        } catch (PDOException $e) {
            error_log("Error en getById de Cliente: " . $e->getMessage());
            return false;
        }
    }
}