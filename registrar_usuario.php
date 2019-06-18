<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/configuracion.css">
    <link href="https://fonts.googleapis.com/css?family=Mali&display=swap" rel="stylesheet">
    <title>Registrar Usuario</title>
</head>
<body>
    <h1 id="headercitoxd">Registrar Usuario</h1>
    <nav class="menu_registrar">
        <a href="index.php">Inicio</a>
    </nav>
    
    <div class="x">
        <form class="login"action="proc_registro_usuario.php" method="post">
    <?php if(isset($_GET['i'])){ ?>
            <p style="color: red">Email ya registrado, intente con otro</p>
            <?php } ?>
        <div>
            <label for="">Nombres y Apellidos </label>
            <input type="text" name="nom" class="input_bar" required>
            
        </div>
        <div>
            <label>Numero de celular </label>
            <input type="number" name="cel" class="input_bar" required>
        </div>
        <div>
            <label>Fecha de nacimiento </label>
            <input type="date" name="fecha" id="input_bar_date" required>
        </div>
        <div>
           <label for="">DNI</label>
           <input type="number" name="dni" class="input_bar" required>
        </div>
        <div>
            <label for="">Correo electronico </label>
            <input type="email" name="email" class="input_bar" required>
        </div>       
        <div>
            <label for="" id="con">Contraseña </label>
            <input type="password" name="p1" class="input_bar" required>
            <label for="">Confirmar contraseña </label>
            <input type="password" name="p2" class="input_bar" required>
        </div>

        <button class="boton">Confirmar</button>
    </form>
    </div>

        
</body>
</html>