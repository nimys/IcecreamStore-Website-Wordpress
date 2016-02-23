<?php

/*

Template Name:services template 

*/

 get_header();
 ?>
<div class="our_services">
<div class="container">
<?php echo get_field('service-head');?>
</div>


<div class="orders">
<div class="col-md-6 col-sm-6">
<?php echo get_field('service-cont1');?>
</div>

<div class="col-md-6 col-sm-6">
<?php echo get_field('service-cont2');?>
</div>
</div>


<div class="orders1">
<div class="col-md-6 col-sm-6">
<?php echo get_field('service-cont3');?>
</div>

<div class="col-md-6 col-sm-6">
<?php echo get_field('service-cont4');?>
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