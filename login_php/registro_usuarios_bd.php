<?php

include 'usuariosbd.php';

$username = $_POST['username'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO usuariosbd(username, lastname, email, contrasena)
        VALUES('$username', '$lastname', '$email', '$contrasena')";

        $ejecutar = mysqli_query($conexion, $query);
?>