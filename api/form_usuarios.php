<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="utf-8">
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
  <center><h1>Registro de usuarios</h1></center>
  <center>
    <div class="form-group">
      <form method="post" action = "insertar_usuarios.php">
        <div class="input-group">
          <input class="form-control" type="text" name="usuario" placeholder="Usuario">
        </div>
        <br>
        <div class="input-group">
          <input class="form-control" type="password" name="clave" placeholder="Contraseña">
        </div>
        <br>
        <select class="custom-select" name="tipo">
          <option value=" ">¿Qué cargo tiene usted?</option>
          <option value="Administrativo">Administrativo</option>
          <option value="Docente">Docente</option>
          <option value="Alumno">Alumno</option>
        </select>
        <br>
        <button name="guardarusuarios" type="submit" class="fas fa-check"> Guardar</button>
      </form>
      <form class="post" action="consultar_usuario.php" method="post">
        <button type="submit" class="fas fa-eye"> Consultar usuario específico</button>
      </form>
      <form class="post" action="tabla_usuarios.php" method="post">
        <button name="mostrarusuarios" type="submit" class="fas fa-eye"> Mostrar tabla</button>
      </form>
      <a href="index.php"><button type="submit" class="fas fa-reply"> Regresar</button></a>
    </div>
  </center>
</body>
</html>
