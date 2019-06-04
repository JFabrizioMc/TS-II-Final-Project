<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/style_registrar.css">
    <title>Registrar Usuario</title>
</head>
<body>
    <h1>Registrar Usuario</h1>
    <form action="proc_registro_usuario.php" method="post">
        <div>
            <label for="">Nombres y Apellidos: </label>
            <input type="text" name="nom">
            <?php if(isset($_GET['f'])){ ?>
            <p style="color: red">Faltan datos</p>
        <?php } ?>
        
        <?php if(isset($_GET['error'])){ ?>
            <p style="color: red">Las contraseñas no coinciden</p>
        <?php } ?>
        </div>
        <div>
            <label>Numero de celular: </label>
            <input type="number" name="cel">
        </div>
        <div>
            <label>Fecha de nacimiento: </label>
            <input type="date" name="fecha">
        </div>
        <div>
           <label for="">Ciudad: </label>
           <select name="ciu">
            <option value="AM">Amazonas</option>
            <option value="AN">Ancash</option>
            <option value="AP">Apurimac</option>
            <option value="AR">Arequipa</option>
            <option value="AY">Ayacucho</option>
            <option value="CA">Cajamarca</option>
            <option value="CLL">Callao</option>
            <option value="CU">Cusco</option>
            <option value="HU">Huancavelica</option>
            <option value="HUA">Huanuco</option>
            <option value="IC">Ica</option>
            <option value="JU">Junin</option>
            <option value="LI">La Libertad</option>
            <option value="LA">Lambayaque</option>
            <option value="LM" selected="true">Lima</option>
            <option value="LO">Loreto</option>
            <option value="MD">Madre de Dios</option>
            <option value="MO">Moquegua</option>
            <option value="PA">Pasco</option>
            <option value="PI">Piura</option>
            <option value="PU">Puno</option>
            <option value="SM">San Martin</option>
            <option value="TA">Tacna</option>
            <option value="TU">Tumbes</option>
            <option value="UC">Ucayali</option>
           </select>
           </div>
        <div>
            <label for="">Correo electronico: </label>
            <input type="email" name="email">
        </div>       
        <div>
            <label for="" id="con">Contraseña: </label>
            <input type="password" name="p1">
            <label for="">Confirmar contraseña: </label>
            <input type="password" name="p2">
        </div>

        <button>Confirmar</button>
    </form>
        
        
</body>
</html>