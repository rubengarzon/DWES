<?php
    /*
    * @author Rubén Jesús Garzón Zafra
    * Mostrar el contenido de las variables
    */
    
    $nombre = "Harry";
    $entero = 28;
    $nulo = NULL;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <?php
        var_dump($nombre);
        var_dump($entero);
        var_dump($nulo);
    ?>    
</body>
</html>