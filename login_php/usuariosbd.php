<?php

    $conexion= mysqli_connect("localhost", "root", "", "usuariosbd");

    if($conexion){
        echo'se conecto a la base de datos';
    }else {
        echo'no se pudo conectar a la base de datos';
    }
    
?>