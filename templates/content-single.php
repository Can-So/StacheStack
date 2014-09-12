<?php

global $ss_framework;

while ( have_posts() ) : the_post();

	echo '<article class="' . implode( ' ', get_post_class() ) . '">';
		do_action( 'stachestack_single_top' );
		stachestack_title_section();
		do_action( 'stachestack_entry_meta' );

		echo '<div class="entry-content">';
			do_action( 'stachestack_single_pre_content' );
			the_content();
			echo $ss_framework->clearfix();
			do_action( 'stachestack_single_after_content' );
		echo '</div>';

		echo '<footer>';
			stachestack_meta( 'cats' );
			stachestack_meta( 'tags' );
			wp_link_pages( array(
				'before' => '<nav class="page-nav"><p>' . __('Pages:', 'stachestack'),
				'after'  => '</p></nav>'
			) );
		echo '</footer>';

		// The comments section loaded when appropriate
		if ( post_type_supports( 'post', 'comments' ) ) {
			do_action( 'stachestack_pre_comments' );

			if ( ! has_action( 'stachestack_comments_override' ) ) {
				comments_template( '/templates/comments.php' );
			} else {
				do_action( 'stachestack_comments_override' );
			}

			do_action( 'stachestack_after_comments' );
		}

		do_action( 'stachestack_in_article_bottom' );
	echo '</article>';
endwhile;
