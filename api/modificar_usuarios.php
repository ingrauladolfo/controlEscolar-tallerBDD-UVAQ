<?php
$conectar = @mysqli_connect("localhost","adolfotorres","ISCUVAQ2016","controlescolar") or die("Error");
if(isset($_POST['modificarusuarios'])){
  $id=$_REQUEST['id'];
  $nombre=$_POST['usuario'];
  $clave=$_POST['clave'];
  $tipo=$_POST['tipo'];
  $modificar="UPDATE usuarios SET usuario='$nombre', clave='$clave', tipo='$tipo' WHERE Id_usuarios='$id'";
  $ejecutar=mysqli_query($conectar, $modificar);
  if($ejecutar==TRUE){
    echo '<script type="text/javascript"> alert("Modificación exitosa"); </script>';
  }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title><?php echo basename("","php");?>Usuarios</title>
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
    <form class="post" action="tabla_usuarios.php" method="post">
      <div class="btn-group" >
        <button type="submit" name="mostrarusuarios">Regresar</button>
      </div></center>
    </form>
</body>
</html>
