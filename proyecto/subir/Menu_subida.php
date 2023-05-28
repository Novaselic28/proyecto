<?php 
  include('../modelo/conexion.php');
  $query = "select * from videojuegos";
  $resultado = mysqli_query($conexion,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>SUBIDA</title>
</head>
<body>
  <div class="container">
    <div class="row">
       <div class="col-lg-4">
         <h1 class="text-primary">SUBIR VIDEO JUEGO</h1>
         <form action="subir.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
              <label for="my-input">Seleccione el Video Juego</label>
              <input id="my-input"  type="file" name="imagen">
          </div>
          <div class="form-group">
              <label for="my-input">Titulo del Video Juego</label>
              <input id="my-input" class="form-control" type="text" name="titulo">
          </div>
          <div class="form-group">
              <label for="my-input">Categoria</label>
              <br>
              <select name="categorias">
              <option value="ACCION">ACCION</option>
              <option value="AVENTURA">AVENTURA</option>
              <option value="DEPORTES">DEPORTES</option>
              <option value="RPG">RPG</option>
              <option value="ESTRATEGIA">ESTRATEGIA</option>
              <option value="SIMULACION">SIMULACION</option>
            </select>
          </div>
          <div class="form-group">
          <label>Una descripcion</label>
          <br>
					<textarea type="text" name="descripcion" id="mensaje" rows="3" cols="45" require></textarea>
          </div>
          <div class="form-group">
              <label for="my-input">Precio de renta</label>
              <br>
              <input id="my-input"  type="number" name="renta">
          </div>
          <div class="form-group">
              <label for="my-input">Precio compra</label>
              <br>
              <input id="my-input"  type="number" name="compra">
          </div>

          <?php if(isset($_SESSION['mensaje'])){ ?>
          <div class="alert alert-<?php echo $_SESSION['tipo'] ?> alert-dismissible fade show" role="alert">
         <strong><?php echo $_SESSION['mensaje']; ?></strong> 
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
     </button>
       </div>

          <?php session_unset(); } ?>

          <input type="submit" value="Guardar" class="btn btn-primary" name="Guardar">
          <input type="submit" value="Eliminar" class="btn btn-primary" name="Eliminar">
          <a class="btn btn-primary" href="../index.php" value="Salir">Salir</a>

         </form>
       </div>
       <div class="col-lg-8">
           <h1 class="text-primary text-center">Galeria de Imagenes Apenas Subida</h1>
           <hr>
           <div class="card-columns">
               <?php foreach($resultado as $row){ ?>
         <div class="card">
      <img src="../img/<?php echo $row['Img']; ?>.jpg" class="card-img-top" alt="...">
       <div class="card-body">
      <h5 class="card-title"><strong><?php echo $row['Nombre']; ?></strong></h5>
    </div>
               
  </div>
  <?php 
}?>
       </div>
    </div>
  </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>