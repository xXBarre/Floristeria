<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Confirmación de Pedido</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            .container {
                text-align: center;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                background-color: #fff;
            }
            h1 {
                color: #333;
            }
            p {
                color: #666;
                margin-bottom: 20px;
            }
            button {
                background-color: #4caf50;
                color: white;
                padding: 10px 20px;
                font-size: 16px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s;
            }
            button:hover {
                background-color: #45a049;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>¡Confirma tu pedido!</h1>
            <p>Pulsa Continuar para confirmar</p>   
            <form method="post" action="venta.php">
                <button type="submit" name="confirmar">Continuar</button>
            </form>
            <br>
            <form action="index.php"> 
                <button type="submit">Cancelar</button>
            </form>
        </div>
    </body>
</html>

