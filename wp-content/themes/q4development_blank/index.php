<?php get_header(); ?>

			<h1><?php _e( 'Latest Posts', 'q4development' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
