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
        for ($i=0; $i < 10; $i++) { 
            if($i % $par == 0 && $control < 4){
                $numero = $numero + $i;
                $control++;
            }
        }

        echo $numero;
    ?>


</body>
</html>