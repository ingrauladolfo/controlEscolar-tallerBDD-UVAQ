<!DOCTYPE html>
<html lang="es">
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
  <center><h1>Registro de temarios</h1></center>
  <center>
    <div class="form-group">
      <form method="post" action = "insertar_temarios.php">
        <label for="tema" class="fas fa-book"> Nombre del tema</label>
        <div class="input-group">
          <input class="form-control" type="text" name="tema" placeholder="Nombre del tema">
        </div>
        <label for="semestre" class="fab fa-draft2digital"> Semestre</label>
        <br>
        <select class="custom-select" name="semestre">
          <option value=" ">Seleccione un semestre</option>
          <option value="Primer semestre">Primer semestre</option>
          <option value="Segundo semestre">Segundo semestre</option>
          <option value="Tercer semestre">Tercer semestre</option>
          <option value="Cuarto semestre">Cuarto semestre</option>
          <option value="Quinto semestre">Quinto semestre</option>
          <option value="Sexto semestre">Sexto semestre</option>
          <option value="Septimo semestre">Septimo semestre</option>
          <option value="Octavo semestre">Octavo semestre</option>
          <option value="Noveno semestre">Noveno semestre</option>
          <option value="Decimo semestre">Decimo semestre</option>
        </select>
        <br>
        <button name="guardartemarios" type="submit" class="fas fa-check"> Guardar</button>
      </form>
      <form class="post" action="tabla_temarios.php" method="post">
        <button name="mostrartemarios" type="submit" class="fas fa-eye"> Mostrar tabla</button>
      </form>
      <a href="index.php"><button type="submit"class="fas fa-reply"> Regresar</button></a>
    </div>
  </center>
</body>
</html>
