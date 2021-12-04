<?php
$conectar = @mysqli_connect("localhost","adolfotorres","ISCUVAQ2016","controlescolar") or die("Error");
if(isset($_POST['consultarsalon'])){
  $edificio = $_POST['edificioconsultar'];
  $numero = $_POST['numeroconsultar'];
  $tipo = $_POST['tipoconsultar'];
  ?>
  <!DOCTYPE html>
  <html lang="es" dir="ltr">
  <head>
    <title><?php echo basename("","php");?>Salones</title>
    <link href="https://fonts.googleapis.com/css?family=Spicy+Rice" rel="stylesheet">
    <meta name="viewport" content="width=device-width initial-scale=1 shrink-to-fit=no">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
  </head>
    <body>
      <center><h1>Tabla de salones</h1></center>
      <center>
        <table border="2" method="post" style="background-color:#00ff00; color:#000000">
          <tr>
            <td>Id</td>
            <td>Edificio</td>
            <td>Número del salón</td>
            <td>Capacidad total de alumnos</td>
            <td>Tipo de salón</td>
            <td colspan="3"><center>Operaciones</center></td>
          </tr>
          <?php
              $consulta = "SELECT *FROM salones WHERE edificio='$edificio' and numero='$numero' and tipo='$tipo'";
              $result=mysqli_query($conectar,$consulta);
              while ($mostrar=mysqli_fetch_array($result)) {
                ?>
                <tr>
                  <td><?php echo $mostrar['Id_salones'] ?></td>
                  <td><?php echo $mostrar['edificio'] ?></td>
                  <td><?php echo $mostrar['numero'] ?></td>
                  <td><?php echo $mostrar['capacidad_alumnos'] ?></td>
                  <td><?php echo $mostrar['tipo'] ?></td>
                  <td><a href="editar_salones.php?id=<?php echo $mostrar['Id_salones'];?>" style="color:#000000;" class="fas fa-edit"></a></td>
                  <td><a href="borrar_salones.php?id=<?php echo $mostrar['Id_salones'];?>" style="color:#000000;" class="fas fa-minus-circle"></a></td>
                  <td><a href="form_salones.php" class="fas fa-reply" style="color:#000000;"></a></td>
                </tr>
                <?php
              }
                ?>
        </table>
      </center>
    </body>
  </html>
  <?php
}
 ?>
