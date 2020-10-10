<?php

/*
*   @author Rubén Jesús Garzón Zafra
*   Selección de alumnos
*/

    $alumnos = [
        "12345678X" => [
            "Nombre" => "Federico Lopez Nieto",
            "Dni" => "12345678X",
            "Fecha de nacimiento" => "01/12/2000",
            "Estudios"=>"Grado Medio de Sistemas Microinformáticos y Redes"
        ],
        "17344678Y" => [
            "Nombre" => "Manolo García Gonzalez",
            "Dni" => "17344678Y",
            "Fecha de nacimiento" => "07/03/1995",
            "Estudios"=>"Grado Medio de Sistemas Microinformáticos y Redes"
        ],
        "17344638Y" => [
            "Nombre" => "Natalia García Fernández",
            "Dni" => "17344678Y",
            "Fecha de nacimiento" => "27/08/1999",
            "Estudios"=>"Bachillerato"
        ],

        "17345678Y" => [
            "Nombre" => "Manolo García Gonzalez",
            "Dni" => "17344678Y",
            "Fecha de nacimiento" => "27/08/1999",
            "Estudios"=>"Bachillerato"
        ],

        "17344698Y" => [
            "Nombre" => "Mario García Ramírez",
            "Dni" => "17344678Y",
            "Fecha de nacimiento" => "27/08/1993",
            "Estudios"=>"Bachillerato"
        ],

        "17344678Y" => [
            "Nombre" => "Marta Sánchez Pérez",
            "Dni" => "17344678Y",
            "Fecha de nacimiento" => "27/08/2000",
            "Estudios"=>"Bachillerato"
        ],

        "17344078M" => [
            "Nombre" => "Tamara	Diaz Moreno",
            "Dni" => "17344678Y",
            "Fecha de nacimiento" => "03/10/1999",
            "Estudios"=>"Bachillerato"
        ],

        "17344678D" => [
            "Nombre" => "Rubén Alonso Gutiérrez",
            "Dni" => "17344678Y",
            "Fecha de nacimiento" => "16/08/1999",
            "Estudios"=>"Bachillerato"
        ],

        "17344678F" => [
            "Nombre" => "Jesús Navarro Ramos",
            "Dni" => "17344678Y",
            "Fecha de nacimiento" => "15/09/1999",
            "Estudios"=>"Grado Medio de Sistemas Microinformáticos y Redes"
        ],


    ];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 22</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <a class="enlace" href='./ejerciciosDWES/html/array/index.html' ;>Inicio</a>
    <a class="enlace" href='https://github.com/rubengarzon/DWES/blob/master/tema1/ejercicio22/index.php' style='margin-left: 10px;'>Ver código</a>
    
    <br>
    <br>
    <br>

    <?php

        foreach ($alumnos as $key => $value) {
            foreach ($value as $clave => $valor) {
                echo $clave . ": " . $valor;
                echo "<br>";
            }
            echo "<hr>";
        }

    ?>

</body>
</html>