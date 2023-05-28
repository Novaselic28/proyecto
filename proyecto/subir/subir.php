<?php
include('../modelo/conexion.php');

if(isset($_POST['Guardar'])){
    $imagen = $_FILES['imagen']['name'];
    $nombre = $_POST['titulo'];
    $categoria = $_POST["categorias"];
    $descripcion = $_POST["descripcion"];
    $renta = $_POST["renta"];
    $compra = $_POST["compra"];

    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

       if( !((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'webp') || strpos($tipo,'jpg')))){
          $_SESSION['mensaje'] = 'solo se permite archivos, jpeg, gif, webp,jpg';
          $_SESSION['tipo'] = 'danger';
          header('location:../subir/Menu_subida.php');
       }else{
        // Test para eliminar .jpg
        $imagenFinal = substr($imagen, 0, strlen($imagen) - 4);
         $query = "INSERT INTO videojuegos(Nombre,Genero, descripcion, Renta, Compra, Img) 
         values('$nombre','$categoria','$descripcion','$renta','$compra','$imagenFinal')";
         $resultado = mysqli_query($conexion,$query);
         if($resultado){
              move_uploaded_file($temp,'../img/'.$imagen);   
             $_SESSION['mensaje'] = 'se ha subido correctamente';
             $_SESSION['tipo'] = 'success';
             header('location: ../subir/Menu_subida.php');
         }else{
             $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
             $_SESSION['tipo'] = 'danger';
         }
       }
    }
} elseif (isset($_POST['Eliminar'])) {
    if (empty($_POST["titulo"])) {
        echo "
        <script>
            alert('Campos vacios');
            window.location.href = '../subir/Menu_subida.php';
        </script>
        ";
    } else {
        $nombre = $_POST["titulo"];

        echo "
        <script>
            if (window.confirm('¿Estás seguro de que deseas eliminar el videojuego?')) {
                window.location.href = 'eliminar.php?titulo=$nombre';
            } else {
                window.location.href = '../subir/Menu_subida.php';
            }
        </script>
        ";
    }
}
?>