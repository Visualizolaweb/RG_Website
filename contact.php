<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>RG Group Hotels - Contacto</title>
</head>
<body>
	<section>
		<header><h1>Contacto</h1></header>
		<?php include("_includes/menu.php");?>
		<article>
			<form name="contact" id="contact" method="post" action="send-contact.php">
				<input type="text" name="nombre" id="nombre" placeholder="Nombre"><br>
				<input type="text" name="apellidos" id="apellidos" placeholder="Apellidos"><br>
				<input type="text" name="correo" id="correo" placeholder="Correo Electrónico"><br>
				<select name="interes" id="interes">
                    <option value="">Interesado en: </option>
                    <option value="01">Casa Grande Bambito</option>
                    <option value="02">Tryp Coronado</option>
                    <option value="03">Wyndham Grand Playa Balnca</option>
                    <option value="04">Wyndham Playa Corona Resort</option>
                </select><br>
                <input type="text" name="asunto" id="asunto" placeholder="Asunto"><br>
                <textarea name="mensaje" id="mensaje" placeholder="mensaje"></textarea><br>
                <input type="submit" name="enviar" value="Enviar">
			</form>
		</article>
		<article>
			<p>TORRE DE LAS AMERICAS ,OFC 29-30 PANAMA CITY, PANAMA<br>
		    <strong>LLAMAR:</strong>(507)2045757
		    <strong>E-MAIL:</strong> <a href="mailto:ventas@rgpanama.com">VENTAS@RGPANAMA.COM</a></p>
		</article>
		<article id="map">
			<iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.es/maps?source=s_q&amp;hl=es&amp;geocode=&amp;q=TORRE+DE+LAS+AMERICAS+,OFC+29-30&amp;aq=&amp;sll=40.396764,-4.713379&amp;sspn=9.78476,21.643066&amp;ie=UTF8&amp;hq=TORRE+DE+LAS+AMERICAS+,OFC+29-30&amp;hnear=Panam%C3%A1&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=846447028720232670&amp;ll=8.527565,-79.892621&amp;output=embed"></iframe><br />
		</article>		
	</section>
	<footer>© 2014 RG HOTELS & INMOBILIARIA . ALL RIGHTS RESERVED</footer>
</body>
</html>