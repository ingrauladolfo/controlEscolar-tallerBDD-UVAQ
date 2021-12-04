<!DOCTYPE html>
<html lang="es" dir="ltr">
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
    <center><h1>Consulta de dirección</h1></center>
    <center>
      <div class="form-group">
        <form class="post" action="consulta_direccion.php" method="post">
          <div class="input-group">
            <input class="form-control" type="text" name="calleconsultar" placeholder="Calle a consultar">
          </div>
          <div class="input-group">
            <input class="form-control" type="number" name="numeroconsultar" placeholder="Número a consultar">
          </div>
          <button type="submit" name="consultardireccion" class="fas fa-eye"> Consultar dirección</button>
        </form>
        <form class="post" action="form_direcciones.php">
          <div class="btn-group">
            <button type="submit" class="fas fa-reply"> Regresar</button>
          </div>
      </div>
    </center>
  </body>
</html>
