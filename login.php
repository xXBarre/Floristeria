<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pagina de Registro y Login</title>
    <script defer src="index.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <header class="header" id="header">
    <?php include_once("header.php"); ?>
 </header>
    <main>
    <!-- Elemento para mostrar el chiste -->
    <div id="chisteBox"></div>
        <div class="conta">
          <img class="cactus" src="fotos/cactus.png" alt="Cactus divertido" onclick="moverCactus()">
            <div class="form-content">
                <h1 id="title">Registro</h1>
                <form onsubmit="return validarFormulario();">
                  <div class="input-group">
                      <div class="input-field" id="nameInput">
                          <i class="fa-solid fa-user"></i>
                          <input type="text" placeholder="Nombre" id="Nombre">
                      </div>
              
                      <div class="input-field">
                          <i class="fa-solid fa-envelope"></i>
                          <input type="email" placeholder="Correo" id="Correo">
                      </div>
              
                      <div class="input-field">
                          <i class="fa-solid fa-lock"></i>
                          <input type="password" placeholder="Contraseña" id="Contraseña">
                      </div>
              
                      <div class="input-field" id="confirmPasswordInput">
                          <i class="fa-solid fa-lock"></i>
                          <input type="password" placeholder="Confirmar Contraseña" id="ContraseñaConf">
                      </div>
              
                      <p>Olvidade tu contraseña <a href="pagina 404.html"> Click aquí</a></p>
                  </div>
                  <br><br><br>
                  <div class="btn-field">
                      <button id="signUp" type="submit"> Registro </button>
                      <button id="signIn" type="submit"> Login </button>
                  </div>
              </form>
            </div>
        </div>
        <button class="gotop" id="top">
          <i class="fas fa-chevron-up"></i>
      </button>
    </main>
    <footer class="footer">
      <?php include_once("footer.php"); ?>
  </footer>
  </body>
</html>
