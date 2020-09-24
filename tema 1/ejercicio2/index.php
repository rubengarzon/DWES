<?php
    /*
    * @author Rubén Jesús Garzón Zafra
    * Calcular el area de un cuadrado
    */
    
    $pi = 3.14;
    $radio = 5;
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
        echo "<div>";
            echo "<p>";
                echo "El area del cuadrado es: ";
                echo $pi * $radio * $radio;
            echo "</p>";
        echo "</div>";
    ?>
</body>
</html>