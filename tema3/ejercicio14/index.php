<?php
        /*
        * @author Rubén Jesús Garzón Zafra
        * Sumar los 3 primeros números pares
        */
        $par = 2;
        $numero = 0;
        $control = 0;
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
        for ($i=1; $i < 10; $i++) { 

            if($i % $par == 0 && $control < 3){
                $numero = $numero + $i;
                $control++;
                echo "$i es par";
                echo "<br>";
            }

        }

        echo "Suma de los tres números pares $numero";
    ?>


</body>
</html>