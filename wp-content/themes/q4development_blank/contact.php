<?php /* Template name: Contact us*/ get_header(); ?>
<div class="header_content">
    <h1><?php the_title(); ?></h1>
  </div>
<section id="contact">
	<div class="title">
	<h1>Get in Touch</h1>
	</div>
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-5 col-sm-12">
			<?php echo do_shortcode('[contact-form-7 id="120" title="Contact form 1"]'); ?>
		</div>
		<div class="col-lg-4 col-md-5 col-sm-12">
			<h3>St John's Canton</h3>
			<p><?php the_field('contact_address') ?></p>
			<p><a href="mailto:frbryan@stjohnscanton.com">frbryan@stjohnscanton.org</a></p>
			<p><a href="mailto:frsean@stjohnscanton.com">frsean@stjohnscanton.org</a></p>
			</div>
		</div>
		<div class="col-lg-12">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3019.061359883945!2d-81.40312474879009!3d40.82661587921811!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8836d0e92edf11cf%3A0x35fb1bbeaf663f0a!2s2564+Clearview+Ave+NW%2C+Canton%2C+OH+44718!5e0!3m2!1sen!2sus!4v1527971205928" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</section>
<?php get_footer(); ?>