<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>RG Hotels & Inmobiliaria - tu mejor experiencia en hoteles</title>

	<meta name="description" content="Ven y disfruta de las mejores vacaciones de tu vida, con RG Group podrás escoger tu destino en el mundo según tus preferencias, desde playas hasta montañas">
	<meta name="keywords" 	 content="Hoteles, playa, playa blanca, whyndham, gambito, panama, vacaciones, relax, tranquilidad">
	<meta name="author"			 content="www.visualizolaweb.com">
	<link rel="stylesheet" 	 href="_assets/_Stylesheets/rgestilos.css"> 

	<!-- Load Jquery -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="_assets/_Scripts/less-1.7.0.min.js" type="text/javascript"></script>

	<!-- Load Slider with Responsive -->
	<script src="_assets/_Scripts/unslider.js"></script>
 	<script type="text/javascript" src="_assets/_Scripts/modernizr.custom.91120.js"></script>

	<script>
		$(function() {
			var pull 	= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>
</head>
<body>
	<section id="wrapper">
		<header> 
			<?php include("_includes/menu.php");?>
		 		<a href="hotel-wyndhamgrand-playa-blanca.php"><div class="label"><img src="_assets/_Images/Hotels/WGPlaya_blanca/logotype-label.png" alt="Enter Site Wyndham Gran Playa Blanca"></div></a>
				<div class="banner">
				 <ul>
			        <li style="background-image:url('_assets/_Images/Hotels/WGPlaya_blanca/1.jpg')">  </li> 
			    		<li style="background-image:url('_assets/_Images/Hotels/WGPlaya_blanca/2.jpg')">  </li> 
			    		<li style="background-image:url('_assets/_Images/Hotels/WGPlaya_blanca/3.jpg')">  </li> 
			    		<li style="background-image:url('_assets/_Images/Hotels/WGPlaya_blanca/4.jpg')">  </li> 
			   </ul>
				</div>
	 	</header>	

		<article id="content-box">
	 
			<div id="btn_casagrande" class="buttons_hotels"><a href="hotel-casa-grande.php"> 
				<img src="_assets/_Images/Hotels/CASA_GRANDE/fadebutton_2.jpg" class="bottom"/>
				<img src="_assets/_Images/Hotels/CASA_GRANDE/fadebutton_1.jpg" class="top"/></a>
			</div>
				
			<div id="btn_trypcoronado" class="buttons_hotels"><a href="hotel-tryp-coronado.php"> 
				<img src="_assets/_Images/Hotels/TRYPCORONADO/fadebutton_2.jpg" class="bottom"/>
				<img src="_assets/_Images/Hotels/TRYPCORONADO/fadebutton_1.jpg" class="top"/></a>
			</div>
						
			<div id="btn_wgcorona" class="buttons_hotels"><a href="hotel-wyndhamgrand-playa-corona.php" alt="Wyndham Playa Corona Resort"> 
				<img src="_assets/_Images/Hotels/WGCORONA/fadebutton_2.jpg" class="bottom"/>
				<img src="_assets/_Images/Hotels/WGCORONA/fadebutton_1.jpg" class="top"/></a>
			</div>
		 
 			<div class="separador"> </div>
		</article>
 
		<article id="content_page">
			 <div class="tarjetas">
				<img src="_assets/_Images/tarjetas.jpg">
			 </div>
	
			 <div class="formulario">
			 	<h2>CONTACTANOS</h2>
				<p>No eres dueño de una propiedad RG todavía, no te preocupes. Contactanos para más detalles.</p>
				<?php
					$msg = $_GET['msg'];
					if($msg =='false'){
							echo "<p>Error al intentar enviar el mensaje, intente nuevamente</p>";
					}elseif($msg =='true'){
						echo "<p>Mensaje enviado con exito, muy pronto nos estaremos contactando con usted.</p>";
					}
				?>
			<form name="contact" id="contact" method="post" action="send-member.php">
				<input autofocus type="text" required name="nombre" id="nombre"  placeholder="Nombre"><br>
				<input type="email" name="correo" required id="correo" autocomplete="off" placeholder="Correo Electrónico"><br>
				<input type="tel" name="telefono" required id="telefono" placeholder="Teléfono"><br>				
                <textarea name="mensaje" id="mensaje" required placeholder="mensaje"></textarea><br>
                <input type="submit" name="enviar" value="Enviar">
			</form>
			 </div>

			 <div class="texto_membresia">
					<p>EL lujo no es solo algo que viene con vacacionar, es un estado mental. Disfruta de beneficios de primera clase para miembros con la tarjeta LIVE • STAY • PLAY, y regálate algo todo el año.</p>	
			<h2>LA “R” ES DE RECOMPENSA</h2>
			<p>El programa LIVE • STAY • PLAY es un club exclusivo para dueños de propiedades RG. Preferido por los miembros de la familia RG, disfrutarás de beneficios extraordinarios y descuentos.</p>	

			 </div>
		</article> 

		<footer><?php include("_includes/footer.php");?></footer>
	</section>

<script>
    $(document).ready(function(){
        $('.banner').unslider({
        speed: 500,               //  The speed to animate each slide (in milliseconds)
        delay: 3000,              //  The delay between slide animations (in milliseconds)
        complete: function() {},  //  A function that gets called after every slide animation
        keys: true,               //  Enable keyboard (left, right) arrow shortcuts
        dots: true,               //  Display dot navigation
        fluid: true              //  Support responsive design. May break non-responsive designs
        });
     });
</script>
</body>
</html>