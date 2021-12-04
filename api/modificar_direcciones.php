<?php
$conectar = @mysqli_connect("localhost","adolfotorres","ISCUVAQ2016","controlescolar") or die("Error");
if(isset($_POST['modificardirecciones'])){
  $id=$_REQUEST['id'];
  $calle = $_POST['calle'];
  $numero = $_POST['numero'];
  $colonia = $_POST['colonia'];
  $cp = $_POST['cp'];
  $pais = $_POST['pais'];
  $estado = $_POST['estado'];
  $ciudad = $_POST['ciudad'];
  $municipio = $_POST['municipio'];
  if($pais==0){
    $modificar="UPDATE direcciones SET calle='$calle', numero='$numero', colonia='$colonia', cp='$cp', Id_estados='$estado', ciudad='$ciudad', municipios_delegaciones='$municipio' WHERE Id_direcciones='$id'";
  }
  if($estado==0){
    $modificar="UPDATE direcciones SET calle='$calle', numero='$numero', colonia='$colonia', cp='$cp',Id_paises='$pais', ciudad='$ciudad', municipios_delegaciones='$municipio' WHERE Id_direcciones='$id'";
  }
  $ejecutar=mysqli_query($conectar, $modificar);
  if($ejecutar==TRUE){
    echo '<script type="text/javascript"> alert("Modificación exitosa"); </script>';
  }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title><?php echo basename("","php");?>Direcciones</title>
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
      <a href="form_direcciones.php"><button type="submit">Regresar</button></a>
    </div></center>
</body>
</html>
