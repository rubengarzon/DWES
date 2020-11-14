<?php
    session_start();

    if(isset($_POST['logout'])){
        $_SESSION['auth'] = false;
        $_SESSION['usuario'] = 'Invitado';
    }else{
        $_SESSION['auth'] = false;
        $_SESSION['usuario'] = 'Invitado';
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>
<body>
    <p>Usted está en el sistema como: <b><?php echo $_SESSION['usuario']?></b></p>

    <form action="privado.php" method="post">
        Usuario <input type="text" name="usuario" id="">
        Contraseña <input type="password" name="password" id="">
        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>
</html>