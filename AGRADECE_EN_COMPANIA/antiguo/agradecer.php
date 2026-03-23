<!-- Conectar con la BBDD  -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agradecer</title>
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
        <form id="formAgradecer">
            <fieldset id="fieldsetAgradecer">
                <label for="compa">Para:</label>
                <select id="compa" name="compa">
                    
                    <!--¿como se llama la variable que lleva el id del alumno?  value="" es el campo id PK de la tabla alumno, >Teresa<   campo nombre de tabla alumno-->

                    <!-- La PK que es un contador será el contenido del value. Para el texto que aparece dentro del option (lo que se visualiza como opcion en el html para elegir ese dato) será el campo nombre de la tabla alumnos -->
                    
                    <!-- En la pagina PHP se añadirán tantos options como filas en la tabla de alumnos haya (podemos controlar si añade al mismo usuario para evitar q ue un alumno se mande mensaje a si mismo) -->
                 
                    <php?
                    if ($resultado->num_rows > 0) {
                        // Restablecer el puntero del resultado al inicio
                        $resultado->data_seek(0);
                        
                        // Generar las opciones dinámicamente
                        while ($alumno = $resultado->fetch_assoc()) {
                            echo '<option value="' . $alumno['idAlumno'] . '">' . 
                                 htmlspecialchars($alumno['nombre']) . 
                                 '</option>';
                        }
                    } else {
                        echo '<option value="0">No hay alumnos disponibles</option>';
                    }
                    ?>

                </select>
                <label for="mensaje">Gracias por</label> 
                <textarea id="mensaje"></textarea>
                <input type="submit" value="ENVIAR"/>
            </fieldset>
        </form>
    </main>
    <footer>

    </footer>
</body>
</html>

<?php
    // Cerrar la conexión a la base de datos
    $conexion->close();
?>