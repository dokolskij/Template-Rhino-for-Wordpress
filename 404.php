<?php get_header(); ?>
<div id="content">
	<div class="castomAside">
		<nav id="leftMenu">
			<?php wp_nav_menu(['container'=>'nav',  
			'container_id'=>'leftMenu', 
			'theme_location'=>'aside']); ?>
		</nav>
		<?php get_sidebar(); ?>	
	</div>
	<section class="singleWrap">
		<h1 class='title'><?php _e('Error 404 - Page Not Found  Ошибка 404', 'rhino'); ?></h1>
		<p><a href="/"><?php _e('To main', 'rhino'); ?></a></p>
	</section>
	<div class="clear"></div>
</div>
<?php get_footer(); ?>  
 


 
