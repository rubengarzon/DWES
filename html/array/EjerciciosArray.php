<?php

    $ejercicios = [
        "Selección de alumnos" => "../../tema1/ejercicio22/index.php",
        "Meses del año" => "../../tema1/ejercicio18/index.php",
        "Tablero para jugar al juego de los barcos" => "../../tema1/ejercicio19/index.php",
        "Nota de los alumnos de 2º DAW para el módulo DWES" => "../../tema1/ejercicio20/index.php",
        "Verbos irregulares en inglés" => "../../tema1/ejercicio21/index.php",
        "Información sobre continentes, países, capitales y banderas" => "../../tema1/ejercicio23/index.php",
        "Carta de un restaurante" => "../../tema1/ejercicio24/index.php",
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
    <img src="./img/codigo.png" alt="" width="100px" style="display: block;margin:auto">
    <h1 style="text-align: center;">Rubén Jesús Garzón Zafra</h1>
    <p style="text-align: center;margin-left: 20px; font-style: italic;">Asignatura Desarrollo Web Entorno Servidor</p>
    <a href="https://github.com/rubengarzon/DWES" ><p style="text-align: center;">Repositorio Github</p></a>
    
    <div class="section">
        <div class="container">
            <h1 style="text-align: center">Ejercicios PHP ARRAYS</h1>
            <?php
                foreach ($ejercicios as $key => $value) {
                  echo "<a href='$value'>$key</a>";
                  echo "<br>";
                  echo "<br>";
                  echo "aaaa";
                }
            ?>
            
        </div>


    </div>
</body>
</html>