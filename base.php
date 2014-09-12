<?php ss_get_template_part( 'templates/head' ); ?>
<body <?php body_class(); ?>>
<a href="#content" class="sr-only"><?php _e( 'Skip to main content', 'stachestack' ); ?></a>
<?php global $ss_framework; ?>

	<!--[if lt IE 8]>
		<?php echo $ss_framework->alert( 'warning', __(' You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'stachestack' ) ); ?>
	<![endif]-->

	<?php do_action( 'get_header' ); ?>

	<?php do_action( 'stachestack_pre_top_bar' ); ?>

	<?php ss_get_template_part( apply_filters( 'stachestack_top_bar_template', 'templates/top-bar' ) ); ?>

	<?php do_action( 'stachestack_pre_wrap' ); ?>

	<?php echo $ss_framework->open_container( 'div', 'wrap-main-section', 'wrap main-section' ); ?>

		<?php do_action( 'stachestack_pre_content' ); ?>

		<div id="content" class="content">
			<?php echo $ss_framework->open_row( 'div', null, 'bg' ); ?>

				<?php do_action( 'stachestack_pre_main' ); ?>

				<main class="main <?php stachestack_section_class( 'main', true ); ?>" <?php if ( is_home() ) { echo 'id="home-blog"'; } ?> role="main">
					<?php include stachestack_template_path(); ?>
				</main><!-- /.main -->

				<?php do_action( 'stachestack_after_main' ); ?>

				<?php if ( stachestack_display_primary_sidebar() ) : ?>
					<aside id="sidebar-primary" class="sidebar <?php stachestack_section_class( 'primary', true ); ?>" role="complementary">
						<?php if ( ! has_action( 'stachestack_sidebar_override' ) ) {
							include stachestack_sidebar_path();
						} else {
							do_action( 'stachestack_sidebar_override' );
						} ?>
					</aside><!-- /.sidebar -->
				<?php endif; ?>

				<?php do_action( 'stachestack_post_main' ); ?>

				<?php if ( stachestack_display_secondary_sidebar() ) : ?>
					<aside id="sidebar-secondary" class="sidebar secondary <?php stachestack_section_class( 'secondary', true ); ?>" role="complementary">
						<?php dynamic_sidebar( 'sidebar-secondary' ); ?>
					</aside><!-- /.sidebar -->
				<?php endif; ?>
				<?php echo $ss_framework->clearfix(); ?>
			<?php echo $ss_framework->close_row( 'div' ); ?>
		</div><!-- /.content -->
		<?php do_action( 'stachestack_after_content' ); ?>
	<?php echo $ss_framework->close_container( 'div' ); ?><!-- /.wrap -->
	<?php

	do_action( 'stachestack_pre_footer' );

	if ( ! has_action( 'stachestack_footer_override' ) ) {
		ss_get_template_part( 'templates/footer' );
	} else {
		do_action( 'stachestack_footer_override' );
	}

	do_action( 'stachestack_after_footer' );

	wp_footer();

	?>
</body>
</html>
