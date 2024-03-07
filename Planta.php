<?php include_once("conexion.php"); ?>
<?php include_once("head.php"); ?>
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
                        <p class="precio">37€</p>
                        <br>
                        <button class="bcomprar">Comprar</button>
                    </div>
                </div>
                <div>
                    <img src="fotos/p2.png" alt="Pachira Aquatica">
                    <div class="informacion">
                        <h2>Pachira Aquatica<br></h2>
                        <h4 class="precio">29€</h4>
                        <br>
                        <button class="bcomprar">Comprar</button>
                    </div>
                </div>
                <div>
                    <img src="fotos/p3.png" alt="Kokedama Rosal Rojo">
                    <div class="informacion">
                        <h2>Kokedama Rosal Rojo<br></h2>
                        <h4 class="precio">34€</h4>
                        <br>
                        <button class="bcomprar">Comprar</button>
                    </div>
                </div>
                <div>
                    <img src="fotos/p4.png" alt="Anthurium Rosa">
                    <div class="informacion">
                        <h2>Anthurium Rosa<br></h2>
                        <h4 class="precio">29€</h4>
                        <br>
                        <button class="bcomprar">Comprar</button>
                    </div>
                </div>
                <div>
                    <img src="fotos/p5.jpg" alt="Combo de plantas">
                    <div class="informacion">
                        <h2>Combo de plantas<br></h2>
                        <h4 class="precio">134€</h4>
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