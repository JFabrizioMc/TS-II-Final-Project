<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Usuario</title>
    <link rel="stylesheet" href="estilos/style_registrar.css">
</head>
<body>
    <h1>Registrar Usuario</h1>
    <form action="proc_registro_usuario.php" method="post">
        <div>
            <label for="">Nombres y Apellidos: </label>
            <input type="text" name="n">
        </div>
        <div>
            <label for="">Numero de celular: </label>
            <input type="number">
        </div>
        <div>
            <label for="">Fecha de nacimiento: </label>
            <input type="date" name="f">
        </div>
        <div>
           <label for="">Ciudad: </label>
           <select name="Ciudad:" id="" name="c">
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
            <option value="LM">Lima</option>
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
            <input type="email" name="e">
        </div>
        <div>
            <label for="" id="con">Contraseña: </label>
            <input type="password" name="p1">
            <label for="">Confirmar contraseña: </label>
            <input type="password" name="p2">
        </div>

        <button>CONFIRMAR</button>
    </form>
    <footer>
        <p></p>
    </footer>
</body>
</html>