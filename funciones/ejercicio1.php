<?php

    /*
    * @author Rubén Jesús Garzón Zafra
    * @version 1.0
    */


    //Inicialización de variables
    $dni = $msgErrorDni = "";

    $procesaFormulario = false;


    /*
     * Limpieza de datos
     * @param $cadena
     * @return $cadenaLimpia
     */
    function clearData($cadena){
        $cadenaLimpia = htmlspecialchars($cadena);
        $cadenaLimpia = trim($cadenaLimpia);  // quita espacios al principio y al final
        $cadenaLimpia = stripslashes($cadenaLimpia); // quita las barras de un string

        return $cadenaLimpia;
    }
    /*
     * Calcula la letra del dni
     * @param $dni
     * @return $value
     */
    function calcularLetraDni($dni) {
        $juegoCaracteres = ["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E"];
        $modulo = $dni % 23;

        foreach ( $juegoCaracteres as $index => $value) {
            if ($modulo == $index)
                 return $value;
        }
    }

    //Validación
    if(isset($_GET['enviar'])){
        $procesaFormulario = true;
        $dni = clearData($_GET['dni']);

        if(empty($dni)){  //validar dni
            $procesaFormulario = false;
            $msgErrorDni = "* DNI requerido";
        }

        if(!preg_match("/^[0-9]{8,8}[A-Za-z]$/", $dni)){  //validar dni
            $procesaFormulario = false;
            $msgErrorDni = "* DNI incorrecto";
        }

    }


    //Formulario
    if($procesaFormulario){
        echo "La letra del " . $dni  . " es " . calcularLetraDni($dni);
    }else{
        echo "<form action=$_SERVER[PHP_SELF] method='get'>";
            echo "<input type='number' name='dni' placeholder='Escribe tu dni' value='$dni'>";
            echo " " . $msgErrorDni;
            echo "<br>";
            echo "<br>";
            echo "<input type='submit' name='enviar' value='Enviar'>";
        echo "</form>";
        echo "<br>";
        echo "<br>";
        echo "<a href='https://github.com/rubengarzon/DWES/blob/master/funciones/ejercicio1.php'>Ver código</a>";

    }

















