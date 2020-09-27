<?php
        /*
        * @author Rubén Jesús Garzón Zafra
        * Listas de enlaces segun el perfil del usuario
        */
        $usuario = "usuario";
        

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
       
    <?php
        if($usuario == "usuario"){
            echo "<a href='#'>Inicio</a>";
            echo "<br>";
            echo "<a href='#'>Noticias</a>";
            echo "<br>";
            echo "<a href='#'>Nosotros</a>";
            echo "<br>";
            echo "<a href='#'>Cerrar sesión</a>";
        }elseif($usuario == "admin"){
            echo "<a href='#'>Inicio</a>";
            echo "<br>";
            echo "<a href='#'>Administración</a>";
            echo "<br>";
            echo "<a href='#'>Noticias</a>";
            echo "<br>";
            echo "<a href='#'>Nosotros</a>";
            echo "<br>";
            echo "<a href='#'>Cerrar sesión</a>";
        }else{
            echo "No tienes permiso";
        }
    ?>


</body>
</html>