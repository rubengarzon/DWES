<?php
        /*
        * @author Rubén Jesús Garzón Zafra
        * Tabla de multiplicar del 1 al 10
        */


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
       

    <?php
        echo "<table>";

            for ($i=1; $i < 11; $i++) {
                    echo "<tr>";
                        for ($j=1; $j < 11; $j++) {
                            echo "<td>"; 
                            echo $i * $j;
                            echo "</td>";
                        }
                    echo "</tr>";
            }
            
        echo "</table>";   
        
        
    ?>


</body>
</html>