<?php
$pdo = new PDO("mysql:host=localhost;dbname=proyecto;charset=utf8","root","");
$nombre = $_POST['n'];
$direccion =$_POST['d'];
$distrito =$_POST['distrito'];
$dni=$_POST['dni'];

$sql = "INSERT INTO adopcion VALUES(null,'#idmascota','$nombre','$dni','$direccion','$distrito')";

$pdo ->query($sql);
header("Location: adoptar.php?n=contacto");
exit;









?>
