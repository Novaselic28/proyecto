<?php

session_start();
if (empty($_SESSION["id"])) {
    header("Location: login.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="css/styles.css" />
<link rel="stylesheet" href="css/tablausuarios.css" />
<!-- Incluir archivo CSS de Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<!-- Incluir archivos JS de Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<!--Iconos de boostrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<title>Documento sin t&iacute;tulo</title>

</head>

<body>
<header>
      <div class="logo">
      <?php
        echo "<h1>" . $_SESSION["nombres"]. " " .$_SESSION["apellidos"] . "</h1>";
        ?>
      </div>
      <nav>
        <ul>
          <?php
          if($_SESSION["id"]==9 ){
        echo "<li><a href='eliminarusuario.php' class='table-link'>USUARIOS</a></li>";
        echo "<li><a href='subir/Menu_subida.php'>SUBIR VIDEOJUEGOS</a></li>";
          }
        
        ?>
          <li><a href="index.php">Inicio</a></li>
          <li class="dropdown">
            <a href="#">Videojuegos</a>
            <ul class="dropdown-content">
            <li><a href="CatalogoTodos2.php">Ver todos</a></li>
              <li><a href="CatalogoAccion2.php">Acción</a></li>
              <li><a href="CatalogoAventura2.php">Aventura</a></li>
              <li><a href="CatalogoDeportes2.php">Deportes</a></li>
              <li><a href="CatalogoEstrategia2.php">Estrategia</a></li>
              <li><a href="CatalogoSimulacion2.php">Simulación</a></li>
              <li><a href="CatalogoRPG2.php">RPG</a></li>
            </ul>
          </li>
          <li><a href="contactar/contacto.php">Contacto</a></li>
          <li><a href="controlador/controlador_cerrar_session.php">Salir</a></li>
        </ul>
      </nav>
    </header>
<center>


<?php 
// $conexion = pg_connect("host=localhost port=5432 user=nombreUsuario password=passwordUsuario dbname=nomBD", PGSQL_CONNECT_FORCE_NEW);
// $conexion = pg_connect("host=localhost dbname=BASE_DE_DATOS user=USUARIO password=CONTRASEÑA");		

$mysql = new mysqli("localhost", "root", "", "proyectos");

$Query = "select * from usuario WHERE  id!=9";
$Result = $mysql->query( $Query );


	 $numeroRegistros=$Result->num_rows;   
	 if($numeroRegistros<=0) 
   { 
     echo "<div align='center'>"; 
     echo "<h2>No se encontraron registros</h2>"; 
     echo "</div><hr> "; 
   }else{
   ?>
   <h1 class="text-primary">USUARIOS</h1>

   <div class="table-container">
   <div class="table-image">
   <img src="img/logo.png" alt="Icon" class="table-image">
   </div>
   
   <?php 
        if(isset($_GET['error'])){ 
        ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Se ha eliminado correctamente</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php } ?>
   <table class="table">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Usuario</th>
              <th>Correo</th>
              <td>Contraseña</td>
            </tr>
          </thead>
          <tbody>
            
              <?php 
              while($row =$Result->fetch_array()) {	  
                $nom=$row["nombres"];
                   ?>
                   <tr>
                   <td> <?php printf($row["id"]); ?>   </td>
                   <td> <?php print($nom); ?> </td>
                   <td> <?php printf($row["apellidos"]); ?>   </td>
                   <td> <?php printf($row["usuario"]); ?>   </td>
                   <td> <?php printf($row["correo"]); ?>   </td>
                   <td> <?php printf($row["contraseña"]); ?>   </td>
                   <td>
                <button class="btn btn-danger btn-small btnEliminar" 
                data-id="<?php echo $row['id'] ?>"
                data-bs-toggle="modal" data-bs-target="#modalEliminar">
                  <i class="bi bi-trash-fill"></i>
                </button>
              </td>
                   </tr>
              
            </tr>
            <?php  } ?>
          </tbody>
        </table>
        </div>
    <!-- Modal Eliminar -->
  <div class="modal fade" id="modalEliminar" tabindex="-1" aria-labelledby="modalEliminar" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modalEliminar">Eliminar Usuario</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ¿Desea eliminar el usuario?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="submit" value="enviar" class="btn btn-danger eliminar" data-bs-dismiss="modal">Eliminar</button>
            </div>
        </div>
      </div>
    </div> 
  </div>
   
   <!-- <table border=1>
        <tr>
		<td><strong> Id</strong></td>
		<td><strong>Usuario</strong></td>
		<td><strong> Nombre</strong></td>
		<td><strong> Apellido</strong></td>
        <td><strong> Correo</strong></td>
		<td><strong>  Contraseña</strong></td>
		</tr>
		<?php
        while($row =$Result->fetch_array()) {	  
		$nom=$row["nombres"];
           ?>
		   <tr>
           <td> <?php printf($row["id"]); ?>   </td>
		   <td> <a href="eliminacion.php ? Nombre=<?php print($nom); ?>"> <?php print($nom); ?> </a>  </td>
           <td> <?php printf($row["apellidos"]); ?>   </td>
		   <td> <?php printf($row["usuario"]); ?>   </td>
		  
		   <td> <?php printf($row["contraseña"]); ?>   </td>
		   <td> <?php printf($row["correo"]); ?>   </td>
           </tr>
<?php	}
}
?>
</table> -->
<BR>


<script src="js/admineliminar.js"></script>
<a class="btn btn-primary" href="index.php" value="Salir">Salir</a>
</body>
</html>