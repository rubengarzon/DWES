<?php
    /*
    * @author Rubén Jesús Garzón Zafra
    * Calcular operaciones aritmeticas
    */
    
    $x=8;
    $suma = $x + 2;
    $resta = $suma - 4;
    $multiplicacion = $resta * 5;
    $division = $multiplicacion / 3;
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
        echo "valor inicial: " . $x;
        echo "<br>";
        echo "suma: " . $suma;
        echo "<br>";
        echo "Se resta 4: " . $resta;
        echo "<br>";
        echo "multiplicación por 5: " . $multiplicacion;
        echo "<br>";
        echo "division entre 3: " . $division;
        echo "<br>";
        echo "Incrementar 1: " . $incrementar = ++$division;
        echo "<br>";
        echo "Decrementar 1: " . $decrementar = --$incrementar;

    ?>    
</body>
</html>