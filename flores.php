<?php include_once("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Flores - Bloom</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
<script defer src="index.js"></script>
</head>
  <body>
    <header class="header" id="header">
      <?php include_once("header.php"); ?>
    </header>
    <main>
      <br>
      <h1 class="objetos">Flores</h1>
      <br>
      <div class="contenedor" id="contenedor">
        <div>
          <img src="fotos/f1.png" alt="Monstera Deliciosa">
          <div class="informacion">
              <h2>Orquídea Bicolor <br></h2>
              <p class="precio">35€</p>
              <br>
              <button class="bcomprar">Comprar</button>
          </div>
        </div>
        <div>
          <img src="fotos/f2.png" alt="Pachira Aquatica">
          <div class="informacion">
              <h2>Ramo de 40 tulipanes<br></h2>
              <h4 class="precio">50€</h4>
              <br>
              <button class="bcomprar">Comprar</button>
          </div>
        </div>
        <div>
          <img src="fotos/f3.png" alt="Kokedama Rosal Rojo">
          <div class="informacion">
              <h2>Rosal + Mini Rosa<br></h2>
              <h4 class="precio">34€</h4>
              <br>
              <button class="bcomprar">Comprar</button>
          </div>
        </div>
        <div>
          <img src="fotos/f4.png" alt="Kokedama Rosal Rojo">
          <div class="informacion">
              <h2>Jardín Eterno<br></h2>
              <h4 class="precio">69€</h4>
              <br>
              <button class="bcomprar">Comprar</button>
          </div>
        </div>
        <div>
          <img src="fotos/f5.png" alt="Kokedama Rosal Rojo">
          <div class="informacion">
              <h2>Lirios Blancos y Rosados<br></h2>
              <h4 class="precio">34€</h4>
              <br>
              <button class="bcomprar">Comprar</button>
          </div>
        </div>
        <div>
          <img src="fotos/f6.png" alt="Kokedama Rosal Rojo">
          <div class="informacion">
            <h2>Anthurium Lila<br></h2>
            <h4 class="precio">29€</h4>
            <br>
            <button class="bcomprar">Comprar</button>
          </div>
        </div>
      </div>
      <button class="gotop" id="top">
        <i class="fas fa-chevron-up"></i>
      </button>
    </main>
    <br><br>
    <footer class="footer">
      <?php include_once("footer.php"); ?>
    </footer>
  </body>
</html>

