<?php get_header(); ?>

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>


				<?php edit_post_link(); ?>

		<?php endwhile; ?>

		<?php else: ?>

				<h2><?php _e( 'Sorry, nothing to display.', 'q4development' ); ?></h2>


		<?php endif; ?>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
