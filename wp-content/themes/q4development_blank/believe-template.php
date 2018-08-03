<?php /* Template name: What Do We Believe*/ get_header(); ?>
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
<section id="believe-bottom">
	<div class="container">
		<div class="row">
			<div id="believe-script" class="col-sm-7">
			 <p><?php the_field('middle_narrative')?></p>
			</div>
			<div class="col-sm-5">
				<img src="<?php the_field('right_column_image')?>" alt="Hand holding cross" />
			</div>
		</div>
	</div>
<div class="container">
	<div class="row">
		<?php if( have_rows('believe_elements_list') ): ?>
			
			<?php while ( have_rows('believe_elements_list') ) : the_row(); ?>
	<div class="col-md-6 col-sm-12">
		<div class="element_left">
			<div class="element"><p><?php the_sub_field('element_number'); ?></p></div>
			<div class="element_data"><p><?php the_sub_field('element_narrative_'); ?></p></div>
		</div>
	</div>
	 <?php endwhile; ?>
		
	 <?php endif; ?>
</div>
	<div class="row">
		<div id="last_p" class="col-lg-12 mx-auto text-center">
				<?php if( have_rows('bottom_narrative') ): ?>
			
			<?php while ( have_rows('bottom_narrative' ) ) : the_row(); ?>
	
				<p><?php the_sub_field('bottom_narrative_paragraph'); ?></p>
	 <?php endwhile; ?>
	 <?php endif; ?>	
	</div>
	</div>
</section>
<?php get_footer(); ?>