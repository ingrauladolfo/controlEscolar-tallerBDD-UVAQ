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
          $consulta="SELECT * FROM temarios WHERE Id_temarios='$id'";
          $result=mysqli_query($conectar,$consulta);
          $mostrar=mysqli_fetch_array($result);
      ?>
      <form method="post" action = "modificar_temarios.php?id=<?php echo $mostrar['Id_temarios'];?>">
        <label for="tema" class="fas fa-book"> Nombre del tema</label>
        <div class="input-group">
          <input class="form-control" type="text" name="tema" placeholder="Nombre del tema" value="<?php echo $mostrar['nombre_temas'];?>">
        </div>
        <?php
        $semestre= $mostrar['semestre'];
        ?>
        <label for="semestre" class="fab fa-draft2digital"> Semestre</label>
        <br>
        <select class="custom-select" name="semestre">
          <option value=" ">Seleccione un semestre</option>
          <?php
          if($semestre=="Primer semestre"){
            ?>
            <option value="Primer semestre" selected>Primer semestre</option>
                  <?php
                }
                else{
                  ?>
                  <option value="Primer semestre">Primer semestre</option>
                  <?php
                }
                  if($semestre=="Segundo semestre"){
                    ?>
                    <option value="Segundo semestre" selected>Segundo semestre</option>
                  <?php
                }
                else{
                  ?>
                  <option value="Segundo semestre">Segundo semestre</option>
                  <?php
                }
                if($semestre=="Tercer semestre"){
                  ?>
                  <option value="Tercer semestre" selected>Tercer semestre</option>
                  <?php
                }
              else{
                ?>
                <option value="Tercer semestre">Tercer semestre</option>
                <?php
              }
              if($semestre=="Cuarto semestre"){
                ?>
                <option value="Cuarto semestre" selected>Cuarto semestre</option>
                <?php
              }
              else{
                ?>
                <option value="Cuarto semestre">Cuarto semestre</option>
                <?php
              }
              if($semestre=="Quinto semestre"){
                ?>
                <option value="Quinto semestre" selected>Quinto semestre</option>
                <?php
              }
              else{
                ?>
                <option value="Quinto semestre">Quinto semestre</option>
                <?php
              }
              if($semestre=="Sexto semestre"){
                ?>
                <option value="Sexto semestre" selected>Sexto semestre</option>
                <?php
              }
              else{
                ?>
                <option value="Sexto semestre">Sexto semestre</option>
                <?php
              }
              if($semestre=="Septimo semestre"){
                ?>
                <option value="Septimo semestre" selected>Septimo semestre</option>
                <?php
              }
              else{
                ?>
                <option value="Septimo semestre">Septimo semestre</option>
                <?php
              }
              if($semestre=="Octavo semestre"){
                ?>
                <option value="Octavo semestre" selected>Octavo semestre</option>
                <?php
              }
              else{
                ?>
                <option value="Octavo semestre">Octavo semestre</option>
                <?php
              }
              if($semestre=="Noveno semestre"){
                ?>
                <option value="Noveno semestre" selected>Noveno semestre</option>
                <?php
              }
              else{
                ?>
                <option value="Noveno semestre">Noveno semestre</option>
                <?php
              }
              if($semestre=="Decimo semestre"){
                ?>
                <option value="Decimo semestre" selected>Decimo semestre</option>
                <?php
              }
              else{
                ?>
                <option value="Decimo semestre">Decimo semestre</option>
                <?php
              }
              ?>
            </select>
        <br>
        <button type="submit" class="fas fa-check" name="modificarusuarios"> Guardar</button>
      </form>
    </div>
  </center>
</body>
</html>
