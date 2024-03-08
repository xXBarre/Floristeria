<?php include_once("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <script defer src="index.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
        <title>Inicio Bloom</title>
        <style>

           

.container {
    padding: 20px;
    background-color: #f4f4f4;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.profile-picture {
    text-align: center;
    margin-bottom: 20px;
}

.profile-picture img {
    width: 200px;
    height: 200px;
    border-radius: 60%;
    object-fit: cover;
    margin-bottom: 50px;
}

#change-image-button {
    padding: 5px 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

#change-image-button:hover {
    background-color: #0062cc;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="email"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-bottom: 10px;
}

button[type="submit"] {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #0062cc;
}
        </style>
    </head>
    <body>
        <header class="header" id="header">
            <nav class="nav">
              <a href="index.html" class="logo nav-link">Bloom</a>
              <ul class="nav-menu">
                <li class="nav-menu-item">
                  <div id="menu">
                    <a href="#">Productos</a>
                    <ul>
                        <li><a href="flores.html">Flores</a></li>
                        <li><a href="Planta.html">Plantas</a></li>
                        <li><a href="objetos.html">Objetos</a></li>
                    </ul>
                  </div>
                </li>
                <li class="nav-menu-item">
                  <a href="Quienes.html" class="nav-menu-link nav-link">Quienes somos</a>
                </li>
                <li class="nav-menu-item">
                  <a href="" class="nav-menu-link nav-link">USUARIO</a>
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
              <h2>Total = <span id="suma"></span></h2>
              <button id="botonCarro">Limpiar</button>
              <button id="botonCorro">Comprar</button>
            </div>
          </header>







          <center>
          <div class="container">
        <h1>PERFIL USUARIO </h1>
        <br>
        <div class="profile-picture">
            <img id="profile-image" src="default-profile.jpg" alt="Foto de perfil">
            <button id="change-image-button">Cambiar foto</button>
        </div>
        <form id="contact-form">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>

            <button type="submit">Guardar</button>
        </form>
    </div>
        <br><br>
        <form method="post">
        <button type="submit" name="cerrar_sesion">Cerrar Sesión</button>

        <script>
        document.getElementById('change-image-button').addEventListener('click', function() {
            const input = document.createElement('input');
            input.type = 'file';
            input.accept = 'image/*';

            input.onchange = function() {
                if (input.files && input.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById('profile-image').src = e.target.result;
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            };

            input.click();
        });
    </script>



    </form>
        <br>
        <footer class="footer">
            <div class="footer-container">
              <div class="footer-section">
                <h2>Contacto</h2>
                <p>Direcciónes: </p>
                <p>Teléfono: 637 600 263</p>
                <p><a href="mailito:2017hugoherrero@gmail.com">Correo electronico: bloom@gmail.com</a></p>
                <p><a id="wasap" class="ventajas" href="https://api.whatsapp.com/send?phone=34637600263&amp;text=Hola%20quisiera%20obtener%20más%20información%20sobre%20algún%20producto%20en%20especial%20?"_blank>
                  Whatsapp</a></p>
              </div>
              <div class="footer-section">
                <h2>Enlaces</h2>
                <ul>
                  <li><a href="index.html">Inicio</a></li>
                  <li><a href="productos.html">Productos</a></li>
                  <li><a href="Quienes.html">Quienes somos </a></li>
                </ul>
              </div>
              <div class="footer-section">
                <h2>Síguenos</h2>
                <div class="social-icons">
                  <a href="#" target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAASFJREFUSEvt161KBVEUBeDvvoCCTQQFMVgUwWrwJ1isBkHEdzBabSbFbDT4BDYFsWoyWAyKaDGIyaQzcAYOA9eZC2eYy+hpZxjWYq219549PS2dXku8hop4EtOJnXjEU4xZVjyOF5I78Y0JvBbkZeJlXCZWW8Ct4KozxF84xD3egqo5HEfuJVec18QaHkoRLWXPr5skXu1TF40Sf2IkUjWPo9AVo1hoSvEtFiPw8yznzT5dkTTjG+SWFucC650jfsZOUPWBu1LGY+G+gb2UGedtM1tjuh1gvw3is6y3t1ISv+MkAOZfnNMIfBsz4b6LqZTEsct/o6r/FXd/cjWS8aDLXt12qlz2cjWDrLe/zerYmcr1tsYITvPKUP1JpJFUgfIDKWhhH+ggzngAAAAASUVORK5CYII="/></a>
                  <a href="https://www.instagram.com/johan_sk9/" target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAoxJREFUSEvl1kvozmkUwPHPXxaKGixcEkLTUGhk4X6NzcitWFiZmCkLCzaIsXFJuWXBgkgpq5mNy2ws3K8lZhrkWpSQSxILG/I7+v319uv3/N73nVf9lWfzvj2/c873Oec5l6dNB622DuL65sF98SM61YnQB9zH03qRrPK4D7ZhFnrUM1T4/hp/Y1XqECnw3MzDwxm4a5PAovg7LMLx4ocycO9M+A5+aBHarv4KPyF+v6wy8AEsaQH6AJ0xsMbGfvxeBQ6FuJ9u/xP8D0bluv9heP7/LbrjY7vdoscD8KgONDzairsI+bGYj0jGWvB1/FxjqxdepMCjcbUCvBo7EGVTuyIfYn8p7uE9RhRkwvubKfAUnE6Al2MPhmYGFmJiLncOf+YJuRMrE/oRmSsp8EycKFG8kIMiO3djRkEmdOJgcU3/5ocrmhmPS82CF+MQ1mUZuynh0VpswUb8USIzARebBUdYw+voRr8kwEcRjWdBHvqi2GTEtXxexayehpMlhqfjVN6BooWWrSNZVs+rAE/FmRQ4PgaguJZhb5ata/JwloEj46PMNiPCXlyTstw43yw4sjGycnDWCHZhdsFqeLsiS7CXuI1+JeBxuJwCx6nOJkLZXk6D8nCOyeXC2F94iH3F1lhjK3rEtRR4ZF4OCbYI5/ba1pcL1jaQlG40lBspcEymZynNfD8mV5RN1Gy0zKjPOVkOxGOhakX4n6TAsf84cUd17FZ+foOeVUMitNdnT5wNrVBKdGPU/la7XzaPYzTeyt9YX4Mf3g5p5CEQsP7ZXI0SaZ+trRwgHhUHiwaqHntd8mn0awOvy6LdGPjHENOqtDwbeVdHpg9r0uW4qudVOo2Am2Q2Jv79gT8BaMhxHzndaXwAAAAASUVORK5CYII="/></a>
                  <a href="#" target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAfpJREFUSEvt1kuoT1EUx/HPjYEkz0J5RUlKDDDxyiOSMhDJQJEyUEhRBmJgQCkJkamJt4wkE4WBxESGTChJmUh5F2fVvv/uPd1z9/73v/lP7q7dGey1f9+91l57rdOjS6OnS1zD4P8W+aEI9ThcxjLMwA+cw2l8S55MSd9PvZ7VwaNxBXvwp8D9aXiK2QPYfsB1LMBYLO9rUwdvrQzv4B62F8DvY1PmgG+wMUXjcZPHB3AhLT7Hzmq+bRBeghcFUXlXRXEqtuBBE3gVWqfCT5zARXyvQQ7ifAH4c3Lg4WChHoWvGFkTjCS5i2vVyV/hI47jZAH4THXoo3W7gbJ6X8rSwTS/IObMAvAxnMqBd2NhlVyLsLZAtMQkNK/mwBvQ7y5KlDM28b6f5cBxt5HFs4YAGBJxHRPwNweO9ZXpHU8aAvhN7BhIp6lkRkU6jL0Y08EBVteeZ0uqCbwf27C4A/BLLG06dBN4Pl5jRAfersOjdsFhvxk3EI2j3XEWRwbblGuLkxFhX4MVhfQnWI9fnYCjnUWSHUqtLceOCO3KQUOkr8cTU8WKZj4vzahe8Q5zI95rlMZLOcPe9XqoI5Ojrs4tFPiNWykqrb+Lkr1NdxyeRoOPP4vpmIPx1X1Hi4v5PhWZ26k6lbD62eSSq23B0g3D4NJIdWzXtVD/A1e4TB/sCCruAAAAAElFTkSuQmCC"/></a>
                </div>
              </div>
            </div>
          </footer>
    </body>
</html>
