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
        // $dia = date("l", $fechaComoEntero);

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
            for ($i=1; $i < $dias; $i++) {
                $dia = date("l", mktime(0,0,0,8,$i,2015));
                
                    if($dia == "Sunday"){
                        echo $i;
                    }elseif($i == $festivo){
                        echo $i . " "; 
                    }elseif($i == $hoy){
                        echo $i . " ";
                    }else{
                        echo $i . " ";
                    }
                
            }

        
    ?>


</body>
</html>