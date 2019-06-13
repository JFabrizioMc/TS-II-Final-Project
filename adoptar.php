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
    <title>Document</title>
</head>
<body>
    
<h1>Registros</h1>
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