<?php

/*

Template Name: home template 

*/

 get_header();

?>

<div class="banner"> 
<?php echo do_shortcode('[responsive-slideshow]'); ?>
</div>

<div class="product">
<h4>OUR LATEST PRODUCTS</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas dicta,<br>
velit fugit voluptatibus recusandae,neque pariatur delectus tempora earum distinctio</p>
</div>


<div class="container">
<div class="products_image">
<div class="col-md-3 col-sm-3">
<img src="<?php echo get_template_directory_uri(); ?>/images/p1.jpg"/>
</div>
</div>

<div class="col-md-3 col-sm-3">
<img src="<?php echo get_template_directory_uri(); ?>/images/p2.jpg"/>
</div>

<div class="col-md-3 col-sm-3">
<img src="<?php echo get_template_directory_uri(); ?>/images/p3.jpg"/>
</div>

<div class="col-md-3 col-sm-3">
<img src="<?php echo get_template_directory_uri(); ?>/images/p4.jpg"/>
</div>
</div>

<div class="container">
<div class="review">
<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring 
which I enjoy with my whole heart. I am alone, and feel the charm of existence in.</p>
</div>
</div>

<div class="container">
<div class="toppings_spl">
<h4>Toppings Special</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas dicta,
velit fugit <br>voluptatibus recusandae,neque pariatur delectus tempora earum distinctio</br></p>
</div>
</div>



<div class="top_image">
<div class="container">

<div class="col-md-3 col-sm-3">
<img src="<?php echo get_template_directory_uri(); ?>/images/gem.jpg"/>
<h4>Gems</h4>
<p>Lorem ipsum dolor sit amet, consectetur  
Voluptas dicta,Lorem ipsum dolor sit amet,
 consectetur adipisicing elit.Lorem ipsum </p>
</div>

<div class="col-md-3 col-sm-3">
<img src="<?php echo get_template_directory_uri(); ?>/images/chocchips.jpg"/>
<h4>Choclate Chips</h4>
<p>Lorem ipsum dolor sit amet, consectetur 
Voluptas dicta,Lorem ipsum dolor sit amet,
 consectetur adipisicing elit.Lorem ipsum </p></div>

<div class="col-md-3 col-sm-3">
<img src="<?php echo get_template_directory_uri(); ?>/images/jelly.jpg"/>
<h4>Jelly</h4>
<p>Lorem ipsum dolor sit amet, consectetur
Voluptas dicta,Lorem ipsum dolor sit amet,
 consectetur adipisicing elit.Lorem ipsum </p></div>


<div class="col-md-3 col-sm-3">
<img src="<?php echo get_template_directory_uri(); ?>/images/sprinkles.jpg"/>
<h4>Sprinkles</h4>
<p>Lorem ipsum dolor sit amet, consectetur
Voluptas dicta,Lorem ipsum dolor sit amet,
 consectetur adipisicing elit.Lorem ipsum </p></div>
</div>
</div>

<div class="container">
<div class="different_types">
<p>DIFFERENT TYPES OF ICE CREAMS.</p>
<p>You will find them only the best products in our stores.</p>
</div>
</div>


<?php
				$type = 'offer';
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
					
             
			 

      


                                 

	   
	  
      



<div class="offer">
<div class="container">
<h4> <?php echo do_shortcode('[types field="title" output="raw"][/types]');?> </h4>
<?php echo do_shortcode('[types field="content" output="raw"][/types]');?> 
</div>
</div>

<div class="container">

<div class="col-md-4 col-sm-4">
</div>


<div class="col-md-4 col-sm-4">
<?php echo do_shortcode('[types field="img" alt="icecake" title="icecake" size="full" align="none"][/types]');?> 
</div>


<div class="offer_image">
<div class="col-md-4 col-sm-4">

<?php echo do_shortcode('[types field="offer-content" output="raw"][/types]');?> 
</div>
</div>
</div>
<?php

				  endwhile;
				}
				wp_reset_query();  // Restore global post data stomped by the_post().
				?>


<div class="our_chef">
<div class="container">
<h3>OUR CHEFS</h3>

<div class="col-md-3 col-sm-3">
<img src="<?php echo get_template_directory_uri(); ?>/images/c1.jpg"/>
<h4>John Doe</h4>
<p>Lorem ipsum dolor sit amet, 
consectetur adipisicing elit. Natus,
  consequuntur quis accusantium </p>
</div>


<div class="col-md-3 col-sm-3">
<img src="<?php echo get_template_directory_uri(); ?>/images/c2.jpg"/>
<h4>Robert Kelly</h4>
<p>Lorem ipsum dolor sit amet, 
consectetur adipisicing elit. Natus,
  consequuntur quis accusantium </p>
</div>

<div class="col-md-3 col-sm-3">
<img src="<?php echo get_template_directory_uri(); ?>/images/c3.jpg"/>
<h4>Francis Fonceca</h4>
<p>Lorem ipsum dolor sit amet, 
consectetur adipisicing elit. Natus,
  consequuntur quis accusantium </p>
</div>

<div class="col-md-3 col-sm-3">
<img src="<?php echo get_template_directory_uri(); ?>/images/c4.jpg"/>
<h4>Mark Russell</h4>
<p>Lorem ipsum dolor sit amet, 
consectetur adipisicing elit. Natus,
  consequuntur quis accusantium </p>
</div>
</div>
</div>

<div class="types">
<div class="container">
<h4>TYPES OF ICECREAM CAKES</h4>
<p>Lorem ipsum dolor sit amet, 
consectetur adipisicing sit amet elit.</p>

<div class="col-md-4 col-sm-4">
<img src="<?php echo get_template_directory_uri(); ?>/images/mar1.jpg"/>
<p>Lorem ipsum dolor sit amet, 
consectetur adipisicing sit amet elit.</p>
</div>

<div class="col-md-4 col-sm-4">
<img src="<?php echo get_template_directory_uri(); ?>/images/mar1.jpg"/>
<p>Lorem ipsum dolor sit amet, 
consectetur adipisicing sit amet elit.</p>
</div>

<div class="col-md-4 col-sm-4">
<img src="<?php echo get_template_directory_uri(); ?>/images/mar1.jpg"/>
<p>Lorem ipsum dolor sit amet, 
consectetur adipisicing sit amet elit.</p>
</div>
</div></div>

<div class="clients">
<div class="container">
<h3>OUR TRUSTWORTHY CLIENTS</h3>
<div id="mycrawler2" style="margin-top: -3px; " class="productswesupport">

<img src="<?php echo get_template_directory_uri(); ?>/images/cl1.jpg"/>
<img src="<?php echo get_template_directory_uri(); ?>/images/cl2.jpg"/>
<img src="<?php echo get_template_directory_uri(); ?>/images/cl3.jpg"/>
<img src="<?php echo get_template_directory_uri(); ?>/images/cl4.jpg"/>
</div>
</div>
</div>



<?php get_footer();