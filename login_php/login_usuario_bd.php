<?php

include 'usuariosbd.php';

$email = $_POST['email'];
$contrasena =$_POST['contrasena'];


$validar_login = mysqli_query($conexion, "SELECT FROM usuariosbd WHERE email ='$email' and contrasena  ='$contrasena' ");

if(mysqli_num_rows($validar_login) >0){
    header("location: ../pagina_en_blanco.php");
    exit;
}else{
    echo'
    <scritp>
        alert("usuario no exite");
        window.location = "../index.php"
    </scritp>

    ';
    exit;
}

?>