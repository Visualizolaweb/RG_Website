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

				<h3>NUESTROS RESTAURANTES</h3>
			 	<img src="_assets/_Images/Hotels/TRYPCORONADO/cover.jpg" width="100%">
				<p class="both">	</br>Invitamos a su paladar a experimentar un viaje por el mundo con la oferta gastronómica de nuestros restaurantes. </p>

			  <div class="both "></br>
				<div class="roomprev"> 
					<img src="_assets/_Images/Hotels/TRYPCORONADO/restaurante1.jpg"> 
				</div>
				<div class="textorestaurante">
					<h2>BITES TAPAS BAR</h2> 
					<p >ubicado en el lobby del hotel, encontrarás una selección de tapas inspiradas en la gastronomía española y otras especialidades. Boquitas elaboradas con ingredientes de la mejor calidad para complementar unos tragos en compañía de buenos amigos.</p>
					<ul class="listroom">
						<li>Desayunos 7:00 a.m. a 10:00 a.m</li>
						<li>Servicio Regular 12:00 p.m a 10:00 p.m</li>
					</ul>
				</div>
			  </div>
 
 			  <div class="both"></br>
				<div class="roomprev"> 
					<img src="_assets/_Images/Hotels/TRYPCORONADO/restaurante2.jpg"> 
				</div>
				<div class="textorestaurante">
					<h2>CABANA POOL BAR</h2> 
					<p >ubicado en el área de la piscina. Aquí los atenderemos con nuestro amable equipo, donde podrán probar nuestros refrescantes cocteles, especialmente preparados para usted, con los mejores licores del mercado y deliciosos snacks bajo el sol.</p>
					<ul class="listroom">
						<li>Horario:  10:00 a.m. a 8:00 p.m. </li> 
					</ul>
				</div>
			  </div>
 
 			  <div class="both"></br>
				<div class="roomprev"> 
					<img src="_assets/_Images/Hotels/TRYPCORONADO/restaurante3.jpg"> 
				</div>
				<div class="textorestaurante">
					<h2>DOWNTOWN CAFE</h2> 
					<p >El buffet de desayuno es servido en el Downtown Café, un delicioso surtido de platos clásicos del desayuno, variedad de frutas, panes, huevos en diferentes preparaciones y más, harán su despertar delicioso e inolvidable.</p>
					<p>Downtown Café también abre en los horarios de almuerzo y cena, con un menú moderno, de comida descomplicada y deliciosa. Hamburguesas, hot dogs, quesadillas y nachos, helados, malteadas, sundaes y cheesecakes, son algunos de los platos que tendremos.</p>
					<ul class="listroom">
						<li>Desayunos de 7:00 a.m. a 10:00 a.m.</li><li> Servicio regular de 12:00 md a 10:00 p.m.</li>
					</ul>
				</div>
			  </div> 
 
 			  <div class="both"></br>
				<div class="roomprev"> 
					<img src="_assets/_Images/Hotels/TRYPCORONADO/restaurante4.jpg"> 
				</div>
				<div class="textorestaurante">
					<h2>THE TOP BAR</h2> 
					<p >Ubicado bajo el cielo de Coronado, este Bar es uno de los lugares mas especiales donde puedan disfrutar de una coctelería de autor y licores de las mejores marcas del mundo. Con vista al mar Pacífico, en un ambiente cómodo y acogedor, entre plantas exóticas y una vista espectacular, música y DJs. Sencillamente, no se lo pueden perder!</p>
				
					<ul class="listroom">
						<li>Horario: 5:00 p.m. a 2:00 a.m. (Jueves, Viernes, Sábados)	</li>
					</ul>
				</div>
			  </div>

 
 			  <div class="both"></br>
				<div class="roomprev"> 
					<img src="_assets/_Images/Hotels/TRYPCORONADO/restaurante5.jpg"> 
				</div>
				<div class="textorestaurante">
					<h2>DRAGON ASIAN BISTRO</h2> 
					<p> encuentra una variedad de platos representativos de Thailandia, Vietnam, Japón, China y otros lugares emblemáticos de la cocina asiática.</p>
				
					<ul class="listroom">
						<li>Horarios de 12:00 p.m  a 10:00 p.m. Todos los días</li>
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