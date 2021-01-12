<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<title>EclectricString</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!-- Custom styles for this template -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Barlow:400,500i" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
</head>
<body <?php body_class(); ?>>
<div id="page" class="site" data-target = ".navbar-fixed-top">
			<nav class='navbar navbar-inverse navbar-fixed-top navbar-light bg-light' style="background-color: rgba(255,255,255,.3);">
        <div class='container-fluid'>
          <div class="navbar-header">
            <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
              <span class='icon-bar'></span>
              <span class='icon-bar'></span>
              <span class='icon-bar'></span>
            </button>
          </div>
          <div class='collapse navbar-collapse' id="myNavbar">
            <ul class='nav navbar-nav ml-auto navbar-right wrapper'>
              <li><a class="sixth before after" href="/">Home</a></li>
              <li><a class="sixth before after"href="index.php">Blog</a></li>
              <li><a class="sixth before after"href="/views/lessons.php">Lessons</a></li>
              <li><a class="sixth before after"href="/views/reviews.php">Reviews</a></li>
              <li><a class="sixth before after"href="#contact">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
		</header><!-- .site-header -->
		<div id="content" class="site-content">
