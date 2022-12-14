<?php
class Conexion
{
    private $connect;
    public function __construct()
    {
    
        try {
            $this->connect = new PDO("pgsql:host=".rutaServidor.";port=".puerto.";dbname=".bd.";",usuario,pass);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            echo "Ocurrió un error con la base de datos: " . $e->getMessage();
        }
    }
    public function connect()
    {
        return $this->connect;
    }
}