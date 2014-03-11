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
				<h3>All Experiences </h3>
			 	<img src="_assets/_Images/Hotels/TRYPCORONADO/cover2.jpg" width="100%">
				<p class="both"> 
				<ul class="listroom">
					<li class="">Piscina </li>
					<li class="">The Top lounge & bar</li>
					<li class="">2 Bares</li>
					<li class="">2 Restaurantes</li>
					<li class="">Wi-fi gratuito </li>
					<li class="">Gym</li>
					<li class="">Servicio de valet parking</li> 
					<li class="">Servicio de botones</li>
					<li class="">Servicio de concierge</li>
					<li class="">Free Shuttle entre Wyndham Grand Playa Blanca y Wyndham Playa Corona</li>
					<li class="">Room service</li>
					<li class="">Taxi $</li>
					<li class="">Lavanderia $</li>
					<li class="">Sala de conferencias $</li>
				</ul>
				</p>
 
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