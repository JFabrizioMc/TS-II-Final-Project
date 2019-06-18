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
    <link rel="stylesheet" href="estilos/configuracion.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Mali&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div class="menu">
    <h1>Iniciar Sesión</h1>

    <a href="index.php">Inicio</a>

    </div>
    <form action="procesar_login.php" method="POST" >
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
                <a href="recu_contra.php">Te olvidaste tu contraseña?</a>
                <br>       
                <p>No tienes una cuenta?<a href="registrar_usuario.php">Crea una</a></p>
            </div>
        </div>
    </form>
</body>
</html>