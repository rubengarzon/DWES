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
    <title>Document</title>
</head>
<body>
       
    <?php


        echo "<table style='text-align: center';>";

            
            
                for ($j=1; $j <= $dias; $j++) {
                    if($j == 1 || $j == 8 || $j == 15 || $j == 29){
                        echo "<tr style='border: 1px solid black'>";
                    }
                    echo "<td style='border: 1px solid black'>";
                        if($j == $festivo){
                            echo "<p style='background-color: red; color: white;'>";
                            echo "$j";
                            echo "</p>";
                        }elseif($j == $hoy){
                            echo "<p style='background-color: green; color: white;'>";
                            echo "$j";
                            echo "</p>";
                        }else{
                            echo "<p>";
                            echo "$j";
                            echo "</p>";
                        }
                    echo "</td>";
                        if($j == 7 || $j == 14 || $j == 21 || $j == 28){
                            echo "</tr>";  
                        }
                         

                }
            
            

           
            
        echo "</table>";   
        
        
    ?>


</body>
</html>