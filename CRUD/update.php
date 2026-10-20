<?php
include ("conexion.php");

$Id = $_POST['Id'];
$Matricula= $_POST ['Matricula'];
$Nombre= $_POST ['Nombre'];
$Apellido_P= $_POST ['Apellido_P'];
$Apellido_M= $_POST ['Apellido_M'];
$Edad= $_POST ['Edad'];

$query = "UPDATE alumnos SET nombre='$Nombre', apellido_p='$Apellido_P', apellido_m='$Apellido_M', edad='$Edad', matricula='$Matricula' WHERE id='$Id'";

mysqli_query($conexion, $query);

header("Location: alumnos.php");
?>
