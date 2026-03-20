<?php

    include 'operacionesdb.php';

    $total_filas=consultar();
    echo "<p>";
    if($total_filas==0)
        echo "No hay datos";
    else
        echo "Total filas: ".$total_filas;
    echo "</p>";
?>

<!-- Lo siguiente es operacionesdb.php -->
 <?php

    require 'configdb.php';

    function conectar(){
        $conexion=new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
        //$conexion=new mysqli('esvirgua.com', 'user1daw_00', '1234');
        $conexion->set_charset("utf-8");
        return $conexion;
    }

    function actualizar(){
        $conexion=conectar();
        $sql="insert into alumnos(nombre, correo) values....";
        $conexion->query($sql);
        $filas_afectadas=$conexion->affected_rows;
        $conexion->close();
        return $filas_afectadas;
    }


    function consultar(){
        $conexion=conectar();
        $sql="select * from alumnos";
        $resultado=$conexion->query($sql);  //Ejecuta la consulta y saca todas las filas al completo
        $total_filas=$resultado->num_rows;
        while($fila=$resultado->fetch_array()){ //El fetch_array extrae fila a fila del resultado
            echo "<p>";
            echo $fila["nia"].'-'.$fila["nombre"];
            echo "</p>";
        }
        $conexion->close();
        return $total_filas;
    }



?>

<!-- Lo siguiente es configdb.php -->

<?php

    define("SERVIDOR",'localhost');
    define("USUARIO",'root');
    define("PASSWORD",'');
    define("BBDD",'cursos');

    //$servidor='localhost';
?>