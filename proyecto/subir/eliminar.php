<?php
include('../modelo/conexion.php');

if (isset($_GET['titulo'])) {
    $nombre = $_GET['titulo'];

    $query = "DELETE FROM videojuegos WHERE Nombre = '$nombre'";
    $resultado = mysqli_query($conexion, $query);

    if ($resultado) {
        $_SESSION['mensaje'] = 'Se ha eliminado correctamente';
        $_SESSION['tipo'] = 'success';
    } else {
        $_SESSION['mensaje'] = 'Ocurrió un error al eliminar el videojuego';
        $_SESSION['tipo'] = 'danger';
    }
    header('location: ../subir/Menu_subida.php');
    exit();
} else {
    header('location: ../subir/Menu_subida.php');
    exit();
}
?>
