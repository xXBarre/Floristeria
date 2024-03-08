<?php
// Incluye el archivo de conexión a la base de datos
require_once("conexion.php");

// Obtiene los valores del formulario de registro usando el método POST
$name = $_POST["name"];
$email = $_POST["Correo"];
$password = $_POST["Contraseña"];

// Realiza un hash de la contraseña utilizando el algoritmo por defecto (PASSWORD_DEFAULT)
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Construye la consulta SQL para insertar los datos en la tabla 'clientes'
$sql = "INSERT INTO clientes (correo, nombre, contraseña) VALUES ('$email', '$name', '$hashedPassword')";

// Ejecuta la consulta SQL y verifica si fue exitosa
if ($conn->query($sql) === TRUE) {
    // Si es exitosa, crea una respuesta en formato JSON indicando el éxito y redirige a la página de inicio de sesión
    $response = array("status" => "success", "message" => "Registro exitoso");
    header('Location: login.php');
} else {
    // Si hay un error, crea una respuesta en formato JSON con el estado de error y el mensaje de error
    $response = array("status" => "error", "message" => "Error al registrar: " . $conn->error);
}

// Cierra la conexión a la base de datos
$conn->close();

// Imprime la respuesta en formato JSON
echo json_encode($response);
?>
