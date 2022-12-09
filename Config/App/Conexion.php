<?php
class Conexion
{
    private $connect;
    public function __construct()
    {
        /* 
        2 - Hacemos un try para intentarnos conectar al servidor.
        La variable de conexión contendrá el método PDO con los parámetros de acceso: tiposql,host, puerto, dbname, usuario, pass.
        3 - Esta variable también cargará con los atributos de excepción heredados de la clase PDO
        (De esta forma veremos qué errores de conexión se pueden presentar)
        */
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
