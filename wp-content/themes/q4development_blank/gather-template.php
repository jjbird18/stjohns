<?php /* Template name: Gather with us */ get_header(); ?>
  <div class="header_content">
    <h1><?php the_title(); ?></h1>
  </div>
<section id="gather">
 <div class="container">
	 <div class="row">
		 <div style="border-bottom:2px solid #000;" class="col-lg-12">
		 <h2>Where</h2>
			 <p><?php the_field('where_narrative') ?></p>
	 </div>
	</div>
	 <div class="row">
		 <div style="border-bottom:2px solid #000;" class="col-lg-12">
			 <h2>When</h2>
			 <p><?php the_field('when_narrative') ?></p>
		 </div>
	 </div>
	</div>
</section>
<section id="our-service">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <img alt="Church Service" src="<?php the_field('our_service_column_image')?>">
      </div>
      <div class="col-sm-6">
        <h2>Our Service</h2>
        	<?php if( have_rows('our_service_narrative') ): ?>
			
			<?php while ( have_rows('our_service_narrative' ) ) : the_row(); ?>
	
				<p><?php the_sub_field('service_paragraph'); ?></p>
	 <?php endwhile; ?>
	 <?php endif; ?>	
      </div>
    </div>
  </div>
</section>

<section style="background-image: url(<?php the_field('what_to_expect_background_image')?>" id="expect-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 mx-auto text-center">
        <div class="background-filter">
          <h2>What to expect</h2>
          <p><?php the_field('what_to_expect_narrative'); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>