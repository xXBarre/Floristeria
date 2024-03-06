<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "floristeria";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
//linea necesaria para la conexion en el resto de .php "require_once("conexion.php")";
?>

