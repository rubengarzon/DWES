<?php
 /*
   * @author Rubén Jesús Garzón Zafra
   * @version 1.0
  */


      //Inicialización de variables
      $nombre = $url = $msgErrorUrl = $msgErrorNombre = "";

      $array = [
          "marca" => "www.marca.com",
          "google" => "www.google.es"
      ];


      $procesaFormulario = false;

      /*
       * Recursividad
       * @param $numero
       * @return $numero*$numero
      */
      function crearEnlaces($array){
          foreach ($array as $index => $item) {
              echo "<a href='$item'>$index</a>";
              echo "<br>";
          }
      }

      crearEnlaces($array);