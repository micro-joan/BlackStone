<?php
   
    //bloquear acceso a equipos que no sean el local (ipv6 ::1 = localhost)
    if ($_SERVER['REMOTE_ADDR'] !== '::1') {
    header('HTTP/1.0 403 Forbidden');
    exit('Access only to localhost.');
    }

    session_start();
    if($_SESSION['login'] != "SI"){

        header("Location: login.php"); 
 
    }else{

        $fechaguardada = $_SESSION['acceso'];
        $ahora = time();
        $tiempotranscurrido = $ahora-$fechaguardada;

    if ($tiempotranscurrido >= 3000) {//tiempo de sesión de 5 minutos
            session_destroy();
            header("Location: login.php");
        }else{
            $_SESSION['acceso'] = $ahora;
        }
    }
?>  
