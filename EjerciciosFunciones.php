<?php

    $ejercicios = [
        "Calcula la letra del dni" => "./funciones/ejercicio1.php",
        "Factorizar un número" => "./funciones/ejercicio2.php",
        "Generar usuarios" => "./funciones/ejercicio3.php",
        "Sumar numeros de forma recursiva" => "./funciones/ejercicio4.php",
        "Crear enlaces mediante una función" => "./funciones/ejercicio5.php",
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
            <h1 style="text-align: center">Ejercicios de funciones</h1>
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