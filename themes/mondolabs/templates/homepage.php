<?php
/*
Template Name: Homepage
*/
get_header(); ?>

<section role="banner" class="main-banner banner" id="homepage-banner">
	
	<script type="text/javascript">
		$(function() {
	    var BV = new $.BigVideo({container: $('#homepage-banner')});
	    BV.init();
  		if (!Modernizr.touch) {
		    BV.show('<?php echo get_template_directory_uri(); ?>/assets/vid/main-video.mp4',{ambient:true});
		  }
		});
	</script>

	<div class="homepage-splash-backgrounds animated"></div>

	<div class="row contain-to-grid vertical-align-table">
		<div class="splash main-splash animated zoomInOut active" id="firstSlide">
			<h5><?php the_field('slide_one_title'); ?></h5>
			<?php the_field('slide_one_text'); ?>
		</div>

		<div class="splash main-splash animated zoomInOut" id="secondSlide">
			<h5><?php the_field('slide_two_title'); ?></h5>
			<?php the_field('slide_two_text'); ?>
		</div>

		<div class="splash main-splash animated zoomInOut" id="thirdSlide">
			<h5><?php the_field('slide_three_title'); ?></h5>
			<?php the_field('slide_three_text'); ?>
		</div>
	</div>

	<a class="cta-main" href="<?php the_field('cta_url'); ?>"><?php the_field('cta_text'); ?><div class="arrow fa fa-arrow-right"></div></a>
</section>

