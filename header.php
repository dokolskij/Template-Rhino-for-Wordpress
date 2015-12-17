<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta charset="UTF-8">
	<title>
		<?php
			global $page, $paged;
			wp_title( '|', true, 'right' );
			bloginfo( 'name' );
			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) )
				echo " | $site_description";
			if ( $paged >= 2 || $page >= 2 )
				echo ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );
		?>
	</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script('comment-reply'); ?>
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>

</head>

<body>
	<header>
		<div id="headerTop"></div>
		<div id="headerBottom">
			<div id="headerBottomLeft"><p>С Новым<br>Годом!</p></div>
			<div id="headerBottomRight"></div>
		</div>
		<div id="navTopPanel">
				<?php wp_nav_menu(array('container'=>'nav',
				'container_id'=>'headerMenu', 
				'theme_location'=>'top')); ?>
			<div id="search">
				<?php get_search_form(); ?> 
			</div>
			<div class="clear"></div>
		</div>
	</header>