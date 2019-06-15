<?php 
$pdo = new PDO("mysql:host=localhost;dbname=proyecto;charset=utf8","root","");
$nombre = $_POST['n'];
$especie = $_POST['es'];
$raza = $_POST['r'];
$edad = $_POST['e'];
$sexo =$_POST['sexo'];
// IMAGEN
$nombre_img = $_FILES['foto']['name'];
$tipo=$_FILES['foto']['type'];
$tamano=$_FILES['foto']['size'];
$tmp = $_FILES['foto']['tmp_name'];
// IMAGEN

if(($nombre_img!=NULL)){
    if (($_FILES["foto"]["type"] == "image/gif") ||($_FILES["foto"]["type"] == "image/jpeg")|| ($_FILES["foto"]["type"] == "image/jpg")|| ($_FILES["imagen"]["type"] == "image/png")){
        move_uploaded_file($tmp,"imagenes/".$nombre_img) ;
        $sql="INSERT INTO mascotas VALUES (NULL,'$nombre','$sexo','$especie','$raza','$edad','$nombre_img')";
        $pdo->query($sql);
        header("Location: registrar_mascota.php?b=registroexitoso");
    }

    else{
        echo "No se permite archivos desconocidos , solo en formato png , jpeg y jpg ";
    }

}else{
    $mensaje=null;
    $sql="INSERT INTO mascotas VALUES (NULL,'$nombre','$sexo','$especie','$raza','$edad','$mensaje')";
    $pdo->query($sql);
    header("Location: registrar_mascota.php?b=registroexitoso");
}





?>


