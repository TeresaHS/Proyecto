<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio de Sesion AGRADECE EN COMPAÑÍA</title>
        <meta name="author" content="Teresa Hernandez Sanchez"/>
        <link rel="stylesheet" href=".\estilo.css"/>

        <!--Las siguientes líneas son las fuentes importadas de google: -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+SC:wght@100..900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Gelasio:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

    </head>
    <body id="fondoInicioSesion">
        <header id="headerSesion">
            <h1><span class="mayusTitulo">A</span>GRADECE <span id="minusTitulo">EN</span> <span class="mayusTitulo">C</span>OMPAÑÍA</h1>
            <hr id="linea">
        </header>
        <main>
            <img id="imagenInicio" alt="FotoSanIgnacio" src="..\IMG\San_Ignacio.png"/>
            <section>
                <form action=".\validar.php" method="post">
                    <fieldset id="fieldsetSesion">
                        <legend>INICIO DE SESIÓN</legend>
                        <label for="usuario">Usuario:</label>
                        <input type="text" id="usuario" name="usuario" required>
                        <label for="password">Contraseña:</label>
                        <input type="password" id="password" name="password" required>
                        <input type="submit" value="INICIAR"/>
                    </fieldset>
                </form>
            </section>
        </main>
    </body>
</html>