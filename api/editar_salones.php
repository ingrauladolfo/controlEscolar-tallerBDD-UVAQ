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
  <center><h1>Registro de salones</h1></center>
  <center>
    <div class="form-group">
      <?php
          $id=$_REQUEST['id'];
          $conectar = @mysqli_connect("localhost","adolfotorres","ISCUVAQ2016","controlescolar") or die("Error");
          $consulta="SELECT * FROM salones WHERE Id_salones='$id'";
          $result=mysqli_query($conectar,$consulta);
          $mostrar=mysqli_fetch_array($result);
      ?>
      <form method="post" action = "modificar_salones.php?id=<?php echo $mostrar['Id_salones'];?>">
        <?php
        $edificios= $mostrar['edificio'];
         ?>
        <label for="numero">¿A qué edificio pertenece el salón?</label>
        <br>
        <select class="custom-select" name="edificio">
          <option value=" ">Seleccione un edificio</option>
          <?php
          if($edificios=="Edificio A"){
            ?>
            <option value="Edificio A" selected>Edificio A</option>
            <?php
          }
          else{
            ?>
            <option value="Edificio A">Edificio A</option>
            <?php
          }
          if($edificios=="Edificio B"){
            ?>
            <option value="Edificio B" selected>Edificio B</option>
            <?php
          }
          else{
            ?>
            <option value="Edificio B">Edificio B</option>
            <?php
          }
          if($edificios=="Edificio C"){
            ?>
            <option value="Edificio C" selected>Edificio C</option>
            <?php
          }
          else{
            ?>
            <option value="Edificio C">Edificio C</option>
            <?php
          }
          if($edificios=="Edificio D"){
            ?>
            <option value="Edificio D" selected>Edificio D</option>
            <?php
          }
          else{
            ?>
            <option value="Edificio D">Edificio D</option>
            <?php
          }
          if($edificios=="Edificio E"){
            ?>
            <option value="Edificio E" selected>Edificio E</option>
            <?php
          }
          else{
            ?>
            <option value="Edificio E">Edificio E</option>
            <?php
          }
          ?>
        </select>
        <br>
        <label for="numero">Número del salón</label>
        <div class="input-group">
          <input class="form-control" type="number" name="numero" placeholder="Número del salón" value="<?php echo $mostrar['numero'];?>">
        </div>
        <label for="numero">¿Cuántas personas caben en el salón?</label>
        <div class="input-group">
          <input class="form-control" type="number" name="capacidad" placeholder="Total de alumnos" value="<?php echo $mostrar['capacidad_alumnos'];?>">
        </div>
        <?php
        $salones = $mostrar['tipo'];
         ?>
        <label for="numero">¿Qué tipo de salón es?</label>
        <br>
        <select class="custom-select" name="tipo">
          <option>Seleccione un tipo de salón</option>
          <?php
          if($salones=="Salon normal"){
            ?>
            <option value="Salon normal" selected>Salon normal</option>
            <?php
          }
          else{
            ?>
            <option value="Salon normal">Salon normal</option>
            <?php
          }
          if($salones=="Laboratorio"){
            ?>
            <option value="Laboratorio" selected>Laboratorio</option>
            <?php
          }
          else{
            ?>
            <option value="Laboratorio">Laboratorio</option>
            <?php
          }
          if($salones=="Salon de usos multiples"){
            ?>
            <option value="Salon de usos multiples" selected>Salon de usos multiples</option>
            <?php
          }
          else{
            ?>
            <option value="Salon de usos multiples">Salon de usos multiples</option>
            <?php
          }
          if($salones=="Auditorio"){
            ?>
            <option value="Auditorio" selected>Auditorio</option>
            <?php
          }
          else{
            ?>
            <option value="Auditorio">Auditorio</option>
            <?php
          }
          ?>
        </select>
        <br>
        <button type="submit" class="fas fa-check" name="modificarsalones"> Guardar</button>
      </form>
    </div>
  </center>
</body>
</html>
