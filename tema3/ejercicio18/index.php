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
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <a class="enlace" href='../../EjerciciosArray.php' ;>Inicio</a>
    <a class="enlace" href='https://github.com/rubengarzon/DWES/blob/master/tema1/ejercicio18/index.php' style='margin-left: 10px;'>Ver código</a>
        
    <h1>Meses del año</h1>
    
    <?php

        for ($i=0; $i < $mesesLength ; $i++) { 
            echo "<p> $meses[$i] </p>";
        }

    ?>


</body>
</html>