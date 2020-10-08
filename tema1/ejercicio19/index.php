<?php
        /*
        * @author Rubén Jesús Garzón Zafra
        * Tablero para jugar al juego de los barcos
        */

        $tablero = [
                            "1" => 'A',
                            "2" => 'B',
                            "3" => 'C',
                            "4" => 'D',
                            "5" => 'E',
                            "6" => 'F',
                            "7" => 'G',
                            "8" => 'H',
                            "9" => 'I',
                            "10" => 'J'
        ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <a class="enlace" href='../../html/array/EjerciciosArray.php' ;>Inicio</a>
    <a class="enlace" href='https://github.com/rubengarzon/DWES/blob/master/tema1/ejercicio19/index.php' style='margin-left: 10px;'>Ver código</a>
    
    <br>
    <br>
    <br>

    <table>
        <tbody>
            <tr>
                <?php
                    echo "<th>";
                        echo " ";
                    echo "</th>";
                    
                    foreach ($tablero as $key => $value) {

                        echo "<th>";

                            echo $key;

                        echo "</th>";

                    }

                ?>
            </tr>
        
            <?php

                for ($i=1; $i <= 10; $i++) { 
                    echo "<tr>";

                        echo "<td>";

                            echo $tablero["$i"];

                        echo "</td>";

                        for ($j=0; $j < 10; $j++) { 
                            echo "<td class='celdas'>";

                                echo " ";

                            echo "</td>";
                        }
                    
                }                
                
            ?>    
        </tbody>
    </table>


</body>
</html>