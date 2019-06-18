<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos/registrar_mascota.css">
    <title>Registrar mascota</title>
</head>
<body>
    <?php if(isset($_SESSION['usuario'])){?>

    <a href="menu.php">Inicio</a>
    <h1>Ayudalo a encontrar una familia</h1>
    <?php if(isset($_GET['b'])){ ?>
            <p style="color: green">Registro exitoso!</p>
    <?php } ?>        
    <form action="proc_reg_mascota.php" method="post" enctype="multipart/form-data" >

    <div class="line">
        <label for="">Nombre</label>
        <input type="text" name="n" required>
    </div>

    <div id="lineR">
        <label for="" id="labelSex">Sexo</label>
        <input class="radioB" type="radio" name="sexo" value="Macho"  required>Macho
        <input class="radioB" type="radio" name="sexo" value="Hembra" required>Hembra
        <input class="radioB" type="radio" name="sexo" value="NA" required>N.A
    </div>
    
    <div class="line">
        <label for="">Especie</label>
        <select name="es" id="">
        <option value="PE">Perro</option>
        <option value="GA">Gato</option>
        </select>
    </div>

    <div class="line">
        <label for="">Raza</label>
        <input type="text" name="r" required>
    </div>

    <div class="line">
        <label for="">Edad(Años y meses aproximados)</label>
        <input type="text" name="e" required>
    </div>

    <div class="line">
        <label for="">Subir foto(opcional)</label>
        <input type="file" name="foto">  
    </div>
    
    <div class="boton">
        <button>Registrar</button>
    </div>
    </form>    

    <?php }else{ ?>
    
    <?php header("Location: login.php?i=iniciesesion"); } ?>

</body>
</html>