<?php 
$pdo = new PDO("mysql:host=localhost;dbname=proyecto;charset=utf8","root","");

$nombre = $_POST['n'];
$especie = $_POST['es'];
$raza = $_POST['r'];
$edad = $_POST['e'];
$sql = "INSERT INTO mascotas VALUES(null,'$nombre','$especie','$raza','$edad')";

if($nombre=="" || $especie=="" || $raza=="" || $edad=="" ){
    header("Location: registrar_mascota.php?f=faltandatos");
    exit;
}else{
    $pdo->query($sql);
    header("Location: registrar_mascota.php?b=registroexitoso");
    exit;
}

?>