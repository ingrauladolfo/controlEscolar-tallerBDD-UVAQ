<!DOCTYPE html>
<html lang="es">
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
  <center><h1>Salones</h1></center>
  <center>
    <div class="form-group">
      <form method="post" action = "insertar_salones.php">
        <select class="custom-select" name="edificio">
          <option value=" ">Seleccione un edificio</option>
          <option value="Edificio A">Edificio A</option>
          <option value="Edificio B">Edificio B</option>
          <option value="Edificio C">Edificio C</option>
          <option value="Edificio D">Edificio D</option>
          <option value="Edificio E">Edificio E</option>
        </select>
        <br>
        <br>
        <div class="input-group">
          <input class="form-control" type="number" name="numero" placeholder="Número del salón" minlenght="0" maxlength="99">
        </div>
        <br>
        <div class="input-group">
          <input class="form-control" type="number" name="capacidad" placeholder="Total de alumnos">
        </div>
        <br>
        <select class="custom-select" name="tipo">
          <option>Seleccione un tipo de salón</option>
          <option value="Salon normal">Salon normal</option>
          <option value="Laboratorio">Laboratorio</option>
          <option value="Salon de usos multiples">Salon de usos multiples</option>
          <option value="Auditorio">Auditorio</option>
        </select>
        <br>
        <button name="guardarsalones" type="submit" class="fas fa-check"> Guardar</button>
      </form>
      <form class="post" action="tabla_salones.php" method="post">
        <button name="mostrarsalones" type="submit" class="fas fa-eye"> Mostrar tabla</button>
      </form>
      <form class="post" action="consultar_salon.php" method="post">
        <button type="submit" class="fas fa-eye"> Consultar salón específico</button>
      </form>
      <a href="index.php"><button type="submit" class="fas fa-reply"> Regresar</button></a>
  </center>
    </div>
  </center>
</body>
</html>
