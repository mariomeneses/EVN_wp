<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class=""> <!--<![endif]-->
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link href="<?php bloginfo('template_directory'); ?>/img/logo-250.png" rel="icon" type="image/x-icon" /><!--faltafavicon -->
    <link href="<?php bloginfo('template_directory'); ?>/img/logo-250.png" type="image/x-icon" rel="shortcut icon" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espacio verde natural</title>
    <script src="<?php bloginfo('template_url') ?>/js/jquery-1.11.1.min.js"></script>
    <script src="<?php bloginfo('template_url') ?>/js/script.js"></script>
	<script src="<?php bloginfo('template_url') ?>/js/modernizr.js"></script>
	<script src="<?php bloginfo('template_url') ?>/js/jquery.slides.min.js"></script>
    <link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9 ]>
    <script type="text/javascript" src="js/html5shiv.min.js"></script>
    <script type="text/javascript" src="js/html5shiv-printshiv.min.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
    <![endif]-->

	<!--Facebook Tags-->
	<meta property="og:title" content="Espacio verde natural"/>
	<meta property="og:image" content="img/logo-250.png"/>
	<meta property="og:site_name" content="Espacio verde natural"/>
	<meta property="og:description" content="Espacio verde natural, venta de variados productos"/>	
	<!--Twitter Cards Tags-->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@PONER TWITTER">
	<meta name="twitter:title" content="Espacio verde natural">
	<meta name="twitter:description" content="Espacio verde natural, venta de variados productos">
	<meta name="twitter:creator" content="@PONER TWITTER">
	<meta name="twitter:image:src" content="img/logo-250.png">

	<meta name="description" content="Espacio verde natural, venta de variados productos">
	<meta name="author" content="Espacio verde natural">
	<meta name="keywords" content="venta cremas, venta semillas, semillas, cremas, ropa, vestuario, venta vestuario,  venta ropa, venta fertilizante, fertilizante, cosmetica, semillas feminizadas, feminizadas, semillas automaticas, automaticas, accesorios, vestuario y accesorios, marihuana, cannabis">


<!-- Script GA-->
<!--
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42768469-3', 'auto');
  ga('send', 'pageview');

</script>
-->
<script>
    $(function(){
      $("#slideshow").slidesjs({
        height: 300,
        navigation:false
      });
    });
  </script>
</head>
<?php wp_head(); ?>
<body <?php body_class( $class ); ?>>
		<header class="header">
			<div class="logo">
				<h1><img src="<?php header_image(); ?>" alt="Espacio verde natural"></h1><!-- llamo al logo -->
			</div>
			<div class="cont_color_follow">
				<div class="cont_follow_top">
					<div class="follow_top">
						<div class="sig_top">
		                    SÍGUENOS
		                </div>
		                <div class="redestop"><a href="http://www.twitter.com" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/twitter.png" alt="Twitter"></a><a href="http://www.instagram.com" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/instagram.png" alt="Instagram"></a><a href="http://www.facebook.com" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/facebook.png" alt="Facebook"></a></div>
					</div>
				</div>
			</div>
			<div class="ul_menu">
				<nav class="menu_p">
					<div id="menuGrande">
						<ul>
							<li ><a href="<?php get_home_url(); ?>" id="menu_inicio">INICIO</a></li>
							<li ><a href="" id="menu_quienes">QUIÉNES SOMOS</a></li>
							<li ><a href="<?php echo get_page_link(75); ?>" id="menu_prod">NUESTROS PRODUCTOS</a></li>
							<li ><a href="<?php echo get_page_link(169); ?>" 	id="menu_cont">CONTACTO</a></li>
							<li ><a href="<?php echo get_page_link(88); ?>" id="menu_cond">CONDICIONES DE COMPRA</a></li>
							<li ><a href="<?php echo get_page_link(177); ?>" id="menu_pol">POLÍTICAS DE PRIVACIDAD Y TÉRMINOS DE USO</a></li>
						</ul>
					</div>
					<div id="menuChico">
					<input id="check1" type="checkbox" />
			        <label for="check1">
			            <img src="<?php bloginfo('template_directory'); ?>/img/menu.png" alt="icono">
			        </label>
			        <div class="menu">
						<ul>
							<li ><a href="<?php get_home_url(); ?>" >INICIO</a></li>
							<li ><a href="" >QUIÉNES SOMOS</a></li>
							<li ><a href="<?php echo get_page_link(75); ?>" >NUESTROS PRODUCTOS</a></li>
							<li ><a href="<?php echo get_page_link(169); ?>" 	>CONTACTO</a></li>
							<li ><a href="<?php echo get_page_link(88); ?>" >CONDICIONES DE COMPRA</a></li>
							<li ><a href="<?php echo get_page_link(177); ?>" >POLÍTICAS DE PRIVACIDAD Y TÉRMINOS DE USO</a></li>
						</ul>
					</div>
					</div>
				</nav>
			</div>
			<div class="cont_sesion_top">
				<div class="sesion">
					<a href="registro.php" id="menu_registro">REGISTRO</a>
					<a href="cuenta.php" id="menu_cuenta">MI CUENTA</a>
					<a href="#" id="img_carro" ><img src="<?php bloginfo('template_directory'); ?>/img/carro.png" alt="carro"></a>
					<div id="colorNav">
						<ul>
							<li>
								<?php $carrito = new Carrito(); ?>
								<a href="">CARRO (<?php echo $carrito->articulos_total()?>)</a>
								<?php
									echo '<ul>';
									$carro = $carrito->get_content();
									if($carro){
									    foreach($carro as $producto){
									    	
									        echo '<li><a href="#">'.$producto["cantidad"].' x '.$producto["nombre"].'</a></li>';
									    }
									    
										echo "<li><a>Valor Total: CLP ".number_format($carrito->precio_total(),0,',','.')."</a></li>";
										echo "<li><a><span onclick=\"delall('si')\">Borrar Todo</span></a></li>";
										echo "<li><a href=\"pedido.php\"><button class=\"comprar\">Comprar</button></a></li>";
									}
									echo '</ul>';
								?>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</header>
