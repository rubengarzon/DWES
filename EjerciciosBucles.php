<?php

    $ejercicios = [
        "Escribir números del 1 al 10" => "../../tema3/ejercicio13/index.php",
        "Números par" => "../EjerciciosDWES/tema3/ejercicio14/index.php",
        "Tabla de multiplicar" => "../EjerciciosDWES/tema3/ejercicio15/index.php",
        "Paleta de colores" => "../EjerciciosDWES/tema3/ejercicio16/index.php",
        "Calendario" => "../EjerciciosDWES/tema3/ejercicio17/index.php",
        "Meses del año" => "../EjerciciosDWES/tema3/ejercicio18/index.php",
        "Carta de un restaurante" => "../EjerciciosDWES/tema3/ejercicio24/index.php",
        "Calendario mejorado" => "../EjerciciosDWES/tema3/ejercicio25/index.php",
    ];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios Array</title>
    <link rel="stylesheet" href="./csscopy/style.css">
</head>
<body>
    <img src="./img/codigo.png" alt="" width="100px" height="100px" style="display: block;margin:auto">
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
                }
            ?>
            
        </div>


    </div>
</body>
</html>