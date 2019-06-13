<?php session_start();  ?>
<?php
$pdo = new PDO("mysql:host=localhost;dbname=proyecto;charset=utf8","root","");
$sql1 = "SELECT * FROM mascotas"; 
    
?>
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
                <nav class="barra">
                    <a href="menu.php">INICIO</a>
                    <a href="reportes.php">REPORTAR</a>
                    <a href="registrar_mascota.php">DA EN ADOPCION</a>
                    <a href="adoptar.php">ADOPTAR</a>        
                    <a href="guia.php">ANUNCIOS</a>
                    <a href="opciones.php">OPCIONES</a>
                    <a href="donar.php">DONAR</a>
                    <a href="logout.php">CERRAR SESION</a>
                </nav>
        </div>
     
    </div>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Especie</th>
            <th>Raza</th>
            <th>Edad</th>
            <th>Imagen</th>
            <th>Operaciones</th>
        </tr>
        <?php
    foreach ($pdo-> query($sql1) as $fila)
    {
        ?>
    <tr>
        <th><?php echo $fila["nombre"];?></th>
        <th><?php echo $fila["especie"];?></th>
        <th><?php echo $fila["raza"];?></th>
        <th><?php echo $fila["edad"];?></th>
        <th><a href="imagenes/<?php echo $fila["imagen"];?>"><?php echo $fila["imagen"];?></a></th>
        <th><button>Adoptar</button></th>
        
    </tr>
        <?php
    }
    ?>
    </table>
</body>
</html>