<?php
$pdo = new PDO("mysql:host=localhost;dbname=proyecto;charset=utf8","root","");
$user = $_POST["usuario"];
$sql="SELECT * FROM usuarios WHERE email='$user'";

$resultado=$pdo->query($sql)->fetchAll();

if(count($resultado) > 0 ){
    foreach($resultado as $fila){
        if($user == $fila['email'] ) {
            header("Location: recu_pag.php");
            exit; 
        }
    }
}

else {
    header("Location: recu_contra.php?noexiste=corre_no_existe");
    exit;
}
?>