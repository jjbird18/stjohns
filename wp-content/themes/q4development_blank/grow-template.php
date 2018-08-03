<?php /* Template name: Grow with us */ get_header(); ?>
    <div class="header_content">
      <h1><?php the_title(); ?></h1>
    </div>

<section id="page-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 mx-auto text-center">
			<p><?php the_field('top_narrative') ?></p>
			</div>
		</div>
	</div>
</section>
<section style="background-image: url(<?php the_field('our_plan_background_image')?>" id="game-plan">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 mx-auto text-center">
				<div class="background-filter">
					<h2>Our Plan</h2>
					<?php if( have_rows('our_plan_narrative') ): ?>
			
			<?php while ( have_rows('our_plan_narrative' ) ) : the_row(); ?>
			<p><?php the_sub_field('our_plan_paragraphs'); ?></p>
	 		<?php endwhile; ?>
	 		<?php endif; ?>	
				</div>
			</div>
		</div>
	</div>
</section>
<div class="grow-banner">
	<div class="content_wrapper">
		<h1>You may give online here: </h1>
		<div class="grow-btn-wrap">
			<a href="https://stjohnsanglican.breezechms.com/give/online" target="_blank">Click Here</a>
		</div>
	</div>
</div>

<?php get_footer(); ?>