<?php
include_once("conexion.php");

// Verificar si se ha enviado el formulario de compra
if (isset($_POST['confirmar'])) {
    // Obtener el precio total y la cantidad de productos desde las cookies
    $precioTotal = $_COOKIE['totalPrecio'];
    $valorCookie = json_decode($_COOKIE['productos']);
    $numProductos = count($valorCookie);

    // Insertar información de la venta en la tabla info_venta
    $queryInsertVenta = "INSERT INTO inf_venta (fecha, cantidad, precio) VALUES (CURDATE(), $numProductos, $precioTotal)";
    mysqli_query($conn, $queryInsertVenta);    

    //Queda poner lo de la compra en el codigo, creo que tiene que ir aqui prueba ;)

    // Limpiar el carrito después de realizar la compra
    setcookie('productos', '', time() - 3600, '/');
    setcookie('totalPrecio', '', time() - 3600, '/');

    header('Location: index.php');
}
?>


