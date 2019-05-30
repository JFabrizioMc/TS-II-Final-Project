<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="configuracion.css">
    
</head>
<body>
    <h1>Iniciar Sesion</h1>
    

    <form action="procesar_login.php" method="POST">
        <div class="mod">
            <label name="usuario">Usuario:</label>
            <input type="text" name="user">
        </div>

        <div class="mod" >
            <label name="contraseña">Contraseña:</label>
            <input type="password" name="contraseña" >
        </div>


        <button class="boton">Logear</button>
    
    </form>




    
    
</body>
</html>