<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="page-blog">
	<div class="navbar">
		<div class="container">
			<div class="submenu-title">
				<a href="">blog</a> 
				<span><?php wp_title('', true); ?></span>
			</div>
			<div class="menu-container">
				<ul class="menu">
					<li><a href="">Mais lidos</a></li>
					<li><a href="">Mais recentes</a></li>
					<li><a href="">Negócios</a></li>
					<li><a href="">Tecnologia</a></li>
				</ul>
				<div class="menu-search">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</div>