<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fragans
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!--CUSTOM CSS-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/assets/css/styles.css">
	<!--CUSTOM FONTS-->
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Serif:300,400,700" rel="stylesheet">
	<!--CUSTOM SYMBOL-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="app" class="site">


<nav class="flex items-center justify-between flex-wrap bg-black p-2 fixed pin-t overflow-hidden w-full">
	<div class="flex items-center flex-no-shrink text-white mr-6 ">
		<a href="/" >
			<svg class="text-white fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
		</a>
		<div class="text-white"><?php echo date("l, ") . date("d M Y") ?></div>	
	</div>
	
	<div class="block lg:hidden">
		<button class="flex items-center px-3 py-2 border rounded text-teal-lighter border-grey-300 text-white hover:border-white">
		  <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
		</button>
	</div>
	<div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto xs:hidden"">
		<div class="text-sm lg:flex-grow >
		  <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-grey hover:text-white font-medium mr-4">Docs</a>
		  <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-grey hover:text-white font-medium mr-4">Examples</a>
		  <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-grey hover:text-white font-medium">Blog</a>
		</div>
	</div>
</nav>

	

<!--LOGO KORAN-->
<section class=" text-center mt-8" id="brand"> 
    <div class="container mx-auto  flex justify-center">
        <div class="flex items-center flex-no-shrink text-white p-4">
			<a href="/"><h1 class="text-black logo-brand ">Hello World</h1><a/>
		</div>
    </div>
</section>

<section id="subtitle" class="pb-8">
	<div class="text-black font-sm text-center align-middle">
		<svg class="fill-current h-6 w-6 mr-2 " width="24" height="24" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
		<span class="tracking-wide bg-black text-white py-1 px-4 uppercase" >Koran Online</span>
		<svg class="fill-current h-6 w-6 mr-2 " width="24" height="24" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
	</div>
</section>
<!--MENU BELT-->
<section class=" text-center ">
    <div class="container mx-auto border-b-4 border-t-2 border-black xs:hidden lg:block">
        <?php wp_nav_menu(array(
        'menu'=> 'primary-menu',
        'container' => 'ul',
		'container_class' => 'pr-4',
		'menu_class' => 'list-reset flex justify-center text-base uppercase',
        )) ?>
    </div>
    <div class="container mx-auto border-b-2 border-black lg:block"></div>
    
</section>

