<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>PRACTICA #11</title>
    </head>
    <body>
        <h1 style="text-align: center;">Registro de Usuario</h1>
        <form action="Insertar.php" method="POST">
            
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required><br><br>
                    
                    <label for="email">Correo electronico:</label>
                    <input type="email" id="email" name="email" required><br><br>
                    
                <label for="edad">Edad:</label>
                <input type="number" id="edad" name="edad" required><br><br>

            <button type="submit">Enviar</button>

        </form>

    </body>
</html>