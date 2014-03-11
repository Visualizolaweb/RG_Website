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
		 		<div class="banner">
				 	<ul>
				        <li style="background-image:url('_assets/_Images/Hotels/WGPlaya_blanca/1.jpg')">  </li> 
			    		<li style="background-image:url('_assets/_Images/Hotels/WGPlaya_blanca/9.jpg')">  </li> 
			    		<li style="background-image:url('_assets/_Images/Hotels/WGPlaya_blanca/8.jpg')">  </li> 
			    		<li style="background-image:url('_assets/_Images/Hotels/WGPlaya_blanca/7.jpg')">  </li>
			    		<li style="background-image:url('_assets/_Images/Hotels/WGPlaya_blanca/6.jpg')">  </li> 
			    		<li style="background-image:url('_assets/_Images/Hotels/WGPlaya_blanca/5.jpg')">  </li> 
			   		</ul>
				</div>
				<div class="logohotel">
					<img src="_assets/_Images/cabezote-logo-pb-corona.png">
				</div>
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
						<a href="hotel-wyndhamgrand-playa-corona-galeria.php"><li>GALERIA</li></a>	
					</ul>
				</nav>	
			 </header>
			 

			 <div id="rooms" class="rooms">

				<H2>Breath, Eat, Feel… Wyndham Moments</H2>
				<h3>NUESTRAS HABITACIONES</h3>
			 	<img src="_assets/_Images/Hotels/WGPlaya_blanca/rooms/cover3.jpg" width="100%">
				<p class="both">	</br>Descanse de la rutina en nuestros amplios balcones donde el escenario son las vistas impresionantes del mar, con el ruido de las olas a lo lejos y el color naranja de nuestros atardeceres. Adicional encontrará:</p>

					<ul class="listroom">
						<li>Balcón privado </li>
						<li>Sala </li>
						<li>32” y 42” LCD HD</li>
						<li>His and Her Sinks</li>
						<li>Batas con pantuflas de baño</li>
						<li>Kitchennette </li> 
					</ul>
				<p class="both">Las familias grandes, encontraran la solución de acomodación perfecta en nuestras Family Suites con más de 90 m2 y capacidad hasta 6 personas. Cuenta con una cama King y 2 camas full.</p>


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