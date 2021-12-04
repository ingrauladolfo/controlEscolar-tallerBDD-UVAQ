<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="utf-8">
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
  <center><h1>Registro de administrativos</h1></center>
  <center>
    <div class="form-group">
      <form method="post" action = "insertar_administrativos.php">
        <div class="input-group">
          <input class="form-control" type="number" name="nomina" placeholder="Nómina">
        </div>
        <br>
        <select class="custom-select" name="persona">
        <?php
                $server = "localhost";
                $user = "adolfotorres";
                $password = "ISCUVAQ2016";
                $bd = "controlescolar";
                $conectar=@mysqli_connect($server, $user, $password, $bd);
                $result = mysqli_query($conectar, "SELECT p.Id_informacion_personas AS ID, p.nombres AS nombres, p.apellidos, p.CURP AS CURP, c.nombre AS campus FROM informacion_personas INNER JOIN campus ON p.Id_campus=c.Id_campus");
                echo "<option value=0>Seleccione su nombre:</option>";
                while ($fila = mysqli_fetch_array($result)){
                    echo "<option value=\"".$fila['ID']."\">".$fila['nombres']." ".$fila['apellidos']." ".$fila['CURP']." del campus ".$fila['campus']."</option>";
                }
            ?>
        </select>
        <br>
        <br>
        <div class="input-group">
          <input class="form-control" type="text" name="estudios" placeholder="Cuéntame, ¿qué estudiaste?">
        </div>
        <br>
        <div class="input-group">
          <input class="form-control" type="text" name="especialidades" placeholder="Si tienes especialidades, escríbelas aquí">
        </div>
        <br>
        <div class="input-group">
          <input class="form-control" type="text" name="departamento" placeholder="Departamento asignado">
        </div>
        <br>
        <div class="input-group">
          <input class="form-control" type="text" name="RFC" placeholder="RFC">
        </div>
        <br>
        <button name="guardaradministrativo" type="submit" class="fas fa-check"> Guardar</button>
      </form>
      <form class="post" action="consultar_administrativo.php" method="post">
        <button type="submit" class="fas fa-eye"> Consultar administrativo específica</button>
      </form>
      <form class="post" action="tabla_administrativos.php" method="post">
        <button name="mostraradministrativos" type="submit" class="fas fa-eye"> Mostrar tabla</button>
      </form>
      <a href="index.php"><button type="submit" class="fas fa-reply"> Regresar</button></a>
    </div>
  </center>
</body>
</html>
