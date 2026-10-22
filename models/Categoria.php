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

    
    public function getById($id_categoria)
{
    try {
        $sql = "SELECT * FROM categoria WHERE id_categoria = :id_categoria";
        $consulta = $this->connection->prepare($sql);
        $consulta->bindParam(":id_categoria", $id_categoria, PDO::PARAM_INT);
        $consulta->execute();

        return $consulta->fetch(); 
    } catch (PDOException $e) {
        error_log("Error en getById de Categoria: " . $e->getMessage());
        return false;
    }
}

//<-- Agregando el método actualizar 22/10/2026 -->
    public function actualizar($id_categoria, $nombre, $descripcion){
      try {
            $sql = "UPDATE categoria 
                    SET nombre=:nombre, 
                        descripcion=:descripcion 
                    WHERE id_categoria=:id_categoria";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":id_categoria", $id_categoria);
            $consulta->bindParam(":nombre", $nombre);
            $consulta->bindParam(":descripcion", $descripcion);

            return $consulta->execute();;
        } catch (PDOException $e) {
            echo "Error actualizar categoría: " . $e->getMessage();
            return false;
        }
     
    }
}