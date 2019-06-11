<?php 
$donaciones = $_POST['donar'];

if($donaciones!=""){
    header("Location: donar.php?aea=ezmoneybby");
    exit;
}else{
    header("Location: donar.php?t=tmreyape");
    exit;
}


?>