<?php
/**
 * @package makewp005
 */
$options = get_option('makewp005_theme_settings');
?>


<!-- Homepage Heading -->
<?php $home_image = get_header_image(); ?>
<!-- change from here -->
<!--?php if( !empty($home_image) ) { ?>
<div id="home-tagline" <?php if( !empty($home_image) ) { ?>style="background: #<?php echo get_background_color(); ?> url(<?php echo esc_url( $home_image );?>);"<?php } ?>>
<div class="placed"-->
<!-- change to here -->
<?php if( !empty($options['home_content_area']) ) { ?>
<?php echo $options['home_content_area']; ?>
<!-- change from here -->
<!--?php } ?-->
<!-- change to here -->
<!-- change from here -->
<!--/div-->
<!-- change to here -->
</div>
<?php } ?>

<!-- Head Text -->
<?php if( !empty($options['home_headtxt']) ) { ?>
<div id="home-txt">
<?php echo $options['home_headtxt']; ?>
</div>
<?php } ?>



 <!-- Homepage emphasis - sticky post-->
    <?php
        global $post;
        $args = array(
            'post_type' =>'post',
            'post__in'  => get_option( 'sticky_posts' ),
            'numberposts' => '3'
        );
        $emphasis_posts = get_posts($args);
    ?>
    <?php if($emphasis_posts) { ?>        
  
    <section id="home-emphasis">
	<div class="pagecol">
	<div class="columns grid3">
		
		<?php 
			$i = 0;
			$fa = array("fa-comments","fa-leaf","fa-thumbs-up");
		?>
		
        <?php
			foreach($emphasis_posts as $post) :
				setup_postdata($post);
				$i++;
        ?>
        
        <div class="col">
		<!--?php the_post_thumbnail( 'makewp005-small' ); ?-->
		
			<div class="animated fadeInUp">
				<br/>				
				<a href="<?php the_permalink(); ?>"><i id="cta<?php echo $i; ?>" class="cta_icon cta_icon_circle fa <?php echo $fa[$i-1]; ?>"></i></a>
				<br/><br/>				
			</div>
			
            <h2>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				
			</h2>
            
            <?php the_excerpt(); ?>
        </div><!--/col-->
        <!-- /emphasis -->
        
        <?php
        endforeach; ?>
</div>
</div>
    </section>
    <!-- /home-emphasis -->      	
    <?php } ?>

 <!-- Recent Blog Posts -->
    <?php
        global $post;
        $args = array(
            'post_type' => 'post',
            //'post_status' => 'future',//запланированные
            'post__not_in' => get_option( 'sticky_posts' ),
            'numberposts' => '4'
        );
        $blog_posts = get_posts($args);
    ?>
    <?php if ( $blog_posts ) { ?>
  
        <section id="home-posts">
            <div class="recent-home-posts"><h2><?php _e('Bafing iTech News','makewp005'); ?></h2></div>

<div class="pagecol">
<div class="columns grid4"><!--other: grid2, grid4-->
            <?php
            foreach($blog_posts as $post) : setup_postdata($post);
            ?>            

<div class="col">
<?php if ( has_post_thumbnail() ) : ?>
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
<div class="img-home-post">
<?php the_post_thumbnail( 'typical-big' ); ?>
</div>
</a>
<?php endif; //has_post_thumbnail ?>
<?php //endif; //has_post_format ?>

                <div class="home-posts-description">
<?php if ( has_post_format(array('aside', 'quote', 'link', 'chat', 'image', 'video', 'audio', 'gallery','status')) ) : ?> 
	<?php the_content(); ?>                   
<?php  else : ?>
                <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo the_title(); ?></a></h3>
	<?php the_excerpt(); ?>
<?php endif; //has_post_format ?>
                </div> 
                <!-- /home-entry-description -->
            </div><!--/col-->
            <!-- /home-entry-->
            
<?php endforeach; //$blog_posts as $post ?>
</div>
</div><!--//pagecol-->
        </section>
        <!-- /home-posts -->
    <?php } ?>

<!--Home Widget-->
<section id="home-widget">
<div class="pagecol">
<div class="columns grid2">                     
<div class="col">
<?php if ( ! dynamic_sidebar( 'bottom1' ) ) : ?>

		<?php endif; // end widget area ?>
</div>
<div class="col">
<?php if ( ! dynamic_sidebar( 'bottom2' ) ) : ?>

		<?php endif; // end widget area ?>
</div>
</div><!-- /columns grid2-->
</div><!-- /pagecol-->
</section>
        <!-- /home-widget-->
