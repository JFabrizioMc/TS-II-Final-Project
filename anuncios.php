<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anuncios Importantes</title>
</head>
<body>
    <?php if(isset($_SESSION['usuario'])){?> 
    <h1>Enterate de algunos tips y de futuras noticias sobre campañas para ayudar a tus mascotas!</h1>
        <h2>Campaña de esterelizacion para perros!</h2>
        <img src="https://4.bp.blogspot.com/-3Ti6RvKtiN0/WVbC5yZ6i-I/AAAAAAAASww/0Nl-TVqFpx48kUzWzoiKV4UYjwC9gp8nQCLcBGAs/s400/19144181_1364357793644623_7094763447666253010_o.png.jpg" alt="imagenaquixd">
        <h2>Como cuidar de un cachorro!</h2>
        <img src="https://cdn.shopify.com/s/files/1/1479/8144/products/tapa_miperrotrueno_1024x1024.png?v=1501600219" alt="imagenaquixd">
        <a href="https://www.paradigmalibros.com/l/mi-perro-trueno-como-cuidar-a-tu-cachorro/248232/9789871374854">Enterate mas aqui!</a>
        <h2>Recuerda siempre recoger las heces de tu perro!</h2> 
        <img src="http://www.munilince.gob.pe/sites/default/files/web/page/salud/tenencia-responsable-de-mascotas-04-full.jpg" alt="" width="500px" height="400px">   
    
    <?php }else{ ?>
    <?php header("Location: login.php?i=iniciesesion"); } ?>
    
</body>
</html>