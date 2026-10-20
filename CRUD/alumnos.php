<?php

include("conexion.php");

$con=conectar();
$sql="SELECT * FROM alumnos";
$query=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #cccccc;
            padding: 8px 12px
        }
        th {
            background-color: white;
        }
    </style>
    <h1>TABLA DE ALUMNOS</h1>
    
    
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Matricula</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Edad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($row=mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $row['Id']?></td>
                        <td><?php echo $row['Matricula']?></td>
                        <td><?php echo $row['Nombre']?></td>
                        <td><?php echo $row['Apellido_P']?></td>
                        <td><?php echo $row['Apellido_M']?></td>
                        <td><?php echo $row['Edad']?></td>
                        <td>
                            Eliminar
                            <br>
                            Editar
                        </td>
                    </tr>
                    <?php
                }
                    ?>
        </tbody>
    </table>
    <h1>FORMULARIO</h1>
    <form action="insertar.php" method="POST">
        <input type="text" class="from-control" name="Matricula" placeholder="Matricula">
        <input type="text" class="from-control" name="Nombre" placeholder="Nombre(s)">
        <input type="text" class="from-control" name="Apellido_P" placeholder="Apellido Paterno">
        <input type="text" class="from-control" name="Apellido_M" placeholder="Apellido Materno">
        <input type="text" class="from-control" name="Edad" placeholder="Edad">
        <button type="submit" value="Guardar">
    </form>             
</body>
</html>