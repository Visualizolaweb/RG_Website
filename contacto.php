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

	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
		var map;
		function initialize() {
		  var myLatLng = new google.maps.LatLng( 8.982199116177858, -79.50952061349182);
		  var mapOptions = {
		    zoom: 15,
		    center: new google.maps.LatLng( 8.9844929, -79.5184,15),
		     disableDefaultUI: true
		  };
		  map = new google.maps.Map(document.getElementById('map-canvas'),
		      mapOptions);
		   	  var marker = new google.maps.Marker({ 
			      position: myLatLng,
			      map: map
			});
	}


		google.maps.event.addDomListener(window, 'load', initialize);

    </script>
</head>
<body >
	<section id="wrapper">
		<header> 
			<?php include("_includes/menu.php");?>

	 	</header>  
	 	<div id="map-canvas"></div>
		<article id="content_hotel">
			<div class="bgform">
				<h4>DEJA TU COMENTARIO!</h4>
			<form name="contact" id="contact" method="post" action="send-contact.php">
				
				<select name="interes" id="interes">
                    <option value="">Interesado en: </option>
                    <option value="01">Casa Grande Bambito</option>
                    <option value="02">Tryp Coronado</option>
                    <option value="03">Wyndham Grand Playa Balnca</option>
                    <option value="04">Wyndham Playa Corona Resort</option>
                </select><br>
				<input type="text" name="nombre" id="nombre" placeholder="Nombre"><br>
				<input type="text" name="apellidos" id="apellidos" placeholder="Apellidos"><br>
				<input type="text" name="correo" id="correo" placeholder="Correo Electrónico"><br>
				
                <input type="text" name="asunto" id="asunto" placeholder="Asunto"><br>
                <textarea name="mensaje" id="mensaje" placeholder="mensaje"></textarea><br>
                <input type="submit" name="enviar" value="Enviar">
			</form>
			</div>
			

			<div class="content_form">
 				<img src="_assets/_Images/contact.jpg">
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