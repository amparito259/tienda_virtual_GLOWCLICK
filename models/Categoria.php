<?php
require_once __DIR__ . "/../config/Database.php";

class Categoria {
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getAll()
    {
        try {
            $sql = "SELECT * FROM categoria";
            $consulta = $this->connection->query($sql);
            return $consulta->fetchAll();
        } catch (PDOException $e) {
           echo "Error Mostrando categorias" .$e->getMessage();
        }
        
    }
    
    public function guardar($nombre, $descripcion) //falto corregir
    {
        try {
            $sql = "INSERT INTO categoria (nombre, descripcion) 
            VALUES (:nombre, :descripcion)";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":nombre", $nombre );
            $consulta->bindParam(":descripcion", $descripcion );
            $consulta->execute();

            return $this->connection->lastInsertId(); // Return the ID of the newly inserted category
        } catch (PDOException $e) {
            echo "Error guardando categoria" . $e->getMessage();
        }
    }

    
    public function getById($idCategoria)
    {
        try {
            $sql = "SELECT * FROM categoria WHERE idCategoria = :idCategoria";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":idCategoria", $idCategoria, PDO::PARAM_INT);
            $consulta->execute();

            return $consulta->fetch(); // fetch single record
        } catch (PDOException $e) {
            error_log("Error en getById de Categoria: " . $e->getMessage());
            return false;
        }
    }
}