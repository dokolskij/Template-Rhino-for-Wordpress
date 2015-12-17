<div class="widget-area">
	<?php if ( ! dynamic_sidebar( 'Sidebar Widgets' ) ) : ?>
		<aside id="search" class="widget">
			<?php get_search_form(); // поле поиска и кнопка?> 
		</aside>
		<aside id="archives" class="widget">
			<h3 class="widget-title">Archives</h3>
			<ul>
				<?php wp_get_archives('type=monthly&limit=12'); //12 последних архивов по месяцам?>
			</ul>
		</aside>
	<?php endif; // end sidebar widget area ?>
</div>