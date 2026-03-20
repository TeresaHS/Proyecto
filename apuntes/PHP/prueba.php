<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
    <h1>DATOS: </h1>

    <?php

        include 'operacionesdb.php';
        //actualizar();
        //$total_filas=consultar();
        $total_filas=consultar2();
        echo "<p>";
        if($total_filas==0)
            echo "No hay datos";
        else
            echo "Total filas: ".$total_filas;
        echo "</p>";
    ?>

</body>
</html>