<?php
$conectar = @mysqli_connect("localhost","adolfotorres","ISCUVAQ2016","controlescolar") or die("Error");
if(isset($_POST['consultarusuario'])){
  $usuario = $_POST['usuarioconsultar'];
  ?>
  <!DOCTYPE html>
  <html lang="es" dir="ltr">
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
      <center><h1>Tabla de usuarios</h1></center>
      <center>
        <table border="2" method="post" style="background-color:#00ff00; color:#000000">
          <tr>
            <td>Id</td>
            <td>Usuario</td>
            <td>Clave</td>
            <td>Tipo de usuario</td>
            <td>Operación</td>
          </tr>
          <?php
              $consulta="SELECT * FROM usuarios WHERE usuario='$usuario'";
              $result=mysqli_query($conectar,$consulta);
              while ($mostrar=mysqli_fetch_array($result)) {
                ?>
                <tr>
                  <td><?php echo $mostrar['Id_usuarios'] ?></td>
                  <td><?php echo $mostrar['usuario'] ?></td>
                  <td><?php echo $mostrar['clave'] ?></td>
                  <td><?php echo $mostrar['tipo'] ?></td>
                  <td><a href="form_usuarios.php" class="fas fa-reply" style="color:#000000;"></a></td>
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
