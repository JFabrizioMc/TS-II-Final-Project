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
    <h1>Ayudalo a encontrar una familia</h1>
    <?php if(isset($_GET['b'])){ ?>
            <p style="color: green">Registro exitoso!</p>
            <?php } ?>        
    <form action="proc_reg_mascota.php" method="post">
    <div>
        <label for="">Nombre</label>
        <input type="text" name="n" required>
    </div>
    <div>
        <label for="">Especie</label>
        <select name="es" id="">
        <option value="PE">Perro</option>
        <option value="GA">Gato</option>
        </select>
    </div>
    <div>
        <label for="">Raza</label>
        <input type="text" name="r" required>
    </div>
    <div>
        <label for="">Edad(Años y meses aproximados)</label>
        <input type="text" name="e" required>
    </div>
    <div>
        <label for="">Subir foto(opcional)<input type="file" name="foto"></label>
        
    </div>
    <button>Registrar</button>
    </form>    
</body>
</html>