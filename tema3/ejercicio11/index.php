<?php
        /*
        * @author Rubén Jesús Garzón Zafra
        * Cabecera en función de la estación del año.
        */

        $fechaUnix = strtotime(date("d-m-Y"));
        $fechaActual = date("d-m-Y");
        $year = date("Y");
        $dia = date("l");
        $sonriendo = "./img/carasonriente.png";
        $triste = "./img/sinboca.png";
        $sinboca = "./img/triste.png";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>
       
    <?php
        
        echo "<h3>";

        if($dia == "Monday"){
            echo "Hoy es lunes";
            echo "<img src='$triste' width='100'";
        }elseif($dia == "Tuesday"){
            echo "Hoy es martes";
            echo "<img src='$sinboca' width='100'";
        }elseif($dia == "Wednesday"){
            echo "Hoy es miercoles";
            echo "<img src='$sinboca' width='100'";
        }elseif($dia == "Thursday"){
            echo "Hoy es jueves";
            echo "<img src='$sinboca' width='100'";
        }elseif($dia == "Friday"){
            echo "Hoy es viernes";
            echo "<img src='$sonriendo' width='100'";
        }elseif($dia == "Saturday") {
            echo "Hoy es sabado";
            echo "<img src='$sonriendo' width='100'";
        }else{
            echo "Hoy es domingo";
            echo "<img src='$triste' width='100'";
        }
        echo "</h3>";

        echo "<br>";
        
        echo "Fecha actual: " . $fechaActual;

        echo "<br>";

        if($fechaUnix >= strtotime(date("21-03-$year")) && $fechaUnix < strtotime(date("20-06-$year")))
            echo "Estamos en primavera";
        elseif($fechaUnix >= strtotime(date("21-06-$year")) && $fechaUnix < strtotime(date("20-09-$year")))
            echo "Estamos en verano";
        elseif($fechaUnix >= strtotime(date("21-09-$year")) && $fechaUnix < strtotime(date("20-12-$year")))
            echo "Estamos en otoño";
        elseif($fechaUnix >= strtotime(date("21-12-$year")) && $fechaUnix < strtotime(date("20-03-$year")))
            echo "Estamos en invierno";
    ?>


</body>
</html>