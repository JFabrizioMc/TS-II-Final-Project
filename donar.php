<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos/donacionesxd.css">
    <title>Donaciones</title>
</head>
<body>
    <h1>Donaciones</h1>
    <?php if(isset($_SESSION['usuario'])){?>
    
   <form action="procesar_donar.php" method="post">


        <div>
            <label>Monto: <input type="number" name="donar">£</label>
            
        </div>
        <button>DONAR</button>
    </form>
    <?php if(isset($_GET['aea'])){ ?>
        <p style="color: ligthgreen">Muchas gracias, seguiremos trabajando para mejorar!</p>
   <?php }else if(isset($_GET['t'])){ ?>
        <p style="color: red">Dona p chamare :C somos pobres xd </p>
  <?php } ?>

   <?php }else{ ?>

    <?php header("Location: index.php"); } ?>

</body>
</html>