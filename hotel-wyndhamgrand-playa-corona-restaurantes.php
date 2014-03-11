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
						<a href="hotel-wyndhamgrand-playa-corona-galeria.php"><li>GALERIA</li></a>				
					</ul>
				</nav>	
			 </header>
			 

			 <div id="rooms" class="rooms">

				<H2>Breath, Eat, Feel… Wyndham Moments</H2>
				<h3>NUESTROS RESTAURANTES</h3>
			 	<img src="_assets/_Images/Hotels/WGCORONA/rooms/addsrestaurante.jpg" width="100%">
				<p class="both">	</br>¿Reservaciones, códigos de vestimenta, limitaciones? Nada de eso aplica en Wyndham Playa Corona.<br> Siéntase en casa en nuestros restaurantes y bares. </p>

			  <div class="both "></br>
				<div class="roomprev"> 
					<img src="_assets/_Images/Hotels/WGCORONA/rooms/Brisas-buffet.jpg"> 
				</div>
				<div class="textorestaurante">
					<h2>Las Brisas Buffet</h2> 
					<p>Desayuno, Almuerzo y Cena ofreciendo menús internacionales..</p>
					<ul class="listroom">
						<li>Horario: 7:00 am - 10:00 am / 12:00pm - 3:00pm / 7:00pm a 10:00pm </li>
					</ul>
				</div>
			  </div>
 
 			  <div class="both"></br>
				<div class="roomprev"> 
					<img src="_assets/_Images/Hotels/WGCORONA/rooms/Buena-Vista.jpg"> 
				</div>
				<div class="textorestaurante">
					<h2>Buena Vista Rooftop Restaurant & Bar</h2> 
					<p>ofreciendo un menú a la carta tipo grill.</p>
					<ul class="listroom">
						<li>Restaurante: horario de 7:00 pm a 10:00 pm </li>
						<li>Bar: horario de 10:00 am a 1:30 am</li>
					</ul>
				</div>
			  </div>
 
 			  <div class="both"></br>
				<div class="roomprev"> 
					<img src="_assets/_Images/Hotels/WGCORONA/rooms/beach-club-korals.jpg"> 
				</div>
				<div class="textorestaurante">
					<h2>Beach Club Korals</h2> 
					<p>Menú de snack, música, bar y actividades de Playa todo el día.</p>
				
					<ul class="listroom">
						<li>Horario: 10:00 am - 5:00 pm </li>
					</ul>
				</div>
			  </div>
 
 			  <div class="both"></br>
				<div class="roomprev"> 
					<img src="_assets/_Images/Hotels/WGCORONA/rooms/crown-cafe.jpg"> 
				</div>
				<div class="textorestaurante">
					<h2>Crown Cafe (lobby)</h2> 
					<p>Menú de pastelería dulces y salados con variedad de café y té.</p>
				
					<ul class="listroom">
						<li>Horario: 10:00 am - 6:00 pm</li>
					</ul>
				</div>
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