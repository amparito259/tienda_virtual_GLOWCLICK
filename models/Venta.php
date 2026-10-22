<?php
require_once __DIR__ . "/../config/Database.php";

class Venta {
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getAll()
    {
        try {
            $sql = "SELECT id_venta, id_cliente, fecha, total FROM ventas";
            $consulta = $this->connection->query($sql);
            return $consulta->fetchAll();
        } catch (PDOException $e) {
            echo "Error mostrando ventas: " . $e->getMessage();
            return [];
        }
    }

    public function guardar($id_cliente, $fecha, $total)
    {
        try {
            $sql = "INSERT INTO ventas (id_cliente, fecha, total) 
                    VALUES (:id_cliente, :fecha, :total)";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":id_cliente", $id_cliente);
            $consulta->bindParam(":fecha", $fecha);
            $consulta->bindParam(":total", $total);
            $consulta->execute();
            
            return $this->connection->lastInsertId();
        } catch (PDOException $e) {
            echo "Error guardando venta: " . $e->getMessage();
            return false;
        }
    }

    public function getById($idVenta)
    {
        try {
            $sql = "SELECT * FROM ventas WHERE id_venta = :idVenta";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":idVenta", $idVenta, PDO::PARAM_INT);
            $consulta->execute();

            return $consulta->fetch();
        } catch (PDOException $e) {
            error_log("Error en getById de Venta: " . $e->getMessage());
            return false;
        }
    }


        //<-- Agregando el método actualizar 22/10/2026 -->
    public function actualizar($id_ventas, $id_cliente, $fecha, $total){
      try {
            $sql = "UPDATE ventas
                    SET fecha=:fecha, 
                        total=:total 
                    WHERE id_ventas=:id_ventas";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":id_ventas", $id_ventas);
            $consulta->bindParam(":id_cliente", $id_cliente);
            $consulta->bindParam(":fecha", $fecha);
            $consulta->bindParam(":total", $total);

            return $consulta->execute();;
        } catch (PDOException $e) {
            echo "Error actualizar ventas: " . $e->getMessage();
            return false;
        }
     
    }
}