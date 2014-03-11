<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>RG Hotels & Inmobiliaria - tu mejor experiencia en hoteles</title>

	<meta name="description" content="Ven y disfruta de las mejores vacaciones de tu vida, con RG Group podrás escoger tu destino en el mundo según tus preferencias, desde playas hasta montañas">
	<meta name="keywords" 	 content="Hoteles, playa, playa blanca, whyndham, gambito, panama, vacaciones, relax, tranquilidad">
	<meta name="author"		 content="www.visualizolaweb.com">
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
						<a href="#rooms"><li>HABITACIONES</li></a>
						<a href="hotel-wyndhamgrand-playa-corona-restaurantes.php"><li>RESTAURANTES</li></a>
						<a href="hotel-wyndhamgrand-playa-corona-servicios.php"><li>SERVICIOS</li></a>
						<a href="hotel-wyndhamgrand-playa-corona-reservas.php"><li>RESERVAS</li></a>
						<a href="gallery/playa-corona-gallery.php"><li>GALERIA</li></a>				
					</ul>
				</nav>	
			 </header>
			 <div class="welcome">
				<h2>"Relax" All Inclusive</h2>
				<h3>para toda la Familia</h2>
			 </div>
			 <div class="column">
				<h4>Ubicacion</h4>
				<p> Ubicado en Playa Corona a solo 75 minutos de la ciudad de Panamá, famosa por sus olas y color azul, es la playa ideal para sus deportes acuáticos, surf o para pasar la tarde en familia en la arena.</p>
			 </div>

			 <!--<div class="column">
				<h4>Conectividad</h4>
				<p>Localizado a solo 10 minutos del aeropuerto de Río Hato Scarlet Martinez con vuelos chárter internacionales y a 90  minutos del Aeropuerto de Tocumen con conexiones diarias a más de 90 ciudades del mundo.</p>
			 </div>-->
			 
			 <div class="adsimages">
				<img src="_assets/_Images/Hotels/WGCORONA/adsimages.jpg">
			 </div>

			<div id="rooms" class="rooms">
				<H2>Breath, Eat, Feel… Wyndham Moments</H2>
				<h3>NUESTRAS HABITACIONES</h3>
				<div class="both"/>
				<div class="roomprev">
					<a href="hotel-wyndhamgrand-playa-corona-suite.php">
						<img src="_assets/_Images/Hotels/WGCORONA/rooms/room-one.jpg">
					</a>
				</div>

				<div class="roomprev">
					<a href="hotel-wyndhamgrand-playa-corona-family.php">
						<img src="_assets/_Images/Hotels/WGCORONA/rooms/rooms-family.jpg">
					</a>
				</div>
				
				<div class="roomprev">
					<a href="hotel-wyndhamgrand-playa-corona-two-suite.php">
						<img src="_assets/_Images/Hotels/WGCORONA/rooms/rooms-two-suite.jpg">
					</a>
				</div>										
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