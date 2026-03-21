<?php

    require 'configdb.php';

    function conectar(){
        $conexion=new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
        $conexion->set_charset("utf8");
        return $conexion;
    }

    /*function actualizar(){
        $conexion=conectar();
        $sql = "INSERT INTO alumnos(puesto, nombre, usuario) VALUES 
            ('13', 'Aitor', 'aitorUser'),
            ('14', 'Ivan', 'ivanUser'),
            ('01', 'Samuel', 'samuelUser')";
        $conexion->query($sql);
        $filas_afectadas=$conexion->affected_rows;
        $conexion->close();
        return $filas_afectadas;
    }*/


    function consultar(){
        $conexion=conectar();
        $sql="select * from alumnos";
        $resultado=$conexion->query($sql);  //Ejecuta la consulta y saca todas las filas al completo
        $total_filas=$resultado->num_rows;
        while($fila=$resultado->fetch_array()){ //El fetch_array extrae fila a fila del resultado
            echo "<p>";
            echo $fila["puesto"].'-'.$fila["nombre"];
            echo "</p>";
        }
        $conexion->close();
        return $total_filas;
    }
    
    function selectAgradecer(){
        $conexion=conectar();
        $sql="select puesto,nombre from alumnos;";
        $resultado=$conexion->query($sql);
        while($fila=$resultado->fetch_array()){
            echo '<option value="'.$fila["puesto"].'">'.$fila["nombre"].'</option>';
        }
        $conexion->close();
    }

    /*function selectAgradecer(){
        $conexion=conectar();
        $sql="select puesto,nombre from alumnos;";
        $resultado=$conexion->query($sql);
        $total_filas=$resultado->num_rows;
        for($i = 1; $i <= $total_filas; $i++){
            $fila=$resultado->fetch_array();
            echo '<option value="'.$fila["puesto"].'">'.$fila["nombre"].'</option>';
        }
        $conexion->close();
    }*/


?>