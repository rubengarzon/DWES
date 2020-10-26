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
        $procesaFormulario = true;
        $nombre = clearData($_POST['nombre']);
        $apellidos = clearData($_POST['apellidos']);
        $email = clearData($_POST['email']);

        if(empty($nombre)){  //validar nombre
            $procesaFormulario = false;  
            $msgErrorNombre = "* Nombre requerido";
        }
        
        if(empty($apellidos)){  //validar apellido
            $procesaFormulario = false;  
            $msgErrorApellidos = "* Apellidos requerido";
        }
        
        if(empty($email)){  //validar email
            $procesaFormulario = false;  
            $msgErrorEmail = "* Email requerido";
            
        }


    }


    //Formulario
    if($procesaFormulario){
        echo "Nombre: " . $nombre . " ";
        echo "<br>";
        echo "Apellidos: " . $apellidos . " ";
        echo "<br>";
        echo "Email: " . $email . " ";
    }else{
        echo "<form action=$_SERVER[PHP_SELF] method='POST'>";
            echo "<input type='text' name='nombre' placeholder='Escribe tu nombre' value='$nombre'>";
            echo " " . $msgErrorNombre;
            echo "<br>";
            echo "<br>";
            echo "<input type='text' name='apellidos' placeholder='Escribe tus apellidos' value='$apellidos'>";
            echo " " . $msgErrorApellidos;
            echo "<br>";
            echo "<br>";
            echo "<input type='email' name='email' placeholder='Escribe tu email' value='$email'>";
            echo " " . $msgErrorEmail;
            echo "<br>";
            echo "<br>";
            echo "<input type='submit' name='enviar' value='Enviar'>";
        echo "</form>";
    }


