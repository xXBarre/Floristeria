<?php
require_once("conexion.php");

$name = $_POST["name"];
$email = $_POST["Correo"];
$password = $_POST["Contraseña"];

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO clientes ( correo, nombre, contraseña) VALUES ('$email', '$name', '$hashedPassword')";

if ($conn->query($sql) === TRUE) {
    $response = array("status" => "success", "message" => "Registro exitoso");
    header('Location: login.php');
} else {
    $response = array("status" => "error", "message" => "Error al registrar: " . $conn->error);
}

$conn->close();

echo json_encode($response);
?>