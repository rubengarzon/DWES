<?php
/*
 * @author Rubén Jesús Garzón Zafra
*/

    $verbos = [
        "Base form" => [
            "be", "beat", "begin", "bend", "bite"
        ],

        "Past form" => [
            "was/were", "beat", "began", "bent","bit"
        ],

        "Past participle" => [
            "been", "beaten", "begun", "bent", "bitten"
        ],
    ]
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 21</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<a class="enlace" href='../../EjerciciosArray.php' ;>Inicio</a>
    <a class="enlace" href='https://github.com/rubengarzon/DWES/blob/master/tema1/ejercicio20/index.php' style='margin-left: 10px;'>Ver código</a>
    <br>
    <br>
    <table>
        <h1>Verbos Irregulares</h1>
        <br>
        <?php
            foreach ($verbos as $key => $value) {
                echo "<tr>";
                
                echo "<th style='border: 4px solid black'>";
                    echo $key;
                echo "</th>";
                
                foreach ($value as $clave => $valor) {
                    echo "<td style='border: 4px solid black'>";
                        echo $valor;
                    echo "</td>";
                    
                }
                echo "</tr>";
            }
                
        ?>
        
    </table>
</body>
</html>