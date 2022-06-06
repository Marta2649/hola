<?php

include("con_db.php");


$nombre = $_GET["nombre"];
$correo = $_GET["correo"];
$contraseña = $_GET["contraseña"];
$fecha_reg = $_GET["fecha_reg"];



INSERT 'datos'('id', 'nombre', 'correo', 'contraseña', 'fecha_reg') VALUES  ([value-1],[value-2],[value-3],[value-4]);


$resultado = mysqli_connect($conexion,$insertar);

mysqli_close($conexion);

?>