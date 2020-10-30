<?php
     /*
       * @author Rubén Jesús Garzón Zafra
       * @version 1.0
      */

          //Inicialización de variables

            $aUsuarios = array(

                array('nombre'=>'Jesús','apellido1'=>'Martínez','apellido2'=>'García'),

                array('nombre'=>'Mercedes','apellido1'=>'Calamaro','apellido2'=>'Pedrajas'),

                array('nombre'=>'Elena','apellido1'=>'Perez','apellido2'=>''),

            );


            echo "<h3>Usuarios generados</h3>";

          /*
           * Función anónima
           * @param
           * @return
          */
            $usuarios = array_map (function($usuario){
                echo substr($usuario['apellido1'], 0,2) . substr($usuario['apellido2'], 0,2) . substr($usuario['nombre'], 0,1);
                echo "<br>";
                }, $aUsuarios);

            $usuarios;

            echo "<br>";
            echo "<br>";
            echo "<a href='https://github.com/rubengarzon/DWES/blob/master/funciones/ejercicio3.php'>Ver código</a>";

