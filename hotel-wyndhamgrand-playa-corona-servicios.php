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
<body id="wgpb">
	<section id="wrapper">
		<header> 
			<?php include("_includes/menu.php");?>
			<?php include("_includes/cabezote_pb_corona.php");?>
	 	</header>	
		<article id="content_hotel">
			 <header>
				<nav id="menu_hotel" class="dark">
					<ul>
						<a href="hotel-wyndhamgrand-playa-corona.php"><li>INICIO</li></a>
						<a href="hotel-wyndhamgrand-playa-corona.php#rooms"><li>HABITACIONES</li></a>
						<a href="hotel-wyndhamgrand-playa-corona-restaurantes.php"><li>RESTAURANTES</li></a>
						<a href="hotel-wyndhamgrand-playa-corona-servicios.php"><li>SERVICIOS</li></a>
						<a href="hotel-wyndhamgrand-playa-corona-reservas.php"><li>RESERVAS</li></a>
						<a href="gallery/playa-corona-gallery.php"><li>GALERIA</li></a>					
					</ul>
				</nav>	
			 </header>
			 

			 <div id="rooms" class="rooms">

				<H2>Breath, Eat, Feel… Wyndham Moments</H2>
				<h3>All Experiences </h3>
			 	<img src="_assets/_Images/Hotels/WGCORONA/rooms/experiencias.jpg" width="100%">
				<p class="both">	</br>Déjese las sandalias puestas todo el día, y vengan con su familia o amigos a disfrutar de nuestro All Inclusive Relax al estilo Wyndham Playa Corona.</p>
				<p>All in Services:</p>
				<ul class="listroom">
					<li>Sun Beds en la playa </li>
					<li>1 piscina y 2 Jacuzzis  </li>					
					<li>Rooftop lounge</li>
					<li>Wi-fi gratuito</li>
					<li>Gimnasio </li>
					<li>Valet parking. </li> 
					<li>Servicio de botones</li>
					<li>Taxi $</li>
					<li>Lavandería $</li>
					<li>Masajes $</li>
					<li>Salón de conferencias $</li>
					<li>Servicios médicos $</li>
				</ul>
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