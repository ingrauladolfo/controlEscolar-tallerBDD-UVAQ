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
  <center><h1>Direcciones</h1></center>
  <center>
    <div class="form-group">
      <?php
          $id=$_REQUEST['id'];
          $conectar = @mysqli_connect("localhost","adolfotorres","ISCUVAQ2016","controlescolar") or die("Error");
          $consulta="SELECT d.Id_direcciones, d.calle AS calle, d.numero AS numero, d.colonia AS colonia, d.CP AS cp, p.nombre AS pais, e.nombre AS estado, d.ciudad AS ciudad, d.municipios_delegaciones AS municipio FROM direcciones d INNER JOIN paises p ON d.Id_paises = p.Id_paises INNER JOIN estados e ON d.Id_estados = e.Id_estados WHERE Id_direcciones ='$id'";
          $result=mysqli_query($conectar,$consulta);
          $mostrar=mysqli_fetch_array($result);
      ?>
      <form method="post" action = "modificar_direcciones.php?id=<?php echo $mostrar['Id_direcciones'];?>">
        <label for="calle" class="fas fa-road"></label>
        <div class="input-group">
          <input class="form-control" type="text" name="calle" placeholder="Calle" value="<?php echo $mostrar['calle']; ?>">
        </div>
        <label for="numero" class="fab fa-draft2digital"> Número de calle</label>
        <div class="input-group">
          <input class="form-control" type="number" name="numero" placeholder="Número de calle" value="<?php echo $mostrar['numero']; ?>">
        </div>
        <label for="clave" class="fas fa-archway"> Colonia</label>
        <div class="input-group">
          <input class="form-control" type="text" name="colonia" placeholder="Colonia" value="<?php echo $mostrar['colonia']; ?>">
        </div>
        <label for="clave" class="fas fa-envelope-square"> Código Postal</label>
        <div class="input-group">
          <input class="form-control" type="number" name="cp" placeholder="Código Postal" value="<?php echo $mostrar['cp']; ?>">
        </div>
        <label for="tipo" class="fas fa-globe"> País</label>
        <br>
        <select class="custom-select" name="pais">
            <?php
                $server = "localhost";
                $user = "adolfotorres";
                $password = "ISCUVAQ2016";
                $bd = "controlescolar";
                $conectar=@mysqli_connect($server, $user, $password, $bd);
                $result = mysqli_query($conectar, "SELECT * FROM paises");
                echo "<option value=0 selected>".$mostrar['pais']."</option>";
                while ($fila = mysqli_fetch_array($result)){
                    echo "<option value=\"".$fila['Id_paises']."\">".$fila['nombre']."</option>";
                }
            ?>
        </select>
        <br>
        <label for="tipo" class="far fa-flag"> Estado</label>
        <br>
        <select class="custom-select" name="estado">
            <?php
                $server = "localhost";
                $user = "adolfotorres";
                $password = "ISCUVAQ2016";
                $bd = "controlescolar";
                $conectar=@mysqli_connect($server, $user, $password, $bd);
                $result = mysqli_query($conectar, "SELECT * FROM estados");
                echo "<option value=0 selected>".$mostrar['estado']."</option>";
                while ($fila = mysqli_fetch_array($result)){
                    echo "<option value=\"".$fila['Id_estados']."\">".$fila['nombre']."</option>";
                }
            ?>
        </select>
        <br>
        <label for="clave" class="fas fa-city"> Ciudad</label>
        <div class="input-group">
          <input class="form-control" type="text" name="ciudad" placeholder="Ciudad" value="<?php echo $mostrar['ciudad']; ?>">
        </div>
        <label for="clave" class="fas fa-university"> Municipio o delegación</label>
        <div class="input-group">
          <input class="form-control" type="text" name="municipio" placeholder="Municipio o delegación" value="<?php echo $mostrar['municipio']; ?>">
        </div>
        <br>
        <button type="submit" class="fas fa-check" name="modificardirecciones"> Guardar</button>
      </form>
    </div>
  </center>
</body>
</html>
