<?php /* Template name: Who We Are*/ get_header(); ?>
<div class="header_content">
      <h1><?php the_title(); ?></h1>
    </div>
<section id="page-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 mx-auto text-center">
				<p><?php the_field('top_narrative')?></p>
			</div>
		</div>
	</div>
</section>
<section id="our-logo">
	 <div style="background: #F4F3F8;" class="container-fluid">
		 <div class="container">
		 <div class="row">
			  <div class="col-lg-3 col-right">
				<img alt="St John's Logo" class="img-responsive col-logo" src="<?php echo get_home_url(); ?>/images/St_Johns_logo2.png"> 
			 </div>
			 <div class="col-lg-9">
				 	<h1 class="logo-title">What is the meaning of our logo?</h1>
    			<p><?php the_field('left_logo_narrative') ?></p>
			 </div>
		 </div>
		</div>
	</div>
</section>
  <section class="about-angel" id="about-angel">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h2>What is Anglicanism?</h2>
		<?php if( have_rows('anglican_narrative') ): ?>
		<?php while ( have_rows('anglican_narrative' ) ) : the_row(); ?>
			<p><?php the_sub_field('anglican_paragraph_text'); ?></p>
		<?php endwhile; ?>
	 	<?php endif; ?>	
       </div>
        <div class="col-md-5 ">
          <div class="img-aboutus">
          <img alt="Anglican Photo 1" src="<?php the_field('anglican_image_1')?>" alt="" class="img-responsive img-rounded" />
          <img  alt="Anglican Photo 2" src="<?php the_field('anglican_image_2')?>" alt="" class="img-responsive bottom-image img-rounded" />
          </div>
        </div>
      </div>
    </div>
  </section>
<section id="clergy-bios">
	<div class="container">
		<div class="title">
			<h1>Our Team</h1>
		</div>
			<?php if( have_rows('clergy') ): ?>
			<?php 
			$count = 0;
			while ( have_rows('clergy' ) ) : the_row(); 
			if ($count % 2 === 0) :
			?>
			<div style="padding:15px 0;border-bottom:2px solid #000;" class="row">
				<div class="col-lg-5 col-md-6 col-sm-12">
					<img class="img-responsive img-rounded" alt="Bio Image" src="<?php the_sub_field('bio_image')?>" />
				</div>
				<div class="col-lg-7 col-md-6 col-sm-12">
					<h1 class="clergy_name"><?php the_sub_field('clergy_name'); ?></h1>					
					<h2><?php the_sub_field('clergy_title'); ?></h2>
					<p><?php the_sub_field('clergy_bio'); ?></p>
					<h4>Additional Information:</h4>
					<?php if( have_rows('bio_links') ): ?>
					<?php while ( have_rows('bio_links') ) : the_row(); ?>
					<a target="_blank" href="<?php the_sub_field('our_team_links'); ?>"><?php the_sub_field('our_team_links'); ?></a>
				 <?php endwhile; ?>
	 			<?php endif; ?>
				</div>
			</div>
		<?php else: ?>
		<div style="padding:40px 0;" class="row">
				<div class="col-lg-7 col-md-6 col-sm-12">
					<h1 class="clergy_name"><?php the_sub_field('clergy_name'); ?></h1>
					<h2><?php the_sub_field('clergy_title'); ?></h2>
					<p><?php the_sub_field('clergy_bio'); ?></p>
					<h4>Additional Information:</h4>
					<?php if( have_rows('bio_links') ): ?>
					<?php while ( have_rows('bio_links') ) : the_row(); ?>
					<a target="_blank" href="<?php the_sub_field('our_team_links'); ?>"><?php the_sub_field('our_team_links'); ?></a>
				 <?php endwhile; ?>
	 			<?php endif; ?>
				</div>
				<div class="col-lg-5 col-md-6 col-sm-12">
					<img alt="Bio Image" class="img-responsive img-rounded" src="<?php the_sub_field('bio_image')?>" />	
				</div>
			</div>	
		<?php endif; ?>
		<?php
		$count++;
		endwhile;
		endif; ?>			
	</div>
</section>
<?php get_footer(); ?>