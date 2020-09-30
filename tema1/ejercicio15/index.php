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
</head>
<body>
       
<table>

<tr>

  <td>Celda 1</td>

  <td>Celda 2</td>

  <td>Celda 3</td>

</tr>

<tr>

  <td>Celda 4</td>

  <td>Celda 5</td>

  <td>Celda 6</td>

</tr>

</table>


    <?php
        echo "<table>";

            for ($i=1; $i < 11; $i++) {
                    echo "<tr>";
                        echo "tabla de multiplicar del " . $i;
                        for ($j=1; $j < 11; $j++) { 
                            echo $i * $j;
                            echo "<br>";
                        }
                    echo "</tr>";
            }
            
        echo "</table>";   
        
        
    ?>


</body>
</html>