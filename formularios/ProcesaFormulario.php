<?php

    $nombre = $_GET["Nombre"];
    $apellidos = $_GET["Apellidos"];

    $datosPersonales = [
        $nombre, $apellidos
    ];

    foreach ($datosPersonales as $key => $value) {
        echo $value . " ";
    }
   
?>