<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <title><?php echo basename("","php");?>Salón</title>
  <link href="https://fonts.googleapis.com/css?family=Spicy+Rice" rel="stylesheet">
  <meta name="viewport" content="width=device-width initial-scale=1 shrink-to-fit=no">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
  <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
  <body>
    <center><h1>Consulta de salón</h1></center>
    <center>
      <div class="form-group">
        <form class="post" action="consulta_salon.php" method="post">
          <div class="input-group">
            <input class="form-control" type="text" name="edificioconsultar" placeholder="Edificio a consultar">
          </div>
          <br>
          <div class="input-group">
            <input class="form-control" type="number" name="numeroconsultar" placeholder="Número a consultar">
          </div>
          <br>
          <div class="input-group">
            <input class="form-control" type="text" name="tipoconsultar" placeholder="Tipo de salón a consultar">
          </div>
          <button type="submit" name="consultarsalon" class="fas fa-eye"> Consultar salon</button>
        </form>
        <form class="post" action="form_salon.php">
          <div class="btn-group">
            <button type="submit" class="fas fa-reply"> Regresar</button>
          </div>
      </div>
    </center>
  </body>
</html>
