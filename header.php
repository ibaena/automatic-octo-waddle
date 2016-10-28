<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Feverall
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site outer-container">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'feverall' ); ?></a>

	<header id="masthead" class="site-header container" role="banner">
		<div class="row" id="sub-main-menu">
			<div class="col-lg-5 col-lg-offset-6 col-sm-8 col-sm-offset-4">
				<!-- ul inline list -->
				<ul class="list-inline">
					<li><a href="/">HOME</a></li>
					<li><a href="#">FAQS</a></li>
					<li><a href="#">RESOURCES</a></li>
					<li><a href="#">WHOLESALE INFO &nbsp; |</a></li>
					<li><a href="#"> ENGLISH</a></li>
					<li><a href="#">SPANISH</a></li>
				</ul>
				<!-- end ul inline list -->
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2 col-lg-offset-1 col-md-2 col-sm-2">
				<a class="navbar-brand" href="/"><img src="http://feverall.dev/wp-content/uploads/2016/10/logo.png" alt="Feverall" id="brand-logo-nav" class="img-responsive"/></a>
			</div>
	<nav id="site-navigation" class="navbar navbar-default col-xs-12 col-sm-8" role="navigation">
		<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
					<li class=""><a href="/products">PRODUCTS <span class="sr-only">(current)</span></a></li>
						<li><a href="#">DOSAGE AND LABELING </a></li>
						<li><a href="#">WHY FEVERALL</a></li>
						<li><a href="#">PROMOTIONS</a></li>
						<li><a href="#">WHERE TO BUY</a></li>
					</ul>
					<ul class="nav navbar-nav">

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HEALTHCARE PROFESIONALS <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">PEDIATRIC CARE</a></li>
								<li><a href="#">ADULT CARE</a></li>
								<li><a href="#">FAQS FOR HEALTHCARE PROFESIONALS ONLY</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
	</nav><!-- #site-navigation -->
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content ">
