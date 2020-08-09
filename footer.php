<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package magento
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="contact-info">
			<?php dynamic_sidebar( 'footer-1' ); ?>
			<?php dynamic_sidebar( 'footer-2' ); ?>
			<?php dynamic_sidebar( 'footer-3' ); ?>
			<?php dynamic_sidebar( 'footer-4' ); ?>
		</div>
		<div class="site-info">
			<div><p><?php echo date('Y'); ?> &copy; All rights reserved.</p></div>
			<div><p class="company-name">Company Name <span class="sep"> | </span> <div class="language"><img src="<?php echo get_bloginfo('template_url') ?>/images/flag-pl.png" alt="flag of poland"> Polski</div></div>
		</div><!-- .site-info -->

		<div class="up" id="up">
			<img src="<?php echo get_bloginfo('template_url') ?>/images/arrow-point-to-up.png" alt="go up" class="scroll-arrow">
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
