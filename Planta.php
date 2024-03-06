<?php include_once("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script defer src="index.js"></script>
    <title>Plantas - Bloom</title>
</head>
<body>
  <header class="header" id="header">
    <?php include_once("header.php"); ?>
  </header>
      <main>
        <br>
        <h1 class="objetos">Plantas</h1>
        <br>
        <div class="contenedor" id="contenedor">
            <div>
                <img src="fotos/p1.png" alt="Monstera Deliciosa">
                <div class="informacion">
                    <h2>Monstera Deliciosa <br></h2>
                    <p class="precio">37,99€</p>
                    <br>
                    <button class="bcomprar">Comprar</button>
                </div>
            </div>
            <div>
                <img src="fotos/p2.png" alt="Pachira Aquatica">
                <div class="informacion">
                    <h2>Pachira Aquatica<br></h2>
                    <h4 class="precio">29,00€</h4>
                    <br>
                    <button class="bcomprar">Comprar</button>
                </div>
            </div>
            <div>
                <img src="fotos/p3.png" alt="Kokedama Rosal Rojo">
                <div class="informacion">
                    <h2>Kokedama Rosal Rojo<br></h2>
                    <h4 class="precio">34,55€</h4>
                    <br>
                    <button class="bcomprar">Comprar</button>
                </div>
            </div>
            <div>
                <img src="fotos/p4.png" alt="Anthurium Rosa">
                <div class="informacion">
                    <h2>Anthurium Rosa<br></h2>
                    <h4 class="precio">29,99€</h4>
                    <br>
                    <button class="bcomprar">Comprar</button>
                </div>
            </div>
            <div>
                <img src="fotos/p5.jpg" alt="Combo de plantas">
                <div class="informacion">
                    <h2>Combo de plantas<br></h2>
                    <h4 class="precio">134,55€</h4>
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