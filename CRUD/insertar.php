<?php

include("conexion.php");

$con=conectar();

$Matricula= $_POST ['Matricula'];
$Nombre= $_POST ['Nombre'];
$Apellido_P= $_POST ['Apellido_P'];
$Apellido_M= $_POST ['Apellido_M'];
$Edad= $_POST ['Edad'];

$sql= "INSERT INTO alumnos 
(Matricula, Nombre, Apellido_P, Apellido_M, Edad)
VALUES
('$Matricula','$Nombre','$Apellido_P','$Apellido_M','$Edad')";

$query = mysqli_query($con,$sql);

if($query) {
    header("Location:alumnos.php");
}
else {
    echo"Error al insertar al alumno: " . mysqli_error($con);
}
?>