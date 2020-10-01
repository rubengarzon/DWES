<?php
        /*
        * @author Rubén Jesús Garzón Zafra
        * Paleta de colores
        */        

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table>
    <?php
        for ($i=0; $i < 100; $i = $i + 10) { 

            //&echo dechex($i);
            /* $color = "#" . dechex($i);
            echo "<p style='color: #00000A'>";
            echo "hola mundo";
            echo "</p>"; */
            

            echo "<tr bgcolor='#00000A' style='border: 1px solid black'>";
                echo "<td style='border: 1px solid black'>";
                echo "aaa"; 
                echo "</td>";         
	        echo "</tr>";
        }
        
    ?>
	

</table>


</body>
</html>