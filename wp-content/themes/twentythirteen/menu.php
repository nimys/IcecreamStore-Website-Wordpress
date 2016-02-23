<?php

/*

Template Name: menu template 

*/

 get_header();
 ?>
 
 <div class="menu_items">
 
 
 
 
  
<?php
				$type = 'menu';
				$args=array(
				  'post_type' => $type,
				  'post_status' => 'publish',
				  
                                  
				);		 

				$my_query = null;
				$my_query = new WP_Query($args);
//var_dump($my_query);
				if( $my_query->have_posts() ) {
?>

			<?php

					while ($my_query->have_posts()) : $my_query->the_post(); ?>	
<div class="container">
<h1><?php echo do_shortcode('[types field="menuhead" output="raw"][/types]'); ?></h1>

<div class="col-md-6 col-sm-6">
<?php echo do_shortcode('[types field="menucontent" output="raw"][/types]'); ?>
</div>

<div class="col-md-6 col-sm-6">
<?php echo do_shortcode('[types field="menucontent1" output="raw"][/types]'); ?>
</div>
</div>

<?php

				  endwhile;
				}
				wp_reset_query();  // Restore global post data stomped by the_post().
				?>
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