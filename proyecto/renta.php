<?php

session_start();
if (empty($_SESSION["id"])) {
    header("Location: login.php");
}

?>
<?php
// Verificar si se recibió el nombre del videojuego en el URL
if (isset($_GET['nombre'])) {
    // Obtener el nombre del videojuego del URL
    $nombre = $_GET['nombre'];

    // Conexión a la base de datos
    $conexion = mysqli_connect("localhost", "root", "", "proyectos");

    // Consulta para obtener los datos del videojuego
    $query = "SELECT Img, Nombre, descripcion FROM videojuegos WHERE Nombre = '$nombre'";
    $resultados = mysqli_query($conexion, $query);

    // Verificar si se encontraron resultados
    if (mysqli_num_rows($resultados) > 0) {
        // Obtener los datos del videojuego
        $videojuego = mysqli_fetch_assoc($resultados);
        $img = $videojuego['Img'];
        $titulo = $videojuego['Nombre'];
        $descripcion = $videojuego['descripcion'];
    } else {
        // Si no se encontraron resultados, redirigir a una página de error o manejarlo según tu necesidad
        header("Location: error.php");
        exit;
    }

    // Cerrar conexión a la base de datos
    mysqli_close($conexion);
} else {
    // Si no se recibió el nombre del videojuego, redirigir a una página de error o manejarlo según tu necesidad
    header("Location: error.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Compra de Videojuego</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="css/estiloren.css" />
  </head>
  <body>
    <header>
      <div class="logo">
        <h1>Renta y Compra de Videojuegos</h1>
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
        </ul>
      </nav>
    </header>
    <main>
      <section class="videojuego-renta">
        <div class="videojuego-info">
          <img src="img/<?php echo $img; ?>.JPG" alt="Imagen de videojuego" />
          <h2><?php echo $titulo; ?></h2>
          <p><?php echo $descripcion; ?></p>
        </div>

        <div class="formulario-renta">
          <h3>Renta de Videojuego</h3>
          <form action="compra.php" method="post">
          
            <div class="form-group">
              <label for="metodo-pago">Método de Pago:</label>
              <select id="metodo-pago" name="metodo-pago" required>
                <option value="tarjeta">Tarjeta de crédito</option>
                <option value="codigo">Código de compra</option>
              </select>
            </div>
            <div class="form-group">
              <label for="alquiler">Tiempo a alquilar:</label>
              <select id="alquiler" name="alquiler" required>
                <option value="1 Semana">1 Semana:120</option>
                <option value="1 Mes">1 Mes :400</option>
                <option value="1 Año">1 Año :700</option>
              </select>
            </div>

            <div class="form-group" id="datos-tarjeta">
              <label for="nombre-tarjeta">Nombre del Titular:</label>
              <input type="text" id="nombre-tarjeta" name="nombre-tarjeta" required><br>

              <label for="numero-tarjeta">Número de Tarjeta:</label>
              <input type="text" id="numero-tarjeta" name="numero-tarjeta" required><br>

              <label for="fecha-expiracion">Fecha de Expiración:</label>
              <input type="text" id="fecha-expiracion" name="fecha-expiracion" required><br>

              <label for="cvv">CVV:</label>
              <input type="text" id="cvv" name="cvv" required><br>
            </div>

            <div class="form-group" id="datos-codigo" style="display: none;">
              <label for="codigo-compra">Código de Compra:</label>
              <input type="text" id="codigo-compra" name="codigo-compra" required><br>
            </div>

            
          </form>
          <form action="enviar_codigo.php" method="post">
        <input type="submit" name="enviar" value="Enviar código por correo">
    </form>
        </div>
      </section>
    </main>

    <footer>
      <p>Derechos Reservados © 2023 - Renta y Compra de Videojuegos</p>
    </footer>

    <script src="script.js"></script>
    <script>
      // Mostrar u ocultar los campos de tarjeta de crédito o código de compra según el método de pago seleccionado
      var metodoPago = document.getElementById("metodo-pago");
      var datosTarjeta = document.getElementById("datos-tarjeta");
      var datosCodigo = document.getElementById("datos-codigo");

      metodoPago.addEventListener("change", function () {
        if (metodoPago.value === "tarjeta") {
          datosTarjeta.style.display = "block";
          datosCodigo.style.display = "none";
        } else if (metodoPago.value === "codigo") {
          datosTarjeta.style.display = "none";
          datosCodigo.style.display = "block";
        }
      });
    </script>
  </body>
</html>