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

		 	<?php include("_includes/cabezote_tryp_coronado.php");?>
	 	</header>	
		<article id="content_hotel">
			 <header>
				<nav id="menu_hotel" class="dark">
					<ul>
						<a href="hotel-tryp-coronado.php"><li>INICIO</li></a>
						<a href="hotel-tryp-coronado-rooms.php"><li>HABITACIONES</li></a>
						<a href="hotel-tryp-coronado-restaurante.php"><li>RESTAURANTES</li></a>
						<a href="hotel-tryp-coronado-servicios.php"><li>SERVICIOS</li></a>
						<a href="hotel-wyndhamgrand-playa-corona-reservas.php"><li>RESERVAS</li></a>
						<a href="gallery/tryp-coronado-gallery.php"><li>GALERIA</li></a>	
					</ul>
				</nav>	
			 </header>
			 

			 <div id="rooms" class="rooms">
 
				<h3>NUESTRAS HABITACIONES</h3>
			 	<p class="both">	</br>
			 		All Suites Hotel de 130 habitaciones que le ofrecerá la comodidad que busca en su próximo viaje de negocio o placer. Todas nuestras habitaciones están equipadas con:</p>

					<ul class="listroom">
						<li>HD LCD TV 32"</li>
						<li>Cafetera </li>
						<li>Mini-nevera</li>
						<li>Aire acondicionado</li>
						<li>Teléfono</li>
						<li>Secador de cabello</li>
						<li>110 V</li>
						<li>Caja de seguridad</li>
						<li>Tabla de planchar y plancha</li>
						<li>Cocineta</li>
						<li>Microondas</li>
					</ul>
				<p class="both">Nuestras suites están divididas en:</p>

 				<p><strong>Jr Suite:</strong> 1 cama queen o 2 camas twin sujeto a disponibilidad, capacidad de 2 personas</p>
 				<p><strong>One bedroom Suite:</strong> 1 cama full y sala de estar , capacidad de 2 personas</p>
 				<p><strong>Family Suite:</strong> Disfruta en familia, 1 cama full + 1 cama twin, capacidad de 3 personas</p>
 				<p><strong>Fitness Suite:</strong> En busca de una estadía saludable? Esta suite está equipada con caminadora, sala de estar y 1 cama full. Capacidad de 2 personas.</p>
 				<p><strong>Media Suite:</strong> Exclusiva de la marca TRYP by Wyndham para nuestros fanáticos de la tecnología contamos con una suite diseñada con plasma de 55” y  teatro en casa, 1 cama full y sala de estar. Capacidad de 2 personas
</p>
 
 
 
 </p>
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