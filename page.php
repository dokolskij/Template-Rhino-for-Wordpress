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
	<section class="pageWrap">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
					<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<h2> <?php the_title(); ?> </h2>
						<div class="entry">
							<?php the_content(); ?>
						</div>
					</article>
			<?php endwhile; ?>	
			<?php else : ?>
			<h2><?php _e('Not found','rhino'); ?></h2>
		<?php endif; ?>
	</section>
	<div class="clear"></div>
</div>
<?php get_footer(); ?>  