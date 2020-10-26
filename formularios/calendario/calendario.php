<?php
    /*
    * @author Rubén Jesús Garzón Zafra
    * @version 0.1
    */


    //Inicialización de variables
    $dia = date("d");
    $mes = date("n");
    $year = date("Y");
    $diaActual = date("j");
    $fechaErr = "";
    $fecha = date("y-n-m");
    $procesaTabla = false;
    // Obtenemos el dia de la semana del primer dia
    // Devuelve 0 para domingo, 6 para sabado
    $diaSemana=date("w",mktime(0,0,0,$mes,1,$year))+7;
    // Obtenemos el ultimo dia del mes
    $ultimoDiaMes=date("d",(mktime(0,0,0,$mes+1,1,$year)-1));
    // Meses del año
    $meses= ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
    "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    $festivos = [
        "Enero" => [1],
        "Abril" => [10],
        "Mayo" => [1],
        "Agosto" => [15],
        "Octubre" => [12],
        "Diciembre" => [8,25]
    ];
    //Validación
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["fecha"])) {
          $nameErr = "Fecha es requerido";
        } else {
          $fecha = test_input($_POST["fecha"]);
          $procesaTabla = true;
        }
    }
      //Limpieza de datos
      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      
      //Formulario
      if(!$procesaTabla) {
        echo  "<h2>Calendario</h2>";
        echo  "<p><span class='error'>* Campos requeridos</span></p>";
        echo "<form action=\"$_SERVER[PHP_SELF]\";\" enctype=\"multipart/form-data\" method=\"post\">";
          echo "Fecha: <input type='date' name='fecha' value='<?php echo date(\"Y-m-d\");?>'>";
          echo "<span class='error'>* <?php echo $fechaErr;?></span>";
          echo "<br><br>";
          echo "<input type='submit' name='enviar' value='Enviar'>";  
        echo "</form>";
      }else{
        echo "<table id='calendar'>";
          echo "<tr>";
          // sustituir por un bucle
            echo "<th>Lun</th>";
            echo "<th>Mar</th>";
            echo "<th>Mie</th>";
            echo "<th>Jue</th>";
            echo "<th>Vie</th>";
            echo "<th>Sab</th>";
            echo "<th>Dom</th>";
          echo "</tr>";
          echo "<tr bgcolor='silver'>";
          $last_cell=$diaSemana+$ultimoDiaMes;
          // hacemos un bucle hasta 42, que es el máximo de valores que puede
          // haber... 6 columnas de 7 dias
          for($i=1;$i<=42;$i++)
          {
              if($i==$diaSemana)
              {
                  // determinamos en que dia empieza
                  $day=1;
              }
              if($i<$diaSemana || $i>=$last_cell)
              {
                  // celca vacia
                  echo "<td>&nbsp;</td>";
              }else{
                  // mostramos el dia
                  if($day==$diaActual)
                      echo "<td class='hoy'>$day</td>";
                      elseif($day == 12)
                      echo "<td class='festivo'>$day</td>";
                  else
                      echo "<td>$day</td>";
                  $day++;
              }
              // cuando llega al final de la semana, iniciamos una columna nueva
              if($i%7==0)
              {
                  echo "</tr><tr>\n";
              }
          }
          echo "</tr>";
        echo "</table>";
      }

?>

<!DOCTYPE HTML>  
<html>
<head>
      <link rel="stylesheet" href="css/style.css">
</head>
<body>  
</body>
</html>

