<?php
// @author Yo porque soy la mondá, obviamente
/*
Conectando a la bd
 1 - creamos e identificamos las variables de conexión a la bd
*/
$usuario = "root";
$pass = "";
$bd = "torneo_ping_pong_bogota";
$rutaServidor = "127.0.0.1";
$puerto = "3456";
/* 
2 - Hacemos un try para intentarnos conectar al servidor.
La variable de conexión contendrá el método PDO con los parámetros de acceso: tiposql,host, puerto, dbname, usuario, pass.
3 - Esta variable también cargará con los atributos de excepción heredados de la clase PDO
(De esta forma veremos qué errores de conexión se pueden presentar)
*/
try {
    $connection = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$bd,$usuario,$pass");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Ocurrió un error con la base de datos: " . $e->getMessage();
}
/*
4 - Mandar las posibles excepciones del catch a una variable $e y mostrarlos con $e->getMessage 
*/
