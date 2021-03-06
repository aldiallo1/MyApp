<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package makewp005
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
	<!-- from here -->
<?php $home_image = get_header_image(); ?>
<div id="home-tagline" style="background: #<?php echo get_background_color(); ?> url(<?php echo esc_url( $home_image );?>);"></div>
<!-- to here -->

		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'makewp005' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'makewp005' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
