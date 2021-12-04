<!DOCTYPE html>
<html lang="es">
<head>
  <title><?php echo basename("","php");?>Direcciones</title>
  <link href="https://fonts.googleapis.com/css?family=Spicy+Rice" rel="stylesheet">
  <meta name="viewport" content="width=device-width initial-scale=1 shrink-to-fit=no">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
  <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
  <center><h1>Registro de direcciones</h1></center>
  <center>
    <div class="form-group">
      <form method="post" action="insertar_direcciones.php">
        <div class="input-group">
          <input class="form-control" type="text" name="calle" placeholder="Calle">
        </div>
        <br>
        <div class="input-group">
          <input class="form-control" type="number" name="numero" placeholder="Número de calle">
        </div>
        <br>
        <div class="input-group">
          <input class="form-control" type="text" name="colonia" placeholder="Colonia">
        </div>
        <br>
        <div class="input-group">
          <input class="form-control" type="number" name="cp" placeholder="Código Postal">
        </div>
        <br>
        <select class="custom-select" name="pais">
            <?php
                $server = "localhost";
                $user = "adolfotorres";
                $password = "ISCUVAQ2016";
                $bd = "controlescolar";
                $conectar=@mysqli_connect($server, $user, $password, $bd);
                $result = mysqli_query($conectar, "SELECT * FROM paises");
                echo "<option value=0>Seleccione un país:</option>";
                while ($fila = mysqli_fetch_array($result)){
                    echo "<option value=\"".$fila['Id_paises']."\">".$fila['nombre']."</option>";
                }
            ?>
        </select>
        <br>
        <br>
        <select class="custom-select" name="estado">
            <?php
                $server = "localhost";
                $user = "adolfotorres";
                $password = "ISCUVAQ2016";
                $bd = "controlescolar";
                $conectar=@mysqli_connect($server, $user, $password, $bd);
                $result = mysqli_query($conectar, "SELECT * FROM estados");
                echo "<option value=0>Seleccione un estado:</option>";
                while ($fila = mysqli_fetch_array($result)){
                    echo "<option value=\"".$fila['Id_estados']."\">".$fila['nombre']."</option>";
                }
            ?>
        </select>
        <br>
        <br>
        <div class="input-group">
          <input class="form-control" type="text" name="ciudad" placeholder="Ciudad">
        </div>
        <br>
        <div class="input-group">
          <input class="form-control" type="text" name="municipio" placeholder="Municipio o delegación">
        </div>
        <br>
        <a href="insertar_direcciones.php"><button name="guardardirecciones" type="submit" class="fas fa-check"> Guardar</button></a>
      </form>
      <form class="post" action="consultar_direcciones.php" method="post">
        <button type="submit" class="fas fa-eye"> Consultar dirección específica</button>
      </form>
      <form action="tabla_direcciones.php" method="post">
        <button name="mostrardirecciones" type="submit" class="fas fa-eye"> Mostrar tabla</button>
      </form>
      <a href="index.php"><button type="submit"class="fas fa-reply"> Regresar</button></a>
    </div>
  </center>
</body>
</html>
