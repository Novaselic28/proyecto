<?php

session_start();
if (empty($_SESSION["id"])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Videojuegos de Acción</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <header>
    <div class="logo">
      <?php
        echo "<h1>Bienvenido - " . $_SESSION["nombres"]. " " .$_SESSION["apellidos"] . "</h1>";
        ?>
      </div>
      <nav>
        <ul>
        <?php
          if($_SESSION["id"]==9 ){
        echo "<li><a href='eliminarusuario.php'>USUARIOS</a></li>";
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
    <main>
      
    <center><img src="img/logo.png"></center>  
      <section class="videojuegos">
        <h2>Videojuegos de Acción</h2>
        <ul>
          <?php
            // Conexión a la base de datos
            $conexion = mysqli_connect("localhost", "root", "", "proyectos");

            // Consulta para obtener los videojuegos de acción
            $query = "SELECT Img,Nombre, descripcion, Genero FROM videojuegos WHERE genero = 'Accion'";
            $resultados = mysqli_query($conexion, $query);

            // Ciclo para imprimir los videojuegos
            while ($videojuego = mysqli_fetch_array($resultados)) {
              echo "<li>";
              echo "<img src='img/".$videojuego['Img'].".JPG' alt='Imagen de videojuego' />";
              echo "<h3>".$videojuego['Nombre']."</h3>";
              echo "<p>".$videojuego['descripcion']."</p>";
              echo "<p>Género: ".$videojuego['Genero']."</p>";
              echo "<div class='botones'>";
              echo "<a href='renta.php?nombre=" . $videojuego['Nombre'] . "' class='boton-renta'>Renta</a>";
              echo "<a href='compra.php?nombre=" . $videojuego['Nombre'] . "' class='boton-renta'>Compra</a>";
              echo "</div>";
              echo "</li>";
            }

            // Cerrar conexión a la base de datos
            mysqli_close($conexion);
          ?>
        </ul>
      </section>
    </main>

    <footer>
      <p>Derechos Reservados © 2023 - Renta y Compra de Videojuegos</p>
    </footer>
  </body>
</html>
