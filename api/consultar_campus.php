<!DOCTYPE html>
<html lang="es" dir="ltr">
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
    <center><h1>Consulta de campus</h1></center>
    <center>
      <div class="form-group">
        <form class="post" action="consulta_campus.php" method="post">
          <div class="input-group">
            <input class="form-control" type="text" name="campusconsultar" placeholder="Nombre del campus a consultar">
          </div>
          <button type="submit" name="consultarcampus" class="fas fa-eye"> Consultar campus</button>
        </form>
        <form class="post" action="form_campus.php">
          <div class="btn-group">
            <button type="submit" class="fas fa-reply"> Regresar</button>
          </div>
      </div>
    </center>
  </body>
</html>
