<?php
        /*
        * @author Rubén Jesús Garzón Zafra
        * Mostrar el calendario del mes
        */

        $hoy = date("d");

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
        for ($i=1; $i < 32; $i++) {
            
            if($i == $hoy){
                echo "<p style='color: green margin: 0'>";
                echo $hoy . " ";
                echo "</p>";
            }else{
                echo "<p>";
                echo $i . " "; 
                echo "</p>";
            }
        }
    ?>


</body>
</html>