<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>CONTACTOS</title>
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
	<header>
		<div class="textos">
			<h1>PARA MAS INFORMACION | GAME STAGE</h1>
			<a href="#" id="abrir">CORREO</a>
			<a href="../index.php">REGRESAR</a>
		</div>
	</header>
	<div id="miModal" class="modal">
		<div class="flex" id="flex">
			<div class="contenido-modal">
				<div class="modal-header flex">
					<h2>GAME STAGE</h2>
					<span class="close" id="close">&times;</span>
				</div>
				<div class="modal-body">
					<form method="post" action="">
					<?php
            			include "../modelo/conexion.php";
            			include "../controlador/controlador_mensaje.php";
            		?>
						<div class="form">
							<div class="grupo">
							<label>Tu numero de celular: </label>
								<input type="number" name="telefono" id="telefono" require><span class="barra"></span>
							</div>
							<br>
							<div class="grupo">
							<label>El asunto: </label>
								<input type="text" name="asunto" id="asunto" require><span class="barra"></span>
							</div>
							<br>
							<div class="grupo">
							<label>El mensaje: </label>
								<textarea type="text" name="mensaje" id="mensaje" require></textarea><span class="barra"></span>
							</div>
							<br>
							<center>
							<input name="btnmensaje" class="btn" type="submit" value="ENVIAR">
							</center>
						
						</div>
					</form>
				</div>
				<div class="footer">
					<h3>ESPEREMOS QUE ESTE BIEN</h3>
				</div>
			</div>
		</div>
	</div>
	<script src="../js/main3.js"></script>
</body>
</html>