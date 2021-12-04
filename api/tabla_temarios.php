<?php
$conectar = @mysqli_connect("localhost","adolfotorres","ISCUVAQ2016","controlescolar") or die("Error");
if(isset($_POST['mostrartemarios'])){
  ?>
  <!DOCTYPE html>
  <html lang="es" dir="ltr">
  <head>
    <title><?php echo basename("","php");?>Temarios</title>
    <link href="https://fonts.googleapis.com/css?family=Spicy+Rice" rel="stylesheet">
    <meta name="viewport" content="width=device-width initial-scale=1 shrink-to-fit=no">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
  </head>
    <body>
      <center><h1>Tabla de temarios</h1></center>
      <center>
        <table border="2" method="post" style="background-color:#00ff00; color:#000000">
          <tr>
            <td>Id</td>
            <td>Nombre del tema</td>
            <td>Semestre</td>
            <td colspan="3"><center>Operaciones</center></td>
          </tr>
          <?php
              $consulta="SELECT * FROM temarios";
              $result=mysqli_query($conectar,$consulta);
              while ($mostrar=mysqli_fetch_array($result)) {
                ?>
                <tr>
                  <td><?php echo $mostrar['Id_temarios'] ?></td>
                  <td><?php echo $mostrar['nombre_temas'] ?></td>
                  <td><?php echo $mostrar['semestre'] ?></td>
                  <td><a href="editar_temarios.php?id=<?php echo $mostrar['Id_temarios'];?>" style="color:#000000;" class="fas fa-edit"></a></td>
                  <td><a href="borrar_temarios.php?id=<?php echo $mostrar['Id_temarios'];?>" style="color:#000000;" class="fas fa-minus-circle"></a></td>
                  <td><a href="form_temarios.php" class="fas fa-reply" style="color:#000000;"></a></td>
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
