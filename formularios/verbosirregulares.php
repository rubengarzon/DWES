<?php

    /*
    * @author
    * @version
    */


    //Inicialización de variables
    $msgErrorCantidad = "";
    $cantidad = 0;
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
        $cantidad = clearData($_POST['cantidad']);

        if(empty($cantidad)){  //validar cantidad
            $procesaFormulario = false;
            $msgErrorCantidad = "* Cantidad requerido";

        }
    }


    //Formulario
    if($procesaFormulario){
        echo "Cantidad: " . $cantidad . " ";
    }else{
        echo "<form action=$_SERVER[PHP_SELF] method='post'>";
            echo "<input type='number' name='cantidad' placeholder='Escribe la cantidad' value='$cantidad'>";
            echo " " . $msgErrorCantidad;
            echo "<br>";
            echo "<br>";
            echo "<input type='submit' name='enviar' value='Enviar'>";
        echo "</form>";
    }