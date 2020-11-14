<?php

    session_start();

    $autorizacion = $_SESSION['auth'] ?? false;

    if (!$autorizacion){
        header('location: index.php');
    }else{
        echo "Acceso a parte privada";
    }


?>