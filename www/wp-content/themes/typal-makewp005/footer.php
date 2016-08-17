<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package makewp005
 */
$options = get_option('makewp005_theme_settings');
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

<div class="widget-footer">
<?php dynamic_sidebar('footer1'); ?>
<?php dynamic_sidebar('footer2'); ?>
</div>
<div style="clear: both;"></div><!--//widget-footer -->

		<div class="site-info">
<?php if( !empty($options['home_copy']) ) { ?>
<?php echo '&copy; '.date('Y').' - '.$options['home_copy'].'<span class="sep"> | </span>'; ?>
<?php } ?>
			<?php do_action( 'makewp005_credits' ); ?>
			<?php printf( __( 'Proudly powered by %s', 'makewp005' ), '<a href="http://wordpress.org/">WordPress</a>' ); ?>
			<!-- change from here -->
			<span class="sep"> |&nbsp;&nbsp;</span>
			<a href="<?php bloginfo('url'); ?>/Legal/">Legal</a>
			<span class="sep"> |&nbsp;&nbsp;</span>
			<a href="<?php bloginfo('url'); ?>/Credits/">Credits</a>
			<span class="sep"> &nbsp;&nbsp;|&nbsp;&nbsp;</span>
			<a href="<?php bloginfo('url'); ?>/wp-admin/">(Login)</a>
			<!-- change to here -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>