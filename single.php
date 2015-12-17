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
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
					<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<h2> <?php the_title(); ?> </h2>
						<div class="meta">
						    <em><?php _e('Posted on', 'rhino'); ?>:</em> <?php the_time('j-m-Y') //отображает когда запись была добавлена?>
						     <?php echo '<em>'.__('by','rhino').' </em>'; the_author(); ?>
						</div>
						<div class="entry">
							<?php the_content(); ?>
						</div>
						<div class="postmetadata">
						    <?php the_tags('Tags: ', ', ', '<br />'); ?>
						    <?php echo __('Posted in', 'rhino').': '; the_category(', ') //категория?>
						</div> 
						<?php comments_template(); ?>
					</article>
			<?php endwhile; ?>	
			<?php else : ?>
			<h2><?php _e('Not found', 'rhino'); ?></h2>
		<?php endif; ?>
	</section>
	<div class="clear"></div>
</div>
<?php get_footer(); ?>  