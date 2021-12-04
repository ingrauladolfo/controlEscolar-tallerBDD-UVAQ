
<?php
$conectar = @mysqli_connect("localhost","adolfotorres","ISCUVAQ2016","controlescolar") or die("Error");
if(isset($_POST['mostrarinfo'])){
  ?>
  <!DOCTYPE html>
  <html lang="es" dir="ltr">
  <head>
    <title><?php echo basename("","php");?>Información personas</title>
    <link href="https://fonts.googleapis.com/css?family=Spicy+Rice" rel="stylesheet">
    <meta name="viewport" content="width=device-width initial-scale=1 shrink-to-fit=no">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
  </head>
    <body>
      <center><h1>Tabla de información personas</h1></center>
      <center>
        <table border="2" method="post" style="background-color:#00ff00; color:#000000">
          <tr>
            <td>Id</td>
            <td>Nombre(s)</td>
            <td>Apellido(s)</td>
            <td>Fecha de nacimiento</td>
            <td colspan="8"><center>Dirección</center></td>
            <td>Sexo</td>
            <td>Correo</td>
            <td>Teléfono</td>
            <td>Fecha de nacimiento</td>
            <td>Campus</td>
            <td>CURP</td>
            <td colspan="3"><center>Operaciones</center></td>
          </tr>
          <?php
              $consulta = "SELECT i.Id_informacion_personas AS ID, i.nombres AS nombres, i.apellidos AS apellidos, i.fch_nacimiento AS fch_nacimiento, d.calle AS calle, d.numero AS numero, d.colonia AS colonia, d.CP AS CP, p.nombre AS pais, e.nombre AS estado, d.ciudad AS ciudad, d.municipios_delegaciones AS municipio, i.sexo AS sexo, i.correo AS correo, i.telefono AS telefono, c.nombre AS campus, i.CURP AS CURP FROM informacion_personas i INNER JOIN direcciones d ON i.Id_direcciones=d.Id_direcciones INNER JOIN paises p ON d.Id_paises=p.Id_paises INNER JOIN estados e ON d.Id_estados=e.Id_estados INNER JOIN campus c ON i.Id_campus=c.Id_campus";
              $result=mysqli_query($conectar,$consulta);
              while ($mostrar=mysqli_fetch_array($result)) {
                ?>
                <tr>
                  <td><?php echo $mostrar['ID'] ?></td>
                  <td><?php echo $mostrar['nombres'] ?></td>
                  <td><?php echo $mostrar['apellidos'] ?></td>
                  <td><?php echo $mostrar['fch_nacimiento'] ?></td>
                  <td><?php echo $mostrar['calle'] ?></td>
                  <td><?php echo $mostrar['numero'] ?></td>
                  <td><?php echo $mostrar['colonia'] ?></td>
                  <td><?php echo $mostrar['CP'] ?></td>
                  <td><?php echo $mostrar['pais'] ?></td>
                  <td><?php echo $mostrar['estado'] ?></td>
                  <td><?php echo $mostrar['ciudad'] ?></td>
                  <td><?php echo $mostrar['municipio'] ?></td>
                  <td><?php echo $mostrar['sexo'] ?></td>
                  <td><?php echo $mostrar['correo'] ?></td>
                  <td><?php echo $mostrar['telefono'] ?></td>
                  <td><?php echo $mostrar['fch_nacimiento'] ?></td>
                  <td><?php echo $mostrar['campus'] ?></td>
                  <td><?php echo $mostrar['CURP'] ?></td>
                  <td><a href="editar_informacion_personas.php?id=<?php echo $mostrar['ID'];?>" style="color:#000000;" class="fas fa-edit"></a></td>
                  <td><a href="borrar_informacion_personas.php?id=<?php echo $mostrar['ID'];?>" style="color:#000000;" class="fas fa-minus-circle"></a></td>
                  <td><a href="form_informacion_personas.php?id=<?php echo $mostrar['ID'];?>" style="color:#000000;" class="fas fa-reply"></a></td>
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
