<?php
    $formulario = [
        "Nombre", "Apellidos"
    ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="ProcesaFormulario.php" method="get">

        <?php
            foreach ($formulario as $key => $value) {
                echo "<input type='text' name='$value' value='' placeholder='$value'>";
                echo "<br>";
            }
        ?>
      
      <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>