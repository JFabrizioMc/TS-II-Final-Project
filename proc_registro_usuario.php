<?php
$pdo = new PDO("mysql:host=localhost;dbname=proyecto;charset=utf8","root","");

$nombres = $_POST['nom'];
$contacto = $_POST['cel'];
$fecha = $_POST['fecha'];
$dni = $_POST['dni'];
$email = $_POST['email'];
$password = $_POST['p1'];
$sql2 = "SELECT * FROM usuarios WHERE email = '$email'";
$rpta = $pdo->query($sql2)->fetchAll(); 


if ($nombres == null || $contacto == null || $fecha == null || $dni==null || $email == null || $password == null){
    header("Location: registrar_usuario.php?f=faltandatos");
    }else{
            if ($_POST['p1'] != $_POST['p2']) {
            header("Location: registrar_usuario.php?error=contraseña_incorrecta");
            exit;    
              
         } else if ( count($rpta) > 0 ) {
                        header("Location: registrar_usuario.php?i=emailexiste"); 
                        exit;
                    }
                    
           
            
        
                else{
                        $password = $_POST['p1'];
                        $passHash = password_hash($password, PASSWORD_BCRYPT);
                        password_verify($password, $passHash);
                        $sql = "INSERT INTO usuarios VALUES (null, '$nombres','$fecha','$dni','$email','$passHash',$contacto)";
                        $pdo ->query($sql);
                        header("Location: menu.php");
                }
}

?>