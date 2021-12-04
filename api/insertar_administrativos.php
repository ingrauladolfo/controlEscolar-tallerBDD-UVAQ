<?php
$conectar = @mysqli_connect("localhost", "adolfotorres", "ISCUVAQ2016", "controlescolar") or die("Error");
if(isset($_POST['guardaradministrativo'])){
  $nomina=$_POST['nomina'];
  $persona=$_POST['persona'];
  $estudios=$_POST['estudios'];
  $especialidades=$_POST['especialidades'];
  $departamento=$_POST['departamento'];
  $RFC=$_POST['RFC'];
  $insertar="INSERT INTO administrativos(Nomina, Id_informacion_personas, Estudios, Especialidades, Departamento_asignado, RFC) VALUES('$nomina','$persona','$estudios','$especialidades','$departamento','$RFC')";
  $ejecutar=mysqli_query($conectar, $insertar);
  if($ejecutar==TRUE){
    echo '<script type="text/javascript"> alert("Agregado satisfactoriamente con éxito"); </script>';
  }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title><?php echo basename("","php");?>Administrativos</title>
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
      <a href="form_administrativos.php"><button type="submit">Regresar</button></a>
    </div></center>
</body>
</html>
