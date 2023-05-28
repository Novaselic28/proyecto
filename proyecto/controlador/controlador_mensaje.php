<?php
if (!empty($_POST["btnmensaje"])) {
    if (empty($_POST["telefono"]) or empty($_POST["asunto"]) //VERIFICAR QUE ESTEN LLENOS
        or empty($_POST["mensaje"])) {
            
            echo "<div class = 'alert alert-danger'>Campos Vacios</div>";
    
        } else {

        $telefono = $_POST["telefono"];
        $asunto = $_POST["asunto"];
        $mensaje = $_POST["mensaje"];

        $sql = $conexion -> query("INSERT INTO contacto (telefono, asunto, mensaje) 
        VALUES ('$telefono','$asunto','$mensaje')");

        if ($sql == 1) {
            echo "<div class = 'alert alert-success'>Registros Correctos</div>";
        } else {
            echo "<div class = 'alert alert-danger'>Registros Fallidos</div>";
        }       
}    
}
?>