<?php
$pdo = new PDO("mysql:host=localhost;dbname=proyecto;charset=utf8","root","");

$contra_nueva =$_POST['c_n'];



if(count($resultado) > 0 ){

    foreach($resultado as $fila){

                $passHash1 = password_hash($contra_nueva, PASSWORD_BCRYPT);
                password_verify($contra_nueva, $passHash1);
                $sql = "UPDATE INTO usuarios  WHERE contraseña='$passHash1'";
                $pdo ->query($sql);
                header("Location: login.php?r=modificado");
                exit;
            
        

        
        
    }
}


?>


                    