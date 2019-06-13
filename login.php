<?php  
session_start();
if(isset($_SESSION["usuario"])){
    header("Location: menu.php?s=sesionyainiciada");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="estilos/configuracion.css">
</head>
<body>
    <div class="menu">
    <h1>Iniciar Sesión</h1>
    <nav>
        <a href="index.php">Inicio</a>
        
          
    </nav>
    </div>
    <form action="procesar_login.php" method="POST" class="x">
        <div class="login">
            <div class="ed">
                <img src="imagenes/logo.png" class="avatar" alt="Avatar Image">
            </div>
            <?php if(isset($_GET['falta2'])){ ?>
            <p style="color: red">Debe ingresar el correo </p>
            <?php } ?>
            <?php if(isset($_GET['falta3'])){ ?>
            <p style="color: red">Debe ingresar la contraseña </p>
            <?php } ?>
            <?php if(isset($_GET['falta4'])){ ?>
            <p style="color: red">Debe ingresar el correo y la contraseña </p>
            <?php } ?>
            <?php if(isset($_GET['error'])){ ?>
            <p style="color: red">Correo y/o contraseña invalido,intentelo de nuevo</p>

            <?php } ?>
            <?php if(isset($_GET['noexiste'])){ ?>
            <p style="color: red">Correo no registrado </p>
            <?php } ?>
            <div>
                <label for="username">Correo Electronico :</label>
                <input type="email" class="email"placeholder="Correo Electronico..." name="usuario">
            </div>
            <div>
                <label for="password">Contraseña :</label>
                <input class="contra"type="password" placeholder="Contraseña.." name="contraseña" >
            </div>
            <button type="submit" class="boton">LOGEAR</button>

            <div class="u">
                <a href="#">Te olvidastes tu contraseña?</a>
                <br>       
                <p>No tienes una cuenta?<a href="registrar_usuario.php">Crea una</a></p>
            </div>
        </div>
    </form>
</body>
</html>