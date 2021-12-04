<!DOCTYPE html>
<html lang="es">
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
  <center><h1>Registro de campus</h1></center>
  <center>
    <div class="form-group">
      <form method="post" action="insertar_campus.php">
        <div class="input-group">
          <input class="form-control" type="text" name="campus" placeholder="Nombre del campus">
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
        <a href="insertar_campus.php"><button name="guardarcampus" type="submit" class="fas fa-check"> Guardar</button></a>
      </form>
      <form action="tabla_campus.php" method="post">
        <button name="mostrarcampus" type="submit" class="fas fa-eye"> Mostrar tabla</button>
      </form>
      <form class="post" action="consultar_campus.php" method="post">
        <button type="submit" class="fas fa-eye"> Consultar campus específico</button>
      </form>
      <a href="index.php"><button type="submit"class="fas fa-reply"> Regresar</button></a>
    </div>
  </center>
</body>
</html>
