<?php
if (!empty($_POST["btnregistro"])) {
    if (empty($_POST["nombre"]) or empty($_POST["apellido"]) //VERIFICAR QUE ESTEN LLENOS
        or empty($_POST["email"]) or empty($_POST["usuario"])
        or empty($_POST["clave"])) {
            
            echo "<div class = 'alert alert-danger'>Campos Vacios</div>";
    
        } else {

        $usuario = $_POST["usuario"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];
        $clave = $_POST["clave"];

        $sql = $conexion -> query("INSERT INTO usuario (usuario, nombres, apellidos, correo, contraseña) 
        VALUES ('$usuario','$nombre','$apellido','$email','$clave')");

        if ($sql == 1) {
            echo "<div class = 'alert alert-success'>Registros Correctos</div>";
        } else {
            echo "<div class = 'alert alert-danger'>Registros Fallidos</div>";
        }       
}    
}
?>