<!DOCTYPE HTML>  
<html>
<head>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>  

<?php


// Definimos las variables
$nameErr = $emailErr = $genderErr = $websiteErr = $vehicleErr = $educacionErr = "";
$name = $email = $gender = $comment = $website = $vehicle = $educacion = "";
$datos = [];


// Se ejecuta cuando se lanza el metodo post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Nombre requerido";
  }else if(!preg_match("/^[a-zA-Z-']*$/",$name)){
    $nameErr = "Solo letras y espacios en blanco permitido";
  } else{
    $name = test_input($_POST["name"]);
    array_push($datos,$name);
  }
  
  
  if (empty($_POST["email"])) {
    $emailErr = "* Email es requerido";
  } else {
    $email = test_input($_POST["email"]);
    array_push($datos,$email);
    // comprueba si el email está bien formado
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Formato de email invalido";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    array_push($datos,$website);
    // comprueba si la sintaxis de la dirección URL es válida (esta expresión regular también permite guiones en la URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
    array_push($datos,$comment);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "* El género es requerido";
  } else {
    $gender = test_input($_POST["gender"]);
    array_push($datos,$gender);
  }

  if (empty($_POST["vehicle"])) {
    $vehicleErr = "* El transporte es requerido";
  } else {
    $vehicle = test_input($_POST["vehicle"]);
    array_push($datos,$vehicle);
  }

  if (empty($_POST["educacion"])) {
    $educacion = "* La educación es requerido";
  } else {
    $educacion = test_input($_POST["educacion"]);
    array_push($datos,$educacion);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<h2>Formulario</h2>
<p><span class="error">* campos requeridos</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Nombre: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error"> <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error"> <?php echo $emailErr;?></span>
  <br><br>
  Sitio web: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comentarios: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Genero:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Mujer") echo "checked";?> value="Mujer">Mujer
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Hombre") echo "checked";?> value="Hombre">Hombre
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Otros") echo "checked";?> value="Otros">Otros  
  <span class="error"> <?php echo $genderErr;?></span>
  <br><br>
  Transporte
  <br><br>
  <input type="checkbox" id="vehicle1" name="vehicle" <?php if (isset($vehicle) && $vehicle=="Bici") echo "checked";?> value="Bici">
  <label for="vehicle1"> Tengo bicicleta</label><br>
  <input type="checkbox" id="vehicle2" name="vehicle" <?php if (isset($vehicle) && $vehicle=="Coche") echo "checked";?> value="Coche"> 
  <label for="vehicle2"> Tengo coche</label><br>
  <input type="checkbox" id="vehicle3" name="vehicle" <?php if (isset($vehicle) && $vehicle=="Patinete Electrico") echo "checked";?> value="Patinete Electrico">
  <label for="vehicle3"> tengo patinete eléctrico</label><br>
  <span class="error"> <?php echo $vehicleErr;?></span>
  <br><br>
  Educación
  <br><br>
  <select name="educacion">
        <option value="sin-estudios">Sin estudios</option>
        <option value="educacion-obligatoria" <?php if (isset($educacion) && $educacion=="educacion-obligatoria") echo "selected";?>>Educación Obligatoria</option>
        <option value="formacion-profesional" <?php if (isset($educacion) && $educacion=="formacion-profesional") echo "selected";?>>Formación profesional</option>
        <option value="universidad" <?php if (isset($educacion) && $educacion=="universidad") echo "selected";?>>Universidad</option>
    </select>
    <span class="error"> <?php echo $educacionErr;?></span>
    <br><br>
  <input type="submit" name="submit" value="Enviar">  
</form>

<?php
    echo "<h2>Datos:</h2>";
    
    foreach ($datos as $key => $value) {
      echo $value . "<br>";
    }
?>

</body>
</html>