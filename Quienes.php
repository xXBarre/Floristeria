<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <script defer src="index.js"></script>
      <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
      <title>Conocenos - Bloom</title>
  </head>
  <body>
    <header class="header" id="header">
      <?php include_once("header.php"); ?>
   </header>
      <br><br>
    <main>
      <div class="video-container">
        <video loop="true" muted autoplay>
          <source src="fotos/flores.mp4" type="video/mp4">
        </video>
      </div>
        <div class="contenido">
            <h2>¿Quiénes somos?</h2>
            <p>En febrero de 2021 nace Bloom de la unión de un grupo de amigos ligados <br> a la exportación de plantas y la comercialización de fertilizantes. <br> Bloom tiene como meta promover la exportación de calidad de nuestra <br> naturaleza en España. Utilizando los recursos de nuestro propio país para <br> poder proporcionar productos frescos recién cogidos del campo. En un <br> principio empezamos con una sola tienda en el centro de Madrid y nos <br> hemos ido expandiendo. Queremos promover más compañías con este <br> tipo de objetivos y conseguir el bienestar de nuestra flora.</p>
        </div>
      </div>
      <div class="plantilla">
        <h2>Nuestro equipo</h2>
          <div class="equipo">
            <div class="miembro" onmouseover="mostrarInfo(this)" onmouseout="ocultarInfo(this)">
                <img src="fotos/Nico.png" alt="Trabajador 1">
                <div class="info-overlay">
                    <p>Nicolas Barrera</p>
                    <p>Agricultor</p>
                </div>
            </div>
            <div class="miembro" onmouseover="mostrarInfo(this)" onmouseout="ocultarInfo(this)">
                <img src="fotos/Laura.jpg" alt="Trabajador 2">
                <div class="info-overlay">
                    <p>Laura Sanchez-Seco</p>
                    <p>Programadora</p>
                </div>
            </div>
            <div class="miembro" onmouseover="mostrarInfo(this)" onmouseout="ocultarInfo(this)">
                <img src="fotos/Hugo.png" alt="Trabajador 3">
                <div class="info-overlay">
                    <p>Hugo Herrero</p>
                    <p>Camionero</p>
                </div>
            </div>
            <div class="miembro" onmouseover="mostrarInfo(this)" onmouseout="ocultarInfo(this)">
                <img src="fotos/Alba.jpg" alt="Trabajador 4">
                <div class="info-overlay">
                    <p>Alba Herrera</p>
                    <p>Florista</p>
                </div>
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