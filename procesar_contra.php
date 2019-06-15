<?php
$pdo = new PDO("mysql:host=localhost;dbname=proyecto;charset=utf8","root","");
$correo = $_POST["correo"];

$sql="SELECT * FROM usuarios WHERE email='$correo' ";

$resultado=$pdo->query($sql)->fetchAll();

if(count($resultado) > 0 ){
    foreach($resultado as $fila){

        if($correo == $fila['email'] ) {
            header("Location: recu_pag.php");
            exit; 
        }
        else if ($correo==""){
            header("Location: recu_contra.php?falta3=datosfaltantes");
            exit;
        }
        else{
            header("Location: recu_contra.php?error=contraseñaincorrecta");
            exit;
        }
    }
}

else {
    header("Location: recu_contra.php?noexiste=corre_no_existe");
    exit;
}
?>