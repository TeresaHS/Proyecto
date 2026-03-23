<?php

    require 'configdb.php';

    function conectar(){
        $conexion=new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
        $conexion->set_charset("utf8");
        return $conexion;
    }

    function guardarMensaje(){
        $conexion=conectar();
        $sql="INSERT INTO agradecimientos (mensaje,idEmisor,idReceptor) VALUES ('".$_GET['mensaje']."', '16','".$_GET['compa']."');";
        $resultado=$conexion->query($sql);
        $conexion->close();
    }

    // $sql="INSERT INTO agradecimientos (mensaje,idEmisor,idReceptor) VALUES ('".$_GET['mensaje']."', '".$_GET['user']."','".$_GET['compa']."');"



    /*
    
    El problema de la inyeccion sql se puede solucionar convirtiendo el texto que llega a este php en String:
    
    $mensaje = $conexion->real_escape_string($_GET['mensaje']);
    $idEmisor = $conexion->real_escape_string($_GET['user']);
    $idReceptor = $conexion->real_escape_string($_GET['compa']);

    Después sustituirlo en la consulta SQL
    
    */


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agradecer</title>
    <link rel="stylesheet" href=".\estilo.css"/>

    <!-- Las siguientes lineas son para tener la fuente de Montserrat de Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+SC:wght@100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


</head>
<body>
    <header>
        <a href="..\PHP\home.php"><h1><span class="mayusTitulo">A</span>GRADECE <span id="minusTitulo">EN</span> <span class="mayusTitulo">C</span>OMPAÑÍA</h1></a>
        <hr id="linea">
        <nav>
            <a href="..\PHP\agradecer.php"><p class="enlaces" id="activo">Agradecer</p></a>
            <a href="..\PHP\recibidos.php"><p class="enlaces">Recibir</p></a>
            <a href="..\PHP\inicioSesion.php"><p class="enlaces">Cerrar Sesión</p></a>
        </nav>
    </header>
    <main id="mainAgradecer">
        <section id="comprobarMensaje">
            <?php

                guardarMensaje();

                echo 'Puesto destino: '.$_GET['compa'];
                echo '<br>';
                echo 'Mensaje: '.$_GET['mensaje'];

            ?>
            <a href="agradecer.php" ><p>VOLVER</p></a>
        </section>
    </main>
</body>
</html>

