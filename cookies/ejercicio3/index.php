<?php

    if(isset($_POST['enviar'])){
        if(!isset($_COOKIE['user']) && !isset($_COOKIE['password'])){
            setcookie("usuario", $_POST['user'], time()+3600);
            setcookie("pass", $_POST['password'], time()+3600);

            echo $_COOKIE['usuario'] . " " . $_COOKIE['pass'];
        }
    }    

    if(isset($_POST['check'])){
        setcookie("usuario", $_POST['user'], time()-3600);
        setcookie("pass", $_POST['password'], time()-3600);
    }
        
?>

<html>
<head>
 <title>Ejercicio 3</title>
</head> 
<body>
   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      Nombre de usuario: <input type="text" name="user"> <br> <br>
      Contraseña: <input type="password" name="password"> <br> <br>
      Borrar información<input type="checkbox" name="check"> <br> <br>
      <input type="submit" value="Enviar" name="enviar">
   </form>

  
</body> 
</html>