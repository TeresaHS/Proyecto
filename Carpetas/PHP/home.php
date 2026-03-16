<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="..\CSS\estilo.css"/>

    <!-- Las siguientes lineas son para tener la fuente de Montserrat de Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+SC:wght@100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>
    <?php
    echo "
    <header>
        <a href='..\HTML\home.html'><h1><span class=\"mayusTitulo\">A</span>GRADECE <span id=\"minusTitulo\">EN</span> <span class=\"mayusTitulo\">C</span>OMPAÑÍA</h1></a>
        <hr id='linea'>
        <nav>
            <a href='..\HTML\agradecer.html'><p class='enlaces'>Agradecer</p></a>
            <a href='..\HTML\recibidos.html'><p class='enlaces'>Recibir</p></a>
            <a href='..\HTML\inicioSesion.html'><p class='enlaces'>Cerrar Sesión</p></a>
        </nav>
    </header>
    
    <main>
        <section id='sectionInicial'>
            <figure>
                <img src='..\IMG\Ihs-logo.svg' alt='Logo_Compañia_de_Jesus'/>
                <figcaption>COMPAÑÍA DE JESÚS</figcaption>
            </figure>
        </section>
        <div id='intro'>
            <p>
                La Semana Ignaciana es una de las celebraciones más esperadas por parte de toda la comunidad educativa de nuestro colegio. 
                <br>A través de convivencias, tutorías y diferentes celebraciones hemos conocido aún más la figura de San Ignacio de Loyola.
            </p>
        </div>
    </main>
    <footer>

    </footer>
    ";
    ?>
</body>
</html>