<?php

/*
*   @author Rubén Jesús Garzón Zafra
*   Selección de alumnos
*/

    $continentes = [
        "Europa" => [
            "Nombre" => "Europa",
            "Superficie" => "10 530 751 km²",
            "Población" => "743 704 000 hab.",
            "Países"=> "50 países"
        ],
        "Asia" => [
            "Nombre" => "Asia",
            "Superficie" => "44 541 138 km²",
            "Población" => "4 598 168 800 hab.",
            "Países"=>"49 países"
        ],
        "Oceanía" => [
            "Nombre" => "Oceanía",
            "Superficie" => "8 542 4991​ km²",
            "Población" => "41 117 432 hab.",
            "Países"=>"15 países"
        ],
        "Africa" => [
            "Nombre" => "Africa",
            "Superficie" => "30 221 535 km²",
            "Población" => "1 320 000 000 hab.",
            "Países"=>"54 países"
        ],
        "Antartida" => [
            "Nombre" => "Antartida",
            "Superficie" => "14 000 000 km²1​",
            "Población" => "1000-5000 hab.",
            "Países"=>"Islas"
        ],
        "America" => [
            "Nombre" => "America",
            "Superficie" => "42 549 000 km²",
            "Población" => "970 040 0002​ hab.",
            "Países"=>"35 países"
        ],

    ];

    $paises = [
        "Afganistán" => [
            "Nombre" => "Afganistán",
            "Capital" => "Kabul",
            "Bandera" => "https://upload.wikimedia.org/wikipedia/commons/9/9a/Flag_of_Afghanistan.svg"
        ],
        "Albania"=> [
            "Nombre" => "Albania",
            "Capital" => "Tirana",
            "Bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Flag_of_Albania.svg/203px-Flag_of_Albania.svg.png"
        ],
        "Alemania"=> [
            "Nombre" => "Alemania",
            "Capital" => "Berlín",
            "Bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Germany.svg/203px-Flag_of_Germany.svg.png"
        ],
        "Andorra"=> [
            "Nombre" => "Andorra",
            "Capital" => "Andorra la Vieja",
            "Bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Flag_of_Andorra.svg/203px-Flag_of_Andorra.svg.png"
        ],
        "Angola"=> [
            "Nombre" => "Angola",
            "Capital" => "Luanda",
            "Bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Flag_of_Angola.svg/203px-Flag_of_Angola.svg.png"
        ],
        "Antigua y Barbuda"=> [
            "Nombre" => "Antigua y Barbuda",
            "Capital" => "Saint John",
            "Bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Flag_of_Antigua_and_Barbuda.svg/203px-Flag_of_Antigua_and_Barbuda.svg.png"
        ],
        "Arabia Saudita"=> [
            "Nombre" => "Arabia Saudita",
            "Capital" => "Kabul",
            "Bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Flag_of_Saudi_Arabia.svg/203px-Flag_of_Saudi_Arabia.svg.png"
        ],
        "Argelia"=> [
            "Nombre" => "Argelia",
            "Capital" => "Argel",
            "Bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/Flag_of_Algeria.svg/203px-Flag_of_Algeria.svg.png"
        ],
        "Argentina"=> [
            "Nombre" => "Argentina",
            "Capital" => "Buenos Aires",
            "Bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Flag_of_Argentina.svg/203px-Flag_of_Argentina.svg.png"
        ],
        "Armenia"=> [
            "Nombre" => "Armenia",
            "Capital" => "Ereván",
            "Bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Flag_of_Armenia.svg/203px-Flag_of_Armenia.svg.png"
        ],
        "Australia"=> [
            "Nombre" => "Australia",
            "Capital" => "Canberra",
            "Bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/Flag_of_Australia_%28converted%29.svg/203px-Flag_of_Australia_%28converted%29.svg.png"
        ],
    ];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 23</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <a class="enlace" href='../../EjerciciosArray.php' ;>Inicio</a>
    <a class="enlace" href='https://github.com/rubengarzon/DWES/blob/master/tema1/ejercicio23/index.php' style='margin-left: 10px;'>Ver código</a>
    <br>
    <br>
    
    <h1>Continentes</h1>

    <?php
        foreach ($continentes as $key => $value) {
            foreach ($value as $clave => $valor) {
                echo $valor;
                echo "<br>";
                
            }
            echo "<br>";
        }
    echo "<h1>Países</h1>";
        foreach ($paises as $key => $value) {
            foreach ($value as $clave => $valor) {
                if($clave == "Bandera"){
                    echo "<br>";
                    echo "<img src=$valor width='100px'>";
                    echo "<br>";
                }elseif($clave != "Bandera"){
                    echo "<br>";
                    echo $valor;
                    echo "<br>";
                }
            }
            echo "<br>";
            echo "<br>";
        }

    ?>

</body>
</html>