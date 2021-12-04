<?php
$conectar = @mysqli_connect("localhost","adolfotorres","ISCUVAQ2016","controlescolar") or die("Error");
if(isset($_POST['consultarcampus'])){
  $campus = $_POST['campusconsultar'];
  ?>
  <!DOCTYPE html>
  <html lang="es" dir="ltr">
  <head>
    <title><?php echo basename("","php");?>Campus</title>
    <link href="https://fonts.googleapis.com/css?family=Spicy+Rice" rel="stylesheet">
    <meta name="viewport" content="width=device-width initial-scale=1 shrink-to-fit=no">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
  </head>
    <body>
      <center><h1>Tabla de campus</h1></center>
      <center>
        <table border="2" method="post" style="background-color:#00ff00; color:#000000">
          <tr>
            <td>Id</td>
            <td>Nombre del campus</td>
            <td colspan="8"><center>Dirección</center></td>
            <td colspan="3"><center>Operaciones</center></td>
          </tr>
          <?php
              $consulta = "SELECT c.Id_campus AS ID, c.nombre AS campus, c.Id_direcciones, d.calle AS calle, d.numero AS numero, d.colonia AS colonia, d.CP AS cp,  p.nombre AS pais, e.nombre AS estado, d.ciudad AS ciudad, d.municipios_delegaciones AS municipio FROM campus c JOIN direcciones d ON c.Id_direcciones=d.Id_direcciones JOIN paises p ON d.Id_paises=p.Id_paises JOIN estados e ON d.Id_estados=e.Id_estados WHERE c.nombre='$campus'";
              $result=mysqli_query($conectar,$consulta);
              while ($mostrar=mysqli_fetch_array($result)) {
                ?>
                <tr>
                  <td><?php echo $mostrar['ID'] ?></td>
                  <td><?php echo $mostrar['campus'] ?></td>
                  <td><?php echo $mostrar['calle'] ?></td>
                  <td><?php echo $mostrar['numero'] ?></td>
                  <td><?php echo $mostrar['colonia'] ?></td>
                  <td><?php echo $mostrar['cp'] ?></td>
                  <td><?php echo $mostrar['pais'] ?></td>
                  <td><?php echo $mostrar['estado'] ?></td>
                  <td><?php echo $mostrar['ciudad'] ?></td>
                  <td><?php echo $mostrar['municipio'] ?></td>
                  <td><a href="editar_campus.php?id=<?php echo $mostrar['ID'];?>" style="color:#000000;" class="fas fa-edit"></a></td>
                  <td><a href="borrar_campus.php?id=<?php echo $mostrar['ID'];?>" style="color:#000000;" class="fas fa-minus-circle"></a></td>
                  <td><a href="form_campus.php?id=<?php echo $mostrar['ID'];?>" style="color:#000000;" class="fas fa-reply"></a></td>
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
