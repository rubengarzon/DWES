<?php
    session_start();

    if(!isset($_SESSION['auth'])){
        $_SESSION['auth'] = false;
        $_SESSION['usuario'] = 'Invitado';
    }

    echo "Usted está en el sistema como: " . $_SESSION['usuario'];

    if($_SESSION['auth']){
        mostrarLogout();
    }else{
        mostrarFormulario();
    }

    function mostrarLogout() {
        echo "<button type='submit' name='logout'>Cerrar sesión</button>";
    }

    function mostrarFormulario(){
        echo "<br><br>";
        echo "<form action='privado.php' method='post'>";
            echo "Usuario <input type='text' name='usuario'>";
            echo " Contraseña <input type='password' name='password'>";
            echo " <input type='submit' name='enviar'>";
        echo "</form>";
    }


?>