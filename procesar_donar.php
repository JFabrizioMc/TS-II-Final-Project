<?php 
$donaciones = $_POST['donar'];

if($donaciones!="" && $donaciones > 0){
    header("Location: donar.php?aea=ezmoneybby");
    exit;
}else{
    header("Location: donar.php?t=tmreyape");
    exit;
}


?>