<section class="banner agency-statement" id="homepageAgencyStatement">

	<div class="row contain-to-grid vertical-align-table">
		<div class="splash agency-statement-splash">
			<?php the_field('agency_statement'); ?>
			<div class="thirds">
				<div class="one-third">

					<svg version="1.1" id="digitalMarketingSVG" class="show-for-medium-up" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 450 450" style="enable-background:new 0 0 450 450;" xml:space="preserve">

					  <path fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st10" d="M301.9,248.8h12.6c20.8,0,37.7,16.9,37.7,37.7c0,20.8-16.9,37.7-37.7,37.7h-12.6"/>
					  <path fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st10" d="M301.9,361.9c0,13.9-11.3,25.1-25.1,25.1H163.7c-13.9,0-25.1-11.3-25.1-25.1V223.7h163.3V361.9z"/>
					  <path fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st10" d="M300.4,98.8c13,19.8-6.2,30.6-10.7,41.2c-4.7,11.2-0.1,22,11.1,26.7C337.3,182.2,348.1,110.3,300.4,98.8z"/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st10" x1="264.2" y1="223.7" x2="297" y2="164.8"/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st10" x1="310" y1="169.1" x2="289.3" y2="223.7"/>
					  <polygon fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st10" points="188.8,223.7 151.1,223.7 132.3,186 126,148.3 157.4,167.1   "/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st10" x1="132.3" y1="186" x2="157.4" y2="167.1"/>
					  <rect fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" x="201.4" y="98" class="st10" width="50.3" height="125.7"/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st10" x1="251.7" y1="123.1" x2="226.5" y2="123.1"/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st10" x1="251.7" y1="148.3" x2="239.1" y2="148.3"/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st10" x1="251.7" y1="173.4" x2="226.5" y2="173.4"/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st10" x1="251.7" y1="198.5" x2="239.1" y2="198.5"/>
					</svg>


					<svg version="1.1" class="show-for-small-only" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 450 450" style="enable-background:new 0 0 450 450;" xml:space="preserve">

					  <path fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st10" d="M301.9,248.8h12.6c20.8,0,37.7,16.9,37.7,37.7c0,20.8-16.9,37.7-37.7,37.7h-12.6"/>
					  <path fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st10" d="M301.9,361.9c0,13.9-11.3,25.1-25.1,25.1H163.7c-13.9,0-25.1-11.3-25.1-25.1V223.7h163.3V361.9z"/>
					  <path fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st10" d="M300.4,98.8c13,19.8-6.2,30.6-10.7,41.2c-4.7,11.2-0.1,22,11.1,26.7C337.3,182.2,348.1,110.3,300.4,98.8z"/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st10" x1="264.2" y1="223.7" x2="297" y2="164.8"/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st10" x1="310" y1="169.1" x2="289.3" y2="223.7"/>
					  <polygon fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st10" points="188.8,223.7 151.1,223.7 132.3,186 126,148.3 157.4,167.1   "/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st10" x1="132.3" y1="186" x2="157.4" y2="167.1"/>
					  <rect fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" x="201.4" y="98" class="st10" width="50.3" height="125.7"/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st10" x1="251.7" y1="123.1" x2="226.5" y2="123.1"/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st10" x1="251.7" y1="148.3" x2="239.1" y2="148.3"/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st10" x1="251.7" y1="173.4" x2="226.5" y2="173.4"/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st10" x1="251.7" y1="198.5" x2="239.1" y2="198.5"/>
					</svg>


					<h6>Digital Marketing</h6>
				</div>
				<div class="one-third">


					<svg version="1.1" id="creativeSVG" class="show-for-medium-up" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 515 450" style="enable-background:new 0 0 515 450;" xml:space="preserve">
					  <path fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" d="M344,339.8H111.1c-12.1,0-21.9-10.4-21.9-23.2V100.2C89.2,87.4,99,77,111.1,77h292
					    c12.1,0,21.9,10.4,21.9,23.2V189"/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" x1="154.9" y1="369" x2="344" y2="369"/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" x1="257.1" y1="339.8" x2="257.1" y2="369"/>
					  <path fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" d="M264.4,310.6c0,4-3.3,7.3-7.3,7.3c-4,0-7.3-3.3-7.3-7.3c0-4,3.3-7.3,7.3-7.3
					    C261.1,303.3,264.4,306.6,264.4,310.6z"/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" x1="89.2" y1="281.4" x2="344" y2="281.4"/>
					</g>
					<g>
					  <path fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" d="M470,365.8c0,9.3-7.5,16.8-16.8,16.8h-92.6c-9.3,0-16.8-7.5-16.8-16.8V205.8c0-9.3,7.5-16.8,16.8-16.8h92.6
					    c9.3,0,16.8,7.5,16.8,16.8V365.8z"/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" x1="470" y1="222.7" x2="343.7" y2="222.7"/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" x1="470" y1="348.9" x2="343.7" y2="348.9"/>
					  <g>
					    <path fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" d="M406.9,357.3c-4.6,0-8.4,3.8-8.4,8.4c0,4.6,3.8,8.4,8.4,8.4c4.7,0,8.4-3.8,8.4-8.4
					      C415.3,361.1,411.5,357.3,406.9,357.3L406.9,357.3z"/>
					  </g>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" x1="385.8" y1="205.8" x2="427.9" y2="205.8"/>
					</svg>


					<svg version="1.1" class="show-for-small-only" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 515 450" style="enable-background:new 0 0 515 450;" xml:space="preserve">
					  <path fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" d="M344,339.8H111.1c-12.1,0-21.9-10.4-21.9-23.2V100.2C89.2,87.4,99,77,111.1,77h292
					    c12.1,0,21.9,10.4,21.9,23.2V189"/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" x1="154.9" y1="369" x2="344" y2="369"/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" x1="257.1" y1="339.8" x2="257.1" y2="369"/>
					  <path fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" d="M264.4,310.6c0,4-3.3,7.3-7.3,7.3c-4,0-7.3-3.3-7.3-7.3c0-4,3.3-7.3,7.3-7.3
					    C261.1,303.3,264.4,306.6,264.4,310.6z"/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" x1="89.2" y1="281.4" x2="344" y2="281.4"/>
					</g>
					<g>
					  <path fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" d="M470,365.8c0,9.3-7.5,16.8-16.8,16.8h-92.6c-9.3,0-16.8-7.5-16.8-16.8V205.8c0-9.3,7.5-16.8,16.8-16.8h92.6
					    c9.3,0,16.8,7.5,16.8,16.8V365.8z"/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" x1="470" y1="222.7" x2="343.7" y2="222.7"/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" x1="470" y1="348.9" x2="343.7" y2="348.9"/>
					  <g>
					    <path fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" d="M406.9,357.3c-4.6,0-8.4,3.8-8.4,8.4c0,4.6,3.8,8.4,8.4,8.4c4.7,0,8.4-3.8,8.4-8.4
					      C415.3,361.1,411.5,357.3,406.9,357.3L406.9,357.3z"/>
					  </g>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" x1="385.8" y1="205.8" x2="427.9" y2="205.8"/>
					</svg>


					<h6>Creative</h6>
				</div>
				<div class="one-third">


					<svg version="1.1" id="developmentSVG" class="show-for-medium-up" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 480 450" style="enable-background:new 0 0 480 450;" xml:space="preserve">
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" x1="86" y1="369" x2="383" y2="369"/>
					  <polyline fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" points="98.9,304.4 98.9,369 137.7,369 137.7,304.4  "/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" x1="137.7" y1="304.4" x2="98.9" y2="304.4"/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" x1="215.1" y1="239.9" x2="176.4" y2="239.9"/>
					  <polyline fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" points="176.4,239.9 176.4,369 215.1,369 215.1,239.9  "/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" x1="292.6" y1="265.7" x2="253.9" y2="265.7"/>
					  <polyline fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" points="253.9,265.7 253.9,369 292.6,369 292.6,265.7  "/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" x1="370.1" y1="175.3" x2="331.3" y2="175.3"/>
					  <polyline fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" points="331.3,175.3 331.3,369 370.1,369 370.1,175.3  "/>
					  <path fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" d="M131.2,214c0,7.1-5.8,12.9-12.9,12.9c-7.1,0-12.9-5.8-12.9-12.9c0-7.1,5.8-12.9,12.9-12.9
					    C125.4,201.1,131.2,206.9,131.2,214z"/>
					  <path fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" d="M208.7,149.5c0,7.1-5.8,12.9-12.9,12.9c-7.1,0-12.9-5.8-12.9-12.9c0-7.1,5.8-12.9,12.9-12.9
					    C202.9,136.6,208.7,142.4,208.7,149.5z"/>
					  <path fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" d="M286.2,175.3c0,7.1-5.8,12.9-12.9,12.9c-7.1,0-12.9-5.8-12.9-12.9c0-7.1,5.8-12.9,12.9-12.9
					    C280.4,162.4,286.2,168.2,286.2,175.3z"/>
					  <path fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" d="M363.6,84.9c0,7.1-5.8,12.9-12.9,12.9c-7.1,0-12.9-5.8-12.9-12.9c0-7.1,5.8-12.9,12.9-12.9
					    C357.9,72,363.6,77.8,363.6,84.9z"/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" x1="128.2" y1="205.8" x2="185.8" y2="157.7"/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" x1="208" y1="153.5" x2="261.4" y2="171.3"/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" x1="342.3" y1="94.7" x2="281.6" y2="165.5"/>
					</svg>


					<svg version="1.1" class="show-for-small-only" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 480 450" style="enable-background:new 0 0 480 450;" xml:space="preserve">
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" x1="86" y1="369" x2="383" y2="369"/>
					  <polyline fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" points="98.9,304.4 98.9,369 137.7,369 137.7,304.4  "/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" x1="137.7" y1="304.4" x2="98.9" y2="304.4"/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" x1="215.1" y1="239.9" x2="176.4" y2="239.9"/>
					  <polyline fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" points="176.4,239.9 176.4,369 215.1,369 215.1,239.9  "/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" x1="292.6" y1="265.7" x2="253.9" y2="265.7"/>
					  <polyline fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" points="253.9,265.7 253.9,369 292.6,369 292.6,265.7  "/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" x1="370.1" y1="175.3" x2="331.3" y2="175.3"/>
					  <polyline fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" points="331.3,175.3 331.3,369 370.1,369 370.1,175.3  "/>
					  <path fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" d="M131.2,214c0,7.1-5.8,12.9-12.9,12.9c-7.1,0-12.9-5.8-12.9-12.9c0-7.1,5.8-12.9,12.9-12.9
					    C125.4,201.1,131.2,206.9,131.2,214z"/>
					  <path fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" d="M208.7,149.5c0,7.1-5.8,12.9-12.9,12.9c-7.1,0-12.9-5.8-12.9-12.9c0-7.1,5.8-12.9,12.9-12.9
					    C202.9,136.6,208.7,142.4,208.7,149.5z"/>
					  <path fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" d="M286.2,175.3c0,7.1-5.8,12.9-12.9,12.9c-7.1,0-12.9-5.8-12.9-12.9c0-7.1,5.8-12.9,12.9-12.9
					    C280.4,162.4,286.2,168.2,286.2,175.3z"/>
					  <path fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" d="M363.6,84.9c0,7.1-5.8,12.9-12.9,12.9c-7.1,0-12.9-5.8-12.9-12.9c0-7.1,5.8-12.9,12.9-12.9
					    C357.9,72,363.6,77.8,363.6,84.9z"/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" x1="128.2" y1="205.8" x2="185.8" y2="157.7"/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" x1="208" y1="153.5" x2="261.4" y2="171.3"/>
					  <line fill="none" stroke="#FF5A36" stroke-width="6" stroke-miterlimit="10" class="st12" x1="342.3" y1="94.7" x2="281.6" y2="165.5"/>
					</svg>


					<h6>Development</h6>
				</div>
			</div>
		</div>
	</div>

