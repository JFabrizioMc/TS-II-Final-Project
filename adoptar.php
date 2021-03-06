<?php
session_start();
$pdo = new PDO("mysql:host=localhost;dbname=proyecto;charset=utf8","root","");
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $resultado = $pdo ->query("SELECT * FROM mascotas WHERE id = '$id'");
    $fila = $resultado -> fetch();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos/adoptar_style.css">
    <title>Adoptar</title>
</head>
<body>
    <?php if(isset($_SESSION['usuario'])){?>

    <div class="parteSuperior">
        <img id="logo" src="imagenes/logo.png">
        <nav class="barra">
                <a href="menu.php"><i class="fas fa-home" aria-hidden="true"></i> INICIO</a>
                <a href="registrar_mascota.php"><i class="fas fa-cat"></i> OFRECER EN ADOPCION</a>        
                <a href="anuncios.php"><i class="fas fa-bullhorn"></i> ANUNCIOS</a>
                <a href="donar.php"><i class="fas fa-donate"></i> DONAR</a>
                <a href="logout.php"><i class="fas fa-sign-out-alt"></i> CERRAR SESION</a>
        </nav>
    </div>

    <?php if(isset($_GET['n'])){ ?>
        <p style="color: green">Evaluaremos tu solicitud y te enviaremos un email con nuestra respuesta!</p>
    <?php } ?>        

    <form action="proc_adoptar.php" method="post">
        <div class="line">
            <label for="">Nombres Completo</label>
            <input type="text" name="n" required>
        </div>
        <div class="line">
            <label for="">DNI</label>
            <input type="number" name="dni" required>
        </div>

        <div class="line">
            <label for="">Direccion</label>
            <input type="text" name="d" required>
            <select name="distrito" id="" required>
            <option value="AN">Ancon</option>
            <option value="ATE">Ate</option>
            <option value="BA">Barranco</option>
            <option value="BRE">Breña</option>
            <option value="CA">Carabayllo</option>
            <option value="CL">Cercado de Lima</option>
            <option value="CHA">Chaclacayo</option>
            <option value="CHO">Chorrillos</option>
            <option value="CIE">Cieneguilla</option>
            <option value="CO">Comas</option>
            <option value="ELA">El Agustino</option>
            <option value="HUA">Huaycan</option>
            <option value="IND">Independencia</option>
            <option value="JEM">Jesus Maria</option>
            <option value="LM" selected>La Molina</option>
            <option value="LV">La Victoria</option>
            <option value="LIN">Lince</option>
            <option value="LO">Los Olivos</option>
            <option value="LR">Lurigancho</option>
            <option value="LUR">Lurin</option>
            <option value="MM">Magdalena del Mar</option>
            <option value="MI">Miraflores</option>
            <option value="PAC">Pachacamac</option>
            <option value="PU">Pucusuna</option>
            <option value="PL">Pueblo Libre</option>
            <option value="PP">Puente Piedra</option>
            <option value="PH">Punta Hermosa</option>
            <option value="PN">Punta Negra</option>
            <option value="RI">Rimac</option>
            <option value="SBA">San Bartolo</option>
            <option value="SB">San Borja</option>
            <option value="SI">San Isidro</option>
            <option value="SJL">San Juan de Lurigancho</option>
            <option value="SJM">San Juan de Miraflores</option>
            <option value="SL">San Luis</option>
            <option value="SMP">San Martin de Porres</option>
            <option value="SM">San Miguel</option>
            <option value="SA">Santa Anita</option>
            <option value="SMH">Santa Maria de Huachipa</option>
            <option value="SMM">Santa Maria del Mar</option>
            <option value="SR">Santa Rosa</option>
            <option value="SS">Santiago de Surco</option>
            <option value="SU">Surquillo</option>
            <option value="VES">Villa El Salvador</option>
            <option value="VMT">Villa Maria del Triunfo</option>
            </select>
        </div>
        <div class="line">
            <input type="hidden" name="id" value="<?php echo $id ?>">
        </div>
        <div class="lineB">
            <button>Enviar Solicitud</button>
        </div>   
    </form>

<?php }else{ ?>

<?php header("Location: login.php?i=iniciesesion"); } ?>

    
</body>
</html>