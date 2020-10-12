<?php

    $carta = [
        "primeros" => [
           "Spaghetti con tomates secos y mozarella" =>[
               "precio" => 7,
               "foto" => "https://img-global.cpcdn.com/recipes/ae2e0b27d94a07cc/751x532cq70/spaghetti-con-tomates-secos-y-mozarella-foto-principal.jpg"
           ],
             "Pisto" => [
                "precio" => 8,
                "foto" => "https://img-global.cpcdn.com/recipes/e4443f32283e1c39/751x532cq70/pisto-foto-principal.jpg"
             ],
             "Almejas en salsa Montilla Moriles" => [
                "precio" => 10,
                "foto" => "https://img-global.cpcdn.com/recipes/e6dc6a8b80043e91/751x532cq70/almejas-en-salsa-montilla-moriles-foto-principal.jpg"
             ],
        ],
        "segundos" => [
            "Entrecot de vaca empadronado" => [
                "precio" => 6,
                "foto" => "https://img-global.cpcdn.com/recipes/15ab4ac49586ab55/751x532cq70/entrecot-de-vaca-empadronado-foto-principal.jpg"
             ],
             "Tortilla de calabacín" => [
                "precio" => 7,
                "foto" => "https://img-global.cpcdn.com/recipes/cd0f436d04dc2266/751x532cq70/tortilla-de-calabacin-foto-principal.jpg"
             ],
             "Canelones de pollo" => [
                "precio" => 10,
                "foto" => "http://www.annarecetasfaciles.com/files/dsc09300-815x458.jpg"
             ],
             "Lomo de cerdo relleno" => [
                "precio" => 12,
                "foto" => "http://www.annarecetasfaciles.com/files/img_4821-lomo-relleno-1-1024x576.jpg"
             ],
             "Pollo al curry" => [
                "precio" => 9,
                "foto" => "http://www.annarecetasfaciles.com/files/pollo-al-curry-2-1024x576.jpg"
             ],
        ],
        "postres" => [
            "tocino de cielo" => [
                "precio" => 5,
                "foto" => "https://i.blogs.es/9be371/tocino-de-cielo/1366_2000.jpg"
             ],
             "Torta Ortigara" => [
                "precio" => 4,
                "foto" => "https://i.blogs.es/0133cd/torta-almendra/1366_2000.jpg"
             ],
             "Tarta bourdaloue" => [
                "precio" => 6,
                "foto" => "https://i.blogs.es/215439/tarta-bourdaloue/1366_2000.jpg"
             ],
         ],
      ];

    $menu = [     
        "Menu 1" => [
            "Primer plato" => "Spaghetti con tomates secos y mozarella",
            "Segundo plato" => "Pollo al curry",
            "Postre" => "Tarta bourdaloue"
        ],
        "Menu 2" => [
         "Primer plato" => "Pisto",
         "Segundo plato" => "Tortilla de calabacín",
         "Postre" => "Torta Ortigara",
         ],
        "Menu 3" => [
         "Primer plato" => "Almejas en salsa Montilla Moriles",
         "Segundo plato" => "Lomo de cerdo relleno",
         "Postre" => "tocino de cielo",
     ],
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




   <h1 style="text-align: center">Carta de un restaurante</h1>
    <?php

      foreach ($carta as $key => $value) {
         foreach ($value as $clave => $valor) {
            echo "<h3 style='text-align: center;'>";
               echo $clave .  " ";
            echo "</h3>";
            foreach ($valor as $key1 => $value1) {
                  if($key1 == "foto"){
                     echo "<img style='margin: auto; display: block' src='$value1' alt='' width='300px'>";
                  }elseif($key1 == "precio"){
                     echo "<p style='text-align: center;'>";
                        echo $value1 . "€";
                     echo "</p>";
                  }else{
                     echo "<p style='text-align: center;'>";
                        echo $value1;
                     echo "</p>";
                  }
            }
         }
      }

      echo "<br>";
      echo "<br>";
      echo "<br>";

      echo "<h2 style='text-align: center'>";
         echo "Menus disponibles";
      echo "</h2>";
      $precioPrimerPlatoMenu1 = $carta["primeros"]["Spaghetti con tomates secos y mozarella"]["precio"];
      $precioSegundoPlatoMenu1 = $carta["segundos"]["Pollo al curry"]["precio"];
      $precioPostreMenu1 = $carta["postres"]["Tarta bourdaloue"]["precio"];
      $precioTotalMenu1 = $precioPrimerPlatoMenu1 + $precioSegundoPlatoMenu1 + $precioPostreMenu1;

      $precioPrimerPlatoMenu2 = $carta["primeros"]["Pisto"]["precio"];
      $precioSegundoPlatoMenu2 = $carta["segundos"]["Tortilla de calabacín"]["precio"];
      $precioPostreMenu2 = $carta["postres"]["Torta Ortigara"]["precio"];
      $precioTotalMenu2 = $precioPrimerPlatoMenu2 + $precioSegundoPlatoMenu2 + $precioPostreMenu2;

      $precioPrimerPlatoMenu3 = $carta["primeros"]["Almejas en salsa Montilla Moriles"]["precio"];
      $precioSegundoPlatoMenu3 = $carta["segundos"]["Lomo de cerdo relleno"]["precio"];
      $precioPostreMenu3 = $carta["postres"]["tocino de cielo"]["precio"];
      $precioTotalMenu3 = $precioPrimerPlatoMenu3 + $precioSegundoPlatoMenu3 + $precioPostreMenu3;


      $i = 0;

         foreach ($menu as $clave => $valor) {
            echo "<p style='text-align: center;font-weight: bold''>";
                  echo $clave;
               echo "</p>";
            foreach ($valor as $key => $value) {
                  
                  if($key == "Postre" && $i == 0){
                     echo "<p style='text-align: center'>"; 
                        echo $value;
                     echo "</p>";
                     echo "<p style='text-align: center'>"; 
                        echo "Precio: " . $precioTotalMenu1 . "€";
                     echo "</p>";
                     $i++;
                  }elseif($key == "Postre" && $i == 1){
                     echo "<p style='text-align: center'>"; 
                        echo $value;
                     echo "</p>";
                     echo "<p style='text-align: center'>"; 
                        echo "Precio: " . $precioTotalMenu2 . "€";
                     echo "</p>";
                     $i++;
                  }elseif($key == "Postre" && $i == 2){
                     echo "<p style='text-align: center'>"; 
                        echo $value;
                     echo "</p>";
                     echo "<p style='text-align: center'>"; 
                        echo "Precio: " . $precioTotalMenu3 . "€";
                     echo "</p>";
                  }else{
                     echo "<p style='text-align: center;>";
                        echo $key;
                     echo "</p>";
   
                     echo "<p style='text-align: center;>";
                      echo $value;
                     echo "</p>";
                  }
               }
               
               echo "<hr>";
            }
               
                     
         

         
    ?>
</body>
</html>