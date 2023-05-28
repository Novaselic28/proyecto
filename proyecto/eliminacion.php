<?php
$mysql = new mysqli("localhost", "root", "", "proyectos");

$Query = ("DELETE FROM usuario WHERE id=".$_POST['id']);
$Result = $mysql->query( $Query );


?>
