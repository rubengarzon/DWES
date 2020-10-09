<?php

    $carta = [
        "primeros" => [
             "Spaghetti con tomates secos y mozarella" => [
                "precio" => "6€",
                "foto" => "https://img-global.cpcdn.com/recipes/ae2e0b27d94a07cc/751x532cq70/spaghetti-con-tomates-secos-y-mozarella-foto-principal.jpg"
             ],
             "Pisto" => [
                "precio" => "8€",
                "foto" => "https://img-global.cpcdn.com/recipes/e4443f32283e1c39/751x532cq70/pisto-foto-principal.jpg"
             ],
             "Almejas en salsa Montilla Moriles" => [
                "precio" => "10€",
                "foto" => "https://img-global.cpcdn.com/recipes/e6dc6a8b80043e91/751x532cq70/almejas-en-salsa-montilla-moriles-foto-principal.jpg"
             ],
        ],
        "segundos" => [
            "Entrecot de vaca empadronado" => [
                "precio" => "6€",
                "foto" => "https://img-global.cpcdn.com/recipes/15ab4ac49586ab55/751x532cq70/entrecot-de-vaca-empadronado-foto-principal.jpg"
             ],
             "Tortilla de calabacín" => [
                "precio" => "7€",
                "foto" => "https://img-global.cpcdn.com/recipes/cd0f436d04dc2266/751x532cq70/tortilla-de-calabacin-foto-principal.jpg"
             ],
             "Canelones de pollo" => [
                "precio" => "10€",
                "foto" => "http://www.annarecetasfaciles.com/files/dsc09300-815x458.jpg"
             ],
             "Canelones de pollo" => [
                "precio" => "10€",
                "foto" => "http://www.annarecetasfaciles.com/files/dsc09300-815x458.jpg"
             ],
             "Pollo al curry" => [
                "precio" => "9€",
                "foto" => "http://www.annarecetasfaciles.com/files/pollo-al-curry-2-1024x576.jpg"
             ],
        ],
        "postres" => [
            "tocino de cielo" => [
                "precio" => "5€",
                "foto" => "https://i.blogs.es/9be371/tocino-de-cielo/1366_2000.jpg"
             ],
             "Torta Ortigara" => [
                "precio" => "4€",
                "foto" => "https://i.blogs.es/0133cd/torta-almendra/1366_2000.jpg"
             ],
             "Tarta bourdaloue" => [
                "precio" => "6€",
                "foto" => "https://i.blogs.es/215439/tarta-bourdaloue/1366_2000.jpg"
             ],
        ]
    ];

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 24</title>
</head>
<body>
    <?php
      foreach ($carta as $key => $value) {
         foreach ($value as $clave => $valor) {
            echo $clave . "  " . $valor;
         }
      }
    ?>
</body>
</html>