<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package whats_good_wednesday
 */

?>

<footer id="colophon" class="site-footer">

<div class="body-footer">
  <div class="header mb-5">
  <h1 class="footer-header mb-0">Stay in touch with Us<span>
  </div>
  <div class="all-logos text-center d-flex container">
	<div class="footer-all col-12">
		<ul class="icon-section">
			  <li class="icon-links">
			<a href="">
			  <i class="fab fa-soundcloud"></i></a></li>
			  <li class="icon-links">
			<a href="">
			  <i class="fab fa-spotify"></i></a></li>
		</ul>
		</div>

		<div class="col container">
		  <img src="" alt="" class="footer-right-logo">
	  </div>
		</div>

		<?php if (has_nav_menu('footer-community-menu')): ?>


  <?php endif;?>
  </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer();?>

</body>

</html>
