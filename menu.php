<?php session_start();  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/menuStyle.css">
    <title>Menu Principal</title>
</head>
<body>
    <div class="flex-container1">
        <img src="imagenes/logo.png">
        <p style="color:black">Bienvenido <?php echo $_SESSION["nombres"] ?>!</p>
        <div class="subContainer1">
            <h1>Animal Hope for Life AHL</h1>
                <nav class="barra   ">
                    <a href="menu.php">INICIO</a>
                    <a href="reportes.php">REPORTAR</a>
                    <a href="registrar_mascota.php">DA EN ADOPCION</a>
                    <a href="adoptar.php">ADOPTAR</a>        
                    <a href="guia.php">GUIA</a>
                    <a href="opciones.php">OPCIONES</a>
                    <a href="donar.php">DONAR</a>
                    <a href="logout.php">CERRAR SESION</a>
                </nav>
        </div>
     
    </div>
  
</body>
</html>