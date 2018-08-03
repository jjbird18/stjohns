<?php get_header(); ?>

			<h1><?php _e( 'Tag Archive: ', 'q4development' ); echo single_tag_title('', false); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
