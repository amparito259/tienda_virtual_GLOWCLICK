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
              $sql = "SELECT id_cliente, nombre FROM clientes";
              $consulta = $this->connection->query($sql);
        return $consulta->fetchAll();
        }catch (PDOException $e) {
           echo "Error Mostrando clientes" .$e->getMessage();
        }
      
    }

    public function guardar($id_cliente, $nombre)
    {
        try {
            $sql = "INSERT INTO cliente (id_cliente, nombre) 
            VALUES (:id_cliente, :nombre)";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":id_cliente", $id_cliente);
            $consulta->bindParam(":nombre", $nombre);
            $consulta->execute();
            return true;
        } catch (PDOException $e) {
            echo "Error guardando cliente" . $e->getMessage();
            return false;
        }
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