</section>

<section class="banner services" id="homepageServices">

	<div class="row contain-to-grid vertical-align-table">
		<div class="splash services-splash">
			<div class="thirds">
				<div class="one-third small-only">

					<svg version="1.1" id="icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 1809 2484" style="enable-background:new 0 0 1809 2484;" xml:space="preserve">
					<g>
						<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st10" d="M1573,310.4c-6.3,0-12.2-3.1-15.8-8.4c-3.5-5.2-4.3-11.9-1.9-17.8c5.7-14.2,8.6-29.3,8.6-44.6v-72.1
							c0-26.3-21.3-47.6-47.6-47.6c-26.3,0-47.6,21.3-47.6,47.6v72.1c0,15.3,2.9,30.4,8.6,44.6c2.4,5.9,1.6,12.5-1.9,17.8
							c-3.5,5.2-9.5,8.4-15.8,8.4H1364c-15.8,0-28.6,12.8-28.6,28.6v66.7h361.8V339c0-15.8-12.8-28.6-28.6-28.6H1573z"/>
						<polygon fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" points="1678.2,558 1440.1,558 1440.1,481.8 1402,558 1354.4,558 1354.4,405.7 1678.2,405.7 	"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st10" x1="1640.1" y1="462.8" x2="1640.1" y2="558"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st10" x1="1602" y1="481.8" x2="1602" y2="558"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st10" x1="1563.9" y1="510.4" x2="1563.9" y2="558"/>
						<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st10" d="M1525.8,167.6c0,5.3-4.3,9.5-9.5,9.5c-5.3,0-9.5-4.3-9.5-9.5c0-5.3,4.3-9.5,9.5-9.5
							C1521.6,158.1,1525.8,162.4,1525.8,167.6z"/>
					</g>
					<g>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="355.9" y1="1203" x2="355.9" y2="1500.5"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="145.9" y1="1203" x2="355.9" y2="1203"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="145.9" y1="1500.5" x2="145.9" y2="1203"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="355.9" y1="1500.5" x2="145.9" y2="1500.5"/>
						<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" d="M145.9,1378H93.4v-227.5c0-29,23.5-52.5,52.5-52.5c29,0,52.5,23.5,52.5,52.5s-23.5,52.5-52.5,52.5v-35H194"/>
						<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" d="M355.9,1203c29,0,52.5-23.5,52.5-52.5s-23.5-52.5-52.5-52.5h-210"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="250.9" y1="1273" x2="320.9" y2="1273"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="250.9" y1="1343" x2="320.9" y2="1343"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="250.9" y1="1413" x2="320.9" y2="1413"/>
						<polyline fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" points="180.9,1264.2 189.6,1273 224.6,1238 	"/>
						<polyline fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" points="180.9,1334.2 189.6,1343 224.6,1308 	"/>
						<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" d="M495.9,1474.2c0,14.5-11.7,26.2-26.2,26.2c-14.5,0-26.2-11.8-26.2-26.2v-253.7c0-14.5,11.7-26.2,26.2-26.2
							c14.5,0,26.2,11.8,26.2,26.2V1474.2z"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="443.4" y1="1465.5" x2="495.9" y2="1465.5"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="443.4" y1="1343" x2="495.9" y2="1343"/>
						<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" d="M408.4,1369.2V1238c0-14.5,11.7-26.2,26.2-26.2h8.7"/>
					</g>
					<g>
						<circle fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" cx="202.4" cy="2357.3" r="23.9"/>
						<circle fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" cx="377.8" cy="2357.3" r="23.9"/>
						<polyline fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" points="489.4,2062.3 441.6,2062.3 377.8,2333.3 202.4,2333.3 	"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="130.7" y1="2158" x2="418.6" y2="2158"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="178.5" y1="2301.4" x2="130.7" y2="2158"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="384.8" y1="2301.4" x2="178.5" y2="2301.4"/>
						<polyline fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" points="290.1,2158 353.9,2094.2 419,2158 	"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="122.7" y1="2070.3" x2="162.6" y2="2158"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="162.6" y1="2051.3" x2="122.7" y2="2070.3"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="210.4" y1="2158" x2="162.6" y2="2051.3"/>
						<polyline fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" points="258.2,2158 258.2,2110.1 337.9,2110.1 	"/>
					</g>
					<g>
						<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" d="M1522.8,2170.6h171.9c0-94.9-76.9-171.9-171.9-171.9V2170.6z"/>
						<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" d="M1644.4,2326.5c31.1-31.1,50.3-74.1,50.3-121.5h-171.9L1644.4,2326.5z"/>
						<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" d="M1471.3,2050.2c-94.9,0-171.9,76.9-171.9,171.9c0,94.9,76.9,171.9,171.9,171.9c47.5,0,90.4-19.2,121.5-50.3
							l-121.5-121.5V2050.2z"/>
					</g>
					<g>
						<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" d="M1641.9,1281.7c0-72.8-59-131.8-131.8-131.8c-72.8,0-131.8,59-131.8,131.8c0,61.4,42,112.8,98.9,127.5v26.3
							h65.9v-26.3C1599.8,1394.5,1641.9,1343.1,1641.9,1281.7z"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="1521.1" y1="1523.3" x2="1499.1" y2="1523.3"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="1543" y1="1479.4" x2="1477.1" y2="1479.4"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="1510.1" y1="1062" x2="1510.1" y2="1105.9"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="1729.8" y1="1281.7" x2="1685.8" y2="1281.7"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="1290.4" y1="1281.7" x2="1334.3" y2="1281.7"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="1339.2" y1="1110.8" x2="1385.8" y2="1157.4"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="1680.9" y1="1110.8" x2="1634.3" y2="1157.4"/>
					</g>
					<g>
						<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" d="M345.4,437.9c0,31.3-25.4,56.7-56.7,56.7c-31.3,0-56.7-25.4-56.7-56.7c0-31.3,25.4-56.7,56.7-56.7
							C320,381.2,345.4,406.5,345.4,437.9z"/>
						<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" d="M515.5,239.4c0,15.7-12.7,28.3-28.3,28.3c-15.7,0-28.3-12.7-28.3-28.3c0-15.7,12.7-28.3,28.3-28.3
							C502.8,211.1,515.5,223.8,515.5,239.4z"/>
						<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" d="M411.5,437.9c0-8.8-1-17.4-2.7-25.7l29.7-17.2l-37.8-65.5l-29.2,17.2c-12.7-11.5-24.8-20.4-43.7-25.7v-34.3
							h-75.6V321c-18.9,5.4-32.4,14.3-45.1,25.7L177,329.5L139,395l29.6,17.2c-1.8,8.3-2.8,16.9-2.8,25.7c0,8.8,0.9,17.4,2.7,25.7
							l-29.7,17.2l37.8,65.5l30.5-17.2c12.7,11.5,26.2,20.4,45.1,25.8v34.3h75.6v-34.3c18.9-5.4,31-14.3,43.7-25.8l29.5,17.2l37.6-65.5
							l-29.8-17.2C410.6,455.3,411.5,446.7,411.5,437.9z"/>
						<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" d="M553.3,239.4c0-5.3-0.7-10.4-1.8-15.3l18.8-10.9l-18.9-32.7l-18.1,10.9c-7.4-7-16.4-12.3-25.8-15.4v-21.7
							h-37.8v21.7c-9.4,3-19.7,8.3-27.2,15.3l-19.2-10.9l-19.1,32.7l18.7,10.9c-1.2,4.9-1.9,10-1.9,15.3s0.7,10.4,1.8,15.3L404,265.6
							l18.9,32.7l19.5-10.9c7.4,7,17.7,12.4,27.2,15.4v21.7h37.8v-21.7c9.4-3,18.4-8.3,25.8-15.4l18.5,10.9l18.7-32.7l-18.9-10.9
							C552.7,249.8,553.3,244.7,553.3,239.4z"/>
					</g>
					<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st10" x1="687.4" y1="396" x2="1110.4" y2="396"/>
					<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st10" x1="687.4" y1="1305" x2="1110.4" y2="1305"/>
					<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st10" x1="687.4" y1="2232" x2="1110.4" y2="2232"/>
					<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st10" d="M1254,861.8l-791.4,1.8c-96.1,0.2-175.2,75.5-180.2,171.4v0"/>
					<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st10" d="M543.4,864l791.4-1.8c96.1-0.2,175.2-75.5,180.2-171.4v0"/>
					<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st10" d="M1254,1806.8l-791.4,1.8c-96.1,0.2-175.2,75.5-180.2,171.4v0"/>
					<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st10" d="M543.4,1809l791.4-1.8c96.1-0.2,175.2-75.5,180.2-171.4v0"/>
					</svg>

				</div>
				<div class="two-thirds">
					<h5><?php the_field('services_section_title'); ?></h5>
					<?php the_field('services_description'); ?>
				</div>
				<div class="one-third medium-up">

					<svg version="1.1" id="servicesSVG" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 1809 2484" style="enable-background:new 0 0 1809 2484;" xml:space="preserve">
					<g>
						<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st10" d="M1573,310.4c-6.3,0-12.2-3.1-15.8-8.4c-3.5-5.2-4.3-11.9-1.9-17.8c5.7-14.2,8.6-29.3,8.6-44.6v-72.1
							c0-26.3-21.3-47.6-47.6-47.6c-26.3,0-47.6,21.3-47.6,47.6v72.1c0,15.3,2.9,30.4,8.6,44.6c2.4,5.9,1.6,12.5-1.9,17.8
							c-3.5,5.2-9.5,8.4-15.8,8.4H1364c-15.8,0-28.6,12.8-28.6,28.6v66.7h361.8V339c0-15.8-12.8-28.6-28.6-28.6H1573z"/>
						<polygon fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" points="1678.2,558 1440.1,558 1440.1,481.8 1402,558 1354.4,558 1354.4,405.7 1678.2,405.7 	"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st10" x1="1640.1" y1="462.8" x2="1640.1" y2="558"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st10" x1="1602" y1="481.8" x2="1602" y2="558"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st10" x1="1563.9" y1="510.4" x2="1563.9" y2="558"/>
						<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st10" d="M1525.8,167.6c0,5.3-4.3,9.5-9.5,9.5c-5.3,0-9.5-4.3-9.5-9.5c0-5.3,4.3-9.5,9.5-9.5
							C1521.6,158.1,1525.8,162.4,1525.8,167.6z"/>
					</g>
					<g>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="355.9" y1="1203" x2="355.9" y2="1500.5"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="145.9" y1="1203" x2="355.9" y2="1203"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="145.9" y1="1500.5" x2="145.9" y2="1203"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="355.9" y1="1500.5" x2="145.9" y2="1500.5"/>
						<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" d="M145.9,1378H93.4v-227.5c0-29,23.5-52.5,52.5-52.5c29,0,52.5,23.5,52.5,52.5s-23.5,52.5-52.5,52.5v-35H194"/>
						<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" d="M355.9,1203c29,0,52.5-23.5,52.5-52.5s-23.5-52.5-52.5-52.5h-210"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="250.9" y1="1273" x2="320.9" y2="1273"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="250.9" y1="1343" x2="320.9" y2="1343"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="250.9" y1="1413" x2="320.9" y2="1413"/>
						<polyline fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" points="180.9,1264.2 189.6,1273 224.6,1238 	"/>
						<polyline fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" points="180.9,1334.2 189.6,1343 224.6,1308 	"/>
						<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" d="M495.9,1474.2c0,14.5-11.7,26.2-26.2,26.2c-14.5,0-26.2-11.8-26.2-26.2v-253.7c0-14.5,11.7-26.2,26.2-26.2
							c14.5,0,26.2,11.8,26.2,26.2V1474.2z"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="443.4" y1="1465.5" x2="495.9" y2="1465.5"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="443.4" y1="1343" x2="495.9" y2="1343"/>
						<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" d="M408.4,1369.2V1238c0-14.5,11.7-26.2,26.2-26.2h8.7"/>
					</g>
					<g>
						<circle fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" cx="202.4" cy="2357.3" r="23.9"/>
						<circle fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" cx="377.8" cy="2357.3" r="23.9"/>
						<polyline fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" points="489.4,2062.3 441.6,2062.3 377.8,2333.3 202.4,2333.3 	"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="130.7" y1="2158" x2="418.6" y2="2158"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="178.5" y1="2301.4" x2="130.7" y2="2158"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="384.8" y1="2301.4" x2="178.5" y2="2301.4"/>
						<polyline fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" points="290.1,2158 353.9,2094.2 419,2158 	"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="122.7" y1="2070.3" x2="162.6" y2="2158"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="162.6" y1="2051.3" x2="122.7" y2="2070.3"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="210.4" y1="2158" x2="162.6" y2="2051.3"/>
						<polyline fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" points="258.2,2158 258.2,2110.1 337.9,2110.1 	"/>
					</g>
					<g>
						<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" d="M1522.8,2170.6h171.9c0-94.9-76.9-171.9-171.9-171.9V2170.6z"/>
						<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" d="M1644.4,2326.5c31.1-31.1,50.3-74.1,50.3-121.5h-171.9L1644.4,2326.5z"/>
						<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" d="M1471.3,2050.2c-94.9,0-171.9,76.9-171.9,171.9c0,94.9,76.9,171.9,171.9,171.9c47.5,0,90.4-19.2,121.5-50.3
							l-121.5-121.5V2050.2z"/>
					</g>
					<g>
						<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" d="M1641.9,1281.7c0-72.8-59-131.8-131.8-131.8c-72.8,0-131.8,59-131.8,131.8c0,61.4,42,112.8,98.9,127.5v26.3
							h65.9v-26.3C1599.8,1394.5,1641.9,1343.1,1641.9,1281.7z"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="1521.1" y1="1523.3" x2="1499.1" y2="1523.3"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="1543" y1="1479.4" x2="1477.1" y2="1479.4"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="1510.1" y1="1062" x2="1510.1" y2="1105.9"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="1729.8" y1="1281.7" x2="1685.8" y2="1281.7"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="1290.4" y1="1281.7" x2="1334.3" y2="1281.7"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="1339.2" y1="1110.8" x2="1385.8" y2="1157.4"/>
						<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" x1="1680.9" y1="1110.8" x2="1634.3" y2="1157.4"/>
					</g>
					<g>
						<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" d="M345.4,437.9c0,31.3-25.4,56.7-56.7,56.7c-31.3,0-56.7-25.4-56.7-56.7c0-31.3,25.4-56.7,56.7-56.7
							C320,381.2,345.4,406.5,345.4,437.9z"/>
						<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" d="M515.5,239.4c0,15.7-12.7,28.3-28.3,28.3c-15.7,0-28.3-12.7-28.3-28.3c0-15.7,12.7-28.3,28.3-28.3
							C502.8,211.1,515.5,223.8,515.5,239.4z"/>
						<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" d="M411.5,437.9c0-8.8-1-17.4-2.7-25.7l29.7-17.2l-37.8-65.5l-29.2,17.2c-12.7-11.5-24.8-20.4-43.7-25.7v-34.3
							h-75.6V321c-18.9,5.4-32.4,14.3-45.1,25.7L177,329.5L139,395l29.6,17.2c-1.8,8.3-2.8,16.9-2.8,25.7c0,8.8,0.9,17.4,2.7,25.7
							l-29.7,17.2l37.8,65.5l30.5-17.2c12.7,11.5,26.2,20.4,45.1,25.8v34.3h75.6v-34.3c18.9-5.4,31-14.3,43.7-25.8l29.5,17.2l37.6-65.5
							l-29.8-17.2C410.6,455.3,411.5,446.7,411.5,437.9z"/>
						<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st11" d="M553.3,239.4c0-5.3-0.7-10.4-1.8-15.3l18.8-10.9l-18.9-32.7l-18.1,10.9c-7.4-7-16.4-12.3-25.8-15.4v-21.7
							h-37.8v21.7c-9.4,3-19.7,8.3-27.2,15.3l-19.2-10.9l-19.1,32.7l18.7,10.9c-1.2,4.9-1.9,10-1.9,15.3s0.7,10.4,1.8,15.3L404,265.6
							l18.9,32.7l19.5-10.9c7.4,7,17.7,12.4,27.2,15.4v21.7h37.8v-21.7c9.4-3,18.4-8.3,25.8-15.4l18.5,10.9l18.7-32.7l-18.9-10.9
							C552.7,249.8,553.3,244.7,553.3,239.4z"/>
					</g>
					<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st10" x1="687.4" y1="396" x2="1110.4" y2="396"/>
					<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st10" x1="687.4" y1="1305" x2="1110.4" y2="1305"/>
					<line fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st10" x1="687.4" y1="2232" x2="1110.4" y2="2232"/>
					<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st10" d="M1254,861.8l-791.4,1.8c-96.1,0.2-175.2,75.5-180.2,171.4v0"/>
					<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st10" d="M543.4,864l791.4-1.8c96.1-0.2,175.2-75.5,180.2-171.4v0"/>
					<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st10" d="M1254,1806.8l-791.4,1.8c-96.1,0.2-175.2,75.5-180.2,171.4v0"/>
					<path fill="none" stroke="#F1F1F1" stroke-width="20" stroke-miterlimit="10" class="st10" d="M543.4,1809l791.4-1.8c96.1-0.2,175.2-75.5,180.2-171.4v0"/>
					</svg>

				</div>
				<div class="services-cta-buttons">
					<a href="<?php the_field('cta_service_url_one'); ?>" class="hp-service-cta button"><?php the_field('cta_service_one'); ?></a>
					<a href="<?php the_field('cta_service_url_two'); ?>" class="hp-service-cta button"><?php the_field('cta_service_two'); ?></a>
				</div>
			</div>
		</div>
	</div>

