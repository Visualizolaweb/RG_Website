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

	<!-- Load Jquery -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>

	<!-- Load Slider with Responsive -->
	<script src="http://unslider.com/unslider.min.js"></script>
 
</head>
<body>
	<section>
		<header> 
			<?php include("_includes/menu.php");?>
		 		<div class="label"><img src="_assets/_Images/Hotels/WGPlaya_blanca/logotype-label.png" alt="Enter Site Wyndham Gran Playa Blanca"></div>
				<div class="banner">
				 <ul>
			        <li style="background-image:url('_assets/_Images/Hotels/WGPlaya_blanca/1.jpg')">  </li> 
			    		<li style="background-image:url('_assets/_Images/Hotels/WGPlaya_blanca/2.jpg')">  </li> 
			    		<li style="background-image:url('_assets/_Images/Hotels/WGPlaya_blanca/3.jpg')">  </li> 
			    		<li style="background-image:url('_assets/_Images/Hotels/WGPlaya_blanca/4.jpg')">  </li> 
			   </ul>
				</div>
	 	</header>	
		<article id="buttons_hotels">
			<ul>
			 	<a href="#">
					<li id="btn_casagrande">
						<img src="_assets/_Images/Hotels/CASA_GRANDE/fadebutton_2.jpg" class="bottom"/>
						<img src="_assets/_Images/Hotels/CASA_GRANDE/fadebutton_1.jpg" class="top"/>
					</li>
				</a>

				<a href="#">
					<li id="btn_trypcoronado">
						<img src="_assets/_Images/Hotels/TRYPCORONADO/fadebutton_2.jpg" class="bottom"/>
						<img src="_assets/_Images/Hotels/TRYPCORONADO/fadebutton_1.jpg" class="top"/>
					</li>
				</a>

				<a href="#">
					<li id="btn_wgcorona">
						<img src="_assets/_Images/Hotels/WGCORONA/fadebutton_2.jpg" class="bottom"/>
						<img src="_assets/_Images/Hotels/WGCORONA/fadebutton_1.jpg" class="top"/>
					</li>
				</a>
			</ul>
		</article>
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