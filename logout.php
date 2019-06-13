<?php
session_start();
session_destroy();
header("Location: index.php?c=sesion_cerrada");
?>