<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->

		<!-- post title -->
		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->

		<!-- post details -->
		<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
		<span class="author"><?php _e( 'Published by', 'q4development' ); ?> <?php the_author_posts_link(); ?></span>
		<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'q4development' ), __( '1 Comment', 'q4development' ), __( '% Comments', 'q4development' )); ?></span>
		<!-- /post details -->

		<?php q4developmentwp_excerpt('q4developmentwp_index'); // Build your custom callback length in functions.php ?>

		<?php edit_post_link(); ?>

<?php endwhile; ?>

<?php else: ?>

		<h2><?php _e( 'Sorry, nothing to display.', 'q4development' ); ?></h2>

<?php endif; ?>
