<?php /*
Template Name: list-posts-by-cat
*/ ?>

<?php get_header(); ?>

<div id="content">
<div id="main">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	<?php endwhile; else: endif; ?>

	<?php query_posts('category_name='.get_the_title().'&post_status=publish,future');?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<p><?php the_content(); ?>
	<?php endwhile; else: endif; ?>

</div>
</div>

<?php get_footer(); ?>
