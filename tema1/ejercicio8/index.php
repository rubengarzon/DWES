<?php
        /*
        * @author Rubén Jesús Garzón Zafra
        * Cargar en dos numeros en variables y escribir el mayor de ellos
        */

        $a = 15;
        $b = 19;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
       
    <?php
        echo "Los numeros son $a y $b";

        echo "<br>";

        if ($a > $b)
            echo "El número mayor es: " . $a;
        else
            echo "El número mayor es: " . $b;
    ?>


</body>
</html>