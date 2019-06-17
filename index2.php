<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos/index_style.css">
    <title>Pagina Principal</title>
</head>
<body>

    <div id="barraSuperior">
        <img id="logo" src="imagenes/logo.png">

        <nav>
            <a href="nosotros.php">Que es AHL?</a>
            <a href="login.php">Login</a>
            <a href="registrar_usuario.php">Registrar</a>
            <a href="donar.php">Donaciones</a>     
        </nav>
    </div>

    <div class="contenedorDeslizable">        
        <!--Imagenes a usar en la ventana deslizable-->
        <div class="slide fade">
            <img src="imagenes/slide1.jpg" style="width:100%">
        </div>

        <div class="slide fade">
            <img src="imagenes/slide2.jpg" style="width:100%">
        </div>
        
        <div class="slide fade">
            <img src="imagenes/slide3.jpg" style="width:100%">
        </div>
  
        <!--Botones Next y Previous-
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>-->

        <!--Implementacion de JavaScript para el slide-->
        <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("slide");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none"; 
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1} 
                slides[slideIndex-1].style.display = "flex"; 
                setTimeout(showSlides, 4000); // Mulplicar 1000 * cantidad de segundos en que cambia la imagen
            }
        </script>
    </div>

    <div class="contenedor-flex">
        <div class="mensaje2">
            <p>Deseas ayudar a un pequeño amigo? Adopta mediante AHL y llena de amor tu vida!</p>
        </div>

        <div class="mensaje3">
            <p>Haz que no sufran, aportando con un pequeño donativo.</p>
        </div>
        <a href="login.php"><img src="imagenes/perroyorki.jpg" id="img2"></a>
        <a href="donar.php"><img src="imagenes/gatoLisiado.jpg" id="img3"></a>
    </div>

    
</body>
</html>