<?php 

    //require_once('function/carrito.php');
    register_nav_menus(array('menu' => 'Menu superior',));
	add_image_size('list_articles_thumbs', 260, 238, true);//thumb post
	add_theme_support('post-thumbnails');//thumb post
	add_theme_support( 'custom-header' );//logo header
	//require_once('/function/carrito.php');
	//add_image_size('slider_thumbs', 980, 400, true); slider auto admin

	include TEMPLATEPATH . '/function/carrito.php';
	//include TEMPLATEPATH.'/function/contacto.php';
add_theme_support ('custom-background');//fondo

?>