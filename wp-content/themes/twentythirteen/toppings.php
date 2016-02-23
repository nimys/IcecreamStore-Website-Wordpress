<?php

/*

Template Name: toppings template 

*/

 get_header();
 ?>
	<div class="toppings">
		<div class="container">
			<?php echo get_field ('top-head');?>
			<div class="col-md-4 col-sm-4">
				<?php echo get_field ('top-cont');?>
			</div>
				<div class="col-md-8 col-sm-8">
					<?php $image = get_field('top-img');?><?php if(!empty($image))?>
                             <img src="<?php echo $image['url'];?>" alt="webdsgn_img" class="cd_img">
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