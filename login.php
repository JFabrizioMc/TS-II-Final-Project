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
    <h1>Iniciar Sesion</h1>
    <form action="procesar_login.php" method="POST">
            
        <div class="padre_login">
            <?php if(isset($_GET['falta'])){ ?>
                <p style="color: red">Debe ingresar el correo o la contraseña </p>
            <?php } ?>            
            <?php if(isset($_GET['error'])){ ?>
                <p style="color: red">La contraseña o el correo no coinciden , intentelo de nuevo</p>
            <?php } ?>
            <?php if(isset($_GET['noexiste'])){ ?>
                <p style="color: red">El correo no existe en nuestro base de datos</p>
            <?php } ?>
            <div class="div1">
                <label name="usuario">Correo Electronico</label>
                <div class="asd">
                    <div class="hijo">
                        <img src="imagenes/usuario.png" name="usuario">
                    </div>
                    <div class="hijo">
                        <input type="email" name="usuario" placeholder="Example@example.com">
                    </div>
                </div>
            </div>

            <div class="div1">
                <label name="contraseña">Contraseña</label>
                <div class="asd">
                    <div>
                        <img src="imagenes/password.png" name="contraseña">
                    </div>
                    <div>
                        <input type="password" name="contraseña" placeholder="Contraseña...">
                    </div>
                </div>
            </div>
            <button class="boton">Acceder</button>
            <div>
                <p>Olvidastes tu contraseña?<a href="">Click aqui</a></p>
                <p>No tienes una cuenta?<a href="">Click aqui</a></p>
            </div>
        </div>
    </form>
</body>

</html>