<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>RG Group Hotels</title>
</head>
<body>
	<section>
		<header><h1>TARJETA DE MEMBRESIA</h1></header>
		<?php include("_includes/menu.php");?>

		<article>
			<p>EL lujo no es solo algo que viene con vacacionar, es un estado mental. Disfruta de beneficios de primera clase para miembros con la tarjeta LIVE • STAY • PLAY, y regálate algo todo el año.</p>	
			<h2>LA “R” ES DE RECOMPENSA</h2>
			<p>El programa LIVE • STAY • PLAY es un club exclusivo para dueños de propiedades RG. Preferido por los miembros de la familia RG, disfrutarás de beneficios extraordinarios y descuentos.</p>	
		</article>
		<article>
			<p>No eres dueño de una propiedad RG todavía, no te preocupes. Contactanos para más detalles.</p>
			<form name="contact" id="contact" method="post" action="send-member.php">
				<input type="text" name="nombre" id="nombre" placeholder="Nombre"><br>
				<input type="text" name="correo" id="correo" placeholder="Correo Electrónico"><br>
				<input type="text" name="telefono" id="telefono" placeholder="Teléfono"><br>				
                <textarea name="mensaje" id="mensaje" placeholder="mensaje"></textarea><br>
                <input type="submit" name="enviar" value="Enviar">
			</form>
		</article>
	</section>
</body>
</html>