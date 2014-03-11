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
	<link rel="stylesheet" 	 href="_assets/_Stylesheets/hotelstyle.css"> 

	<!-- Load Jquery -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="_assets/_Scripts/less-1.7.0.min.js" type="text/javascript"></script>

	<!-- Load Slider with Responsive -->
	<script src="_assets/_Scripts/unslider.js"></script>
 	<script type="text/javascript" src="_assets/_Scripts/modernizr.custom.91120.js"></script>

	<script>
		$(function() {
			var pull 		= $('#pull');
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
<body id="wgpb">
	<section id="wrapper">
		<header> 
			<?php include("_includes/menu.php");?>
		 		<div class="banner">
				 	<ul> 
			    		<li style="background-image:url('_assets/_Images/Hotels/CASA_GRANDE/7.jpg')">  </li> 
			    		<li style="background-image:url('_assets/_Images/Hotels/CASA_GRANDE/2.jpg')">  </li> 
			    		<li style="background-image:url('_assets/_Images/Hotels/CASA_GRANDE/4.jpg')">  </li>
			    		<li style="background-image:url('_assets/_Images/Hotels/CASA_GRANDE/5.jpg')">  </li> 
			    		<li style="background-image:url('_assets/_Images/Hotels/CASA_GRANDE/6.jpg')">  </li> 
			   		</ul>
				</div>
				<div class="logohotel">
					<img src="_assets/_Images/cabezote-logo-3.png">
				</div>
	 	</header>	
		<article id="content_hotel">
			 <header>
				<nav id="menu_hotel" class="dark">
					<ul>
					<a href="hotel-wyndhamgrand-playa-blanca.php"><li>INICIO</li></a>
					<!--	<a href="#rooms"><li>HABITACIONES</li></a>
						<a href="hotel-wyndhamgrand-playa-blanca-restaurantes.php"><li>RESTAURANTES</li></a>
						<a href="hotel-wyndhamgrand-playa-blanca-servicios.php"><li>SERVICIOS</li></a>
						<a href="hotel-wyndhamgrand-playa-blanca-reservas.php"><li>RESERVAS</li></a>-->
						<a href="gallery/casa-grande-gallery.html"><li>GALERIA</li></a>				
					</ul>
				</nav>	
			 </header>
			 <div class="welcome">
				<h2>UN LUGAR MAGICO </h2>
				<h3>ESPERA POR TI</h2>
			 </div>
			 <div class="column2">
				<h4>Nosotros</h4>
				<p>Casa Grande Bambito es un lujoso hotel estilo boutique ubicado dentro de un ambiente de selva tropical rodeado de montañas, rocas volcánicas, manantiales y bellezas naturales que calman el alma, el espíritu y revitalizan el cuerpo en las tierras altas de Panamá.</p>
			 </div>
 
		 	 <!--<div class="adsimages2">
				<img src="_assets/_Images/Hotels/CASA_GRANDE/bn1.jpg">
			 </div>
			
			 <div class="video_aqua">
				<iframe src="//player.vimeo.com/video/77314775"width="100%" height="260"frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			 </div>-->
 
			 <div class="adsimages">
				<img src="_assets/_Images/Hotels/CASA_GRANDE/bn3.jpg">
				<img src="_assets/_Images/Hotels/CASA_GRANDE/bn2.jpg">
			 </div>
<!--
			 <div id="rooms" class="rooms">
				<H2>Breath, Eat, Feel… Wyndham Moments</H2>
				<h3>NUESTRAS HABITACIONES</h3>
				<div class="both"/>
				<div class="roomprev">
					<a href="hotel-wyndhamgrand-playa-blanca-breath.php">
						<img src="_assets/_Images/Hotels/WGPlaya_blanca/rooms/rooms1.jpg">
					</a>
				</div>

				<div class="roomprev">
					<a href="hotel-wyndhamgrand-playa-blanca-deluxe.php">
						<img src="_assets/_Images/Hotels/WGPlaya_blanca/rooms/rooms2.jpg">
					</a>
				</div>

				<div class="roomprev">
					<a href="hotel-wyndhamgrand-playa-blanca-suite.php">
						<img src="_assets/_Images/Hotels/WGPlaya_blanca/rooms/rooms3.jpg">
					</a>
				</div>

				<div class="roomprev nomarginright">
					<a href="hotel-wyndhamgrand-playa-blanca-penthouse.php">
						<img src="_assets/_Images/Hotels/WGPlaya_blanca/rooms/rooms4.jpg">
					</a>
				</div>												
			 </div>-->
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