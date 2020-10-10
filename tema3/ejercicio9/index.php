<?php
        /*
        * @author Rubén Jesús Garzón Zafra
        * Cargar en variables mes y año e indicar el número de días del mes
        */

        $mes = date("m");
        $anio = date("Y");
        $dias = date("t");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
       
    <?php
        echo "Estamos en el mes $mes";
        echo "<br>";
        echo "Estamos en el año $anio";
        echo "<br>";
        echo "Número de dias: " . $dias; 
    ?>


</body>
</html>