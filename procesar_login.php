<?php
$user = $_POST["user"];
$password = $_POST["contraseña"];


if ($user== "aldairxd11@hotmail.com" && $password == "123" ) { 
    session_start();
    $_SESSION["usuario"] = $user;
    header("Location: login.php");
}
 
?>