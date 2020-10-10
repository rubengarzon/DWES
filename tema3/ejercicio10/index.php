<?php
        /*
        * @author Rubén Jesús Garzón Zafra
        *  Cargar fecha de nacimiento en una variable y calcular la edad.
        */

        $fecha = new DateTime("1993-08-09");
        $hoy = new DateTime();
        $edad = $hoy -> diff($fecha);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
       
    <?php
        echo $edad -> y . " años";
    ?>


</body>
</html>