<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">

	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Pinyon+Script" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quattrocento" rel="stylesheet">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="google-site-verification" content="gvx9JU7OEQwBpjV_uUDzf9SrM0MZKoVumEgCOYEUQR8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<?php wp_head(); ?>
	<script>
		// conditionizr.com
		// configure environment tests
		conditionizr.config({
			assets: '<?php echo get_template_directory_uri(); ?>',
			tests: {}
		});
	</script>

</head>

<body>
<header>
	<div class="container-fluid">
		<div class="container">
     	 <nav>
			<ul>
				<div class="logo_mobile">
				<img src="<?php echo get_home_url(); ?>/images/St_Johns_logo2.png">
					 </div>
        		<li><a href="<?php echo get_home_url(); ?>">Home</a></li>
				<li><a href="<?php echo get_home_url(); ?>/what-we-believe">What We Believe</a></li>
				<li><a href="<?php echo get_home_url(); ?>/gather-with-us">Gather With Us</a></li>
        		<li><a href="<?php echo get_home_url(); ?>"><div class="nav_logo"><img alt="St John's Logo" src="<?php echo get_home_url(); ?>/images/St_Johns_logo2.png"></div></a></li>
				<li><a href="<?php echo get_home_url(); ?>/grow-with-us">Grow With Us</a></li>
				<li><a href="<?php echo get_home_url(); ?>/who-we-are">Who We Are</a></li>
				<li><a href="<?php echo get_home_url(); ?>/contact-us">Contact Us</a></li>
      		</ul>
      </nav>
		<div class="nav_burger">
			<a href="#">
			<i class="fa fa-bars"></i>
			</a>
		</div>
		</div>
	</div>


</header>
		<div style="background-image:url('<?php echo get_home_url(); ?>/images/st_johns_background_candles.jpg" ); class="header_background">
		</div>
