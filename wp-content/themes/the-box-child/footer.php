<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package thebox
 * @since thebox 1.0
 */
?>
		
	</div><!-- #main .site-main -->

	<footer id="colophon" class="site-footer clearfix" role="contentinfo">

		<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
			<div id="footer-sidebar" class="secondary">
			<div id="footer-sidebar1">
			<?php
			if(is_active_sidebar('footer-sidebar-1')){
			dynamic_sidebar('footer-sidebar-1');
			}
			?>
</div>
<div id="footer-sidebar2">
<?php
if(is_active_sidebar('footer-sidebar-2')){
dynamic_sidebar('footer-sidebar-2');
}
?>
</div>
<div>
<div id="footer-sidebar3">
<?php
if(is_active_sidebar('footer-sidebar-3')){
dynamic_sidebar('footer-sidebar-3');
}
?>
</div>
		<?php endif; // end footer widget area ?>
	</footer><!-- #colophon .site-footer -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
