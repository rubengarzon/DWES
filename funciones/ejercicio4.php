<?php
 /*
   * @author Rubén Jesús Garzón Zafra
   * @version 1.0
  */


      //Inicialización de variables
      $msgErrorNumero = $msgErrorNumero2 = "";
      $numero = 0;
      $numero2 = 0;
      $procesaFormulario = false;


      /*
       * Limpia los datos
       * @param $cadena
       * @return $cadenaLimpia
      */
      function clearData($cadena){
          $cadenaLimpia = htmlspecialchars($cadena);
          $cadenaLimpia = trim($cadenaLimpia);  // quita espacios al principio y al final
          $cadenaLimpia = stripslashes($cadenaLimpia); // quita las barras de un string

          return $cadenaLimpia;
      }

      //Validación
      if(isset($_GET['enviar'])){
          $procesaFormulario = true;
          $numero = clearData($_GET['numero']);
          $numero2 = clearData($_GET['numero2']);

          if(empty($numero)){  //validar nombre
              $procesaFormulario = false;
              $msgErrorNumero = "* Número requerido";
          }

          if(empty($numero2)){  //validar nombre
              $procesaFormulario = false;
              $msgErrorNumero2 = "* Número requerido";
          }

      }

      /*
       * Recursividad
       * @param $numero
       * @return $numero*$numero
      */
      function sumar($numero, $numero2){
          $numero = $numero + $numero2;
          return $numero;
      }

      echo "<br>";

      //Formulario
      if($procesaFormulario){
          echo sumar($numero, $numero2);
          echo "<br>";
      }else{
          echo "<form action=$_SERVER[PHP_SELF] method='GET'>";
              echo "<input type='number' name='numero' value='$numero'>";
              echo " " . $msgErrorNumero;
              echo "<br>";
              echo "<br>";
              echo "<input type='number' name='numero2' value='$numero2'>";
              echo " " . $msgErrorNumero2;
              echo "<br>";
              echo "<br>";
              echo "<input type='submit' name='enviar' value='Enviar'>";
          echo "</form>";
      }