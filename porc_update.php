<?php
$pdo = new PDO("mysql:host=localhost;dbname=proyecto;charset=utf8","root","");
$contra_nueva =$_POST['c_n'];


$passHash1 = password_hash($contra_nueva, PASSWORD_BCRYPT);
$sql1 = "UPDATE usuarios SET contraseña='$passHash1'";
$pdo->query($sql1);
header("Location: login.php?r=modificado");
exit;       



?>





                    