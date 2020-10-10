<?php
    /*
    * @author Rubén Jesús Garzón Zafra
    * Calcular el area de un cuadrado
    */
    
    $radio = 5;
    $img = "./img/circulo.png";
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
            echo "<img src='$img' width='100px'>";
            echo "<p>";
                echo "El area del círculo es: ";
                echo pi() * $radio * $radio;
            echo "</p>";
        echo "</div>";
    ?>
</body>
</html>