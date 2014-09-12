<?php
/**
 * Register sidebars and widgets
 */
function stachestack_widgets_init() {
	$class        = apply_filters( 'stachestack_widgets_class', '' );
	$before_title = apply_filters( 'stachestack_widgets_before_title', '<h3 class="widget-title">' );
	$after_title  = apply_filters( 'stachestack_widgets_after_title', '</h3>' );

	// Sidebars
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'stachestack' ),
		'id'            => 'sidebar-primary',
		'before_widget' => '<section id="%1$s" class="' . $class . ' widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => $before_title,
		'after_title'   => $after_title,
	));

	register_sidebar( array(
		'name'          => __( 'Secondary Sidebar', 'stachestack' ),
		'id'            => 'sidebar-secondary',
		'before_widget' => '<section id="%1$s" class="' . $class . ' widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => $before_title,
		'after_title'   => $after_title,
	));
}
add_action( 'widgets_init', 'stachestack_widgets_init' );