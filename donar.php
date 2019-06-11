<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Donaciones</title>
</head>
<body>
    <h1>Donaciones</h1>
    
   <form action="procesar_donar.php" method="post">
        <div>
            <label>Monto: <input type="number" name="donar">£</label>
            
        </div>
        <button>DONAR</button>
    </form>
    <?php if(isset($_GET['aea'])){ ?>
        <p style="color: ligthgreen">Muchas gracias, seguiremos trabajando para mejorar!</p>
   <?php }else if(isset($_GET['t'])){ ?>
        <p style="color: red">Oh iara te rayas causa, esta vacio :'v no te juegues asi p </p>
  <?php } ?>
</body>
</html>