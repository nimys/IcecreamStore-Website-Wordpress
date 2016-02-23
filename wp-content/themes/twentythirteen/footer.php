<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		
<div class="footer">
<div class="col-md-4 col-sm-4">
<h4>CONTACTS</h4>
<p>1,Liberty st,
<br> Newyork, NY 5006.
<br>410-800-900
<br>info@iberry.com
<br>www.iberry.com
</p>
</div>

<div class="col-md-4 col-sm-4">
<h4>RECENT POSTS</h4>
<p>Standard Post.
<br>Media Post.
<br>Gallery Post.
<br>Youtube Post.
<br>Audio Post.
<br>Quote Post.</p>
</div>

<div class="col-md-4 col-sm-4">
<a href="https://www.linkedin.com/"><img src="<?php echo get_template_directory_uri(); ?>/images/s1.jpg"/></a>
<a href="https://www.twitter.com/"><img src="<?php echo get_template_directory_uri(); ?>/images/s2.jpg"/></a>
<a href="https://www.facebook.com/"><img src="<?php echo get_template_directory_uri(); ?>/images/s3.jpg"/></a>
<?php echo do_shortcode('[swt-fb-likebox url="https://www.facebook.com/profile.php?id=100010699787458"/ width="340" height="500" small_header="false" show_faces="true" data_hide_cta="true" stream="false"]');?>


</div>
</div>

<div class="footer_bottom">
<div class="col-md-9 col-sm-9">
<p>copyright@2015iberry.com. All rights reserved</p>
</div>


</div>



	<?php wp_footer(); ?>
</body>
</html>