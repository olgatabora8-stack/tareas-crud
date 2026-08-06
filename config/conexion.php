<?php 

$dsn = 'mysql:host=localhost;dbname=tareas';
$username = 'root';
$password = '';
try {
    $conexion = new PDO($dsn, $username, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Conexión exitosa a la base de datos';
} catch (PDOException $e) {
    echo 'Error de conexión: ' . $e->getMessage();
}