<?php
        /*
        * @author Rubén Jesús Garzón Zafra
        * 
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
       
    <?php
        $age = array(
                    'Peter' => '35',
                    'Ben'   => '37',
                    'Joe'   =>  '43'
                );

        foreach ($age as $key => $value) {
            echo $value;
            echo "<br>";
        }


        $coches = array(
                    array("Volvo", 100, 96),
                    array("BMW", 60, 59),
                    array("Toyota", 110, 100)
        );

        $arrayName = array(
            'Peter' => array("Lois", "Megan"),
            'Brown' => array("Lois", "Megan"),
        );

        echo "";


    ?>


</body>
</html>