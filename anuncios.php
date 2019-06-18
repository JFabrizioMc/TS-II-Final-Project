<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anuncios Importantes</title>
</head>
<body>
    <?php if(isset($_SESSION['usuario'])){?> 
    <h1>Enterate de futuras noticias sobre campañas para ayudar a tus mascotas!</h1>
    <?php }else{ ?>
    <?php header("Location: index.php"); } ?>
    
</body>
</html>