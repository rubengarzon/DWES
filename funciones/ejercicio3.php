<?php
     /*
       * @author Rubén Jesús Garzón Zafra
       * @version 1.0
      */


          //Inicialización de variables
          $nombre = $apellidos = $email = $msgErrorNombre = $msgErrorApellidos = $msgErrorEmail = "";

            $aUsuarios = array(

                array('nombre'=>'Jesús','apellido1'=>'Martínez','apellido2'=>'García'),

                array('nombre'=>'Mercedes','apellido1'=>'Calamaro','apellido2'=>'Pedrajas'),

                array('nombre'=>'Elena','apellido1'=>'Perez','apellido2'=>''),

            );

          $procesaFormulario = false;



          /*
           * Función anónima
           * @param
           * @return
          */
            $usuarios = array_map (function($usuario){
                echo substr($usuario['apellido1'], 0,2) . substr($usuario['apellido2'], 0,2) . substr($usuario['nombre'], 0,1);
            }, $aUsuarios);

             $usuarios;

            echo "<br>";