<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php do_action( 'di_magazine_the_head' ); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
<?php
if( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}
?>

<!-- Loader icon -->
<?php
if( get_theme_mod( 'loading_icon', '0' ) == 1 ) {
?>
	<div class="load-icon"></div>
<?php
}
?>
<!-- Loader icon Ends -->

<?php get_template_part( 'template-parts/header', 'topbar' ); ?>

<?php get_template_part( 'template-parts/header', 'main' ); ?>

<?php get_template_part( 'template-parts/header', 'menu' ); ?>

<?php get_template_part( 'template-parts/header', 'slider' ); ?>

<?php get_template_part( 'template-parts/header', 'headerimg' ); ?>

<?php
get_template_part( 'template-parts/header', 'front-top' );

get_template_part( 'template-parts/header', 'front-bottom' );
?>


<div id="maincontainer" class="container-fluid mrt20 mrb20 clearfix maincontainer"> <!-- start header div 1, will end in footer -->
	<div class="container"> <!-- start header div 2, will end in footer -->
		<div class="row"> <!-- start header div 3, will end in footer -->
		