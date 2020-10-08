<?php

    $nota = [
        "Alvaro García" => 6,
        "Antonio Quesada Cuadrado" => 7,
        "Antonio García García" => 5,
        "David Castilla Ortiz" => 8,
        "David Galván Fontalba" => 5,
        "Fernando del Rosal Cuesta" => 8,
        "Francisco Javier González Sabariego" => 5,
        "Francisco Javier Campos Gutiérrez" => 7,
        "José Sillero Salado" => 6,
        "José Luis Álvarez Fernández" => 6,
        "Juan Manuel González Prófumo" => 8,
        "Manuel Hidalgo Pérez" => 6,
        "Maria Moreno Muñoz" => 6,
        "Mario Osuna Ordóñez" => 9,
        "Rafael Alberto Caballero Osuna" => 8,
        "Rafael Miguel Cruz Álvarez" => 9,
        "Rubén Jesús Garzón Zafra" => 9
    ];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
    <a class="enlace" href='../../html/array/EjerciciosArray.php' ;>Inicio</a>
    <a class="enlace" href='https://github.com/rubengarzon/DWES/blob/master/tema1/ejercicio19/index.php' style='margin-left: 10px;'>Ver código</a>
    <br>
    <br>
    <table>
        <th>Alumno</th>
        <th>Nota</th>
        <?php
        
            foreach ($nota as $key => $value) {
                echo "<tr>";
                    
                    echo "<td style='border: 1px solid black;text-align:center'>";
                        echo $key;
                    echo "</td>";
                    echo "<td style='border: 1px solid black;text-align:center'>";
                        echo $value;
                    echo "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>