</section>


<section class="banner client-list" id="homepageClients">

	<div class="row contain-to-grid vertical-align-table">
		<div class="splash clients-splash">

			<h4><?php the_field('client_list_title'); ?></h4>
			<h5><?php the_field('client_list_subtitle'); ?></h5>
			<?php $notable_client_list = new WP_QUERY(array(
				'post_type' => 'notable-clients',
				'orderby'=>'menu_order',
				'order'=>'ASC'
			)); ?>
			<ul class="notable-clients">
				<?php while ($notable_client_list->have_posts()) : $notable_client_list->the_post(); ?>
					<?php if( get_field('show_on_homepage') ) { ?>
						<li class="notable-client-list-item" id="<?php echo strtolower(str_replace(' ', '_', get_the_title())); ?>">
							<img src="<?php the_field('client_logo'); ?>" class="client-logo" />
						</li>
					<?php } ?>
				<?php endwhile; ?>
			</ul>

		</div>
	</div>

	<div class="mockup-overlays">
		<?php while ($notable_client_list->have_posts()) : $notable_client_list->the_post(); ?>
			<?php if( get_field('show_on_homepage') && get_field('client_list_mockup') ) { ?>
				<img src="<?php the_field('client_list_mockup'); ?>" class="client-list-mockup" id="mockup_<?php echo strtolower(str_replace(' ', '_', get_the_title())); ?>" />
			<?php } ?>
		<?php endwhile; ?>
		<?php wp_reset_query(); ?>
	</div>

</section>


<?php get_footer(); ?>
