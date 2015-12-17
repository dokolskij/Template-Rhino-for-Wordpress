<?php

    add_action('after_setup_theme', 'true_load_theme_textdomain');
    function true_load_theme_textdomain(){
        load_theme_textdomain( 'rhino', get_template_directory() . '/languages' );
    }

    register_nav_menus( array(
        'top' => 'Главное меню хедера',
        'aside' => 'Меню сайдбара'
    ) );

	if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'Widgets for the sidebar.',
    		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</aside>',
    		'before_title'  => '<h3>',
    		'after_title'   => '</h3>'
    	));
    }

    function new_excerpt_more($more) {
        global $post;
        return '... <a href="'. get_permalink($post->ID) . '">Read more</a>';
    }
    add_filter('excerpt_more', 'new_excerpt_more');//меняем ф-ю excerpt_more на ф-ю new_excerpt_more

    function enqueue_comment_reply() {
      if( is_singular() )
        wp_enqueue_script('comment-reply');
    }
    add_action( 'wp_enqueue_scripts', 'enqueue_comment_reply' );
?>