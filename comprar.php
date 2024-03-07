<?php
// Procesamos la compra
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['comprar'])) {
        // Nombre del producto a restar
        $nombre = $_POST['nombre'];

        // Actualizamos los productos en la base de datos
        $sql = "UPDATE info_productos SET cantidad = cantidad - 1 WHERE nombre = '$nombre'";
        
        if ($conn->query($sql) === TRUE) {
            echo "Compra realizada correctamente.";
        } else {
            echo "Error al realizar la compra: " . $conn->error;
        }
    }
}
?>
