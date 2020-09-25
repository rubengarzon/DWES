<?php
    /*
    * @author Rubén Jesús Garzón Zafra
    * Obtener el tipo de dato
    */
    
    $nombre = "Harry";
    $double = 12.3;
    $boolean = false;
    $entero = 28;
    $nulo = NULL;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <?php
        echo "$nombre es un string";
        var_dump(is_string($nombre));
        echo "$double es un double";
        var_dump(is_double($double));
        echo "$boolean es un boolean";
        var_dump(is_bool($boolean));
        echo "$entero es un entero";
        var_dump(is_integer($entero));
        echo "$nulo es nulo";
        var_dump(is_null($nulo));
    ?>    
</body>
</html>