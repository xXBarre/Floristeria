<?php
require_once("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["Correo"];
    $password = $_POST["Contraseña"];

    $stmt = $conn->prepare("SELECT correo, contraseña FROM clientes WHERE correo = ? AND contraseña = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        session_start();
        $_SESSION["user_email"] = $user["correo"];
        $response = array("status" => "success", "message" => "Inicio de sesión exitoso");
        header('Location: index.php');
        exit(); 
    } else {
        $response = array("status" => "error", "message" => "Credenciales incorrectas");
        header('Location: login2.php');
        exit();  
    }
} else {
    header("HTTP/1.1 403 Forbidden");
    echo "Acceso prohibido";
    exit();  
}

$conn->close();
?>