<?php

/*

Template Name: contactUs template 

*/

 get_header();
 ?>
		<div class="contacts">
			<h1><font color="#d11340">C</font>ontacts</h1>
			<div class="container">
				<div class="col-md-6 col-sm-6">
					<div class="enquiry_form">
					<?php echo do_shortcode('[contact-form-7 id="41" title="Contact form 1"]'); ?> 
					</div>
				</div>

				<div class="col-md-6 col-sm-6">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2917.347771941495!2d-81.24435898507046!3d43.013066601605516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882eede7f322d611%3A0xabc1820da4f5cd16!2s630+Huron+St%2C+London%2C+ON+N5Y+5J8!5e0!3m2!1sen!2sca!4v1449831553323" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
		</div>
		<div class="clients">
			<div class="container">
				<h3>OUR TRUSTWORTHY CLIENTS</h3>
				<div id="mycrawler2" style="margin-top: -3px; " class="productswesupport">
					<?php logo_slider(); ?>
				</div>
			</div>
		</div>


<?php get_footer();