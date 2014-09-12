<?php

global $ss_framework;

while ( have_posts() ) : the_post();
	stachestack_title_section();
	do_action( 'stachestack_entry_meta' );
	do_action( 'stachestack_page_pre_content' );
	the_content();
	echo $ss_framework->clearfix();
	stachestack_meta( 'cats' );
	stachestack_meta( 'tags' );
	do_action( 'stachestack_page_after_content' );

	wp_link_pages( array( 'before' => '<nav class="pagination">', 'after' => '</nav>' ) );
endwhile;
