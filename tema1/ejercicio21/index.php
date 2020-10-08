<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 21</title>
</head>
<body>
    <?php
        $verbos = [
                "1" => [
                    "Base form" => "be",
                    "Past form" => "was/were",
                    "Past participle" => "been"
                ],
                "2" => [
                    "Base form" => "beat",
                    "Past form" => "beat",
                    "Past participle" => "beaten"
                ],
                "3" => [
                    "Base form" => "begin",
                    "Past form" => "began",
                    "Past participle" => "begun"
                ],
                "4" => [
                    "Base form" => "bend",
                    "Past form" => "bent",
                    "Past participle" => "bent"
                ],
                "5" => [
                    "Base form" => "bite",
                    "Past form" => "bit",
                    "Past participle" => "bitten"
                ]


        ];

        foreach ($verbos as $key => $value) {
            foreach ($value as $clave => $valor) {
                echo $clave . " " . $valor;
                echo "<br>"; 
            }
        }
    ?>
</body>
</html>