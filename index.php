<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos/index_style.css">
    <link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
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
            <p id="citaSlide1">Estoy a favor del derecho de los animales, al igual que del derecho de los humanos. Ese es el camino de un ser humano completo (Abraham Lincoln)</p>
            <img src="imagenes/slide1.jpg" style="width:100%">
        </div>

        <div class="slide fade">
            <p id="citaSlide2"> Nuestros compañeros perfectos nunca tienen menos de cuatro patas (Colette)</p>
            <img src="imagenes/slide2.jpg" style="width:100%">
        </div>
        
        <div class="slide fade">
            <p id="citaSlide3">Los ojos de un animal tienen el poder de hablar un gran lenguaje(Martin Buber)</p>
            <img src="imagenes/slide3.jpg" style="width:100%">
        </div>

        <div class="slide fade">
            <p id="citaSlide4">Los animales son muy buenos amigos; no hacen preguntas, no critican (George Eliot)</p>
            <img src="imagenes/slide4.jpg" style="width:100%">
        </div>
       
        <div class="slide fade">
            <p id="citaSlide5">Hasta que uno no ha amado un animal, una parte del alma sigue sin despertar (Anatole France)</p>
            <img src="imagenes/slide5.jpg" style="width:100%">
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
                setTimeout(showSlides, 5000); // Mulplicar 1000 * cantidad de segundos en que cambia la imagen
            }
        </script>
    </div>

    <footer>
        <p>Desarrolladores: Luis Delzo, Fabrizio Manco, Aparicio Alan.</p>
        <p>2019 - Peru</p>
    </footer>
    
</body>
</html>