<?php
$pdo = new PDO("mysql:host=localhost;dbname=proyecto;charset=utf8","root","");
$user = $_POST["usuario"];
$password = $_POST["contraseña"];

$sql="SELECT * FROM usuarios WHERE email='$user' ";

$resultado=$pdo->query($sql)->fetchAll();
/**$resultado = $pdo->prepare($sql);
$resultado->execute();
$numero_rows = $resultado->fetchAll(); */
if(count($resultado) > 0 ){
    foreach($resultado as $fila){
        if(password_verify($password, $fila['contraseña']) ) {
            session_start();
            $_SESSION["usuario"] = $user;
            $_SESSION["nombres"] = $fila['nombres'];

            header("Location: menu.php");
            exit; 
        }
        else if ($password==""){
            header("Location: login.php?falta3=datosfaltantes");
            exit;
        }
        else{
            header("Location: login.php?error=contraseñaincorrecta");
            exit;
        }
    }
}
else if ($user=="" && $password==""){
    header("Location: login.php?falta4=datosfaltantes");
    exit;
}
else if ($user==""){
    header("Location: login.php?falta2=datosfaltantes");
    exit;
}
else if ($password==""){
    header("Location: login.php?falta3=datosfaltantes");
    exit;
}
else {
    header("Location: login.php?noexiste=corre_no_existe");
    exit;
}
?>