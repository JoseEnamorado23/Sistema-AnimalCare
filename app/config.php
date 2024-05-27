<?php

define("APP_NAME", "AnimalCare");

define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('PASSWORD', '');
define('DB', 'sistemaanimalcare');

$servidor = "mysql:dbname=" . DB . ";host=" . SERVIDOR;

try {
    $pdo = new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    /*echo "conexion exitosa";*/
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

$APPNAME = "AnimalCare";
$url = "http://localhost/veterinaria";




date_default_timezone_set('America/Bogota');
$fechaHora = date('Y-m-d H:i:s');
?>


