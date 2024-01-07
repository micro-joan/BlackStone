<?php

include("../conexion.php");

$usuario = $_POST['usuario'];
$password = $_POST['pass'];
$idioma = $_POST['idioma'];

$usuario_scaped = htmlspecialchars($usuario, ENT_QUOTES, 'UTF-8');
$password_scaped = htmlspecialchars($password, ENT_QUOTES, 'UTF-8');

//vamos a sacar la contraseña de usuario
$sentencia_user = "SELECT * FROM `usuarios` WHERE nombre='".$usuario_scaped."'";   

$consulta = mysqli_query($conexion, $sentencia_user) or die("Error de Consulta");

//vamos a recorrer la consulta y guardar los datos 
while($fila= mysqli_fetch_array($consulta)){

    $contra=$fila['contra'];

    //comprobamos si el usuario exsite y si existe que tenga esa contraseña
    if(password_verify($password_scaped,$contra)){
        session_start();
        $_SESSION['login']="SI";
        $_SESSION['acceso']= time();
        $_SESSION['idioma'] = $idioma;

        header("Location: ../index.php");
    }else {
        header("Location: ../login.php?err=si");
    }
}

if($usuario == "" || $password == ""){

    header("Location: ../login.php?err=si");
}

?>      
