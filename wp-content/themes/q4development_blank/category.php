<?php get_header(); ?>

			<h1><?php _e( 'Categories for ', 'q4development' ); single_cat_title(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
