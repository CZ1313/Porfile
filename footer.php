<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	<footer>
    <div class="footerContainer">
		  <div class= "row">

        <!--Footer Logo using widget-->
        <div class="footer-logo">
           <?php
               if(is_active_sidebar('footer-logo')){
                dynamic_sidebar('footer-logo');
                 }
               ?>
        </div>

        <!--Footer Social Media using widget-->
			  <div class="social-icons">
          <?php
               if(is_active_sidebar('social-media-widget')){
                dynamic_sidebar('social-media-widget');
                 }
               ?>
        </div>
      </div><!-- end row -->
	  <div><!-- end container -->	
	</footer>
</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>