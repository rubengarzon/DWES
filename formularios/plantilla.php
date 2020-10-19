<?php
    /*
    * @author 
    * @version
    */


    //Inicialización de variables
    $nombre = $apellidos = $email = $msgErrorNombre = $msgErrorApellidos = $msgErrorEmail = "";
    
    $procesaFormulario = false;


    // Limpieza de datos
    function clearData($cadena){
        $cadenaLimpia = htmlspecialchars($cadena);
        $cadenaLimpia = trim($cadenaLimpia);  // quita espacios al principio y al final
        $cadenaLimpia = stripslashes($cadenaLimpia); // quita las barras de un string

        return $cadenaLimpia;
    }

    //Validación
    if(isset($_POST['enviar'])){
        $nombre = clearData($_POST['nombre']);
        $apellidos = clearData($_POST['apellidos']);
        $email = clearData($_POST['email']);
        $procesaFormulario = true;
    }elseif(empty($nombre)){  //validar nombre  
        $msgErrorNombre = "Nombre requerido";
        $procesaFormulario = false;
    }elseif(empty($apellidos)){  //validar apellido  
        $msgErrorApellidos = "Apellidos requerido";
        $procesaFormulario = false;
    }elseif(empty($email)){  //validar email  
        $msgErrorEmail = "Email requerido";
        $procesaFormulario = false;
    }

    //Formulario
    if($procesaFormulario){
        echo "Nombre: " . $_POST['nombre'] . " ";
        echo "<br>";
        echo "Apellidos: " . $_POST['apellidos'] . " ";
        echo "<br>";
        echo "Email: " . $_POST['email'] . " ";
    }else{
        echo "<form action=$_SERVER[PHP_SELF] method='POST'>";
            echo "<input type='text' name='nombre' placeholder='Escribe tu nombre'>";
            echo "<br>";
            echo "<input type='text' name='apellidos' placeholder='Escribe tus apellidos'>";
            echo "<br>";
            echo "<input type='email' name='email' placeholder='Escribe tu email'>";
            echo "<br>";
            echo "<input type='submit' name='enviar' value='Enviar'>";
        echo "</form>";
    }


?>