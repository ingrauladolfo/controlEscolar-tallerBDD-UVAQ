<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="utf-8">
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
  <center><h1>Registro de información básica de personas</h1></center>
  <center>
    <div class="form-group">
      <form method="post" action = "insertar_informacion_personas.php">
        <div class="input-group">
          <input class="form-control" type="text" name="nombres" placeholder="Nombre(s)">
        </div>
        <br>
        <div class="input-group">
          <input class="form-control" type="text" name="apellidos" placeholder="Apellidos">
        </div>
        <br>
        <div class="input-group">
          <input class="form-control" type="date" name="fch_nacimiento">
        </div>
        <br>
        <select class="custom-select" name="direccion">
          <?php
              $server = "localhost";
              $user = "adolfotorres";
              $password = "ISCUVAQ2016";
              $bd = "controlescolar";
              $conectar=@mysqli_connect($server, $user, $password, $bd);
              $result = mysqli_query($conectar, "SELECT d.Id_direcciones AS ID, d.calle AS calle, d.numero AS numero, d.colonia AS colonia, d.CP AS cp, p.nombre AS pais, e.nombre AS estado, d.ciudad AS ciudad, d.municipios_delegaciones AS municipio FROM direcciones d INNER JOIN paises p ON d.Id_paises = p.Id_paises INNER JOIN estados e ON d.Id_estados = e.Id_estados");
              echo "<option value=0>Seleccione una dirección:</option>";
              while ($fila = mysqli_fetch_array($result)){
                  echo "<option value=\"".$fila['ID']."\">".$fila['calle']." ".$fila['numero'].", ".$fila['colonia'].", ".$fila['cp'].", ".$fila['pais'].", ".$fila['estado'].", ".$fila['ciudad'].", ".$fila['municipio']."</option>";
              }
          ?>
        </select>
        <br>
        <br>
        <select name="sexo">
          <option value=" ">Sexo:</option>
          <option value="Masculino">Masculino</option>
          <option value="Femenino">Femenino</option>
        </select>
        <br>
        <br>
        <div class="input-group">
          <input class="form-control" type="email" name="correo" placeholder="correo@correo.com">
        </div>
        <br>
        <div class="input-group">
          <input class="form-control" type="tel" name="telefono" placeholder="Teléfono">
        </div>
        <br>
        <div class="input-group">
          <select name="campus">
            <?php
              $server = "localhost";
              $user = "adolfotorres";
              $password = "ISCUVAQ2016";
              $bd = "controlescolar";
              $conectar=@mysqli_connect($server, $user, $password, $bd);
              $result = mysqli_query($conectar, "SELECT Id_campus,nombre FROM campus");
              echo "<option value=0>Seleccione un campus:</option>";
              while ($fila = mysqli_fetch_array($result)){
                  echo "<option value=\"".$fila['Id_campus']."\">".$fila['nombre']."</option>";
              }
            ?>
          </select>
        </div>
        <br>
        <br>
        <div class="input-group">
          <input class="form-control" type="text" name="CURP" placeholder="CURP">
        </div>
        <button name="guardarinfo" type="submit" class="fas fa-check"> Guardar</button>
      </form>
      <form class="post" action="consultar_informacion_personas.php" method="post">
        <button type="submit" class="fas fa-eye"> Consultar persona específica</button>
      </form>
      <form class="post" action="tabla_informacion_personas.php" method="post">
        <button name="mostrarinfo" type="submit" class="fas fa-eye"> Mostrar tabla</button>
      </form>
      <a href="index.php"><button type="submit" class="fas fa-reply"> Regresar</button></a>
    </div>
  </center>
</body>
</html>
