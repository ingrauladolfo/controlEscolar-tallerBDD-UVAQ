<!DOCTYPE html>
<html lang="es">
<head>
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
      <?php
          $id=$_REQUEST['id'];
          $conectar = @mysqli_connect("localhost","adolfotorres","ISCUVAQ2016","controlescolar") or die("Error");
          $consulta="SELECT * FROM usuarios WHERE Id_usuarios='$id'";
          $result=mysqli_query($conectar,$consulta);
          $mostrar=mysqli_fetch_array($result);
      ?>
      <form method="post" action = "modificar_usuarios.php?id=<?php echo $mostrar['Id_usuarios'];?>">
        <label for="usuario" class="fas fa-user"> Usuario</label>
        <div class="input-group">
          <input class="form-control" type="text" name="usuario" placeholder="Usuario" value="<?php echo $mostrar['usuario'];?>">
        </div>
        <label for="clave" class="fas fa-key"> Contraseña</label>
        <div class="input-group">
          <input class="form-control" type="password" name="clave" placeholder="Contraseña" value="<?php echo $mostrar['clave'];?>">
        </div>
        <?php
        $temporal= $mostrar['tipo'];
        ?>
        <label for="tipo" class="fas fa-users"></label>
        <br>
        <select class="custom-select" name="tipo">
          <option value=" ">Seleccione un tipo de usuario</option>
          <?php
          if($temporal=="Administrativo"){
            ?>
            <option value="Administrativo" selected>Administrativo</option>
                  <?php
                }
                else{
                  ?>
                  <option value="Administrativo">Administrativo</option>
                  <?php
                }
                  if($temporal=="Docente"){
                    ?>
                    <option value="Docente" selected>Docente</option>
                  <?php
                }
                else{
                  ?>
                  <option value="Docente">Docente</option>
                  <?php
                }
                if($temporal=="Alumno"){
                  ?>
                  <option value="Alumno" selected>Alumno</option>
                  <?php
                }
              else{
                ?>
                <option value="Alumno">Alumno</option>
                <?php
              }
                ?>
                </select>
        <br>
        <button type="submit" class="fas fa-check" name="modificarusuarios"> Guardar</button>
      </form>
      <form class="post" action="tabla_usuarios.php" method="post">
        <button type="submit" class="fas fa-reply" name="mostrarusuarios"> Regresar</button>
      </form>
    </div>
  </center>
</body>
</html>
