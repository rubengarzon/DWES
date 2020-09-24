<?php
        /*
        * @author Rubén Jesús Garzón Zafra
        * Variables que muestran una ficha personal.
        */

        $nombre = "Rubén";
        $apellidos = "Garzón Zafra";
        $edad = "27";
        $img = "img/perfil.png";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       
    <?php
        echo "<p> Nombre: $nombre </p> ";
        echo "<p> Apellidos: $apellidos </p> ";
        echo "<p> Edad:  $edad </p> ";
        echo "<p> <img src='$img' width='100px'> </p>";
    ?>


</body>
</html>