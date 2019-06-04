<?php
$pdo = new PDO("mysql:host=localhost;dbname=proyecto;charset=utf8","root","");

$nombres = $_POST['nom'];
$contacto = $_POST['cel'];
$fecha_n = $_POST['fecha'];
$ciudad = $_POST['ciu'];
$email = $_POST['email'];
$password = $_POST['p1'];
if ($nombres == null || $contacto == null || $fecha_n == null || $ciudad==null || $email == null || $password == null){
    header("Location: registrar_usuario.php?f=faltandatos");
    }else{
            if ($_POST['p1'] != $_POST['p2']) {
            header("Location: registrar_usuario.php?error=contraseña_incorrecta");
                }else{
                        $password = $_POST['p1'];
                        $passHash = password_hash($password, PASSWORD_BCRYPT);
                        password_verify($password, $passHash);
                        $sql = "INSERT INTO usuarios VALUES (null, '$nombres','$fecha_n','$ciudad','$email','$passHash',$contacto)";
                        $pdo ->query($sql);
                        header("Location: index.php");
                }
}

?>