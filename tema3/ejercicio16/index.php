<?php
        /*
        * @author Rubén Jesús Garzón Zafra
        * Paleta de colores
        */        
        $incremento = 16;
        $r = 0;
        $g = 0;
        $b = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>
<body>

<table>
    <?php
        echo "<table>";

        for ($i=0; $i < 255; $i+=$incremento) { 
            for ($j=0; $j < 255; $j+=$incremento) {
                echo "<tr>"; 
                for ($z=0; $z < 255; $z+=$incremento) { 
                    $color = "rgb($r,$j,$z)";
                    $colorHx = "#" . dechex($i) . dechex($j) . dechex($z);
                    echo "<td style='background-color: $color'>";
                    echo "$colorHx";
                    echo "</td>";
                }
                echo "</tr>"; 
            }
        }

        echo "</table>";
        
    ?>
	

</table>


</body>
</html>