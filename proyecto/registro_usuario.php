<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
   <link href="https://tresplazas.com/web/img/big_punto_de_venta.png" rel="shortcut icon">
   <title>REGISTRO</title>
</head>

<body>
   <img class="wave" src="img/wave.png">
   <div class="container">
      <div class="img">
         <img src="img/logo.png">
      </div>
      <div class="login-content">
         <form method="post" action=""> <!--GET NO ES MUY SEGURO EL Y POST SI LO ES-->
            <h2 class="title">REGISTROS</h2>
            <?php
            include "modelo/conexion.php";
            include "controlador/controlador_registrar_usuario.php";
            ?>
            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-name"></i>
               </div>
               <div class="div">
                  <h5>Nombres</h5>
                  <input id="nombre" type="text" class="input" name="nombre">
               </div>
            </div>
             <!-- FIN NOMBRES -->
             <div class="input-div one">
               <div class="i">
                  <i class="fas fa-name"></i>
               </div>
               <div class="div">
                  <h5>Apellidos</h5>
                  <input id="apellido" type="text" class="input" name="apellido">
               </div>
            </div>
             <!-- FIN APELLIDOS -->
             <div class="input-div one">
               <div class="i">
                  <i class="fas fa-email"></i>
               </div>
               <div class="div">
                  <h5>Correo</h5>
                  <input id="email" type="text" class="input" name="email">
               </div>
            </div>
             <!-- FIN CORREO -->
            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-user"></i>
               </div>
               <div class="div">
                  <h5>Usuario</h5>
                  <input id="usuario" type="text" class="input" name="usuario">
               </div>
            </div>
            <!-- FIN USUARIOS -->
            <div class="input-div pass">
               <div class="i">
                  <i class="fas fa-lock"></i>
               </div>
               <div class="div">
                  <h5>Contraseña</h5>
                  <input type="password" id="input" class="input" name="clave">
               </div>
            </div>
            <div class="view">
               <div class="fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>
            </div>
             <!-- FIN CONTRASEÑA -->
             <div class="text-center">
               <a class="font-italic isai5" href="login.php">Volver al Inicio</a>
            </div>
            <input name="btnregistro" class="btn" type="submit" value="REGISTRARSE">
         </form>
      </div>
   </div>
   <script src="js/fontawesome.js"></script>
   <script src="js/main.js"></script>
   <script src="js/main2.js"></script>
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.js"></script>
   <script src="js/bootstrap.bundle.js"></script>

</body>

</html>