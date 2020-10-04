<?php
        /*
        * @author Rubén Jesús Garzón Zafra
        * Mostrar los meses del año en un array
        */

        $meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

        $mesesLength = count($meses);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>
<body>
       
    <?php

        echo "<h1> Meses del año </h1>";

        for ($i=0; $i < $mesesLength ; $i++) { 
            echo "<p> $meses[$i] </p>";
        }

        echo "<a href='http://' style='background-color: black; color: white; font-size: 20px;'>Ver código</a>";
    ?>


</body>
</html>