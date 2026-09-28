<?php
require_once __DIR__ . "/../config/Database.php";

class Usuario {
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getAll()
    {
        $sql = "SELECT id_usuario, nombre, correo, contrasena, estado FROM usuario";
        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll();
    }
    

    public function getById($idUsuario)
    {
        try {
            $sql = "SELECT * FROM usuario WHERE id_usuario = :idUsuario";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":idUsuario", $idUsuario, PDO::PARAM_INT);
            $consulta->execute();

            return $consulta->fetch(); // fetch single record
        } catch (PDOException $e) {
            error_log("Error en getById de Usuario: " . $e->getMessage());
            return false;
        }
    }
}