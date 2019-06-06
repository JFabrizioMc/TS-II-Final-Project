<?php
$pdo = new PDO("mysql:host=localhost;dbname=proyecto;charset=utf8","root","");

$user = $_POST["usuario"];
$password = $_POST["contraseña"];

$sql="SELECT * FROM usuarios WHERE email='$user' ";

$resultado = $pdo->prepare($sql);
$resultado->execute();
$numero_rows = $resultado->fetchAll();



if(count($numero_rows) > 0 ){
    foreach($numero_rows as $fila){
        if(password_verify($password, $fila['contraseña']) ) {
            header("Location: index.php"); 
        }
        else{
            header("Location: login.php?error=contraseñaincorrecta");
        }
    }
}

else if ($user=="" || $password==""){
    header("Location: login.php?falta=datosfaltantes");
}

else {
    header("Location: login.php?noexiste=corre_no_existe");
}






 
?>