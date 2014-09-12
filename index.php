<header>
	<title><?php echo stachestack_title(); ?></title>
	<h1 class="entry-title"><?php echo stachestack_title(); ?></h1>
</header>

<?php

do_action( 'stachestack_index_begin' );

if ( ! have_posts() ) {
	echo '<div class="alert alert-warning">' . __( 'Sorry, no results were found.', 'stachestack' ) . '</div>';
	get_search_form();
}

if ( ! has_action( 'stachestack_override_index_loop' ) ) {
	while ( have_posts() ) : the_post();
		do_action( 'stachestack_in_loop_start' );

		if ( ! has_action( 'stachestack_content_override' ) ) {
			ss_get_template_part( 'templates/content', get_post_format() );
		} else {
			do_action( 'stachestack_content_override' );
		}

		do_action( 'stachestack_in_loop_end' );
	endwhile;
} else {
	do_action( 'stachestack_override_index_loop' );
}

do_action( 'stachestack_index_end' );

echo stachestack_pagination_toggler();
