<?php

/*

Template Name: portfolio template 

*/

 get_header();
 ?>
	<div class="portfolio">
		<div class="container">
			<h1><?php echo get_field('port1-head');?></h1>
				<div class="col-md-4 col-sm-4">
					<?php $image = get_field('img1-port');?><?php if(!empty($image))?>
                             <img src="<?php echo $image['url'];?>" alt="webdsgn_img" class="cd_img">


				</div>

	<div class="col-md-8 col-sm-8">
<?php echo get_field('port-cnt');?>
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