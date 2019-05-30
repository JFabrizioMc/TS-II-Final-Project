<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    
</head>
<body>
    <h1>Iniciar Sesion</h1>

    <form action="procesar_login.php" method="POST">
        <div>
            <label name="user">Usuario:</label>
            <input type="text" name="user">
        </div>

        <div>
            <label name="contraseña">Contraseña:</label>
            <input type="password" name="contraseña" >
        </div>


        <button>Logear</button>

    </form>

    
    
</body>
</html>