<?php

    session_start();
    
    if(isset($_POST['enviar'])){
        $_SESSION['auth'] = true;
        $_SESSION['usuario'] = "Administrador";
    }else{
        header('Location: index.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
</head>
<body>
    <p>Usted está en el sistema como: <b><?php echo $_SESSION['usuario']?></b></p>

    <form action="index.php" method="post">
        <input type="submit" value="Cerrar sesión" name="logout">
    </form>
</body>
</html>