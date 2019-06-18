<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos/anuncios_style.css">
    <script src="https://kit.fontawesome.com/7ad55b8f63.js"></script>
    <title>Anuncios Importantes</title>
</head>
<body>
    <?php if(isset($_SESSION['usuario'])){?> 

    <div class="parteSuperior">
        <img id="logo" src="imagenes/logo.png">
        <nav class="barra">
                <a href="menu.php"><i class="fas fa-home" aria-hidden="true"></i> INICIO</a>
                <a href="registrar_mascota.php"><i class="fas fa-cat"></i> OFRECER EN ADOPCION</a>        
                <a href="anuncios.php"><i class="fas fa-bullhorn"></i> ANUNCIOS</a>
                <a href="donar.php"><i class="fas fa-donate"></i> DONAR</a>
                <a href="logout.php"><i class="fas fa-sign-out-alt"></i> CERRAR SESION</a>
        </nav>
    </div>

    <h1 style="background-color: rgba(121, 96, 65, 0.493)">Enterate de algunos tips y de futuras noticias sobre campañas para ayudar a tus mascotas!</h1>
    <h2 style="background-color:rgba(83, 112, 167, 0.329)">Campaña de esterelizacion para gatos!</h2>
    
    <div class="anuncios">

        <div id="anuncio1">
            <img src="https://4.bp.blogspot.com/-3Ti6RvKtiN0/WVbC5yZ6i-I/AAAAAAAASww/0Nl-TVqFpx48kUzWzoiKV4UYjwC9gp8nQCLcBGAs/s400/19144181_1364357793644623_7094763447666253010_o.png.jpg" class="imagenAnuncio">
        </div>

        <div id="anuncio2">
            <img src="https://cdn.shopify.com/s/files/1/1479/8144/products/tapa_miperrotrueno_1024x1024.png?v=1501600219" class="imagenAnuncio">
        </div>

        <div id="anuncio3">
           <img src="https://img.elcomercio.pe/files/listing_ec_flujo_xx/uploads/2017/06/15/5943460d8bec2.jpeg" class="imagenAnuncio">
        </div>

        <div id="anuncio4">
            <img src="http://www.munilince.gob.pe/sites/default/files/web/page/salud/tenencia-responsable-de-mascotas-04-full.jpg" class="imagenAnuncio">
        </div>

    </div>
    
    <?php }else{ ?>
    <?php header("Location: login.php?i=iniciesesion"); } ?>
    
</body>
</html>