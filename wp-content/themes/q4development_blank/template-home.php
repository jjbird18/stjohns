<?php /* Template Name: Home */ get_header(); ?>
    <div class="header_content">
      <h1><?php the_field('header_text'); ?>
		<span><?php the_field('subheader_text'); ?></span></h1>
    </div>
 

  <!-- About Section -->
  <section id="home-intro">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 mx-auto text-center">
			<p class="section_heading">Join us in planting a traditional Anglican Church in Canton, Ohio.</p>
        </div>
      </div>
	  </div>
</section>
<section id="home-about" style="background-image:url('<?php the_field('home_about_background_image'); ?>'); background-size:cover; background-position:center center;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 mx-auto text-center">
          		<h2>Who We Are</h2>
          		<hr class="dash">
				<p><?php the_field('home_about_narrative'); ?></p>
				<a href="/who-we-are" class="home_btn">Learn More</a>
        		</div>
			</div>
	  </div>
</section>
<section id="home-anglican">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<img src="<?php the_field('left_column_image');?>" alt="St Johns Sermon" />
			</div>
			<div class="col-sm-4">
				<h3>Where </h3>
				<p><?php the_field('home_where_narrative'); ?></p>
				<h3>When</h3>
				<p><?php the_field('home_when_narrative'); ?></p>
			    <h3>What to expect</h3>
				<p><?php the_field('home_expect_narrative'); ?></p>
		</div>
	</div>
	</div>
 </section>
<div class="home_banner">
	<div class="content_wrapper">
		<h1>Want to find out more?</h1>
		<div class="home_btn_wrap">
			<a href="contact-us">Contact Us</a>
		</div>
	</div>
</div>
<?php get_footer(); ?>

