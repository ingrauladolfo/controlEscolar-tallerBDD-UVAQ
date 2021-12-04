<?php
$conectar = @mysqli_connect("localhost", "adolfotorres", "ISCUVAQ2016", "controlescolar") or die("Error");
if(isset($_POST['guardarinfo'])){
  $nombres = $_POST['nombres'];
  $apellidos = $_POST['apellidos'];
  $fch_nacimiento = $_POST['fch_nacimiento'];
  $direccion = $_POST['direccion'];
  $sexo = $_POST['sexo'];
  $correo = $_POST['correo'];
  $telefono = $_POST['telefono'];
  $campus = $_POST['campus'];
  $CURP = $_POST['CURP'];
  $insertar="INSERT INTO informacion_personas(nombres, apellidos, fch_nacimiento, Id_direcciones, sexo, correo, telefono, Id_campus, CURP) VALUES('$nombres','$apellidos','$fch_nacimiento','$direccion','$sexo','$correo','$telefono','$campus', '$CURP')";
  $ejecutar=mysqli_query($conectar, $insertar);
  if($ejecutar==TRUE){
    echo '<script type="text/javascript"> alert("Agregado satisfactoriamente con éxito"); </script>';
  }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title><?php echo basename("","php");?>Información básica de personas</title>
  <link href="https://fonts.googleapis.com/css?family=Spicy+Rice" rel="stylesheet">
  <meta name="viewport" content="width=device-width initial-scale=1 shrink-to-fit=no">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
  <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
  <center>
    <div class="btn-group">
      <a href="form_informacion_personas.php"><button type="submit">Regresar</button></a>
    </div></center>
</body>
</html>
