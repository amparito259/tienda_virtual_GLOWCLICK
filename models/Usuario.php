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
        try {
            $sql = "SELECT id_usuario, nombre, correo, contrasena, estado FROM usuario";
            $consulta = $this->connection->query($sql);
            return $consulta->fetchAll();
        } catch (PDOException $e) {
            echo "Error mostrando usuarios: " . $e->getMessage();
            return [];
        }
    }

    public function guardar($nombre, $correo, $contrasena, $estado)
    {
        try {
            $sql = "INSERT INTO usuario (nombre, correo, contrasena, estado) 
                    VALUES (:nombre, :correo, :contrasena, :estado)";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":nombre", $nombre);
            $consulta->bindParam(":correo", $correo);
            $consulta->bindParam(":contrasena", $contrasena);
            $consulta->bindParam(":estado", $estado);
            $consulta->execute();
            
            return $this->connection->lastInsertId();
        } catch (PDOException $e) {
            echo "Error guardando usuario: " . $e->getMessage();
            return false;
        }
    }

    public function getById($idUsuario)
    {
        try {
            $sql = "SELECT * FROM usuario WHERE id_usuario = :idUsuario";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":idUsuario", $idUsuario, PDO::PARAM_INT);
            $consulta->execute();

            return $consulta->fetch();
        } catch (PDOException $e) {
            error_log("Error en getById de Usuario: " . $e->getMessage());
            return false;
        }
    }

    //<-- Agregando el método actualizar 22/10/2026 -->
    public function actualizar($id_usuario, $nombre, $correo, $contraseña, $estado){
      try {
            $sql = "UPDATE usuario
                    SET nombre=:nombre, 
                        correo=:correo, 
                        contrasena=:contrasena, 
                        estado=:estado 
                    WHERE id_usuario=:id_usuario";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":id_usuario", $id_usuario);
            $consulta->bindParam(":nombre", $nombre);
            $consulta->bindParam(":correo", $correo);
           $consulta->bindParam(":contrasena", $contrasena); 
            $consulta->bindParam(":estado", $estado);

            return $consulta->execute();;
        } catch (PDOException $e) {
            echo "Error actualizar usuario: " . $e->getMessage();
            return false;
        }
     
    }
}