
<?php
$conectar = @mysqli_connect("localhost","adolfotorres","ISCUVAQ2016","controlescolar") or die("Error");
if(isset($_POST['mostraradministrativos'])){
  ?>
  <!DOCTYPE html>
  <html lang="es" dir="ltr">
  <meta charset="utf-8">
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
      <center><h1>Tabla de administrativos</h1></center>
      <center>
        <table border="2" method="post" style="background-color:#00ff00; color:#000000">
          <tr>
            <td>Id</td>
            <td>Nómina</td>
            <td>Nombre(s)</td>
            <td>Apellido(s)</td>
            <td>Campus asignado</td>
            <td>Estudios</td>
            <td>Especialidad</td>
            <td>Departamento_asignado</td>
            <td>RFC</td>
            <td>CURP</td>
            <td colspan="3"><center>Operaciones</center></td>
          </tr>
          <?php
              $consulta = "SELECT a.Id_administrativos AS ID, a.Nomina AS nomina, p.Nombres AS nombres, p.Apellidos AS apellidos,p.CURP as CURP, c.nombre AS campus, a.Estudios AS estudios, a.Especialidades AS especialidades, a.Departamento_asignado AS departamento, a.RFC AS RFC FROM administrativos a INNER JOIN informacion_peronas p ON a.Id_informacion_personas = p.Id_informacion_personas INNER JOIN campus c ON p.Id_campus = c.Id_campus";
              $result=mysqli_query($conectar,$consulta);
              while ($mostrar=mysqli_fetch_array($result)) {
                ?>
                <tr>
                  <td><?php echo $mostrar['ID'] ?></td>
                  <td><?php echo $mostrar['nomina'] ?></td>
                  <td><?php echo $mostrar['nombres'] ?></td>
                  <td><?php echo $mostrar['apellidos'] ?></td>
                  <td><?php echo $mostrar['campus'] ?></td>
                  <td><?php echo $mostrar['estudios'] ?></td>
                  <td><?php echo $mostrar['especialidades'] ?></td>
                  <td><?php echo $mostrar['departamento'] ?></td>
                  <td><?php echo $mostrar['RFC'] ?></td>
                  <td><?php echo $mostrar['CURP'] ?></td>
                  <td><a href="editar_administrativos.php?id=<?php echo $mostrar['ID'];?>" style="color:#000000;" class="fas fa-edit"></a></td>
                  <td><a href="borrar_administrativos.php?id=<?php echo $mostrar['ID'];?>" style="color:#000000;" class="fas fa-minus-circle"></a></td>
                  <td><a href="form_administrativos.php".php?id=<?php echo $mostrar['ID'];?>" style="color:#000000;" class="fas fa-reply"></a></td>
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
