<?php
 /*
  * @author Rubén Jesús Garzón Zafra
  * @version 1.0
 */


     //Inicialización de variables
     $numero = 0;
     $msgErrorNumero = "";
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
             $msgErrorNumero = "* Numero requerido";
         }

     }

     /*
      * Factorizar un número
      * @param $numero
     */
     function factorizar($numero){

         $resultado = $numero;
         $j = 2;

         echo $resultado . " " . $j;
         echo "<br>";

         for ($i = 1; $i <= 10; $i++) {
             if($resultado % $j == 0){
                 $resultado = $resultado / $j;
                 echo $resultado . " " . $j;
                 echo "<br>";
             }else{
                 $j++;
             }
         }
     }

     echo "<br>";

     //Formulario
     if($procesaFormulario){
         echo factorizar($numero);
     }else{
         echo "<form action=$_SERVER[PHP_SELF] method='GET'>";
             echo "<input type='number' name='numero' placeholder='Escribe un número' value='$numero'>";
             echo " " . $msgErrorNumero;
             echo "<br>";
             echo "<br>";
             echo "<input type='submit' name='enviar' value='Enviar'>";
         echo "</form>";
     }