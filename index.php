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
	 
			<div id="btn_casagrande" class="buttons_hotels"><a href="#"> 
				<img src="_assets/_Images/Hotels/CASA_GRANDE/fadebutton_2.jpg" class="bottom"/>
				<img src="_assets/_Images/Hotels/CASA_GRANDE/fadebutton_1.jpg" class="top"/></a>
			</div>
				
			<div id="btn_trypcoronado" class="buttons_hotels"><a href="hotel-wyndhamgrand-playa-tryp-coronado.php"> 
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
			<section class="discover">
				<h2>Llegue a Panama y descubra otros mundos sin salir de la misma...</h2>
				<p>¡Le damos la bienvenida a los hoteles y del grupo RG PANAMA! Todos ellos han sido creados pensando en cada una de las necesidades de nuestros huéspedes. Cada uno, a su manera, le invita a gozar de un ambiente único. ¡Le damos la bienvenida al corazón de la originalidad y la buena convivencia!</p>
			</section>
				<section id="content_home">
					<aside><img src="_assets/_Images/Hotels/AQUA/hotelaqua.png"></aside>
					<div class="horizontalcol">
						<p>El proyecto mas esperado hace su arribo en la primavera del 2012<p>
						<h2>AQUA HOTELS & RESIDENCES</h2>
						<p>Contará con una villa de suites, bungalows, hoteles de 5 estrellas con todo incluido "Solo para adultos" y un diseño moderno y elegante con el estilo de ASIA-PACIFICO</p>
						<span class="learnmore">Ver Mas</span>
					</div>
					<div class="columnsdouble">
							<div class="columnone">
								<h3>
									<ul>
										<li class="first">LIVE</li>
										<li class="medium">STAY</li>
										<li class="last">PLAY</li>
									</ul>
								</h3>
								<h4>MEMBERSHIP CARD</h4>
								<p>EL lujo no es solo algo que viene con vacacionar, es un estado mental. Disfruta de beneficios de primera clase para miembros con la tarjeta LIVE • STAY • PLAY, y regálate algo todo el año.</p>
							<span class="learnmore">Ver Mas</span>

							</div>
	
							<div class="columntwo">
								<h4>SUBSCRIBE TU EMAIL</h4>
								<form name="subscribeyouremail">
									<input type="text" name="fullname" placeholder="Nombre Completo">
									<input type="text" name="email" placeholder="Correo Electronico">
									<input type="submit" name="submit" value="REGISTRARSE">

								</form>	
	
							</div>
					</div>
				</section>

				<section id="promotions">
					<div class="video">
						<iframe src="//player.vimeo.com/video/79537720" width="385" height="230" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
					</div>
					<div class="textpromo">
						<p>conozca actuales promociones y reserve con nosotros hoy en cualquier de nuestras 4 propiedades.</p>
						<a href="#"><img src="_assets/_Images/labeltext.png"></a>

					</div>
				</section>
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