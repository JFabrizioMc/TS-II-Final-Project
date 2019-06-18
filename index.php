<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
    <link rel="stylesheet" href="estilos/index_style.css">
    <script src="https://kit.fontawesome.com/7ad55b8f63.js"></script>
    <title>Pagina Principal</title>
</head>
<body>
    <div id="barraSuperior">
        <img id="logo" src="imagenes/logo.png">
        <nav id="enlaces"> 
            <a href="nosotros.php"><i class="fas fa-home" aria-hidden="true"></i> Que es AHL?</a>
            <a href="login.php"><i class="fas fa-sign-in-alt" aria-hidden="true"></i> Login</a>
            <a href="registrar_usuario.php"><i class="fas fa-user-plus"></i> Registrar</a>
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
        <div class="siguenos">
            <p>Siguenos en nuestras redes:</p>
            <a href="https://www.facebook.com/Animal-Hope-for-Life-343106826380758/?view_public_for=343106826380758 " target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
        </div>
        
        <div class="developers">
            <p>© 2019 GroupNoALaBica Derechos Reservados, Desarrolladores: Luis Delzo, Fabrizio Manco, Aparicio Alan. Powered by Usil</p>
        </div>
        
    </footer>
    
</body>
</html>