<?php

    function conectar() {
        $host="localhost";
        $user="root";
        $pass="";

        $db="alumnos";

        $con=mysqli_connect($host,$user,$pass,$db);

        mysqli_select_db($con,$db);

        return $con;
    }



?>