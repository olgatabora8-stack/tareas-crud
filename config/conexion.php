<?php
define('BASE_URL', '/Tareas/');

$dsn = "mysql:host=localhost;dbname=tareas";
$username = "root";
$password = "";

try {
    $conexion = new PDO($dsn, $username, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}