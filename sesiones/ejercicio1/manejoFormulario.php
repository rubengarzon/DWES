<?php
    session_start();

    if(!isset($_SESSION["datos"])){
        $array = [];
        $nombre = $_POST['txtNombre'];
        $movil = $_POST['txtMovil'];
        $email = $_POST['txtEmail'];

        array_push($array, $nombre, $movil, $email);
        
        $_SESSION["datos"] = $array;
        print_r($_SESSION["datos"]);
    }else{
        $array = $_SESSION["datos"];
        $nombre = $_POST['txtNombre'];
        $movil = $_POST['txtMovil'];
        $email = $_POST['txtEmail'];

        array_push($array, $nombre, $movil, $email);
        
        $_SESSION["datos"] = $array;

        print_r($_SESSION["datos"]);
    }

     
?>