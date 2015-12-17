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
	<section>
	<h2><?php _e('Results','rhino'); ?>:</h2>
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="search_result">
					<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<h2><a href="<?php the_permalink() ?>"> <?php the_title(); ?> </a></h2>
						<div class="meta">
						     <?php '<em>'.__('Posted on').':</em>'; the_time('j-m-Y '); _e(' at ', 'rhino'); the_time(' G:i'); //отображает когда запись была добавлена?>
						    <em><?php _e('by', 'rhino');?></em> <?php the_author() ?>
						</div>
						<div class="entry">
							<?php the_content(__('More','rhino')); ?>
						</div>
					</article>
				</div>
			<?php endwhile; ?>

			<?php $args = [
			 'show_all' => false, 'prev_next' => true, 'end_size' => 1, 'mid_size' => 1, 'before_page_number' => '',
			 'after_page_number' => '', 'prev_text' => '&#60;', 
			 'next_text' => '&#62;', 'screen_reader_text' => __( 'Posts pavigation', 'rhino' )];
			 the_posts_pagination($args); ?>

			<?php else : ?>
			<h2> <?php _e('Not found', 'rhino'); ?> </h2>
		<?php endif; ?>
	</section>
	<div class="clear"></div>
</div>
<?php get_footer(); ?>  