<?php
 /*
   * @author Rubén Jesús Garzón Zafra
   * @version 1.0
  */


      //Inicialización de variables
      $msgErrorNumero = "";
      $numero = 0;
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

          if(empty($numero)){  //validar nombre
              $procesaFormulario = false;
              $msgErrorNumero = "* Número requerido";
          }

      }

      /*
       * Recursividad
       * @param $numero
       * @return $numero*$numero
      */
      function sumar($numero){
          if ($numero != 0){
              return $numero + sumar($numero - 1);
          }
      }

      echo "<br>";

      //Formulario
      if($procesaFormulario){
          echo sumar($numero);
          echo "<br>";
      }else{
          echo "<form action=$_SERVER[PHP_SELF] method='GET'>";
              echo "<input type='number' name='numero' value='$numero'>";
              echo " " . $msgErrorNumero;
              echo "<br>";
              echo "<br>";
              echo "<input type='submit' name='enviar' value='Enviar'>";
          echo "</form>";
      }