
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
    <title>Renta y Compra de Videojuegos</title>
   <link rel="stylesheet" href="css/styles.css" />
   <link rel="stylesheet" href="css/sw.css" />
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
      <section class="bienvenida">
        <h2>Bienvenido a nuestro sitio de renta y compra de videojuegos</h2>
        <p>
          Aquí encontrarás los últimos lanzamientos y los títulos más populares
          del mercado. ¡No esperes más para disfrutar de los mejores juegos!
        </p>
        
         <img src="img/logo.png">  

      </section>
      <center> 
        <section class = "container">
      <img src="img/Clima.png">  
        <h2 id="ciudad"></h2>
        <h3 id="descripcion"></h3>
        <h4 id="temperatura"></h4>
        <h5 id="humedad"></h5>
    </div>
        </center>
        </section>
    <script src="./js/app.js"></script>
      <section class="videojuegos">
        <center><h2>CODIGO</h2>
 
        <?php
         

         // Generar el código aleatorio
         $codigo = rand(1000, 9999); // Genera un número de 4 dígitos (puedes ajustar los valores según tus necesidades)
         
         $codigo = str_pad($codigo, 8, '0', STR_PAD_LEFT);
             echo '<center>SU CODIGO DE VIDEOJUEGOS ES:<H2>'.$codigo.'</H2></center>';
         
         
         
          ?>
<img src="img/ECHA.JPG">  
        </center>
       
        <script src="https://player.twitch.tv/js/embed/v1.js"></script>
              <div class="container">
                  <div id="player-container"></div>
              </div>
            <script src="./js/app3.js "></script>
      </section>
    </main>
    <footer>
      <p>Derechos Reservados © 2023 - Renta y Compra de Videojuegos</p>
    </footer>
  </body>
</html>