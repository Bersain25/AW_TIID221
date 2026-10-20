<?php
include("conexion.php");
$Id = $_GET['Id'];
$consulta = mysqli_query($conexion,"SELECT * FROM alumnos WHERE Id='$Id'");
$fila = mysqli_fetch_array($consulta);
?>

<!DOCTYPE html>
<html>
<body>
    <h1>Editar alumno</h1>
    <form method="POST" action="update.php">
        <input type="hiden" name="id" value="<?php echo $fila['Id']; ?>">
            <input type="text" name="Nombre" value="<?php echo $fila['Nombre']; ?>"><br><br>
            <input type="text" name="Apellido_P" value="<?php echo $fila['Apellido_P']; ?>"><br><br>
            <input type="text" name="Apellido_M" value="<?php echo $fila['Apellido_M']; ?>"><br><br>
            <input type="text" name="Edad" value="<?php echo $fila['Edad']; ?>"><br><br>
            <input type="text" name="Matricula" value="<?php echo $fila['Matricula']; ?>"><br><br>
            <imput type="submit" value="Guardar Cambios">
</form>
<br>
<a href="alumnos.php">Cancelar</a>
</body>
</html>