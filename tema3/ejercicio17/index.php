<?php
        /*
        * @author Rubén Jesús Garzón Zafra
        * Mostrar el calendario del mes
        */
        $fecha = "2015-08-30";
        $fechaComoEntero = strtotime($fecha);
        $festivo = "15";
        $hoy = date("d", $fechaComoEntero);
        $dias = date("t", $fechaComoEntero);
        $anio = date("y", $fechaComoEntero);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
</head>
<body>
       
    <?php
        echo "Calendario " . $fecha;
        echo "<br>";
        echo "<br>";
            for ($i=1; $i < $dias; $i++) {
                $dia = date("l", mktime(0,0,0,8,$i,2015));
                
                    if($dia == "Sunday"){
                        echo "<p style='display: inline'>";
                        echo $i;
                        echo "<br>";
                        echo "</p>";
                        
                    }elseif($i == $festivo){
                        echo "<p style='display: inline; color: red;'>";
                        echo $i . " ";
                        echo "</p>"; 
                    }elseif($i == $hoy){
                        echo "<p style='display: inline; color: green;'>";
                        echo $i . " ";
                        echo "</p>";
                    }else{  
                        echo $i . " ";
                    }
                
            }

        
    ?>


</body>
</html>