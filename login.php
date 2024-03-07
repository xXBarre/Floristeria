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
        <div class="conta">
            <img class="cactus" src="fotos/cactus.png" alt="Cactus divertido" onclick="moverCactus()">
            <div class="form-content">
                <h1 id="title">LOGIN</h1>
                <form onsubmit="return validarFormulario();" method="post" action="iniciarsesion.php">
                    <div class="input-group">
                    <div class="input-field">
                        <label for="Correo"><i class="fa-solid fa-envelope"></i></label>
                        <input type="email" id="Correo" name="Correo" placeholder="Correo">
                    </div>
                    <div class="input-field">
                        <label for="Contraseña"><i class="fa-solid fa-lock"></i> </label>
                        <input type="password" id="Contraseña" name="Contraseña" placeholder="Contraseña">
                    </div>
                        <p>Olvidaste tu contraseña <a href="pagina404.html"> Click aquí</a></p>
                    </div>
                    <br><br><br>
                    <div class="btn-field">
                        <button id="signUp" type="button"><a href="register2.php">Registro</a></button>
                        <button id="signIn" type="submit">Login</button>
                    </div>
                </form>
        </div>
    </main>
    <footer class="footer">
        <?php include_once("footer.php"); ?>
    </footer>
</body>
</html>
