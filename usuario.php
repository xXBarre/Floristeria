<?php
require_once("conexion.php");
session_start();

if (!isset($_SESSION["user_email"])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST["cerrar_sesion"])) {
    session_unset();
    session_destroy();
    header('Location: index.php');
    exit();
}

$user_email = $_SESSION["user_email"];
?>

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

input[type="text"]{
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-bottom: 10px;
    color: black;
    text-align: center;
}  

input[type="email"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-bottom: 10px;
    color: black;
    text-align: center;
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
    <main>
    <header class="header" id="header">
           <?php include_once("header.php"); ?>
        </header>
        <br><br>
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
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user_email); ?>" required>

            <button type="submit">Guardar</button>
        </form>
        </div>
        <br><br>
        <form method="post">
        <button type="submit" name="cerrar_sesion">Cerrar Sesión</button>
        </form>

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
    </main>
        <br>
        <footer class="footer">
            <?php include_once("footer.php"); ?>
        </footer>
    </body>
</html>
