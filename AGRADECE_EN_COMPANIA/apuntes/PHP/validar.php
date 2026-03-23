<?php

$usuario=$_POST["usuario"];
$password=$_POST["password"];


/* primero hay que conectar con la BBDD*/

$sql = 'SELECT puesto FROM alumnos WHERE usuario="'.$usuario.'" AND password="'.$password.'";';

echo $sql;

?>