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
						<a href="#rooms"><li>HABITACIONES</li></a>
						<a href="hotel-wyndhamgrand-playa-corona-restaurantes.php"><li>RESTAURANTES</li></a>
						<a href="hotel-wyndhamgrand-playa-corona-servicios.php"><li>SERVICIOS</li></a>
						<a href="hotel-wyndhamgrand-playa-corona-reservas.php"><li>RESERVAS</li></a>
						<a href="gallery/playa-corona-gallery.php"><li>GALERIA</li></a>						
					</ul>
				</nav>	
			 </header>
			 

			 <div id="rooms" class="rooms">

				<H2>Breath, Eat, Feel… Wyndham Moments</H2>
				<h3>NUESTRAS HABITACIONES</h3>

			 	<img src="_assets/_Images/Hotels/WGCORONA/rooms/cover-two-suite.jpg" width="100%">
				<p class="both">	</br>El único All Inclusive que te hará sentir en casa. Este All Suites Hotel fue diseñado con 108 habitaciones espaciosas y comodidades de casa como; kitchenette bar, sala, balcón, para ofrecerles a nuestros huéspedes una experiencia única.</p>
				<p>Two bedroom suite equipada con:</p>
					<ul class="listroom">
						<li>HD LCD TV 32"</li>
						<li>Cafetera </li>
						<li>Mini-Bar</li>
						<li>Air conditioning</li>
						<li>Teléfono</li>
						<li>Secador de cabello</li>
						<li>110V</li>
						<li>Caja de seguridad</li>
						<li>Tabla de planchar y plancha</li>
						<li>Sala</li>
						<li>Cocineta con microondas</li>
						<li>2 camas dobles</li>
						<li>sofá cama</li>
						<li>capacidad de 5 personas</li>
					</ul>

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
</br>
				 		
															
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