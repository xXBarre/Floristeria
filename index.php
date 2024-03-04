<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <script defer src="index.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
        <title>Inicio Bloom</title>
    </head>
    <body>
        <header class="header" id="header">
           <?php include_once("header.php"); ?>
        </header>
        <br><br>
        <main>
            <section class="inicio-carrusel">
                <h2 class="titulitosIndex">Nuestros Productos</h2>
                <p>Regala flores de temporada: la nueva coleccion ha llegado</p>
                <br><br>
                <div class="lodedentro-container">
                    <div class="lodedentros">
                        <div class="lodedentro">
                            <img src="fotos/maceta.png" alt="Flores hermosas">
                        </div>
                        <div class="lodedentro">
                            <img src="fotos/ramos.png" alt="Ramos de flores">
                        </div>
                        <div class="lodedentro">
                            <img src="fotos/regadera.png" alt="Arreglos florales">
                        </div>
                        <div class="lodedentro">
                            <img src="fotos/ramo.jpg" alt="Flores hermosas">
                        </div>
                        <div class="lodedentro">
                            <img src="fotos/palas.png" alt="Ramos de flores">
                        </div>
                        <div class="lodedentro">
                            <img src="fotos/planta.png" alt="Planta">
                        </div>
                    </div>
                    <div class="arrow prev" onclick="prevLodedentro()">&#10094;</div>
                    <div class="arrow next" onclick="nextLodedentro()">&#10095;</div>
                </div>
            </section>
            <br><br><br>
            <section class="esquema">
                <img src="fotos/esquema.png">
            </section>
            <br><br><br>
            <section class="relleno">
                <center><h2 class="titulitosIndex">Formas de Mimar a Quien te Importa</h2></center>
                <p class="relleno-description">Las flores que convierten un día corriente en extraordinario. Las plantas que aportan vida al hogar. Para cualquier ocasión. Para mimar(te).</p>
                <br><br>
                <div class="relleno-images">
                    <div class="relleno-item">
                        <a href="flores.html">
                            <img src="fotos/f1.png" alt="Flores">
                        </a>
                        <br><br> 
                        <p>Flores</p>
                    </div>
                    <div class="relleno-item">
                        <a href="plantas.html">
                            <img src="fotos/p2.png" alt="Plantas">
                        </a>
                        <br><br>
                        <p>Plantas</p>
                    </div>
                    <div class="relleno-item">
                        <a href="objetos.html">
                            <img src="/fotos/o4.png" alt="Objetos">
                        </a>
                        <br><br>
                        <p>Objetos</p>
                    </div>
                </div>
            </section>
            <center><h2 class="titulitosIndex">Nuestras Tiendas</h2></center>
            <section class="tiendas-section">
                <div class="tiendas">
                    <h3>Centro</h3>
                    <p>Dirección: Calle Principal, 123, Madrid</p>
                    <br>
                    <a href="https://www.google.com/maps?q=Calle+Principal,+123,+Madrid" target="_blank">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3041.3710539044155!2d-3.7030219239930977!3d40.33411407145301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4226d5aaea9491%3A0x76a90d849db72afc!2sCalle%20Principal%2C%20123%2C%20Villaverde%2C%2028000%20Madrid!5e0!3m2!1ses!2ses!4v1707563623457!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </a>
                </div>

                <div class="tiendas">
                    <h3>Norte</h3>
                    <p>Dirección: Plaza del Norte, 789, Madrid</p>
                    <br>
                    <a href="https://www.google.com/maps?q=Plaza+del+Norte,+789,+Madrid" target="_blank">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3035.089734609704!2d-3.6973233239861996!3d40.473279771430526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42290d242b12d3%3A0x1f7e776be6a33ab8!2sPl.%20del%20Nte.%2C%20Tetu%C3%A1n%2C%2028029%20Madrid!5e0!3m2!1ses!2ses!4v1707564092484!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </a>
                </div>

                <div class="tiendas">
                    <h3>Este</h3>
                    <p>Dirección: Avenida Este, 456, Madrid</p>
                    <br>
                    <a href="https://maps.app.goo.gl/AZWKGXeoCAnQCudm9" target="_blank">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3035.8940526170513!2d-3.6697710245149633!3d40.45548185328058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42292a1ce589c7%3A0x1a73147ebecf20!2sAv.%20de%20Alfonso%20XIII%2C%2077%2C%20Chamart%C3%ADn%2C%2028016%20Madrid!5e0!3m2!1ses!2ses!4v1707564800688!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </a>
                </div>
            </section>
            <br><br><br>
            <button class="gotop" id="top">
                <i class="fas fa-chevron-up"></i>
            </button>
        </main>
        <br>
        <footer class="footer">
            <?php include_once("footer.php"); ?>
        </footer>
    </body>
</html>
