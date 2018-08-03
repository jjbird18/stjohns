	<footer>
    <div class="container">
      <div class="row">
		 <div class="col-lg-1"></div>
        <div class="col-lg-3 col-md-4">
          <div id="footer-logo">
            <img alt="St John's Logo" src="<?php echo get_home_url(); ?>/images/St_Johns_logo2.png">
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <h4>Worship Service</h4>
          <ul>
            <li>Sundays at 10:00 a.m.</li>
            <li>2564 Clearview Ave NW,</li>
            <li>Canton, Ohio 44718</li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-4">
          <div class="social_links">
            <a href="https://www.facebook.com/stjohnscanton/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
          </div>
         <a class="btn-contact" href="<?php echo get_home_url(); ?>/contact-us">Contact Us</a>
        </div>
		 <div class="col-lg-1"></div>
    </div>
</div>
  </footer>
<script>
	$(".nav_burger").on('click', function() {
    	$("nav ul").toggleClass("mobile_nav_show");
	});	
</script>

	</body>
</html>
