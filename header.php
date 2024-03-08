<?php 
require_once("conexion.php");
session_start();

$enlaceHeader = isset($_SESSION["user_email"]) ? 'usuario.php' : 'login.php';
$textoEnlace = isset($_SESSION["user_email"]) ? 'Mi Perfil' : 'Login';

?>

<nav class="nav">
    <a href="index.php" class="logo nav-link">Bloom</a>
    <ul class="nav-menu">
        <li class="nav-menu-item">
            <div id="menu">
                <a href="#">Productos</a>
                <ul>
                    <li><a href="flores.php">Flores</a></li>
                    <li><a href="Planta.php">Plantas</a></li>
                    <li><a href="objetos.php">Objetos</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-menu-item">
            <a href="Quienes.php" class="nav-menu-link nav-link">Quienes somos</a>
        </li>
        <li class="nav-menu-item">
            <a href="<?php echo $enlaceHeader; ?>" class="nav-menu-link nav-link"><?php echo $textoEnlace; ?></a>
        </li>
    </ul>
    <div id="carrito">
        <img src="fotos/carro.png" alt="carrito" id="Fcarrito">
    </div>
</nav>
<div class="cesta" id="Cesta"> 
    <p id="cerrar">x</p>
    <div id="productosP">
        <div id="productos"></div>
    </div>
    <br>
    <form method="post" action="confirmar.php">
      <h2>Total = <span name="total" id="suma">0€</span></h2>
      <button id="botonCarro" type="button">Limpiar</button>
      <button name="comprar" id="botonCorro" type="submit">Comprar</button>
    </form>
</div>
